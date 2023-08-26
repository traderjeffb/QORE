@extends('layouts.app')

{{-- @extends('projects.default') --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-3">
            <form action="{{ route('projects.create-step-one.post') }}" method="POST">
                @csrf

                <div class="card">
                    <div class="card-header">Step 1: Basic Info</div>

                    <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group">
                                <label for="title">Project Name:</label>
                                <input type="text" value="{{ $project->name ?? '' }}" class="form-control" id="taskTitle"  name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="budget">Project Budget:</label>
                                <input type="number"  value="{{{ $project->budget ?? '' }}}" class="form-control" id="budget" name="budget" required/>
                            </div>
                            <div class="form-group">
                                <label for="currencyList">Currency:</label>
                                <select class="form-control" id="currencyList" name="currencyList">
                                    <option value="USD">US Dollar</option>
                                    <option value="AUD">Australian Dollar</option>
                                    <option value="CAD">Canadian Dollar</option>
                                    <option value="CHF">Swiss Franc</option>
                                </select>
                                <div class="form-group">
                                    <label for="currency">Currency Code:</label>
                                    <input type="text" class="form-control" id="currency" name="currency" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="country">Country:</label>
                                    <input type="text" class="form-control" id="country" name="country" readonly>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Project Description:</label>
                                <textarea type="text"  class="form-control" id="description" name="description" required>{{{ $project->description ?? '' }}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="objectives">Project Objectives:</label>
                                <textarea type="text"  class="form-control" id="objectives" name="objectives" required>{{{ $project->objectives ?? '' }}}</textarea>
                            </div>
                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Next</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
$(document).ready(function() {
    // Get references to the relevant elements
    var currencyListDropdown = $('#currencyList');
    var currencyCodeInput = $('#currency');
    var countryInput = $('#country');

    var currencyListData = {
        'USD': 'US Dollar',
        'AUD': 'Australia',
        'CAD': 'Canada',
        'CHF': 'Switzerland',
    };

    // Initialize the currency code and country based on the default value
    var defaultCurrencyList = currencyListDropdown.val();
    currencyCodeInput.val(defaultCurrencyList);
    countryInput.val(currencyListData[defaultCurrencyList]);

    // Listen for the change event on the currency dropdown
    currencyListDropdown.on('change', function() {
        var selectedCurrencyList = $(this).val();
        currencyCodeInput.val(selectedCurrencyList);
        countryInput.val(currencyListData[selectedCurrencyList]);
    });
});

</script>
@endsection
