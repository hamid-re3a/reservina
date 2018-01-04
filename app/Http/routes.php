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
    return view('index');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('faq', function () {
    return view('faq');
});

Route::get('search', function () {
    return view('search');
});

Route::get('shop', function () {
    return view('shop');
});

Route::get('login', function () {
    return view('login');
});

Route::get('register', function () {
    return view('register');
});

Route::get('register-business', function () {
    return view('register-business');
});

Route::get('blog','BlogController@index');
Route::get('blog-detail','BlogController@show');