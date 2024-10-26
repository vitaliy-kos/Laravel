<?php

use App\Http\Controllers\PdfGeneratorController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/user', [UserController:: class, 'index'])->name('user.index');
Route::get('/user/{id}', [UserController::class, 'get'])->name('user.single');

Route::get('/store-user', [UserController:: class, 'storeForm'])->name('user.store-form');
Route::post('/store-user', [UserController:: class, 'store'])->name('user.store');

Route::get('/resume/{id}', [PdfGeneratorController:: class, 'index'])->name('user.get-pdf');
