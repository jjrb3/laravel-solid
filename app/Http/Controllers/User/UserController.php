<?php

namespace App\Http\Controllers\User;

use App\User;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(UserSqlRepository $user) {

        $users = $user->getAfterDate(Carbon::yesterday());

        return response()->json(['users' => $users]);
    }
}
