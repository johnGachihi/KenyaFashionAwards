@extends('layouts.admin.app')

@section('mainContent')
    <div id="voteStatsPage" class="container-fluid">
        <div class="row mt-3 h-fill-screen">
            <div class="col-3 stat-card-column h-100" data-simplebar>
                <div class="card stat-card" style="background-color: #fff">
                    <div class="card-body">
                        <h5 class="card-title" style="background-color: #fff">Male Fashion Model</h5>
                        <div class="row">
                            <div class="col-6">
                                <canvas id="myChart" width="150" height="150"></canvas>
                            </div>
                            <div class="col-6 d-flex align-items-center justify-content-center">
                                <div>
                                    <span>Total</span>
                                    <h3>20</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card stat-card" style="background-color: #fff">
                    <div class="card-body">
                        <h5 class="card-title" style="background-color: #fff">Male Fashion Model</h5>
                        <div class="row">
                            <div class="col-6">
                                <canvas id="myChart1" width="150" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card stat-card" style="background-color: #fff">
                    <div class="card-body">
                        <h5 class="card-title" style="background-color: #fff">Male Fashion Model</h5>
                        <div class="row">
                            <div class="col-6">
                                <canvas id="myChart2" width="150" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card stat-card" style="background-color: #fff">
                    <div class="card-body">
                        <h5 class="card-title" style="background-color: #fff">Male Fashion Model</h5>
                        <div class="row">
                            <div class="col-6">
                                <canvas id="myChart3" width="150" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection