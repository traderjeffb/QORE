@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Hedge Table</h1>
    <div class="shadow p-3 mb-5 bg-white rounded">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Timestamp</th>
                    <th>Budget(000)</th>
                    <th>USD Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hedges as $hedge)
                <tr>
                    <td>{{ $hedge->title }}</td>
                    <td>{{ $hedge->timestamp }}</td>
                    <td>${{ number_format($hedge->budget, 2) }}</td>
                    <td>${{ number_format($hedge->usd_amount, 2) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="text-right">
            <div class="text-right">
                <h2 mb-4><strong>Total USD Hedged Amount in Millions:</strong> ${{ number_format($totalUsdAmount, 2) }}</h2>
            </div>
        </div>
    </div>

</div>
@endsection
