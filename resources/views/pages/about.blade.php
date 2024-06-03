@extends('layouts.master')
@section('title','about')
@section('content')
    <div class="container-fluid bg-black" id="about">
        <div class="about_us border">
            <h4 class="text-center mt-3" id="tac">TAC Microfinance</h4>
            <div class="col-md-12 " id="acronyms">
                <h6 class="about_tac">TAC</h6>
                <p>The acronym TAC means " Trust And Committed". A group of committed friends with a common goal. </p>
                <h6 class="founder">Founder</h6>
                <p class="co"> Co-founded by a group of <i>Trusted and committed friends</i> in 2019, who were workers in an organization. Head quartered in Abuja, Nigeria. They will go on to set up a fund raising scheme with a vision for a micro-finance industry. </p>

            </div>
            <div class="about_us">
                <h6>Who we are</h6>
                <p>We are passionate group of talented youths, striving to build wealth for a better society for all humanity especially our immediate locality. TAC formerly Billionaire's club is a found raising platform in which members contribute a specific amount to an assigned member in a month.
                    We assured you that with us, your saving is 100% safe. We are real not faceless. We've been in existence for over four years without any misappropriation of funds. We are not member's desperate.
                </p>
            </div>
            <div class="goals">
                <h6>Aims and Objectives</h6>
                <p>A financial institution that provide a range of financial products and solution to assist micro, small and medium enterprise and members of a low income house holds as well as the public in a sustainable manner.</p>
            </div>
            <div class="row col-md-12">

                <div class="section_members ">

                    <div class="col-md-12 col-sm-12">
                        <h5 class="text-center mt-3 mb-3" id="board">Board members and their portfolios</h5>
                        <div class="col-md-12">
                            <div class="row justify-content-evenly bg-success">
                                <div class="col-md-auto" style="text-align: center">
                                    <img src="{{asset('/img/man.jpg')}}" alt="" class="pix_dir mt-3">
                                    <figure>
                                        <figcaption>
                                            <p class="text-center ">Felix Nwaora</p>
                                            <p class="text-center" id="pot">[ Director I ]</p>

                                        </figcaption>
                                    </figure>

                                </div>
                                <div class="col-md-auto" style="text-align: center">
                                    <img src="{{asset('/img/man1.jpg')}}" alt="Aam festus picture" class="pix_dir mt-3">
                                    <figure>
                                        <figcaption>
                                            <p class="text-center">Benjamin Beke</p>
                                            <p class="text-center" id="pot">[ Director II ]</p>
                                        </figcaption>
                                    </figure>

                                </div>
                                <div class="col-md-auto" style="text-align: center">
                                    <img src="{{asset('/img/man1.jpg')}}" alt="Aam festus picture" class="pix_dir mt-3">
                                    <figure>
                                        <figcaption>
                                            <p class="text-center">Mr Daniel</p>
                                            <p class="text-center" id="pot">[ Secretary General ]</p>
                                        </figcaption>
                                    </figure>

                                </div>

                            </div>

                        </div>

                        <div class="row justify-content-evenly mt-4" id="members">
                            <div class="col-md-auto" style="text-align: center">
                                <figure>
                                    <img src="{{asset('/img/man1.jpg')}}" alt=""  class="pix">
                                    <figcaption>
                                        <p class="text-center">Inusa Samuel</p>
                                        <p class="text-center" id="pot">[ Stakeholder ]</p>
                                    </figcaption>
                                </figure>

                            </div>
                            <div class="col-md-auto" style="text-align: center">

                                <figure>
                                    <img src="{{asset('/img/passport.jpg')}}" alt="" class="pix">
                                    <figcaption>
                                        <p class="text-center">Hope Chidi</p>
                                        <p class="text-center " id="pot">[ Stakeholder ]</p>

                                    </figcaption>
                                </figure>

                            </div>

                            <div class="col-md-auto" style="text-align: center">
                                <img src="{{asset('/img/man2.jpg')}}" alt="" class="pix">
                                <figure>
                                    <figcaption>
                                        <p class="text-center">Noah Chucks</p>
                                        <p class="text-center" id="pot">[ Stakeholder ]</p>

                                    </figcaption>
                                </figure>

                            </div>
                            <div class="col-md-auto" style="text-align: center">
                                <img src="{{asset('/img/passport.jpg')}}" alt="" class="pix">
                                <figure>
                                    <figcaption>
                                        <p class="text-center">Aam Festus</p>
                                        <p class="text-center " id="pot">[ Stakeholder ]</p>

                                    </figcaption>
                                </figure>

                            </div>

                        </div>
                    </div>

                </div>


            </div>


        </div>

    </div>
@endsection
