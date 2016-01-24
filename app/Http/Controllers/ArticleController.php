<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use App\Tools\Permissions;

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
    public function show(Article $article)
    {
        if($article->published == false)
        {
            if(!Permissions::check('article.view-unpublished') OR $article->user_id != Auth::user()->id))
            {
                abort(403);
            }
        }
        return view('pages.review', $article); //Okay before anyone asks, I dont want temporary_* to even exist. I want to use coverid
        //but im under time pressure and ill fix it later, got a query that will fix it up when cover is ready
        //@TODO EVERYTHING
    }
}
