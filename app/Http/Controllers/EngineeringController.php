<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part;
use App\Models\Module;

class EngineeringController extends Controller
{
    public function partsIndex()
    {
        $parts = Part::all();
        // dd($parts);

        return view('engineering.partsIndex', compact('parts'));
    }

    public function createPart()
    {
        $categories = Module::pluck('category')->unique();

        return view('engineering.createPart',compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'partName'=> 'required|string',
            'partNumber'=> 'required|numeric',
            'description'=> 'required | string',
            'inventory'=> 'required|numeric',
            'caseSize'=> 'required|numeric',
            'category'=> 'required|string',
            'minimumInventory'=>'required|numeric',
        ]);

        $part =new Part();
        $part->partName =  $validatedData['partName'];
        $part->partNumber = $validatedData['partNumber'];
        $part->description = $validatedData['description'];
        $part->inventory = $validatedData['inventory'];
        $part->caseSize = $validatedData['caseSize'];
        $part->category = $validatedData['category'];
        $part->minimumInventory = $validatedData['minimumInventory'];
        $part->save();

        return redirect()-> route('engineering.partsIndex');
    }

    public function edit()
    {

    }
    public function update()
    {

    }
    public function show($id)
    {

    }
    public function destroy($id)
    {

    }

}
