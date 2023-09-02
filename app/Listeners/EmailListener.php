<?php

namespace App\Listeners;

use App\Events\LogoutEvent;
use App\Events\RegisterEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\RegisertNotification;
use App\Notifications\LogoutNotification;

class EmailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

   /**
     * Handle user login events.
     */
    public function handleUserRegiter(RegisterEvent $event) {
        $event->user->notify(new RegisertNotification());
    }

    /**
     * Handle user logout events.
     */
    public function handleUserLogout(LogoutEvent $event) {
       $event->user->notify(new LogoutNotification());
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     * @return void
     */
    public function subscribe($events):array
    {
        return [
            RegisterEvent::class => 'handleUserRegiter',
            LogoutEvent::class => 'handleUserLogout',
        ];
    }
    public function handle(RegisterEvent $event)
    {
        $event->user->notify(new RegisertNotification());
    }
}
