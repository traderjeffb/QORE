@extends('layouts.app')

@section('content')
    <div class="container vh-100 d-flex align-items-center justify-content-center">
        <div class="card">
            <div class="card-header">
                Edit Employee Details
            </div>
            <div class="card-body">
                <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            @if($employee->profile_image)
                            <img src="{{ asset('storage/profile-images/' . $employee->profile_image) }}" alt="{{ $employee->name }}" class="img-fluid">
                        @else
                            <img src="{{ asset('storage/profile-images/defaultImage.jpg') }}" alt="Default Image" class="img-fluid">
                        @endif
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $employee->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ $employee->email }}">
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone Number:</label>
                                <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $employee->phone_number }}">
                            </div>
                            <div class="form-group">
                                <label for="job_title">Job Title:</label>
                                <input type="text" name="job_title" id="job_title" class="form-control" value="{{ $employee->job_title }}">
                            </div>
                            <div class="form-group">
                                <label for="department">Department:</label>
                                <input type="text" name="department" id="department" class="form-control" value="{{ $employee->department }}">
                            </div>
                            <div class="form-group">
                                <label for="profile_image">Profile Image:</label>
                                <input type="file" name="profile_image" id="profile_image" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
