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
                                <input type="text" value="{{ $project->name ?? '' }}" class="form-control" id="taskTitle"  name="name">
                            </div>
                            <div class="form-group">
                                <label for="budget">Project Budget:</label>
                                <input type="number"  value="{{{ $project->budget ?? '' }}}" class="form-control" id="budget" name="budget"/>
                            </div>

                            <div class="form-group">
                                <label for="description">Project Description:</label>
                                <textarea type="text"  class="form-control" id="description" name="description">{{{ $project->description ?? '' }}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="objectives">Project Objectives:</label>
                                <textarea type="text"  class="form-control" id="objectives" name="objectives">{{{ $project->objectives ?? '' }}}</textarea>
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
