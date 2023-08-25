<?php ?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                    <div class="container">
                        <h2 class="mt-4 mb-4">Engineering</h2>
                        <div class="row">
                          <div class="col-md-4">
                          <a class="" href="research">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-chart-simple fa-3x mb-3"></i>
                                <h4 class="card-title">Current Market</h4>
                              </div>
                            </div>
                          </a>
                          </div>
                          <div class="col-md-4">
                            <a class="" href="../modules/totals">
                                <div class="card">
                                <div class="card-body">
                                    <i class="fa-solid fa-calculator  fa-3x mb-3"></i>
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
                                <h4 class="card-title">Build Module</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="../modules/notes">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-pen fa-3x mb-3"></i>
                                <h4 class="card-title">Project Notes</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="../modules/assign">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-pen-to-square fa-3x mb-3"></i>
                                <h4 class="card-title">Assign Project</h4>
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

