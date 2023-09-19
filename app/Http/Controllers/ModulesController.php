<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller;
use App\Models\Module;
use App\Services\TotalAllMetals;
use PHPUnit\Util\Json;

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
         $modules = Module::all()->pluck('name', 'category');
         return view('modules.index', compact('modules'));
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
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'category'=> 'required',
            'gold' => 'required|numeric|min:0|max:99999',
            'silver' => 'required|numeric|min:0|max:99999',
            'platinum' => 'required|numeric|min:0|max:99999',
            'palladium' => 'required|numeric|min:0|max:99999',
            'scandium' => 'required|numeric|min:0|max:99999',
            'yttrium' => 'required|numeric|min:0|max:99999',
            'lanthanum' => 'required|numeric|min:0|max:99999',
            'cerium' => 'required|numeric|min:0|max:99999',
            'praseodymium' => 'required|numeric|min:0',
            'neodymium' => 'required|numeric|min:0',
            'promethium' => 'required|numeric|min:0',
        ]);

        // Create a new module with the validated data
        $module = new Module([
            'name' => $validatedData['name'],
            'category'=> $validatedData['category'],
            'gold' => $validatedData['gold'],
            'silver' => $validatedData['silver'],
            'platinum' => $validatedData['platinum'],
            'palladium' => $validatedData['palladium'],
            'scandium' => $validatedData['scandium'],
            'yttrium' => $validatedData['yttrium'],
            'lanthanum' => $validatedData['lanthanum'],
            'cerium' => $validatedData['cerium'],
            'praseodymium' => $validatedData['praseodymium'],
            'neodymium' => $validatedData['neodymium'],
            'promethium' => $validatedData['promethium'],
        ]);

        // Save the new module to the database
        $module->save();

        // Redirect back to the index page with a success message
        return redirect()->route('modules.index')->with('success', 'Module created successfully!');
    }

    public function createUnit()
    {
        // Fetch unique categories from the modules table
        $categories = Module::select('category')->distinct()->get();

        return view('modules.createUnit', compact('categories'));
    }

    public function getModulesByCategory(Request $request)
    {
        $category = $request->input('category');

        // Fetch modules based on the selected category
        $modules = Module::where('category', $category)->pluck('name', 'id');

        return response()->json($modules);
    }

    public function totals()
    {
        $totals = $this->totalModuleService->getTotal();
        // return json_encode($totals);///-----------------------------
        dd($totals);
        return view('modules.totals', compact('totals'));
    }
}
