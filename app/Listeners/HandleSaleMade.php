<?php
namespace App\Listeners;

use App\ApiService;
use App\Events\SaleMade;
use App\Models\ExchangeRate;
use App\Models\Hedge;

class HandleSaleMade
{
    private $apiService;

    public function __construct(ApiService $apiService)
    {

        $this->apiService = $apiService;
    }

    public function handle(SaleMade $event)
    {

        $researchProject = $event->researchProject;

        $exchangeRates = $this->apiService->getExchangeRates();


        ExchangeRate::create([
            'currency' => $exchangeRates['base'],
            'rate' => json_encode($exchangeRates['rates']),
            'timestamp' => $exchangeRates['timestamp'],
        ]);

        $projectCurrency = $researchProject->currency;
        $usdAmount = $researchProject->budget * $exchangeRates['rates']['' . $projectCurrency . ''];

        Hedge::create([
            'title' => $researchProject->title,
            'timestamp' => now(),
            'budget' => $researchProject->budget,
            'usd_amount' => $usdAmount,
        ]);
    }
}
