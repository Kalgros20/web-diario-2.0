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

Route::get('/user', ['middleware' => 'cors' , 'uses'=> 'UserController@index']);
Route::get('/user/{id}', ['middleware' => 'cors' , 'uses'=> 'UserController@show']);
Route::post('/user', ['middleware' => 'cors' , 'uses'=> 'UserController@store']);
Route::put('/user/{id}', ['middleware' => 'cors' , 'uses'=> 'UserController@update']);
Route::delete('/user/{id}', ['middleware' => 'cors' , 'uses'=> 'UserController@delete']);

Route::get('/occurrence', ['middleware' => 'cors' , 'uses'=> 'OccurrenceController@index']);
Route::get('/occurrence/{id}', ['middleware' => 'cors' , 'uses'=> 'OccurrenceController@show']);
Route::post('/occurrence', ['middleware' => 'cors' , 'uses'=> 'OccurrenceController@store']);
Route::put('/occurrence/{id}', ['middleware' => 'cors' , 'uses'=> 'OccurrenceController@update']);
Route::delete('/occurrence/{id}', ['middleware' => 'cors' , 'uses'=> 'OccurrenceController@delete']);