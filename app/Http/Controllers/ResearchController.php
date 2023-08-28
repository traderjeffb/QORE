<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Research;

class ResearchController extends Controller
{


    public function index()
    {
        $projects = Research::all(['id', 'title', 'description', 'author', 'status']);
        $message = $projects->isEmpty() ? 'No current research projects found.' : '';
        // dd($projects);

        return view('Research.currentProjects', ['projects' => $projects, 'pageTitle' => 'Current Research Projects', 'message' => $message]);
    }


    public function indexPast()
    {
        $projects = Research::where('status', 'Completed')->get();
        $message = $projects->isEmpty() ? 'No past research projects found.' : '';

        // dd($projects);
        return view('Research.currentProjects', ['projects' => $projects, 'pageTitle' => 'Past Research Projects', 'message'=> $message]);
    }
    public function indexCurrent()
    {
        $projects = Research::where('status', 'In Progress')->get(['id', 'title', 'description', 'author', 'status']);
        $message = $projects->isEmpty() ? 'No current research projects found.' : '';
// dd($projects);
        return view('Research.currentProjects', ['projects' => $projects, 'pageTitle' => 'Current Research Projects', 'message' => $message]);
    }


    public function researchPaper(Request $request)
    {
        $projects = Research::where('id', $request->id)->first();
        // dd($projects);
        $message="";
        if (!$projects) {
            $message = 'oops!';
        }
        return view('research.researchPaper', ['projects' => $projects, 'pageTitle' => 'Research Project'. " ". $request->id, 'message' => $message]);
    }


    public function create()
    {
        return view('Research.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'author' => 'required|string|max:100',
            'status' => 'required|string|max:50',
        ]);

        // Create a new ResearchProject instance and save it to the database
        $project = new Projects();
        $project->title = $validatedData['title'];
        $project->description = $validatedData['description'];
        $project->author = $validatedData['author'];
        $project->status = $validatedData['status'];
        $project->save();

        // Redirect the user back to the form page with a success message
        return redirect()->route('create')->with('success', 'Project added successfully!');
    }
}
