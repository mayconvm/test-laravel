<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::namespace('course')->group(function () {
//     // Controllers Within The "App\Http\Controllers\Course" Namespace
	Route::get('/course', "CourseController@getAll");

	Route::get('/course/{id}', "CourseController@get")->where('id', '[0-9]+');
// });