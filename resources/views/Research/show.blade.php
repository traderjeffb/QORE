@extends('layouts.app')

@section('content')
<div class="container">
    <div class="rounded p-4 mb-4 shadow-lg border">
        <h1 class="mb-4">Research Project Details</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="border rounded p-3 mb-3 shadow-sm border">
                    <h4>Basic Information</h4>
                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">Project Title</label>
                        <p>{{ $researchProject->title }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">Start Date</label>
                        <p>{{ $researchProject->startDate }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">End Date</label>
                        <p>{{ $researchProject->endDate }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">Budget</label>
                        <p>{{ $researchProject->budget }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">Currency</label>
                        <p>{{ $researchProject->currency }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">Principal Investigator</label>
                        <p>{{ $researchProject->principal_investigator }}</p>
                    </div>
                </div>

                <div class="border rounded p-3 mb-3 shadow-sm">
                    <h4 class="test">Project Description</h4>
                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">Project Description</label>
                        <p>{{ $researchProject->description }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">Data Collection</label>
                        <p>{{ $researchProject->data_collection }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="border rounded p-3 mb-3 shadow-sm">
                    <h4>Risk Assessment</h4>
                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">Risk Assessment</label>
                        <p>{{ $researchProject->risk_assessment }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">Timeline (Milestones and Deadlines)</label>
                        <p>{{ $researchProject->timeline }}</p>
                    </div>
                </div>

                <div class="border rounded p-3 shadow-sm">
                    <h4>Research Team</h4>
                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">Research Team (Names and Roles)</label>
                        <p>{{ $researchProject->project_team }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">Research Objectives</label>
                        <p>{{ $researchProject->research_objectives }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">Hypothesis/Research Questions</label>
                        <p>{{ $researchProject->research_questions }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">Methodology</label>
                        <p>{{ $researchProject->methodology }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label heavy-gray-label">Data Analysis</label>
                        <p>{{ $researchProject->data_analysis }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
