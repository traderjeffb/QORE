@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
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
                                    <th class="col-md-2">Image</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th class="col-md-2">Phone Number</th>
                                    <th class="col-md-1">Job Title</th>
                                    <th class="col-md-1">Department</th>
                                    <th class="col-md-2">Action</th>
                                </tr>
                            </thead>
                            <tbody >
                                @foreach ($employees as $employee)
                                    <tr>
                                        <td class="col-md-2">
                                            <img src="{{ asset('storage/profile-images/' . $employee->profile_image) }}" alt="{{ $employee->name }}" class="img-fluid img-thumbnail w-50 align-middle"">
                                        </td>
                                        <td class="align-middle">{{ $employee->name }}</td>
                                        <td class="align-middle">{{ $employee->email }}</td>
                                        <td class="align-middle col-md-2">{{ $employee->phone_number }}</td>
                                        <td class="align-middle">{{ $employee->job_title }}</td>
                                        <td class="align-middle">{{ $employee->department }}</td>
                                        {{-- <td class="w-25 text-center col-md-2">
                                            <div class="btn-group">
                                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary d-inline-block m-2">Edit</a>
                                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger m-2">Delete</button>
                                                </form>
                                            </div>
                                        </td> --}}
                                        <td class="w-25 text-center col-md-2 align-middle">
                                            <div class="btn-group">
                                                <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary d-inline-block m-2" style="height: 38px;">Edit</a>
                                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger m-2" style="height: 38px;">Delete</button>
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
