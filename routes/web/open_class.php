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

Route::get('open_class', 'OpenClassController@index');
Route::get('open_class/{id}', 'OpenClassController@unit')->where('id','[0-9]+');
