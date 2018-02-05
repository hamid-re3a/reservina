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

Route::get('login','AuthController@showLoginForm');
Route::post('login','AuthController@login');
Route::get('register','AuthController@showRegistrationForm');
Route::post('register','AuthController@register');
Route::get('register-business','AuthController@registerBusiness');

Route::get('search','ShopController@index');
Route::get('shop/{id}','ShopController@show');

Route::get('blog','ArticleController@index');
Route::get('blog/post/{id}','ArticleController@show');