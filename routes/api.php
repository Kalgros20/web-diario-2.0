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

Route::middleware('cors')->get('/user', 'UserController@index');
Route::middleware('cors')->get('/user/{id}', 'UserController@show');
Route::middleware('cors')->post('/user', 'UserController@store');
Route::middleware('cors')->put('/user/{id}', 'UserController@update');
Route::middleware('cors')->delete('/user/{id}', 'UserController@delete');

Route::middleware('cors')->get('/occurrence', 'OccurrenceController@index');
Route::middleware('cors')->get('/occurrence/{id}', 'OccurrenceController@show');
Route::middleware('cors')->post('/occurrence', 'OccurrenceController@store');
Route::middleware('cors')->put('/occurrence/{id}', 'OccurrenceController@update');
Route::middleware('cors')->delete('/occurrence/{id}', 'OccurrenceController@delete');