<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller;
use App\Models\Module;
use App\Services\TotalAllMetals;
use PHPUnit\Util\Json;
use App\Events\ModuleCreated;
use App\Models\PreciousMetalPrice;

class ModulesController extends Controller
{
    protected $totalModuleService;

    public function __construct(TotalAllMetals $totalAllMetals)
    {
        // $this->middleware('auth');
        $this->totalModuleService = $totalAllMetals;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         $modules = Module::all();
         return view('modules.index', ['modules' => $modules]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
    return view('modules.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'category'=> 'required',
            'gold' => 'required|numeric|min:0|max:99999',
            'silver' => 'required|numeric|min:0|max:99999',
            'platinum' => 'required|numeric|min:0|max:99999',
            'palladium' => 'required|numeric|min:0|max:99999',

        ]);

        $module = new Module([
            'name' => $validatedData['name'],
            'category'=> $validatedData['category'],
            'gold' => $validatedData['gold'],
            'silver' => $validatedData['silver'],
            'platinum' => $validatedData['platinum'],
            'palladium' => $validatedData['palladium'],
        ]);
        event(new ModuleCreated($module));
        $module->save();
        $modules = Module::all();
        // $amounts = $this->totalModuleService->getTotal();
        // $pricePerOz = PreciousMetalPrice::latest()->get();
        // dd($amounts);
         return view('modules.index', compact('modules'));
        // ->with('success', 'Module created successfully!');
    }

    public function createUnit()
    {
        $categories = Module::select('category')->distinct()->get();

        return view('modules.createUnit', compact('categories'));
    }

    public function getModulesByCategory(Request $request)
    {
        $category = $request->input('category');
        $modules = Module::where('category', $category)->pluck('name', 'id');

        return response()->json($modules);
    }

    public function totals()
    {
        $totals = $this->totalModuleService->getTotal();
        // return json_encode($totals);///-----------------------------
        // dd($totals);
        return view('modules.totals', compact('totals'));
    }
}
