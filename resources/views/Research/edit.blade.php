@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Research Project</h1>
    <form action="{{ route('research.update', $researchProject->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="row">
            <!-- Two columns -->
            <div class="col-md-6">
                <!-- Project Title -->
                <div class="mb-3">
                    <label for="title" class="form-label">Project Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $researchProject->title }}" required>
                </div>

                <!-- Start Date and End Date in one row -->
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="startDate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="startDate" name="startDate" value="{{ $researchProject->startDate }}" required>
                        </div>
                        <div class="col">
                            <label for="endDate" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="endDate" name="endDate" value="{{ $researchProject->endDate }}" required>
                        </div>
                    </div>
                </div>
                <!-- Budget and Currency -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Budget -->
                        <div class="mb-3">
                            <label for="budget" class="form-label">Budget</label>
                            <input type="number" class="form-control" id="budget" name="budget" value="{{ $researchProject->budget }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Currency -->
                        <div class="mb-3">
                            <label for="currency" class="form-label">Currency</label>
                            <input type="text" class="form-control" id="currency" name="currency" value="{{ $researchProject->currency }}" required>
                        </div>
                    </div>
                </div>
                <!-- Principal Investigator -->
                <div class="mb-3">
                    <label for="principal_investigator" class="form-label">Principal Investigator</label>
                    <input type="text" class="form-control" id="principal_investigator" name="principal_investigator" value="{{ $researchProject->principal_investigator }}" required>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Project Description -->
                <div class="mb-3">
                    <label for="description" class="form-label">Project Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4" required>{{ $researchProject->description }}</textarea>
                </div>
                <!-- Data Collection -->
                <div class="mb-3">
                    <label for="data_collection" class="form-label">Data Collection</label>
                    <textarea class="form-control" id="data_collection" name="data_collection" rows="4" required>{{ $researchProject->data_collection }}</textarea>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Risk Assessment -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="risk_assessment" class="form-label">Risk Assessment</label>
                    <textarea class="form-control" id="risk_assessment" name="risk_assessment" rows="4" required>{{ $researchProject->risk_assessment }}</textarea>
                </div>
            </div>

            <!-- Timeline -->
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="timeline" class="form-label">Timeline (Milestones and Deadlines)</label>
                    <textarea class="form-control" id="timeline" name="timeline" rows="4" required>{{ $researchProject->timeline }}</textarea>
                </div>
            </div>
        </div>

        <!-- Three columns for Research Team, Research Objectives, and Research Questions -->
        <div class="row">
            <div class="col-md-4">
                <!-- Research Team -->
                <div class="mb-3">
                    <label for="project_team" class="form-label">Research Team (Names and Roles)</label>
                    <textarea class="form-control" id="project_team" name="project_team" rows="4" required>{{ $researchProject->project_team }}</textarea>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Research Objectives -->
                <div class="mb-3">
                    <label for="research_objectives" class="form-label">Research Objectives</label>
                    <textarea class="form-control" id="research_objectives" name="research_objectives" rows="4" required>{{ $researchProject->research_objectives }}</textarea>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Hypothesis/Research Questions -->
                <div class="mb-3">
                    <label for="research_questions" class="form-label">Hypothesis/Research Questions</label>
                    <textarea class="form-control" id="research_questions" name="research_questions" rows="4" required>{{ $researchProject->research_questions }}</textarea>
                </div>
            </div>
        </div>

        <!-- Methodology and Data Analysis -->
        <div class="row">
            <div class="col-md-6">
                <!-- Methodology -->
                <div class="mb-3">
                    <label for="methodology" class="form-label">Methodology</label>
                    <textarea class="form-control" id="methodology" name="methodology" rows="4" required>{{ $researchProject->methodology }}</textarea>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Data Analysis -->
                <div class="mb-3">
                    <label for="data_analysis" class="form-label">Data Analysis</label>
                    <textarea class="form-control" id="data_analysis" name="data_analysis" rows="4" required>{{ $researchProject->data_analysis }}</textarea>
                </div>
            </div>
        </div>

        <!-- Continue adding fields as needed -->

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection
