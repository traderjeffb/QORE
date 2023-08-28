@extends('layouts.app')


{{-- @extends('projects.default') --}}
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('projects.create-step-three.post') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">Step 3: Review Details</div>

                    <div class="card-body">

                            <table class="table">
                                <tr>
                                    <td>Project Name:</td>
                                    <td><strong>{{$project->name}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Project Amount:</td>
                                    <td><strong>{{$project->budget}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Currency:</td>
                                    <td><strong>{{$project->currency}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td><strong>{{$project->country}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Project status:</td>
                                    <td><strong>{{$project->status ? 'Active' : 'DeActive'}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Project Description:</td>
                                    <td><strong>{{$project->description}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Project Status:</td>
                                    <td><strong>{{$project->status}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Project Fully Staffed:</td>
                                    <td><strong>{{$project->fullyStaffed ? 'Yes' : 'No'}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Chemicals:</td>
                                    <td><strong>{{$project->chemical}}</strong></td>
                                </tr>
                            </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('projects.create-step-two') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
