@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inventory of Parts</h1>

    <!-- Button to Add New Part -->
    <a href="{{ route('engineering.createPart') }}" class="btn btn-primary mb-3">Add New Part</a>

    <!-- Table to Display Parts -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Category</th>
                <th>Part Number</th>
                <th>Description</th>
                <th>Inventory</th>
                <th>Case Size</th>
                <th>Minimum Inventory</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parts as $part)
                <tr>
                    <td>{{ $part->category }}</td>
                    <td>{{ $part->partNumber }}</td>
                    <td>{{ $part->description }}</td>
                    <td>{{ $part->inventory }}</td>
                    <td>{{ $part->caseSize }}</td>
                    <td>{{ $part->minimumInventory }}</td>
                    <td>
                        {{-- Add Edit and View buttons --}}
                        <a href="{{ route('engineering.edit', $part->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="{{ route('engineering.show', $part->id) }}" class="btn btn-info btn-sm">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
