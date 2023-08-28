<?php ?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                    <div class="container">
                        <h2 class="mt-4 mb-4">Operations</h2>
                        <div class="row">
                          <div class="col-md-4">
                          <a class="" href="research">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-paste fa-3x mb-3"></i>
                                <h4 class="card-title">Current Reports</h4>
                              </div>
                            </div>
                          </a>
                          </div>
                          <div class="col-md-4">
                            <a class="" href="../modules/totals">
                                <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-lightbulb fa-3x mb-3"></i>
                                    <h4 class="card-title">Current Totals</h4>
                                </div>
                                </div>
                            </a>
                          </div>
                          <div class="col-md-4">
                            <a class="" href="../modules/create">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-hammer fa-3x mb-3"></i>
                                <h4 class="card-title">Build Report</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="../modules/notes">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-pen fa-3x mb-3"></i>
                                <h4 class="card-title">Operations Notes</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="../modules/assign">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-pen-to-square fa-3x mb-3"></i>
                                <h4 class="card-title">Assign Duties</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="../employees">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-calendar-days fa-3x mb-3"></i>
                                <h4 class="card-title">Scheduling</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

