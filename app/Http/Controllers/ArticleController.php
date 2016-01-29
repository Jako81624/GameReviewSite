<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Tools\Permissions;
use Illuminate\Support\Facades\Auth;
use App\Packages\Commentable\Comment;
use Cache;
use Clockwork\Support\Laravel\Facade as Clockwork;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['games'] = Article::orderBy('title', 'asc')->where('published', 1)->get();
        return view('pages.allgames', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article, Request $request)
    {
        
        if($article->published == false)
        {
            if(!Auth::check() OR (!Permissions::check('article.view-unpublished') AND $article->user_id != Auth::user()->id))
            {
                abort(403);
            }
        }
        $x = array();
        $pagination = '';
        if(Permissions::check('beta'))
        {
            $comments = Cache::tags(['commentRoot-article-'.$article->id])->rememberForever('commentRoot-article-'.$article->id.'-page-'.$request->input('page', 1), function() use ($article)
            {
                Clockwork::info('Cache MISS for commentRoot-article-' . $article->id);
                return $article->comments()->where('parent_id', null)->with('children')->with('user')->paginate(20); //@TODO orderBy id desc
            });
            foreach($comments as $node)
            {
                $x[] = Cache::remember('commentTree-'.$node->id, 60, function() use ($node)
                {
                    Clockwork::info('Cache MISS for commentTree-' . $node->id);
                    /** @var Comment $node */
                    $c = $node->getDescendantsAndSelf();
                    $c->load(['user' => function($query) use ($node){
                        $query->remember(60);
                    }]);
                    $c->load('meta');
                    return $c->toHierarchy();
                });
            }
            $pagination = $comments->render();
        }
        return view('pages.review', compact('article', 'x', 'pagination')); //Okay before anyone asks, I dont want temporary_* to even exist. I want to use coverid
        //but im under time pressure and ill fix it later, got a query that will fix it up when cover is ready
        //@TODO EVERYTHING
    }

    //@TODO
    public function addComment(Article $b)
    {
        $comment = new Comment;
        $comment->body = 'My first comment!';
        $comment->user_id = '1';
        $b->comments()->save($comment);
        Cache::tags('commentRoot-article-'.$b->id)->flush();
        return 'created';
    }

    public function addReply(Article $b)
    {
        $parent = Comment::find(2);
        $comment = new Comment;
        $comment->body = 'MY DICK!';
        $comment->user_id = '1';
        $b->comments()->save($comment);
        $comment->makeChildOf($parent);
        Cache::tags('commentRoot-article-'.$b->id)->flush();
        Clockwork::info('Cleared cache:'.'commentRoot-article-'.$b->id);
        Cache::forget('commentTree-'.$comment->getRoot()->id);
        Clockwork::info('Cleared cache: ' .'commentTree-'.$comment->getRoot()->id);
        return $comment->getRoot()->id;
    }

    protected function attachChildrenToComment($comments, $start = null)
    {
        $rootComments = $comments->get($start);
        foreach($rootComments as $key => $value)
        {
            $children = $comments->get($value->id);
            $rootComments[$key]->children = $children;
        }
        return $rootComments;
    }
}
