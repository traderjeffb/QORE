@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="mb-4">{{ $pageTitle }}</h1>
    @if ($message)
        <div class="alert alert-info">{{ $message }}</div>
    @else
        <div class="row row-cols-1">
            {{-- @foreach($projects as $project) --}}
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $projects->title }}</h5>
                            <p class="card-text">{{ $projects->description }}</p>
                            <p class="card-text">{{!! $projects->fullText !!}}</p>

                            <p class="card-text">
                                <strong>Author:</strong> {{ $projects->author }}
                            </p>
                            <p class="card-text">
                                <strong>Status:</strong> {{ $projects->status }}
                            </p>
                            <a href="{{ route('researchPaper', ['id' => $projects->id]) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}
        </div>
    @endif
</div>
@endsection
