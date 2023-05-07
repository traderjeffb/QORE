<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Routing\Controller;
use App\Models\Module;


class ModulesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $employees = Employee::all();
        // dd($employees);
        return view('employees.index', compact('employees'));
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
        return redirect()->route('modules.create')->with('success', 'Module created successfully!');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', compact('employee'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->name = $request->input('name');
        $employee->email = $request->input('email');
        $employee->phone_number = $request->input('phone_number');
        $employee->job_title = $request->input('job_title');
        $employee->department = $request->input('department');

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $path = storage_path('app/public/profile-images/' . $filename);
            Image::make($image)->resize(200, 200)->save($path);
            $employee->profile_image = $filename;
        }

        $employee->save();

        return redirect()->route('employees.show', $employee->id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees')->with('success', 'Employee record deleted successfully.');
    }

}
