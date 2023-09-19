@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Start a New Quantum Research Project</h1>
    <form action="{{ route('research.store') }}" method="post">
        @csrf

        <!-- Project Title -->
        <div class="mb-3">
            <label for="title" class="form-label">Project Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <!-- Project Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Project Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
        </div>

        <!-- Project Duration -->
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="startDate" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="startDate" name="startDate" required>
            </div>
            <div class="col-md-6">
                <label for="endDate" class="form-label">End Date</label>
                <input type="date" class="form-control" id="endDate" name="endDate" required>
            </div>
        </div>

        <!-- Principal Investigator -->
        <div class="mb-3">
            <label for="principal_investigator" class="form-label">Principal Investigator</label>
            <input type="text" class="form-control" id="principal_investigator" name="principal_investigator" required>
        </div>

        <!-- Research Team -->
        <div class="mb-3">
            <label for="project_team" class="form-label">Research Team (Names and Roles)</label>
            <textarea class="form-control" id="project_team" name="project_team" rows="4" required></textarea>
        </div>

        <!-- Research Objectives -->
        <div class="mb-3">
            <label for="research_objectives" class="form-label">Research Objectives</label>
            <textarea class="form-control" id="research_objectives" name="research_objectives" rows="4" required></textarea>
        </div>

        <!-- Hypothesis/Research Questions -->
        <div class="mb-3">
            <label for="research_questions" class="form-label">Hypothesis/Research Questions</label>
            <textarea class="form-control" id="research_questions" name="research_questions" rows="4" required></textarea>
        </div>

        <!-- Methodology -->
        <div class="mb-3">
            <label for="methodology" class="form-label">Methodology</label>
            <textarea class="form-control" id="methodology" name="methodology" rows="4" required></textarea>
        </div>

        <!-- Data Collection -->
        <div class="mb-3">
            <label for="data_collection" class="form-label">Data Collection</label>
            <textarea class="form-control" id="data_collection" name="data_collection" rows="4" required></textarea>
        </div>

        <!-- Data Analysis -->
        <div class="mb-3">
            <label for="data_analysis" class="form-label">Data Analysis</label>
            <textarea class="form-control" id="data_analysis" name="data_analysis" rows="4" required></textarea>
        </div>

        <!-- Budget -->
        <div class="mb-3">
            <label for="budget" class="form-label">Budget</label>
            <input type="number" class="form-control" id="budget" name="budget" required>
        </div>
        <div class="form-group">
            <label for="currency">Currency:</label>
            <select class="form-control" id="currency" name="currency">
                <option value="USD">US Dollar</option>
                <option value="AUD">Australian Dollar</option>
                <option value="CAD">Canadian Dollar</option>
                <option value="CHF">Swiss Franc</option>
            </select>
            {{-- <div class="form-group">
                <label for="currency">Currency Code:</label>
                <input type="text" class="form-control" id="currency" name="currency" readonly>
            </div> --}}
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control" id="country" name="country" readonly>
            </div>
        </div>

        <!-- Risk Assessment -->
        <div class="mb-3">
            <label for="risk_assessment" class="form-label">Risk Assessment</label>
            <textarea class="form-control" id="risk_assessment" name="risk_assessment" rows="4" required></textarea>
        </div>

        <!-- Timeline -->
        <div class="mb-3">
            <label for="timeline" class="form-label">Timeline (Milestones and Deadlines)</label>
            <textarea class="form-control" id="timeline" name="timeline" rows="4" required></textarea>
        </div>

        <!-- Resources -->
        <div class="mb-3">
            <label for="resources" class="form-label">Resources (Equipment, Materials, Facilities)</label>
            <textarea class="form-control" id="resources" name="resources" rows="4" required></textarea>
        </div>

        <!-- Project Deliverables -->
        <div class="mb-3">
            <label for="project_deliverables" class="form-label">Project Deliverables</label>
            <textarea class="form-control" id="project_deliverables" name="project_deliverables" rows="4" required></textarea>
        </div>

        <!-- Communication Plan -->
        <div class="mb-3">
            <label for="communication_plan" class="form-label">Communication Plan</label>
            <textarea class="form-control" id="communication_plan" name="communication_plan" rows="4" required></textarea>
        </div>

        <!-- Approval/Review Process -->
        <div class="mb-3">
            <label for="approval_process" class="form-label">Approval/Review Process</label>
            <textarea class="form-control" id="approval_process" name="approval_process" rows="4" required></textarea>
        </div>

        <!-- References -->
        <div class="mb-3">
            <label for="references" class="form-label">References (Literature, Prior Research)</label>
            <textarea class="form-control" id="references" name="references" rows="4" required></textarea>
        </div>

        <!-- Additional Notes -->
        <div class="mb-3">
            <label for="additional_notes" class="form-label">Additional Notes</label>
            <textarea class="form-control" id="additional_notes" name="additional_notes" rows="4"></textarea>
        </div>
                <!-- Status -->
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status" required>
        </div>


        <!-- Attachments -->
        <div class="mb-3">
            <label for="attachments" class="form-label">Attachments</label>
            <input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
        </div>

        <button type="submit" class="btn btn-primary">Start Project</button>
    </form>
</div>
@endsection
@section('scripts')

{{-- find out why this needs to be here not loading from layouts.app-------------------------------------- --}}
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include other scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.19/jquery.scrollify.min.js"></script>
<script src="https://www.gstatic.com/charts/loader.js"></script>

{{-- ------------------------------------------------- --}}

<script>
$(document).ready(function() {
    // Get references to the relevant elements
    var currencyDropdown = $('#currency');
    var currencyCodeInput = $('#currency'); // You should give this input a unique ID, e.g., 'currency_code'
    var countryInput = $('#country');

    var currencyListData = {
        'USD': 'US Dollar',
        'AUD': 'Australia',
        'CAD': 'Canada',
        'CHF': 'Switzerland',
    };

    // Initialize the currency code and country based on the default value
    var defaultCurrency = currencyDropdown.val();
    currencyCodeInput.val(defaultCurrency);
    countryInput.val(currencyListData[defaultCurrency]);

    // Listen for the change event on the currency dropdown
    currencyDropdown.on('change', function() {
        var selectedCurrency = $(this).val();
        currencyCodeInput.val(selectedCurrency);
        countryInput.val(currencyListData[selectedCurrency]);
    });
});

</script>
