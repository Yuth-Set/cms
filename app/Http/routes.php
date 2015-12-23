<?php

Route::get('tags/{tags}', 'TagsController@show');

Route::group(['namespace' => 'Homepage'], function () {
    Route::get('/', 'ShowController@index');
    Route::get('page/{slug}', 'ShowController@page');
    Route::get('post/{slug}', 'ShowController@post');
    Route::get('tag/{slug}', 'ShowController@tag');
});

Route::group(['prefix' => 'dash', 'namespace' => 'Dashboard', 'middleware' => 'auth'], function () {
    Route::get('/', ['as' => 'dash.index', 'middleware' => 'auth', 'uses' => function () {
        return view('dashboard');
    }]);
    Route::resource('post', 'PostController');
    Route::delete('post/{post?}', 'PostController@destroy');
    Route::delete('page/{page?}', 'PageController@destroy');
    Route::resource('page', 'PageController');
    Route::resource('user', 'UserController');
    Route::resource('uploadfile', 'UserController@showuploadfile');
    Route::resource('comment', 'CommentController');
});
Route::group(['namespace' => 'Dashboard'], function () {
    Route::get('upload/photo', function () {
        return view('upload.photo');
    });
    Route::post('upload/photo', [
        'as'   => 'upload.photo',
        'uses' => 'UploadController@photo'
    ]);

    Route::get('upload/video', function () {
        return view('upload.video');
    });
    Route::post('upload/video', [
        'as'   => 'upload.video',
        'uses' => 'UploadController@video'
    ]);

});

Route::group(['namespace' => 'Auth', 'prefix' => 'auth'], function () {
    Route::get('login', ['as' => 'auth.login', 'uses' => 'AuthController@getLogin']);
    Route::post('login', ['as' => 'auth.login', 'uses' => 'AuthController@postLogin']);
    Route::get('logout', ['as' => 'auth.logout', 'uses' => 'AuthController@getLogout']);
    Route::get('register', ['as' => 'auth.register', 'uses' => 'AuthController@getRegister']);
    Route::post('register', ['as' => 'auth.register', 'uses' => 'AuthController@postRegister']);
});
