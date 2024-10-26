<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function get($id)
    {
        $user = User::where('id', $id)->first();
        return response()->json($user);
    }

    public function storeForm()
    {
        return view('user_form');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'email' => 'required|unique:users|email:rfc,dns',
        ]);

        User::create($validatedData);

        return redirect()->route('user.index');
    }
}
