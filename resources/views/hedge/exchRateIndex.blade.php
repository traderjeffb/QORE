@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="shadow p-3 mb-5 bg-white rounded">
        <h2>Exchange Rates</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Currency</th>
                    <th>Rate</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($exchangeRates['rates'] as $currency => $rate)
                    <tr>
                        <td>{{ $currency }}</td>
                        <td>{{ $rate }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
