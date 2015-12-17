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

Route::group(['namespace' => 'Home'], function () {
    Route::get('/', 'PageController@index');
    Route::get('page/{name}', 'PageController@show');
});

Route::get('dash', ['as' => 'dash.index', 'middleware' => 'auth', 'uses' => function () {
    return view('dashboard');
}

]);

Route::group(['prefix' => 'dash', 'namespace' => 'Dash', ' middleware' => 'auth'], function () {
    Route::resource('post', 'PostController');
    Route::delete('page/{page?}', 'PageController@destroy');
    Route::resource('page', 'PageController');
    Route::resource('user', 'UserController');
    Route::resource('comment', 'CommentController');
});

Route::group(['namespace' => 'Auth', 'prefix' => 'auth'], function () {
    Route::get('login', ['as' => 'auth.login', 'uses' => 'AuthController@getLogin']);
    Route::post('login', ['as' => 'auth.login', 'uses' => 'AuthController@postLogin']);
    Route::get('logout', ['as' => 'auth.logout', 'uses' => 'AuthController@getLogout']);
    Route::get('register', ['as' => 'auth.register', 'uses' => 'AuthController@getRegister']);
    Route::post('register', ['as' => 'auth.register', 'uses' => 'AuthController@postRegister']);
});