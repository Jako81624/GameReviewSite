<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Clockwork\Support\Laravel\Facade as Clockwork;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['articles'] = Article::orderBy('id', 'desc')->where('published', 1)->take(6)->get();
		$data['jakoistrash'] = Article::orderBy('id', 'desc')->where('titletext', '!=', '')->take(4)->get();
        return view('pages.homepage', $data);
    }
}
