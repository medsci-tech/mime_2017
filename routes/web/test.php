<?php

Route::group(['prefix' => 'test'], function () {
    Route::get('/', function () {
        return view('home');
    });
});
