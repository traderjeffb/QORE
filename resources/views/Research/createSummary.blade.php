@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Research Summary Report</h1>
    <form action="{{ route('research.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Project Title</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" name="author" id="author" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
                <option value="Pending">Pending</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Project Description</label>
            <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
        </div>

        <div class="mb-3">
            <label for="fullText" class="form-label">Project Full Text</label>
            <textarea name="fullText" id="fullText" class="form-control" rows="6" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Report</button>
    </form>
</div>
@endsection
