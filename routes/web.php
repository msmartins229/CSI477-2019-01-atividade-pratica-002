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

Route::get('/', 'PaginasController@index');

Route::get('/welcome', 'PaginasController@about');

Route::get('/paciente', 'PaginasController@paciente');

Route::get('/npaciente', 'PaginasController@nPaciente')->name('nPaciente');

Route::resource('/admin', 'UserController');

Route::resource('/exames', 'TestController');

Route::resource('/geral', 'ProcedureController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
