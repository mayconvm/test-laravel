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

/**
 * Rota para página principal
 */
Route::get('/', function () {
    return View::make('welcome');
});

/**
 * Rota para buscar todos os cursos
 */
Route::get('/course', "CourseController@getAll");

/**
 * Rota para pesquisa de um único curso
 */
Route::get('/course/{id}', "CourseController@get")->where('id', '[0-9]+');
