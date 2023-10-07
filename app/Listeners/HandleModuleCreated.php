<?php

namespace App\Listeners;

use App\ApiService;
// use App\Events\ModuleCreated as EventsModuleCreated;
// use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Queue\InteractsWithQueue;
// use Illuminate\Support\Facades\Http;
use App\Events\ModuleCreated;
use App\Models\PreciousMetalPrice;
use Carbon\Carbon;


class HandleModuleCreated
{

    private $apiService;

    public function __construct(ApiService $apiService)
    {

        $this->apiService = $apiService;
    }

    public function handle(ModuleCreated $event)
    {
    //    dd('inside handle');
        $module = $event->module;

        $preciousMetalPrices = $this->apiService->getPreciousMetalPrices();
        // dd($preciousMetalPrices);


        $timestamp = $preciousMetalPrices['timestamp'];
        $datetime = Carbon::createFromTimestamp($timestamp);

        PreciousMetalPrice::create([
            'gold' => (isset($preciousMetalPrices['rates']['XAG'])) ? (1 / $preciousMetalPrices['rates']['XAG']) : 0,
            'silver' => (isset($preciousMetalPrices['rates']['XAU'])) ? (1 / $preciousMetalPrices['rates']['XAU']) : 0,
            'palladium' => (isset($preciousMetalPrices['rates']['XPD'])) ? (1 / $preciousMetalPrices['rates']['XPD']) : 0,
            'platinum' => (isset($preciousMetalPrices['rates']['XPT'])) ? (1 / $preciousMetalPrices['rates']['XPT']) : 0,
            'timestamp' => $datetime,
        ]);
        // dd('PreciousMetalPrice');

        // Retrieve the module instance from the event
        // $module = $event->module;


    }
}
