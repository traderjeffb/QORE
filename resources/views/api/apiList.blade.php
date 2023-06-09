@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    @if(isset($data['symbol']))
    <div class="card-header">Latest Quote for {{ $data['symbol'] }}</div>
@endif


                    <div class="card-body">
                        <form action="{{ route('api.index', ['symbol' => $data['symbol'] ?? old('symbol')]) }}" method="GET">

                            <div class="form-group row">
                                <label for="symbol" class="col-md-4 col-form-label text-md-right">Ticker Symbol</label>

                                <div class="col-md-6">
                                    <input id="symbol" type="text" class="form-control @error('symbol') is-invalid @enderror" name="symbol" value="{{ old('symbol') }}" required autocomplete="symbol" autofocus>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Get Quote
                                    </button>
                                </div>
                            </div>
                        </form>

                        <hr>

                        @if(isset($data))
                            @if($data['status'] === 'OK')
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th>Open</th>
                                            <td>{{ $data['open'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>High</th>
                                            <td>{{ $data['high'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Low</th>
                                            <td>{{ $data['low'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Close</th>
                                            <td>{{ $data['close'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Volume</th>
                                            <td>{{ $data['volume'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>After Hours</th>
                                            <td>{{ $data['afterHours'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Pre-Market</th>
                                            <td>{{ $data['preMarket'] }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            @else
                                    @if(isset($data['message']) || isset($data['Error Message']))
                                    <div class="alert alert-danger" role="alert">
                                        {{ $data['message'] ?? $data['Error Message'] }}
                                    </div>
                                @endif
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
