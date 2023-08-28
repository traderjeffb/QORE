<?php ?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                    <div class="container">
                        <h2 class="mt-4 mb-4">Sales</h2>
                        <div class="row">
                          <div class="col-md-4">
                          <a class="" href="../customer/index">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-paperclip fa-3x mb-3"></i>
                                <h4 class="card-title">Customers</h4>
                              </div>
                            </div>
                          </a>
                          </div>
                          <div class="col-md-4">
                            <a class="" href="../projects/create-step-one">
                                <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-lightbulb fa-3x mb-3"></i>
                                    <h4 class="card-title">Start a Project</h4>
                                </div>
                                </div>
                            </a>
                          </div>
                          <div class="col-md-4">
                            <a class="" href="../modules/create">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-hammer h-8 fa-3x mb-3"></i>
                                <h4 class="card-title">Build Module</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="../customer/create">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-pen fa-3x mb-3"></i>
                                <h4 class="card-title">Add Customer</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="../sales/index">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-pen-to-square fa-3x mb-3"></i>
                                <h4 class="card-title">Sales Reports</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="../sales/schedule">
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

