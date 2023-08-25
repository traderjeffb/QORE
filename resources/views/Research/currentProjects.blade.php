@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mb-4">{{ $pageTitle }}</h1>
    @if ($message)
        <div class="alert alert-info">{{ $message }}</div>
    @else
        <div class="row">
            @foreach($projects as $project)
                <div class="col-md-12 mx-auto mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $project->title }}</h5>
                            <p class="card-text">{{ $project->description }}</p>
                            <p class="card-text">
                                <strong>Author:</strong> {{ $project->author }}
                            </p>
                            <p class="card-text">
                                <strong>Status:</strong> {{ $project->status }}
                            </p>
                            <a href="{{ route('researchPaper', ['id' => $project->id]) }}" class="btn btn-primary">View Research Paper</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection

