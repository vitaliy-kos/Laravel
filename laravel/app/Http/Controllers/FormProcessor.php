<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{

    public function index() {
        return view('form');
    }

    public function store(Request $request) {
        return view('hello', [
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'email' => $request['email'],
        ]);
    }
}
