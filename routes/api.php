<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['api','cors'])->group(function () {
    Route::get('/posts', 'PostsController@index');
    Route::get('/posts/{post}', 'PostsController@show');
    Route::post('/posts', 'PostsController@store');
    Route::get('sample', function () { echo 'sample api'; });
});
