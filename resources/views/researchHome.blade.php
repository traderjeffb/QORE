<?php ?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                    <div class="container">
                        <h1 class="mt-4 mb-4">Research</h1>
                        <div class="row">
                          <div class="col-md-4">
                          <a class="" href="../research/indexCurrent">
                            <div class="card">
                              <div class="card-body">
                                <i class="fas fa-microscope fa-3x mb-3"></i>
                                <h4 class="card-title">Current Research</h4>
                              </div>
                            </div>
                          </a>
                          </div>
                          <div class="col-md-4">
                            <a class="" href="../research/index">
                                <div class="card">
                                <div class="card-body">
                                    <i class="fa-regular fa-newspaper fa-3x mb-3"></i>
                                    <h4 class="card-title">Research Papers</h4>
                                </div>
                                </div>
                            </a>
                          </div>
                          <div class="col-md-4">
                            <a class="" href="../research/create">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-hammer fa-3x mb-3"></i>
                                <h4 class="card-title">Create a Research Project</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="../research/indexPast">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-signs-post fa-3x mb-3"></i>
                                <h4 class="card-title">Past Research</h4>
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
                            <a class="" href="../research/create">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-calendar-days fa-3x mb-3"></i>
                                <h4 class="card-title">Research Schedules</h4>
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

