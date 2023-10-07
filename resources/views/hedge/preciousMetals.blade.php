@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="shadow p-4">
                <h3 class="mb-4">Module Totals List</h3>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Gold</th>
                            <th>Silver</th>
                            <th>platinum</th>
                            <th>palladium</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through your modules data here -->
                        @foreach ($modules as $module)
                        <tr>
                            <td>{{ $module->name }}</td>
                            <td>{{ $module->category }}</td>
                            <td>{{ $module->gold }}</td>
                            <td>{{ $module->silver }}</td>
                            <td>{{ $module->platinum }}</td>
                            <td>{{ $module->palladium }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
