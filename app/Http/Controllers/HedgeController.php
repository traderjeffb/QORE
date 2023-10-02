<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\Research;
use App\Models\ResearchProject;
use Illuminate\Support\Facades\DB;
use App\ApiService;
use App\Models\Hedge;




class HedgeController extends Controller
{

    protected $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            // Retrieve projects grouped by country and calculate totals
        $projectSales = Projects::select('country', DB::raw('SUM(budget) as total'))
        ->groupBy('country')
        ->get();

        // Retrieve research projects grouped by country and calculate totals
        $researchSales = ResearchProject::select('country', DB::raw('SUM(budget) as total'))
            ->groupBy('country')
            ->get();


        // Merge the two collections and recalculate the totals
        $combinedSales = $projectSales->concat($researchSales)->groupBy('country')->map(function ($group) {
            return [
                'country' => $group->first()->country,
                'total' => $group->sum('total'),
            ];
        });
// dd($combinedSales);
        return view('hedge.currencyHedge', [
            'combinedSales' => $combinedSales,
        ]);
    }

    public function currencyIndex(Request $request)
    {
            // Use the ApiService to get exchange rates
            $exchangeRates = $this->apiService->getExchangeRates();

            // Handle the response
            // You now have $exchangeRates to work with

            // Return the view with the exchange rates
            return view('hedge.exchRateIndex', compact('exchangeRates'));
    }

    public function positionNotes(Request $request)
    {

        $hedges = Hedge::all();
        $totalUsdAmount = $hedges->sum('usd_amount');

        return view('hedge.positionNotes', compact('hedges', 'totalUsdAmount'));
    }






}
