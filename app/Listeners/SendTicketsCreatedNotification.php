<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\NewTicketNotification;
use Illuminate\Support\Facades\Notification;

//use Illuminate\Notifications\Notification;

class SendTicketsCreatedNotification
{
    public function __construct()
    {
        //
    }

    public function handle($event)
    {
        $admins = User::whereHas('role_as', function ($query) {
            $query->where('id', 3);
        })->get();
        Notification::send($admins, new NewTicketNotification($event->ticket));
    }
}
