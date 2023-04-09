@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Latest Quote for {{ $data['symbol'] }}</div>

                    <div class="card-body">
                        <form action="{{ route('api.index') }}" method="GET">
                            <div class="form-group row">
                                <label for="symbol" class="col-md-4 col-form-label text-md-right">Ticker Symbol</label>

                                <div class="col-md-6">
                                    <input id="symbol" type="text" class="form-control @error('symbol') is-invalid @enderror" name="symbol" value="{{ old('symbol') }}" required autocomplete="symbol" autofocus>

                                    @error('symbol')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
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
                                <div class="alert alert-danger" role="alert">
                                    {{ $data['message'] }}
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
