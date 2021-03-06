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
Route::get('/home', 'HomeController@index');
Route::get('/allgames', 'ArticleController@index');
Route::get('/games/{articleslug}', 'ArticleController@show');
Route::get('/interviews/{articleslug}', 'ArticleController@show');

//AUTHENTICATION
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

//PRIVILEDGED

Route::get('admin/uploadImage', 'Admin\ImageController@show');
Route::post('admin/uploadImage', 'Admin\ImageController@create');
Route::resource('admin/articles', 'Admin\ArticleController');

//MISC
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/news', function () {
    return view('pages.news');
});

//DEBUG
Route::group(['middleware' => 'debug'], function() {
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
});

Route::get('/games/{articleslug}/addComment', 'ArticleController@addReply');


//KEYS
Route::get('/k', 'KeyController@index');
Route::get('/k/{id}', 'KeyController@index');
Route::post('/k', 'KeyController@saveKey');
Route::post('/k/getKey/{id}', 'KeyController@retrieveKey');
