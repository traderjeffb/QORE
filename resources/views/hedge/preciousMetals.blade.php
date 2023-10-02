@extends('layouts.app')

@section('content')
<div class="container col-md-10">
    <div class="shadow p-3 mb-5 bg-white rounded">
        <h3>Module List</h3>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Metal</th>
                    <th>Amount</th>
                    <th>Price per Ounce</th>
                    <th>Total Value</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($totals as $metal => $amount)
                <tr>
                    <td>{{ ucfirst($metal) }}</td>
                    <td>{{ $amount }}</td>
                    <td>{{ $pricePerOz->$metal }}</td>
                    <td>{{ $amount * $pricePerOz->$metal }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
