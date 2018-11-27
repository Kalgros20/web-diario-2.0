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

Route::post('/login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@login']);
Route::post('/register', 'Auth\RegisterController@register');

Route::resource('user', 'UserController', [
    'except' => ['create']
]);

Route::resource('professor', 'ProfessorController', [
    'except' => ['create']
]);

Route::resource('occurrence', 'OccurrenceController', [
    'except' => ['create']
]);

Route::resource('classDay', 'ClassDayController', [
    'except' => ['edit']
]);

Route::resource('semesterCourse', 'SemesterCourseController', [
    'only' => ['index', 'store']
]);

Route::resource('subject', 'SubjectController', [
    'except' => ['create']
]);
