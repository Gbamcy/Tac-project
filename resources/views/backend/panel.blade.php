@extends('layouts.admin')
@section('title','stakeholders panel')
@section('content')
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3"><strong>Stakeholders</strong> Panel</h1>

        <div class="row">
            <div class="col-xl-6 col-xxl-5 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Loan request</h5>
                                            <figure>
                                                <img src="{{('img/mobile.jpg')}}" alt="icon logo" height="150" width="150">
                                            </figure>
                                        </div>

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="truck"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">238</h1>
                                    <div class="mb-0">
                                        <span class="text-danger"> <i class="mdi mdi-arrow-bottom-right"></i> -3.65% </span>
                                        <span class="text-muted">Since last Month</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col mt-0">
                                            <h5 class="card-title">Saving</h5>
                                        </div>
                                        <img src="{{('/img/suit.jpg')}}" height="165" width="150">

                                        <div class="col-auto">
                                            <div class="stat text-primary">
                                                <i class="align-middle" data-feather="dollar-sign"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="mt-1 mb-3">$21.300</h1>
                                    <div class="mb-0">
                                        <span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i> 6.65% </span>
                                        <span class="text-muted">Since last week</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-xxl-7">
                <div class="card flex-fill w-100">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Board Members</h5>
                    </div>
                    <div class="card-body py-3">
                        <ol class="stake_board">
                            <li class="board"><strong>Mr Nwaora Felix  []</strong></li>
                            <hr>
                            <li class="board"><strong>Mr Beke Benjamin</strong></li>
                            <hr>
                            <li class="board"><strong>Mr Hope Chidi</strong></li>
                            <hr>
                            <li class="board"><strong>Mr Samuel Inusa </strong></li>
                            <hr>
                            <li class="board"><strong>Mr Chukwuemeka Chucks</strong></li>
                            <hr>
                            <li class="board"><strong>Mr Aam Festus</strong></li>
                            <hr>
                            <li class="board"><strong>Mr Daniel </strong></li>
                        </ol>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
                <div class="card flex-fill w-100">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Loan Quick Analysis</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="py-3">
                                <div class="chart chart-xs">
                                    <canvas id="chartjs-dashboard-pie"></canvas>
                                </div>
                            </div>

                            <table class="table mb-0">
                                <tbody>
                                <tr>
                                    <td><strong>Loan request</strong></td>
                                    <td class="text-end"><strong>5305</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Approved Loan</strong></td>
                                    <td class="text-end"><strong>2701</strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Pending Loan</strong></td>
                                    <td class="text-end"><strong>2604</strong></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Saving Current Month</h5>
                    </div>
                    <div class="card-body d-flex">
                        <div class="align-self-center w-100">
                            <div class="chart">
                                <div id="datetimepicker-dashboard"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
