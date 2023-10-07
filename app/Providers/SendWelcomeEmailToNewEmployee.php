<?php

namespace App\Providers;

use App\Providers\NewEmployeeEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendWelcomeEmailToNewEmployee
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
     * Handle the event.
     *
     * @param  \App\Providers\NewEmployeeEvent  $event
     * @return void
     */
    public function handle(NewEmployeeEvent $event)
    {
        //
    }
}
