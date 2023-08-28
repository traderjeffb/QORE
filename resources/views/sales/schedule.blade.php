@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-3">
            <form action="{{ route('sales.scheduleRec') }}" method="POST">
                @csrf

                <div class="card">
                    <div class="card-header">Create Appointment</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="start_time">Start Time:</label>
                            <input type="datetime-local" class="form-control" id="start_time" name="start_time" required>
                        </div>
                        <div class="form-group">
                            <label for="finish_time">Finish Time:</label>
                            <input type="datetime-local" class="form-control" id="finish_time" name="finish_time" required>
                        </div>
                        <div class="form-group">
                            <label for="comments">Comments:</label>
                            <textarea class="form-control" id="comments" name="comments"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="customer_id">Customer:</label>
                            <select class="form-control" id="customer_id" name="customer_id" required>
                                <!-- Add options here based on your customers -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="employee_id">Employee:</label>
                            <select class="form-control" id="employee_id" name="employee_id" required>
                                <!-- Add options here based on your employees -->
                            </select>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
