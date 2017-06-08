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

Route::get('customer', 'CustomerController@index');
Route::get('customer/profile', 'CustomerController@editProfile');
Route::post('customer/profile', 'CustomerController@updateProfile');
