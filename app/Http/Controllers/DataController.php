<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;
use App\ApiService;



class DataController extends Controller
{

    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

// DataController.php
    public function saveData(Request $request)
        {
                // Use the ApiService to get exchange rates
                $exchangeRates = $this->apiService->getExchangeRates();

                // Handle the response
                // You now have $exchangeRates to work with

                // Return the view with the exchange rates
                return view('hedge.index', compact('exchangeRates'));
        }

        public function  getDates(){
            return view('data.getData');
        }


}



