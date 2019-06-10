<?php


namespace App\Http\Controllers\Notification;


use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;

class Notifications
{
    public function send(\NotificableInterface $subscriber, $message) {
        Mail::to($subscriber->getNotifyEmail())
            ->queue();
    }
}