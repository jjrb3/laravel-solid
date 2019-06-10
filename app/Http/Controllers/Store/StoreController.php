<?php

namespace App\Http\Controllers\Store;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function store(StoreUserRequest $request, UserRepository $userRepository) {

        $user = $userRepository->create($request->all());

        return response()->json(['user' => $user], 201);
    }
}