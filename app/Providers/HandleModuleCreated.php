<?php

namespace App\Providers;

use App\Providers\ModuleCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class HandleModuleCreated
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
     * @param  \App\Providers\ModuleCreated  $event
     * @return void
     */
    public function handle(ModuleCreated $event)
    {
        //
    }
}
