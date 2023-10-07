<?php ?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                    <div class="container">
                        <h2 class="mt-4 mb-4">Administration</h2>
                        <div class="row">
                          <div class="col-md-4">
                          <a class="" href="../employees">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-person fa-3x mb-3"></i>
                                <h4 class="card-title">Employees</h4>
                              </div>
                            </div>
                          </a>
                          </div>
                          <div class="col-md-4">
                            <a class="" href="../admin/hr">
                                <div class="card">
                                <div class="card-body">
                                    <i class="fa-solid fa-lightbulb fa-3x mb-3"></i>
                                    <h4 class="card-title">Human Resources</h4>
                                </div>
                                </div>
                            </a>
                          </div>
                          <div class="col-md-4">
                            <a class="" href="#">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-tv fa-3x mb-3"></i>
                                <h4 class="card-title">Media</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="#">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-book-open fa-3x mb-3"></i>
                                <h4 class="card-title">SOPs</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="#">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-regular fa-rectangle-list fa-3x mb-3"></i>
                                <h4 class="card-title">Reports</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="../employees">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-calendar-days fa-3x mb-3"></i>
                                <h4 class="card-title">Admin Scheduling</h4>
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

