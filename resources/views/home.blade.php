@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Departments') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row">
                          <div class="col-md-4">
                          <a class="" href="researchHome">
                            <div class="card">
                              <div class="card-body">
                                <i class="fas fa-microscope fa-3x mb-3"></i>
                                <h4 class="card-title">Research Department</h4>
                              </div>
                            </div>
                          </a>
                          </div>
                          <div class="col-md-4">
                            <a class="" href="sales">
                                <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-lightbulb fa-3x mb-3"></i>
                                    <h4 class="card-title">Sales Department</h4>
                                </div>
                                </div>
                            </a>
                          </div>
                          <div class="col-md-4">
                            <a class="" href="engineering">
                            <div class="card">
                              <div class="card-body">
                                <i class="fas fa-cogs fa-3x mb-3"></i>
                                <h4 class="card-title">Engineering Department</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="admin">
                            <div class="card">
                              <div class="card-body">
                                <i class="fas fa-list-check fa-3x mb-3"></i>
                                <h4 class="card-title">Admin Department</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="hedging">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-money-bill-transfer fa-3x mb-3"></i>
                                <h4 class="card-title">Hedging Department</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="operations">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-network-wired fa-3x mb-3"></i>
                                <h4 class="card-title">Operations department</h4>
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
