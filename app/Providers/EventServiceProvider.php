<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use App\Events\UserLoginHistory;
use App\Listeners\StoreLoginHistory;
use function Illuminate\Events\queueable;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\UserLoginHistory as UserLoginHistories;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        SendMailOnLogin::class => [
            SendNotificationOnLogin::class,
        ]
    ];

    /**
     * Register any events for your application.
     */
    public function boot()
    {
        // Event::listen(queueable(function (UserLoginHistory $event) {

        //     \Log::info($event->user);
        //     $loginTime = Carbon::now()->toDateTimeString();

        //     $userDetails = $event->user;

        //     $input['name'] = $userDetails->name;
        //     $input['email'] = $userDetails->email;
        //     $input['login_time'] = $loginTime;
        //     $saveHistory = UserLoginHistories::create($input);



        //     return $saveHistory;
        // }));
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return true;
    }
}
