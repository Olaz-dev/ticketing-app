<?php

namespace App\Providers;

use App\Listeners\SendTicketsCreatedNotification;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            SendTicketsCreatedNotification::class,
        ],
    ];

    public function boot()
    {
        //
    }

    // public function shouldDiscoverEvents()
    // {
    //     return true;
    // }
}
