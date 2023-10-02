<?php

namespace App\Http\Controllers;

use App\Models\ExchangeRate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Projects;
use App\Http\Resources\CurrencyResource;

class ApiController extends Controller
{
    public function index()
    {
            $projects = Projects::all();
        return response()->json($projects, 201);
    }

    public function currencyExchangeRates()
    {
        $CurrencyExchangeRates = ExchangeRate::latest()->first();

        return new CurrencyResource($CurrencyExchangeRates);
    }





}


