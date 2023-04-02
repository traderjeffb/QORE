<?php

namespace App\Listeners;

use App\Events\NewEmployeeEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewEmployeeListener
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
     * @param  \App\Events\NewEmployeeEvent  $event
     * @return void
     */
    public function handle(NewEmployeeEvent $event)
    {
        //
    }
}
