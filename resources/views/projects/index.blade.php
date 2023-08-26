@extends('layouts.app')

{{-- @extends('projects.default') --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Manage Project</div>

                <div class="card-body">

                    <a href="{{ route('projects.create-step-one') }}" class="btn btn-primary pull-right">Create Project</a>

                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Project Name</th>
                            <th scope="col">Projet Description</th>
                            <th scope="col">Objectives</th>
                            <th scope="col">Budget</th>
                            <th scope="col">Currency</th>
                            <th scope="col">Country</th>
                            <th scope="col">Status</th>
                            <th scope="col">Chemicals</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <th scope="row">{{$project->id}}</th>
                                <td>{{$project->name}}</td>
                                <td>{{$project->description}}</td>
                                <td>{{$project->objectives}}</td>
                                <td>{{$project->budget}}</td>
                                <td>{{$project->currency}}</td>
                                <td>{{$project->country}}</td>
                                <td>{{$project->status ? 'Active' : 'DeActive'}}</td>
                                <td>{{$project->chemical}}</td>
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
