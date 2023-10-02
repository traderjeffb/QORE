<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResearchProject;
use App\Models\Research;
use App\Events\SaleMade;


class ResearchController extends Controller
{

    public function index()
    {
        $projects = Research::all(['id', 'title', 'description', 'author', 'status']);
        $message = $projects->isEmpty() ? 'No current research projects found.' : '';
        // dd($projects);

        return view('research.currentProjects', ['projects' => $projects, 'pageTitle' => 'Current Research Projects', 'message' => $message]);
    }


    public function indexPast()
    {
        $projects = Research::where('status', 'Completed')->get();
        $message = $projects->isEmpty() ? 'No past research projects found.' : '';

        // dd($projects);
        return view('research.currentProjects', ['projects' => $projects, 'pageTitle' => 'Past Research Projects', 'message'=> $message]);
    }
    public function indexCurrent()
    {
        $projects = Research::where('status', 'In Progress')->get(['id', 'title', 'description', 'author', 'status']);
        $message = $projects->isEmpty() ? 'No current research projects found.' : '';
// dd($projects);
        return view('research.currentProjects', ['projects' => $projects, 'pageTitle' => 'Current Research Projects', 'message' => $message]);
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
    public function activeIndex()
    {
        $researchProjects = ResearchProject::where('status', 'Active')->get(['id', 'title', 'description','startDate','endDate', 'budget', 'currency', 'country', 'status']);
        $message = $researchProjects->isEmpty() ? 'No current research projects found.' : '';

        return view('research.activeIndex', compact('researchProjects'));
    }

    public function create()
    {
        return view('research.create');
    }

    public function createSummary()
    {
        return view('research.createSummary');
    }

    public function show($id)
    {
        $researchProject = ResearchProject::where('id', $id)->first();
        return view('research.show',compact('researchProject'));
    }
    public function edit($id)
    {
        $researchProject = ResearchProject::find($id);
        return view('research.edit',compact('researchProject'));
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'startDate' => 'required|date',
            'endDate' => 'required|date',
            'principal_investigator' => 'required|string|max:100',
            'project_team' => 'required',
            'research_objectives' => 'required',
            'research_questions' => 'required',
            'methodology' => 'required',
            'data_collection' => 'required',
            'data_analysis' => 'required',
            'budget' => 'required',
            'currency' => 'required',
            'country' => 'required',
            'risk_assessment' => 'required',
            'timeline' => 'required',
            'resources' => 'required',
            'project_deliverables' => 'required',
            'communication_plan' => 'required',
            'approval_process' => 'required',
            'references' => 'required',
            'additional_notes' => 'nullable|string',
            'status'=>'required',
            'attachments' => 'nullable|array',
            'attachments.*' => 'nullable|file|mimes:jpeg,png,pdf,docx|max:2048', // Adjust allowed file types and size as needed
        ]);

            // dd($validatedData);
            $researchProject = new ResearchProject();

            // Set the attributes based on the validated data
            $researchProject->title = $validatedData['title'];
            $researchProject->description = $validatedData['description'];
            $researchProject->startDate = $validatedData['startDate'];
            $researchProject->endDate = $validatedData['endDate'];
            $researchProject->principal_investigator = $validatedData['principal_investigator'];
            $researchProject->project_team = $validatedData['project_team'];
            $researchProject->research_objectives = $validatedData['research_objectives'];
            $researchProject->research_questions = $validatedData['research_questions'];
            $researchProject->methodology = $validatedData['methodology'];
            $researchProject->data_collection = $validatedData['data_collection'];
            $researchProject->data_analysis = $validatedData['data_analysis'];
            $researchProject->budget = $validatedData['budget'];
            $researchProject->currency = $validatedData['currency'];
            $researchProject->country = $validatedData['country'];
            $researchProject->risk_assessment = $validatedData['risk_assessment'];
            $researchProject->timeline = $validatedData['timeline'];
            $researchProject->resources = $validatedData['resources'];
            $researchProject->project_deliverables = $validatedData['project_deliverables'];
            $researchProject->communication_plan = $validatedData['communication_plan'];
            $researchProject->approval_process = $validatedData['approval_process'];
            $researchProject->references = $validatedData['references'];
            $researchProject->additional_notes = $validatedData['additional_notes'];
            if ($request->hasFile('attachments')) {
                $attachments = [];
                foreach ($request->file('attachments') as $attachment) {
                    $path = $attachment->store('attachments', 'local');
                    // Store the file path in the $attachments array
                    $attachments[] = $path;
                }
                // Encode the $attachments array and store it in the 'attachments' field
                $researchProject->attachments = json_encode($attachments);
            }
            $researchProject->status = $validatedData['status'];

                // Dispatch the SaleMade event and pass the sale data

// dd('Event dispatched');
            $researchProject->save();
            // dd($researchProject);
            event(new SaleMade($researchProject));
            return redirect()->route('research.activeIndex')->with('success', 'Project added successfully!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'startDate' => 'required|date',
            // 'endDate' => 'required|date|after_or_equal:startDate',
            'principal_investigator' => 'required|string',
            'project_team' => 'required|string',
            'research_objectives' => 'required|string',
            'research_questions' => 'required|string',
            'methodology' => 'required|string',
            'data_collection' => 'required|string',
            'data_analysis' => 'required|string',
            'budget' => 'required|numeric|min:0',
            'currency' => 'required|string',
            'risk_assessment' => 'required|string',
            'timeline' => 'required|string',
        ]);
        // dd('here');
        // Find the research project by ID
        $researchProject = ResearchProject::findOrFail($id);

        // Update the research project with the validated data
        $researchProject->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'startDate' => $request->input('startDate'),
            'endDate' => $request->input('endDate'),
            'principal_investigator' => $request->input('principal_investigator'),
            'project_team' => $request->input('project_team'),
            'research_objectives' => $request->input('research_objectives'),
            'research_questions' => $request->input('research_questions'),
            'methodology' => $request->input('methodology'),
            'data_collection' => $request->input('data_collection'),
            'data_analysis' => $request->input('data_analysis'),
            'budget' => $request->input('budget'),
            'currency' => $request->input('currency'),
            'risk_assessment' => $request->input('risk_assessment'),
            'timeline' => $request->input('timeline'),
            // Update other fields as needed
        ]);

        // Redirect back to the show page with a success message
        return redirect()->route('research.show', $researchProject->id)->with('success', 'Research project updated successfully.');
    }
}
