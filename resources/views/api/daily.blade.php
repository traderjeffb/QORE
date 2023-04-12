@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <form action="{{ route('api.daily') }}" method="GET">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="symbol">Stock Ticker:</label>
                    <input type="text" class="form-control" id="symbol" name="symbol" value="{{ old('symbol') }}" placeholder="Enter stock ticker...">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="from_date">From Date:</label>
                    <input type="date" class="form-control" id="from_date" name="from_date" value="{{ old('from_date') }}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="to_date">To Date:</label>
                    <input type="date" class="form-control" id="to_date" name="to_date" value="{{ old('to_date') }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Get Quote</button>
            </div>
        </div>
    </form>
</div>
{{-- @endsection --}}
{{-- @section('content') --}}
<div class="container">
    @if(isset($data))
    <table class="table">
        <thead>
            <tr>
                <th scope="col">V</th>
                <th scope="col">VW</th>
                <th scope="col">O</th>
                <th scope="col">C</th>
                <th scope="col">H</th>
                <th scope="col">L</th>
                <th scope="col">T</th>
                <th scope="col">N</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $result)
                <tr>
                    <td>{{ $result['v'] }}</td>
                    <td>{{ $result['vw'] }}</td>
                    <td>{{ $result['o'] }}</td>
                    <td>{{ $result['c'] }}</td>
                    <td>{{ $result['h'] }}</td>
                    <td>{{ $result['l'] }}</td>
                    <td>{{ $result['t'] }}</td>
                    <td>{{ $result['n'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
</div>
@endsection
