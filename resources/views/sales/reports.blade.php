@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Sales Report</div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Project Name</th>
                                <th scope="col">Sale Amount</th>
                                <th scope="col">Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $project->name }}</td>
                                <td>${{ number_format($project->budget, 2) }}</td>
                                <td>{{ $project->country }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <th>Total (Sales)</th>
                                <td></td>
                                <td><strong>${{ number_format($totalTable1, 2) }}</strong></td>
                                <td></td>
                            </tr>
                        </tbody>
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Research Name</th>
                                <th scope="col">Sale Amount</th>
                                <th scope="col">Country</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($researchProjects as $researchItem)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            {{-- <td>{{ $researchItem->id }}</td> --}}
                            <td>{{ $researchItem->title }}</td>
                            <td>${{ number_format($researchItem->budget, 2) }}</td>
                            <td>{{ $researchItem->country }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <th>Total (Research)</th>
                            <td></td>
                            <td><strong>${{ number_format($totalTable2, 2) }}</strong></td>
                            <td></td>
                        </tr>
                        </tbody>
                        <tfoot class="combined-total"> <!-- Add a tfoot section for the combined total -->
                            <tr>
                                <th>Combined Total</th>
                                <td></td>
                                <td><strong>${{ number_format($totalTable1 + $totalTable2, 2) }}</strong></td>
                                <td></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
