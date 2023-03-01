<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Events\SendMailOnLogin;
use App\Mail\OnLoginMail;
use Illuminate\Support\Facades\Mail;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $user;
    public function __construct($user)
    {

        $this->user = $user;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {

        $user = $this->user;
        \Log::info($user);
        if (!empty($user)) {
            event(new SendMailOnLogin($user));

        }else {
            return "Wrong Mail ID ".$user['email'];
        }
    }
}
