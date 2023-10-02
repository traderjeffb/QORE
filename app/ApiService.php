<?php
// app/ApiService.php

namespace App;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Carbon;

class ApiService
{
    public function getExchangeRates()
    {
        // Define a unique cache key for this API endpoint
        $cacheKey = 'exchange_rates';

        // Check if the data is already cached and if it has not expired
        if (Cache::has($cacheKey)) {
            $cachedData = Cache::get($cacheKey);

            // Check if the cache has expired
            if (Carbon::now()->gt(Cache::get($cacheKey . ':expiration'))) {
                Cache::forget($cacheKey); // Remove the expired cache
            } else {
                return $cachedData; // Return the cached data
            }
        }

        $url = 'https://api.metalpriceapi.com/v1/latest?api_key=169179b29732685aff81833904dd8df1&base=USD&currencies=EUR,CAD,XAG,CHF,USD,AUD,CHF';

        $response = Http::get($url)->json();

        // Cache the response for 24 hours (1 day)
        Cache::put($cacheKey, $response, Carbon::now()->addDay());
        Cache::put($cacheKey . ':expiration', Carbon::now()->addDay(), Carbon::now()->addDay()); // Store the expiration time

        return $response;
    }

    public function getPreciousMetalPrices()
    {
        // Define a unique cache key for this API endpoint
        $cacheKey = 'precious_metal_prices';

        // Check if the data is already cached and if it has not expired
        if (Cache::has($cacheKey)) {
            $cachedData = Cache::get($cacheKey);

            // Check if the cache has expired
            if (Carbon::now()->gt(Cache::get($cacheKey . ':expiration'))) {
                Cache::forget($cacheKey); // Remove the expired cache
            } else {
                return $cachedData; // Return the cached data
            }
        }

        $url = 'https://api.metalpriceapi.com/v1/latest?api_key=169179b29732685aff81833904dd8df1&base=USD&currencies=XAU,XAG,XPD,XPT';


        $response = Http::get($url)->json();

        // Cache the response for 24 hours (1 day)
        Cache::put($cacheKey, $response, Carbon::now()->addDay());
        Cache::put($cacheKey . ':expiration', Carbon::now()->addDay(), Carbon::now()->addDay()); // Store the expiration time

        return $response;
    }
}



// use Illuminate\Support\Facades\Http;

// class ApiService
// {
//     public function getExchangeRates()
//     {


//         $url = 'https://api.metalpriceapi.com/v1/latest?api_key=169179b29732685aff81833904dd8df1&base=USD&currencies=EUR,CAD,XAG,CHF,USD,AUD,CHF';

//         $response= Http::get($url)->json();
// // dd($response);
//         return $response;
//     }

//     public function getPreciousMetalPrices()
//     {
//         $url = 'https://api.metalpriceapi.com/v1/latest?api_key=169179b29732685aff81833904dd8df1&base=USD&currencies=XAU,XAG,XPD,XPT';

//         $response= Http::get($url)->json();
// // dd($response);
//         return $response;
//     }
// }
