<?php


namespace App\Http\Controllers\Notification;


class NotifyEmail implements NotificableInterface
{
    public function getNotifyEmail(): string
    {
        return 'jjrb6@hotmail.com';
    }
}