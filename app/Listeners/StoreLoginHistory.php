<?php

namespace App\Listeners;

use App\Events\UserLoginHistory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Carbon\Carbon;
use App\Models\UserLoginHistory as UserLoginHistories;

class StoreLoginHistory
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserLoginHistory $event)
    {
        \Log::info($event->user);
        $loginTime = Carbon::now()->toDateTimeString();
        $userDetails = $event->user;

        $input['name'] = $userDetails->name;
        $input['email'] = $userDetails->email;
        $input['login_time'] = $loginTime;
        $saveHistory = UserLoginHistories::create($input);

        \Log::info($saveHistory);

        return $saveHistory;
    }
}
