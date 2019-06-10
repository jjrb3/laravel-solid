<?php


namespace App\Http\Controllers\Store;


use App\User;

class UserRepository
{
    public function create(array $userData): User {
        return User::create($userData);
    }
}