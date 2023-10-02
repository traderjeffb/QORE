<?php

namespace App\Providers;

use App\Providers\SaleMade;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class HandleSaleMade
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
     * @param  \App\Providers\SaleMade  $event
     * @return void
     */
    public function handle(SaleMade $event)
    {
        //
    }
}
