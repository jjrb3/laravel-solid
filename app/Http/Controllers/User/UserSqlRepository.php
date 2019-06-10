<?php


namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\DB;

class UserSqlRepository implements UserRepositoryInterface
{
    public function getAfterDate($date): array
    {
        return DB::table('users')
            ->where('created_at', '>', $date)
            ->get()
            ->toArray();
    }
}