<?php

namespace App\Http\Controllers\User;

use App\User;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(User $user) {

        $users = $user->where('created_at', '>', Carbon::yesterday())->get();

        return response()->json(['users' => $users]);
    }
}
