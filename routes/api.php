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

Route::post('/login', 'Auth\LoginController@login');
Route::post('/register', 'Auth\RegisterController@register');

Route::resource('user', 'UserController', [
    'except' => ['edit', 'destroy', 'create']
]);

Route::resource('occurrence', 'OccurrenceController', [
    'except' => ['edit', 'destroy', 'create']
]);

Route::resource('diaAula', 'DiaAulaController', [
    'except' => ['edit']
]);

Route::resource('semesterCourse', 'SemesterCourseController', [
    'only' => ['index', 'store']
]);
