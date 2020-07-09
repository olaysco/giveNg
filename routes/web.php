<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('sociallogin/{provider}', 'Auth\AuthController@SocialSignup');
Route::get('auth/{provider}/callback', 'Auth\AuthController@index')->where('provider', '.*');

Auth::routes();
Route::get('/register', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('welcome');
});
Route::view('{path}', "welcome")->where('path', '([A-z\d\-\/_.]+)?');

Route::get('/home', 'HomeController@index')->name('home');
