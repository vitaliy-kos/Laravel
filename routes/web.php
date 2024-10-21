<?php

use App\Http\Controllers\FormProcessor;
use Illuminate\Support\Facades\Route;

Route::get('/userform', [FormProcessor::class, 'index']);
Route::post('/store_form', [FormProcessor::class, 'store']);
