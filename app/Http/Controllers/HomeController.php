<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use DB;
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
		$data['jakoistrash'] = Article::orderBy('id', 'desc')->where('titletext', '!=', '')->where('published', 1)->where('featured', 1)->take(4)->get();
		$data['writers'] = DB::table('writers')->orderByRaw("RAND()")->join('users', 'users.id', '=', 'writers.user_id')->get();
        return view('pages.homepage', $data);
    }
}
