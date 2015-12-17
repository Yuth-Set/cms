<?php

Route::group(['namespace' => 'Homepage'], function () {
    Route::get('/', 'PageController@index');
    Route::get('page/{slug}', 'PageController@show');
    Route::get('post/{slug}', 'PostController@show');
});

Route::group(['prefix' => 'dash', 'namespace' => 'Dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', ['as' => 'dash.index', 'middleware' => 'auth', 'uses' => function () {
        return view('dashboard');
    }]);

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