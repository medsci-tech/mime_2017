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

Route::get('account/get_token', 'AccountController@get_token');
Route::get('account/login', 'AccountController@login');
Route::post('account/login_post', 'AccountController@login_post');
Route::get('account/register', 'AccountController@register');
Route::post('account/register_post', 'AccountController@register_post');
Route::get('account/logout', 'AccountController@logout');
