<?php

namespace App\Http\Controllers\Store;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function store(Request$request, User $user) {

        // Data validation
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required',
        ]);

        // Encrypt password and save data
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('name');
        $user->save();

        return response()->json(['user' => $user], 201);
    }
}