@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow"> <!-- Add 'shadow' class for drop shadow effect -->
                <div class="card-header">Active Research Projects</div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Budget</th>
                                <th scope="col">Currency</th>
                                <th scope="col">Country</th>
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($researchProjects as $researchProject)
                            <tr>
                                <th scope="row">{{ $researchProject->id }}</th>
                                <td>{{ $researchProject->title }}</td>
                                <td>{{ $researchProject->startDate }}</td>
                                <td>{{ $researchProject->endDate }}</td>
                                <td>${{ number_format($researchProject->budget, 2) }}</td>
                                <td>{{ $researchProject->currency }}</td>
                                <td>{{ $researchProject->country }}</td>
                                <td>{{ $researchProject->status }}</td>
                                <td>
                                    <a href="{{ route('research.show', $researchProject->id) }}" class="btn btn-primary btn-sm">View</a>
                                    <a href="{{ route('research.edit', $researchProject->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <!-- Add delete button or any other actions you need -->
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
