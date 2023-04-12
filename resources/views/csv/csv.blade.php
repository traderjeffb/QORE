@extends('layouts.app')

@section('content')


<h1>Download CSV Example</h1>
<p>Click the button below to download the CSV file.</p>
<a href="{{ route('csv.openAndCloseBrowser') }}" class="btn btn-primary">Download CSV</a>

@endsection
