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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'TaskController@index');

// Route::get('/post/{id}', 'PostsController@index');

Route::resource('task', 'TaskController');


Route::auth();

Route::get('/file', 'FileController@index');
Route::post('/file', 'FileController@upload');
Route::delete('/file/{filename}', 'FileController@destroy');
