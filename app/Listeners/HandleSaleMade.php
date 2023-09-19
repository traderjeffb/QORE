<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\SaleMade;
use App\ExchangeRate;
use App\Hedge;
use Illuminate\Support\Facades\Http;

class HandleSaleMade
{
    public function __construct()
    {
        //
    }

    public function handle(SaleMade $event)
    {
        $researchProject = $event->researchProject;

        // 1. Hit the API to get current exchange rates
        $exchangeRates = Http::get('https://example.com/api/exchangerates')->json();

        // 2. Record exchange rates in the 'exchange_rate' table
        foreach ($exchangeRates as $currency => $rate) {
            ExchangeRate::create([
                'currency' => $currency,
                'rate' => $rate,
                'timestamp' => now(),
            ]);
        }

        // 3. Calculate the USD-based amount for the budget
        $projectCurrency = $researchProject->currency;
        $usdExchangeRate = $exchangeRates[$projectCurrency];
        $usdAmount = $researchProject->budget * $usdExchangeRate;

        // 4. Record information in the 'hedges' table
        Hedge::create([
            'title' => $researchProject->title,
            'timestamp' => now(),
            'budget' => $researchProject->budget,
            'usd_amount' => $usdAmount,
        ]);

        // Additional logic: You can also send an email or perform other actions here.

        // Now you've recorded the exchange rates and the relevant hedge information.
    }
}
