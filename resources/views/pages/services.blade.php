@extends('layouts.master')
@section('title','services')
@section('content')
    <div class="container-fluid border">
        <div class="row row-cols-1 row-cols-md-3 border border-dark bg-dark">
            <div class="col mb-4 mt-4" id="service">
                <div class="card h-100">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{asset('img/photo/home5.jpg')}}"
                             alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h5 class="card-title">House Loan</h5>
                        <!--Text-->
                        <p class="card-text">An interest friendly rate house loan is offered by the company to individuals or private organisation to secure properties.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4 mt-4" id="service">
                <div class="card h-100">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{asset('img/photo/save1.jpg')}}">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h5 class="card-title">Saving Scheme</h5>
                        <!--Text-->
                        <p>The company offers saving scheme for individuals and organization in accordance with our terms and conditions.
                            Make the right decision today by investing with us and watch us grow your funds.You will surely appreciate the power of investment within a short period of time with us.
                            Your financial security and comfort our main periority.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                    </div>

                </div>
                <!-- Card -->
            </div>

            <div class="col mb-4 mt-4" id="service">
                <div class="card h-100">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{asset('img/photo/adminP.png')}}">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h5 class="card-title">Loan</h5>
                        <!--Text-->
                        <p class="card-text">The company offers three categories of loan. Agro-loans,SMEs loans and House or property loan with small  interest rate</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                    </div>

                </div>

            </div>
            <div class="col mb-4" id="service">
                <div class="card h-100">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{asset('img/photo/scapital.jpg')}}">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h5 class="card-title">Share Capital</h5>
                        <!--Text-->
                        <p>Individuals and organisation who are willing to be stakeholders are advise to abide by our terms and privacy or contact members for further clarification.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4 hover-overlay" id="service">
                <div class="card h-100">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{asset('img/photo/share2.jpg')}}">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h5 class="card-title">Shares</h5>
                        <!--Text-->
                        <p>Our shares are always available for individuals and cooperate organisations in accordance with our terms and conditions.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                    </div>

                </div>
                <!-- Card -->
            </div>
            <div class="col mb-4" id="service">
                <div class="card h-100">
                    <!--Card image-->
                    <div class="view overlay">
                        <img class="card-img-top" src="{{asset('img/photo/small2.jpg')}}">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h5 class="card-title">SMEs Loan</h5>
                        <!--Text-->
                        <p class="card-text">The company offers loans to small and medium scale businesses in accordance with our terms and conditions.
                            card's content.</p>
                        <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                        <button type="button" class="btn btn-light-blue btn-md">Read more</button>

                    </div>

                </div>
                <!-- Card -->
            </div>

        </div>

    </div>
@endsection
