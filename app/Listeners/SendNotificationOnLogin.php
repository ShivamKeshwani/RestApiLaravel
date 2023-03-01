<?php

namespace App\Listeners;

use App\Events\SendMailOnLogin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Mail\OnLoginMail;
use Illuminate\Support\Facades\Mail;


class SendNotificationOnLogin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }
    public $connection = 'database';

    public $queue = 'emails';

    public $delay = 60;

    /**
     * Handle the event.
     */
    public function handle(SendMailOnLogin $event)
    {
        Mail::to($event->user['email'])->send(new OnLoginMail($event));
        return "The Mail for Login has been sent successfully to your email address ".$event->user['email'];
    }
}
