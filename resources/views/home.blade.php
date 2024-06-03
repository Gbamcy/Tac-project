@extends('layouts.master')

@section('content')
    <div class="container-fluid " id="home">
        <div class="row justify-content-center">
            <div class="col-md-12 col-sm-12 bg-secondary">
                <div class="tac">
                    <div class="row">
                        <div class="col-md-6" id="design">

                            <marquee id="move"><h4><span class="name">TAC Microfinance</span> </h4></marquee>
                            <br>
                            <hr class="line">
                            <h1 class="invest"><span class="wise">.Invest wisely,</span> invest with Us..!</h1>
                            <div class="side">
                                <ul class="icon">
                                    <li class="awesome"><i class="fa fa-home fa-3x "></i><span class="icons_name"> Property loan</span></li>
                                    <li class="awesome"><i class="fa fa-users fa-3x"></i><span class="icons_name"> SMEs loan</span></li>
                                    <li class="awesome"><i class="fas fa-hand-holding-dollar fa-3x"></i><span class="icons_name"> Savings</span></li>
                                </ul>

                            </div>

                        </div>
                        <div class="col-md-6 col-md-offset-3">
                            <div class="row">
                                <img src="{{url('../img/up1.jpg')}}" class="home_image" >

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
