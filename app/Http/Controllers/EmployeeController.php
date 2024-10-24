<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //

    public function index ()
    {
        return view('employee');
    }

    public function store (Request $request)
    {
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $post = $request->input('post');
        $workData = json_decode($request->input('workData'));
    }

    public function update (Request $request, $id)
    {
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $post = $request->input('post');
        $workData = json_decode($request->input('workData'));
    }

    public function getPath (Request $request)
    {
        return $request->path();
    }

    public function getUrl (Request $request)
    {
        return $request->url();
    }

}
