@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Employee List
                    </div>
                    @if (session()->has('success'))
                        <div class="alert alert-success" id="success-alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Job Title</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td>
                                            <img src="{{ asset('storage/profile-images/' . $employee->profile_image) }}" alt="{{ $employee->name }}" class="img-fluid">
                                        </td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->email }}</td>
                                        <td>{{ $employee->phone_number }}</td>
                                        <td>{{ $employee->job_title }}</td>
                                        <td>{{ $employee->department }}</td>
                                        <td class="w-25 text-center">
                                            <div class="btn-group">
                                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary d-inline-block m-2">Edit</a>
                                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger m-2">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    // Hide the success message after 5 seconds
    setTimeout(function() {
        $('#success-alert').fadeOut('slow');
    }, 5000);
</script>
