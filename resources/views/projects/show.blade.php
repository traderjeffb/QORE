@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Project Details
                </div>

                <div class="card-body">
                    <h2>{{ $project->name }}</h2>
                    <p><strong>Description:</strong> {{ $project->description }}</p>
                    <p><strong>Objectives:</strong> {{ $project->objectives }}</p>
                    <p><strong>Budget:</strong> {{ $project->budget }}</p>
                    <p><strong>Currency:</strong> {{ $project->currency }}</p>
                    <p><strong>Country:</strong> {{ $project->country }}</p>
                    <p><strong>Status:</strong> {{ $project->status }}</p>
                    <p><strong>Chemicals:</strong> {{ $project->chemicals }}</p>

                    <a href="{{ route('projects.index') }}" class="btn btn-primary">Back to Projects</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
