<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('/allgames', 'ArticleController@index');
Route::get('/games/{articleslug}', 'ArticleController@show');

//AUTHENTICATION
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

//TESTING ROUTES

Route::get('/games/bindingofisaac', function () {
    return view('pages.Reviews.bindingofisaacreview');
});
Route::get('/games/relichunterszero', function () {
    return view('pages.Reviews.relichunterszeroreview');
});
Route::get('/games/rocketleague', function () {
    return view('pages.Reviews.rocketleaguereview');
});
Route::get('/games/riskofrain', function () {
    return view('pages.Reviews.riskofrainreview');
});
Route::get('/games/jc3', function () {
    return view('pages.Reviews.jc3review');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/news', function () {
    return view('pages.news');
});