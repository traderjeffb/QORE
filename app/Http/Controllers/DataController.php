<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class DataController extends Controller
{

// DataController.php
    public function saveData(Request $request)
        {
            $url = 'https://api.metalpriceapi.com/v1/latest?api_key=169179b29732685aff81833904dd8df1&base=USD&currencies=EUR,XAU,XAG';
            $response = file_get_contents($url);
            $data = json_decode($response, true);

            // Handle the response
            dd($data['rates']['EUR']);


        }

        public function  getDates(){
            return view('data.getData');
        }
}



