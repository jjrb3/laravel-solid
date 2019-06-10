<?php


namespace App\Http\Controllers\Notification;


use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;

class Notifications
{
    public function send(NotifyEmail $notifyEmail, $message) {
        Mail::to($notifyEmail->getNotifyEmail())
            ->queue();
    }
}