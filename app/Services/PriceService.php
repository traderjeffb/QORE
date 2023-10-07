<?php
namespace App\Services;

use App\ApiService;
use App\Services\TotalAllMetals;

class PriceService
{
    protected $apiService;
    protected $totalAllMetals;

    public function __construct(ApiService $apiService, TotalAllMetals $totalAllMetals)
    {
        $this->apiService = $apiService;
        $this->totalAllMetals = $totalAllMetals;
    }

    public function calculatePriceAndTotal()
    {
        // dd('here now');
        $preciousMetalPrices = $this->apiService->getPreciousMetalPrices();
        // dd( $preciousMetalPrices);


        $result = [];
        $metals = $preciousMetalPrices['metals'];

        foreach ($metals as $metal => $pricePerOunce) {
            // Calculate the total value for each metal using the TotalAllMetals service
            $TotalAllMetals = $this->totalAllMetals->getTotal($metal);
            // $result['total_'.$metal.''] = $TotalAllMetals[''.$metal.''];



            // Store the results in an array
            $result[''.$metal.''] = [
                'metal' => $metal,
                'pricePerOunce' => $pricePerOunce,
                'totalMetal' => $TotalAllMetals[''.$metal.''],
                'totalValue'=> (1/$pricePerOunce )* $TotalAllMetals[''.$metal.'']
            ];
        }
        return $result;
    }
}
