<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index(Request $request)
    {


        // dd($request);
        $symbol = $request->input('symbol', 'AAPL');
        // dd($symbol);
        $apiKey = env('POLYGON_API_KEY');
// dd($apiKey);
$response = Http::get("https://api.polygon.io/v1/open-close/{$symbol}/2023-04-05", [
    'apiKey' => $apiKey,
]);



        $data = $response->json();
        // dd($data);
                return view('api.apiList', compact('data'));
        }

}


