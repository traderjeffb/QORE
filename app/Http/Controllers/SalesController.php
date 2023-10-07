<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\ResearchProject;
use App\Models\Meeting;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Projects::all();
        $researchProjects = ResearchProject::all();
        $totalTable1 = $projects->sum('budget');
        $totalTable2 = $researchProjects->sum('budget');
        return view('sales.reports', compact('projects', 'researchProjects', 'totalTable1', 'totalTable2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSale(Request $request)
    {
        return view('Sales.index');
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

    public function project()
    {
        // $sales = Sale::all();
        // dd($employees);
        return view('sales.project');
    }

    public function schedule()
    {
        $events = Meeting::all();
        return view ('sales.salesCalendar', compact ('events'));
    }
    public function scheduleRec()
    {
        return view ('sales.schedule');
    }
}
