<?php

use App\Http\Controllers\FormProcessor;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'name' => 'name',
        'age' => 17,
        'position' => 'position',
        'address' => 'address'
    ]);
});
Route::get('/contacts', function () {
    return view('contacts', [
        'address' => 'address',
        'post_code' => '123322',
        'email' => 'email@email.rt',
        'phone' => '712848124'
    ]);
});

Route::get('/userform', [FormProcessor::class, 'index']);
Route::post('/store_form', [FormProcessor::class, 'store']);

Route::get('/test_database', function () {
    $employee = new Employee();
    $employee->save();
});

