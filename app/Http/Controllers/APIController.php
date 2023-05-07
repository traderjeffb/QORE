<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        $symbol = $request->input('symbol');
        if ($symbol) {
            $apiKey = env('POLYGON_API_KEY');
            $validatedData = $request->validate([
                'symbol' => 'required|regex:/^[a-zA-Z]+$/', // Allow any letter case
            ]);

            $symbol = strtoupper($validatedData['symbol']);
            // $symbol = $request->input('symbol', 'AAPL');
            $response = Http::get("https://api.polygon.io/v1/open-close/{$symbol}/2023-04-05", [
                'apiKey' => $apiKey,
            ]);
            $data = $response->json();
                    return view('api.apiList', compact('data'));
        }
        return view('api.apiList');
    }

    public function daily(Request $request)
    {

        $symbol = $request->input('symbol', 'AAPL');
        $from_date = $request->input('from_date', '2023-01-01');
        $to_date = $request->input('to_date', '2023-01-31');

        $apiKey = env('POLYGON_API_KEY');
        $response = Http::get("https://api.polygon.io/v2/aggs/ticker/{$symbol}/range/1/day/{$from_date}/{$to_date}", [
            'adjusted' => true,
            'sort' => 'asc',
            'limit' => 120,
            'apiKey' => $apiKey,
        ]);
        $data = $response['results'];
        return view('api.daily', compact('data'));
    }

}


