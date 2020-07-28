<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::patch('givetem/{givetem}', "GivetemController@update")->middleware('can:update,givetem');
    Route::delete('givetem/{givetem}', "GivetemController@destroy")->middleware('can:delete,givetem');
    Route::get('user/givetems', "GivetemController@userGivetem");
    Route::post('givetem', "GivetemController@store");
});

//User authentication routes
Route::post('login', 'Auth\LoginController@login');
Route::post('register', 'Auth\RegisterController@register');
Route::post('logout', 'Auth\LoginController@logout');

//general routes that do not require authentication
Route::get('/givetems', "GivetemController@index");
