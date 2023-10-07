@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Employee Benefits</h1>

        <form action="{{ route('admin.storeBenefits') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="employee_name">Employee Name:</label>
                <select class="form-control" id="employee_name" name="employee_name">
                    <option value="" disabled selected>Select an employee</option>
                    @foreach ($employeeNames as $id => $name)
                        <option value="{{ $name }}">{{ $name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="employee_id">Employee ID:</label>
                <input type="number" id="employee_id" name="employee_id" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="compensation">Compensation:</label>
                <input type="text" id="compensation" name="compensation" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="attendance">Attendance:</label>
                <input type="text" id="attendance" name="attendance" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="performance_reviews">Performance Reviews:</label>
                <input type="text" id="performance_reviews" name="performance_reviews" class="form-control" required>
            </div>

            <!-- Add more benefit fields as needed with similar form-group structures -->

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
<script>
$(document).ready(function() {
    // Get references to the relevant elements
    var employeeNameDropdown = $('#employee_name');
    var employeeIdInput = $('#employee_id');

    // Listen for the change event on the employee name dropdown
    employeeNameDropdown.on('change', function() {
        // Get the selected employee's ID
        var selectedEmployeeId = $(this).val();

        // Set the selected employee's ID in the input field
        employeeIdInput.val(selectedEmployeeId);
    });
});
    </script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


