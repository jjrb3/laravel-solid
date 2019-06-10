<?php

namespace App\Http\Controllers\Notification;

interface NotificableInterface
{
    public function getNotifyEmail(): string;
}
