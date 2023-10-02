@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Edit Project
                </div>

                <div class="card-body">
                    <form action="{{ route('projects.update', $project->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Project Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $project->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control">{{ $project->description }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="objectives" class="form-label">Objectives</label>
                            <input type="text" name="objectives" id="objectives" class="form-control" value="{{ $project->objectives }}">
                        </div>
                        <div class="mb-4 row">
                            <div class="col-md-3">
                                <label for="budget" class="form-label">Budget</label>
                                <input type="number" name="budget" id="budget" class="form-control" value="{{ $project->budget }}">
                            </div>
                            <div class="col-md-4">
                                <label for="currency" class="form-label">Currency</label>
                                <select class="form-control " id="currencyList" name="currencyList">
                                    <option value="USD">US Dollar</option>
                                    <option value="AUD">Australian Dollar</option>
                                    <option value="CAD">Canadian Dollar</option>
                                    <option value="CHF">Swiss Franc</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" name="country" id="country" class="form-control" value="{{ $project->country }}">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-4">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control " id="stauts" name="status">
                                    <option value="active">Active</option>
                                    <option value="inProgress">In Progress</option>
                                    <option value="completed">Completed</option>
                                    <option value="suspended">Suspended</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="chemicals" class="form-label">Chemicals</label>
                                <input type="text" name="chemicals" id="chemicals" class="form-control" value="{{ $project->chemicals }}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
