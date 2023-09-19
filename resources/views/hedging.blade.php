<?php ?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
                    <div class="container">
                        <h2 class="mt-4 mb-4">Hedging</h2>
                        <div class="row">
                          <div class="col-md-4">
                          <a class="" href="../modules/index">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-money-bill-trend-up fa-3x mb-3"></i>
                                <h4 class="card-title">Precious Metals Hedging</h4>
                              </div>
                            </div>
                          </a>
                          </div>
                          <div class="col-md-4">
                            <a class="" href="../modules/totals">
                                <div class="card">
                                <div class="card-body">
                                    <i class="fas fa-lightbulb fa-3x mb-3"></i>
                                    <h4 class="card-title">Unsecured positions</h4>
                                </div>
                                </div>
                            </a>
                          </div>
                          <div class="col-md-4">
                            <a class="" href="../modules/create">
                            <div class="card">
                              <div class="card-body">
                                <i class="fas fa-cogs fa-3x mb-3"></i>
                                <h4 class="card-title">Monthly Breakdown</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="../modules/notes">
                            <div class="card">
                              <div class="card-body">
                                <i class="fas fa-cogs fa-3x mb-3"></i>
                                <h4 class="card-title">Position Notes</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="../hedge/index">
                            <div class="card">
                              <div class="card-body">
                                <i class="fas fa-cogs fa-3x mb-3"></i>
                                <h4 class="card-title">Currency Hedging</h4>
                              </div>
                            </div>
                            </a>
                          </div>
                          <div class="col-md-4 mt-4">
                            <a class="" href="../employees">
                            <div class="card">
                              <div class="card-body">
                                <i class="fa-solid fa-calendar-days fa-3x mb-3"></i>
                                <h4 class="card-title">Current Market</h4>
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

