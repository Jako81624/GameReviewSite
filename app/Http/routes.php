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

Route::get('/', function () {
    return view('pages.homepage');
});
Route::get('/allgames', function () {
    return view('pages.allgames');
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