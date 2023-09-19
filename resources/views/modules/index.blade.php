@extends('layouts.app')

@section('content')
<div class="container col-md-10">
    <div class="shadow p-3 mb-5 bg-white rounded">
        <h3>Module List</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($modules as $category => $name)
                <tr>
                    <td>{{ $name }}</td>
                    <td>{{ $category }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
