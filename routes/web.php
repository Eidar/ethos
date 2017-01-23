<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@posts');

Auth::routes();

Route::get('/home', [
	'as'=>'/home',
	'uses' => 'HomeController@index'
]);

/* PROFILE */
Route::get('profile', function (){
	return view('profile');
});

Route::get ('/setprofile', 'SetProfile@show');
Route::post('/setprofile', 'SetProfile@update');

/* UPLOADS */
Route::get ('/uploadtext', 'UploadData@showtext');
Route::post('/uploadtext', 'UploadData@text');

Route::get('/uploadvideo', 'UploadData@showvideo');
Route::post('/uploadvideo', 'UploadData@video');

Route::get('/uploadmusic', 'UploadData@showmusic');
Route::post('/uploadmusic', 'UploadData@music');

Route::get('/uploadgraphic', 'UploadData@showgraphic');
Route::post('/uploadgraphic', 'UploadData@graphic');
