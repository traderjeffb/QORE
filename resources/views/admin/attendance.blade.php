@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Attendance Input</h1>

    <form action="{{ route('attendance.store') }}" method="POST">
        @csrf

        <!-- Date -->
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" class="form-control" value="{{ date('Y-m-d') }}" required>
        </div>

        <!-- Attendance Dropdown -->
        <div class="form-group">
            <label for="attendance_type">Attendance Type:</label>
            <select class="form-control" id="attendance_type" name="attendance_type" required>
                <option value="2">No Call No Show (2 points)</option>
                <option value="0.5">Late Less Than 30 Min. (0.5 points)</option>
                <option value="1">Late More Than 30 Min. (1 point)</option>
                <option value="0">Sick</option>
                <option value="0">Absent With Call</option>
            </select>
        </div>


        <!-- Note -->
        <div class="form-group">
            <label for="note">Note:</label>
            <textarea id="note" name="note" class="form-control"></textarea>
        </div>

        <!-- Submit Button -->
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <!-- Display Total Sick Days and Total Absent Days -->
    <div class="mt-4">
        <p>Total Sick Days: {{ $totalSickDays }}</p>
        <p>Total Absent Days: {{ $totalAbsentDays }}</p>
    </div>
</div>
@endsection
