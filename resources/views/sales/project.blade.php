@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Project Initiation</h1>
    <form action="{{ route('project.store') }}" method="post">
        @csrf

        <!-- Step 1: Define Project Objectives -->
        <div class="mb-3">
            <label for="project_objectives" class="form-label">Define Project Objectives</label>
            <textarea class="form-control" id="project_objectives" name="project_objectives" rows="4" required></textarea>
        </div>

        <!-- Step 2: Conduct Feasibility Studies -->
        <div class="mb-3">
            <label for="feasibility_studies" class="form-label">Conduct Feasibility Studies</label>
            <textarea class="form-control" id="feasibility_studies" name="feasibility_studies" rows="4" required></textarea>
        </div>

        <!-- Step 3: Establish Project Scope -->
        <div class="mb-3">
            <label for="project_scope" class="form-label">Establish Project Scope</label>
            <textarea class="form-control" id="project_scope" name="project_scope" rows="4" required></textarea>
        </div>

        <!-- Step 4: Establish Project Budget -->
        <div class="mb-3">
            <label for="project_budget" class="form-label">Establish Project Budget</label>
            <input type="number" class="form-control" id="project_budget" name="project_budget" required>
        </div>

        <!-- Step 5: Form Project Team and Leadership -->
        <h3 class="my-3">Form Project Team and Leadership</h3>
        <div class="mb-3">
            <label for="project_manager" class="form-label">Project Manager</label>
            <input type="text" class="form-control" id="project_manager" name="project_manager" required>
        </div>
        <div class="mb-3">
            <label for="team_members" class="form-label">Team Members</label>
            <textarea class="form-control" id="team_members" name="team_members" rows="4" required></textarea>
        </div>

        <!-- Step 6: Hourly Estimates -->
        <h3 class="my-3">Hourly Estimates</h3>
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="personnel_type" class="form-label">Personnel Type</label>
                <select class="form-select" id="personnel_type" name="personnel_type" required>
                    <option value="">Select Personnel Type</option>
                    <option value="Engineer">Engineer</option>
                    <option value="Technician">Technician</option>
                    <option value="Project Manager">Project Manager</option>
                    <!-- Add more personnel types as needed -->
                </select>
            </div>
            <div class="col-md-6">
                <label for="hourly_estimate" class="form-label">Hourly Estimate</label>
                <input type="number" class="form-control" id="hourly_estimate" name="hourly_estimate" required>
            </div>
        </div>

        <!-- Step 7: Communication Log -->
        <h3 class="my-3">Communication Log</h3>
        <div class="mb-3">
            <label for="communication_log" class="form-label">Communication Log</label>
            <textarea class="form-control" id="communication_log" name="communication_log" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
