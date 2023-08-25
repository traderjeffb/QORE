@extends('layouts.app')

@section('content')


<div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-10 shadow">
        <form method="POST" action="{{ route('save-data') }}">
            @csrf
            <label for="start-date">Start date:</label>
            <input type="date" id="start-date" name="start_date" required>
            <br>
            <label for="end-date">End date:</label>
            <input type="date" id="end-date" name="end_date" required>
            <br>
            <button type="submit">Save Data</button>
        </form>
      </div>
    </div>
</div>
