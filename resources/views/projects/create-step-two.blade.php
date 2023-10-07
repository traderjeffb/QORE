@extends('layouts.app')

{{-- @extends('projects.default') --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('projects.create-step-two.post') }}" method="POST">

                @csrf
                <div class="card">
                    <div class="card-header">Step 2: Status & Stock</div>

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
                                <label for="description">Projects Status</label><br/>
                                <label class="radio-inline"><input type="radio" name="status" value="Pending" {{{ (isset($projects->status) && $projects->status == '1') ? "checked" : "" }}}> Pending</label>
                                <label class="radio-inline"><input type="radio" name="status" value="In-Progress" {{{ (isset($projects->status) && $projects->status == '0') ? "checked" : "" }}}>In Progress</label>
                                <label class="radio-inline"><input type="radio" name="status" value="Completed" {{{ (isset($projects->FullyStaffed) && $projects->fullyStaffed == '0') ? "checked" : "" }}}>Completed</label>
                            </div>
                            <div class="form-group">
                                <label for="chemical">chemical</label>
                                <input type="text" value="{{ $project->chemical ?? '' }}" class="form-control" id="chemical"  name="chemical" required>
                            </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('projects.create-step-one') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
