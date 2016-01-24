<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\ArticleScreenshot;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Admin\BackendController;
use Illuminate\Support\Facades\Auth;
use GrahamCampbell\Markdown\Facades\Markdown;
use App\Tools\Permissions;

class ArticleController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'hello';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Permissions::check('article.create'))
            abort(403);
        return view('pages.Backend.createarticle');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        if(!Permissions::check('article.create'))
            abort(403);
        $article = new Article;
        $article->title = $request->input('title');
        $article->user_id = Auth::user()->id;
        $article->slug = $request->input('slug');
        $article->temporary_jumbo_image = $request->input('temporary_jumbo_image');
        $article->store = $request->input('store');
        $article->store_app_id = $request->input('store_app_id');
        $article->subreddit = $request->input('subreddit');
        $article->score = $request->input('score');
        $article->score_text_md = $request->input('score_text_md');
        $article->gameplay_md = $request->input('gameplay_md');
        $article->story_md = $request->input('story_md');
        $article->graphics_md = $request->input('graphics_md');
        $article->conclusion_md = $request->input('conclusion_md');
        $article->screenshots_md = $request->input('screenshots_md');
        $article->ip_address = $request->getClientIp();
        $article->score_text = Markdown::convertToHtml($request->input('score_text_md'));
        $article->gameplay = Markdown::convertToHtml($request->input('gameplay_md'));
        $article->story = Markdown::convertToHtml($request->input('story_md'));
        $article->graphics = Markdown::convertToHtml($request->input('graphics_md'));
        $article->conclusion = Markdown::convertToHtml($request->input('conclusion_md'));
        $article->save();
        $screenshots = array();
		if(isset($request->input('screenshot')))
		{
			foreach($request->input('screenshot') as $key=>$screenshot)
			{
				$screenshots[$key]['image_id'] = $screenshot;
				$screenshots[$key]['article_id'] = $article->id;
				$screenshots[$key]['ip_address'] = inet_pton($request->getClientIp());

			}
		}
        ArticleScreenshot::insert($screenshots);
        return redirect()->action('ArticleController@show', [$article->slug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        if((Permissions::check('article.edit')) OR (Permissions::check('article.editown') AND $article->user_id == Auth::user()->id AND $article->published == 0))
            return view('pages.Backend.editarticle', compact('article'));
        abort(403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $article = Article::findOrFail($id);
        if((Permissions::check('article.edit')) OR (Permissions::check('article.editown') AND $article->user_id == Auth::user()->id AND $article->published == 0)) {
            $article->title = $request->input('title');
            $article->slug = $request->input('slug');
            $article->temporary_jumbo_image = $request->input('temporary_jumbo_image');
            $article->store = $request->input('store');
            $article->store_app_id = $request->input('store_app_id');
            $article->subreddit = $request->input('subreddit');
            $article->score = $request->input('score');
            $article->score_text_md = $request->input('score_text_md');
            $article->gameplay_md = $request->input('gameplay_md');
            $article->story_md = $request->input('story_md');
            $article->graphics_md = $request->input('graphics_md');
            $article->conclusion_md = $request->input('conclusion_md');
            $article->screenshots_md = $request->input('screenshots_md');
            //actual fields
            $article->score_text = Markdown::convertToHtml($request->input('score_text_md'));
            $article->gameplay = Markdown::convertToHtml($request->input('gameplay_md'));
            $article->story = Markdown::convertToHtml($request->input('story_md'));
            $article->graphics = Markdown::convertToHtml($request->input('graphics_md'));
            $article->conclusion = Markdown::convertToHtml($request->input('conclusion_md'));
            $article->screenshots = Markdown::convertToHtml($request->input('screenshots_md'));
            $article->save();
            $screenshots = array();
			if(isset($request->input('screenshot')))
			{
				foreach($request->input('screenshot') as $key=>$screenshot)
				{
					$screenshots[$key]['image_id'] = $screenshot;
					$screenshots[$key]['article_id'] = $article->id;
					$screenshots[$key]['ip_address'] = inet_pton($request->getClientIp());

				}
			}
            ArticleScreenshot::insert($screenshots);
			return redirect()->action('ArticleController@show', [$article->slug]);

        }
        abort(403);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
