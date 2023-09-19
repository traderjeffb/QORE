@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Revenue by Country</div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Country</th>
                                <th scope="col">Total Revenue</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($combinedSales as $countryData)
                            <tr>
                                <td>{{ $countryData['country'] }}</td>
                                <td>{{ number_format($countryData['total'], 2) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot class="combined-total">
                            <tr>
                                <th>Combined Total</th>
                                <td><strong>${{ number_format($combinedSales->sum('total'), 2) }}</strong></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
