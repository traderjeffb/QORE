<?php
// app/ApiService.php

namespace App;

use Illuminate\Support\Facades\Http;

class ApiService
{
    public function getExchangeRates()
    {
        // $url = 'https://api.metalpriceapi.com/v1/latest?api_key=169179b29732685aff81833904dd8df1&base=USD&currencies=EUR,XAU,XAG';
        // return Http::get($url)->json();

        $url = 'https://api.metalpriceapi.com/v1/latest?api_key=169179b29732685aff81833904dd8df1';
        return Http::get($url)->json();
    }
}
