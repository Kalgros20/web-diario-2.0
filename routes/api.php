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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user', 'UserController@index');
Route::get('/user/{id}', 'UserController@show');
Route::post('/user', 'UserController@store');
Route::put('/user/{id}', 'UserController@update');
Route::delete('/user/{id}', 'UserController@delete');

Route::get('/occurrence', 'OccurrenceController@index');
Route::get('/occurrence/{id}', 'OccurrenceController@show');
Route::post('/occurrence', 'OccurrenceController@store');
Route::put('/occurrence/{id}', 'OccurrenceController@update');
Route::delete('/occurrence/{id}', 'OccurrenceController@delete');