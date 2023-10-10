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
                <th class="text-center">Part Name</th>
                <th class="text-center">Category</th>
                <th class="text-center" >Part Number</th>
                <th class="text-center">Description</th>
                <th class="text-center">Inventory</th>
                <th class="text-center">Case Size</th>
                <th class="text-center">Minimum Inventory</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parts as $part)
                <tr>
                    <td class="text-center">{{ $part->partName }}</td>
                    <td class="text-center">{{ $part->category }}</td>
                    <td class="text-center">{{ $part->partNumber }}</td>
                    <td class="text-center">{{ $part->description }}</td>
                    <td class="text-center">{{ $part->inventory }}</td>
                    <td class="text-center">{{ $part->caseSize }}</td>
                    <td class="text-center">{{ $part->minimumInventory }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('engineering.edit', $part->id) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                            <a href="{{ route('engineering.show', $part->id) }}" class="btn btn-info btn-sm mr-2">View</a>
                            <form method="POST" action="{{ route('engineering.destroy', $part->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
