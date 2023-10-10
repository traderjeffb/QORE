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
        // dd($request->all());
        $validatedData = $request->validate([
            'partName'=> 'required|string',
            'partNumber'=> 'required|numeric',
            'description'=> 'required | string',
            'inventory'=> 'required|numeric',
            'caseSize'=> 'required|numeric',
            'category'=> 'required|string',
            'minimumInventory'=>'required|numeric',
            'gold'=>'nullable|numeric',
            'silver'=>'nullable| numeric',
            'platinum'=>'nullable| numeric',
            'palladium'=>'nullable| numeric',

        ]);

        $part =new Part();
        $part->partName =  $validatedData['partName'];
        $part->partNumber = $validatedData['partNumber'];
        $part->description = $validatedData['description'];
        $part->inventory = $validatedData['inventory'];
        $part->caseSize = $validatedData['caseSize'];
        $part->category = $validatedData['category'];
        $part->minimumInventory = $validatedData['minimumInventory'];
        $part->gold = $validatedData['gold'] ?? '0' ;
        $part->silver = $validatedData['silver'] ?? '0' ;
        $part->platinum = $validatedData['platinum'] ?? '0' ;
        $part->palladium  = $validatedData['palladium'] ?? '0' ;
        // dd($part);
                // dd($request->all());

        $part->save();

        return redirect()-> route('engineering.partsIndex');
    }

    public function edit($id)
    {
        $part = Part::findOrFail($id);
        return view('part.edit', compact('part'));

    }
    public function update()
    {

    }
    public function show($id)
    {

    }
    public function destroy($id)
    {
        $part = Part::findOrFail($id);
        $part->delete();

        return redirect()->route('engineering.partsIndex')->with('success', 'Part record deleted successfully.');
    }

}
