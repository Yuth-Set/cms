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
    return view('welcome');
});

Route::get('dash', function () {
    return view('dashboard');
});

Route::group(['prefix' => 'dash', 'namespace' => 'Dash'], function () {
    Route::resource('post', 'PostController');

    Route::resource('page', 'PageController');
    Route::resource('user', 'UserController');
});

Route::group(['namespace' => 'Auth', 'prefix' => 'auth'], function () {
    Route::get('login', ['as' => 'auth.login', 'uses' => 'AuthController@getLogin']);
    Route::post('login', ['as' => 'auth.login', 'uses' => 'AuthController@postLogin']);
    Route::get('logout', ['as' => 'auth.logout', 'uses' => 'AuthController@getLogout']);
    Route::get('register', ['as' => 'auth.register', 'uses' => 'AuthController@getRegister']);
    Route::post('register', ['as' => 'auth.register', 'uses' => 'AuthController@postRegister']);
});