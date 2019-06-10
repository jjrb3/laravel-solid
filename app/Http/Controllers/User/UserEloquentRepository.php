<?php


namespace App\Http\Controllers\User;

use App\User;

class UserEloquentRepository implements \UserRepositoryInterface
{
    public function getAfterDate($date): array
    {
        return User::where('created_at', '>', $date)
            ->get()
            ->toArray();
    }
}