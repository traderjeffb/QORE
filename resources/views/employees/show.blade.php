@extends('layouts.app')

@section('content')
    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="card">
            <div class="card-header">
                Employee Details
                <a href="{{ route('employees') }}" class="btn btn-primary d-inline-block m-2">Back to list of employees</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        @if($employee->profile_image)
                        <img src="{{ asset('storage/profile-images/' . $employee->profile_image) }}" alt="{{ $employee->name }}" class="img-fluid">
                    @else
                        <img src="{{ asset('storage/profile-images/defaultImage.jpg') }}" alt="Default Image" class="img-fluid">
                    @endif
                    </div>
                    <div class="col-md-4">
                        <h2>{{ $employee->name }}</h2>
                        <p>Email: {{ $employee->email }}</p>
                        <p>Phone Number: {{ $employee->phone_number }}</p>
                        <p>Job Title: {{ $employee->job_title }}</p>
                        <p>Department: {{ $employee->department }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
