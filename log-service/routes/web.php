<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['logger']], function() {
    Route::get('/logs', function() {
        return view( 'logs');
    });
});
