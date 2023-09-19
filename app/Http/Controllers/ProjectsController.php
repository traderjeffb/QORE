<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;



class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                $projects = Projects::all();
        // dd($eprojects);
        return view('projects.index', compact('projects'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'project_objectives' => 'required|string',
            'feasibility_studies' => 'required|string',
            'project_scope' => 'required|string',

        ]);

        // Create and save the project
        $project = new Projects([
            'project_objectives' => $request->project_objectives,
            'feasibility_studies' => $request->feasibility_studies,
            'project_scope' => $request->project_scope,

        ]);

        $project->save();



        return redirect()->route('projects.index')->with('success', 'Project created successfully!');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function createStepOne(Request $request)
    {
        $project = new Projects();

        return view('projects.create-step-one', compact('project'));
      }

    /**
     * Post Request to store step1 info in session
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:projects',
            'budget' => 'required|numeric',
            'currency'=> 'required',
            'country'=> 'required',
            'description' => 'required',
            'objectives' => 'required',
        ]);

        $project = new Projects($validatedData);
// dd($project);
        $request->session()->put('project', $project);


        // return redirect()->route('projects.create-step-two');
        // dd('dddd');

        return view('projects.create-step-two', compact('project'));

    }


    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepTwo(Request $request)
    {
        // dd("here2");

        $project = $request->session()->get('project');

        // return view('projects.create-step-two', compact('project'));
        return redirect()->route('projects.create-step-two.post', compact('project'));
    }


    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function postCreateStepTwo(Request $request)
{
    // dd($request);
    $validatedData = $request->validate([
        'status' => 'required',
        'chemical' => 'required',
    ]);
    $project = $request->session()->get('project');

    if ($project) {
        $project->fill($validatedData);
        $request->session()->put('project', $project);
    }

    return view('projects.create-step-three', compact('project'));
}

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStepThree(Request $request)
    {
        // dd('in step 3');
        $project = $request->session()->get('project');

        return view('projects.create-step-three',compact('project'));
    }

    /**
     * Show the step One Form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    // public function postCreateStepThree(Request $request)
    // {
    //     $project = $request->session()->get('project');
    //     dd('$project');
    //     $project->save();

    //     $request->session()->forget('project');
    //     $project = Projects::all();

    //     return redirect()->route('projects.index', compact('project'));
    // }
    public function postCreateStepThree(Request $request)
    {
    $project = $request->session()->get('project');

    if ($project) {
        $project->save();
        $request->session()->forget('project');
    }

    $projects = Projects::all(); // Correct variable name
    return redirect()->route('projects.index', compact('projects'));
    }



}
