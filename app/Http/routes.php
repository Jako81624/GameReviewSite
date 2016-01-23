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

//PRIVILEDGED

Route::get('admin/uploadImage', 'Admin\ImageController@show');
Route::post('admin/uploadImage', 'Admin\ImageController@create');

//MISC
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/news', function () {
    return view('pages.news');
}); 
