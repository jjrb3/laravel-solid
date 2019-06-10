<?php

namespace App\Http\Controllers\User;

interface UserRepositoryInterface
{
    public function getAfterDate($date): array;
}