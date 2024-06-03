@extends('layouts.admin')
@section('title', 'Stakeholders of tne platform')
@section('content')
    <div class="container-fluid">
        <div class="section_members border border-light">

            <div class="col-md-12 col-sm-12">
                <h3 class="text-center mb-2" id="board">Stakeholders of the platform</h3>
                <div class="col-md-12 mt-3">
                    <div class="row justify-content-evenly bg-success">
                        <div class="col-md-auto">
                            <img src="{{asset('/img/man.jpg')}}" alt="" class="pix_dir mt-3">
                            <figure>
                                <figcaption>
                                    <p class="text-center ">Felix Nwaora</p>
                                    <p class="text-center" id="pot">[ Director I ]</p>

                                </figcaption>
                            </figure>

                        </div>
                        <div class="col-md-auto">
                            <img src="{{asset('/img/man1.jpg')}}" alt="Aam festus picture" class="pix_dir mt-3">
                            <figure>
                                <figcaption>
                                    <p class="text-center">Benjamin Beke</p>
                                    <p class="text-center" id="pot">[ Director II ]</p>
                                </figcaption>
                            </figure>

                        </div>
                        <div class="col-md-auto">
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

            </div>
            <div class="col-md-12 col-sm-12">
                <div class="col-md-12 mt-3">
                    <div class="row justify-content-evenly bg-success">
                        <div class="col-md-auto">
                            <img src="{{asset('/img/man.jpg')}}" alt="" class="pix_dir mt-3">
                            <figure>
                                <figcaption>
                                    <p class="text-center ">Felix Nwaora</p>
                                    <p class="text-center" id="pot">[ Stakeholder ]</p>
                                </figcaption>
                            </figure>

                        </div>
                        <div class="col-md-auto">
                            <img src="{{asset('/img/man1.jpg')}}" alt="Aam festus picture" class="pix_dir mt-3">
                            <figure>
                                <figcaption>
                                    <p class="text-center">Benjamin Beke</p>
                                    <p class="text-center" id="pot">[ Stakeholder ]</p>
                                </figcaption>
                            </figure>

                        </div>
                        <div class="col-md-auto">
                            <img src="{{asset('/img/man1.jpg')}}" alt="Aam festus picture" class="pix_dir mt-3">
                            <figure>
                                <figcaption>
                                    <p class="text-center">Mr Daniel</p>
                                    <p class="text-center" id="pot">[ Stakeholder ]</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-auto">
                            <img src="{{asset('/img/man1.jpg')}}" alt="Aam festus picture" class="pix_dir mt-3">
                            <figure>
                                <figcaption>
                                    <p class="text-center">Mr Daniel</p>
                                    <p class="text-center" id="pot"></p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

@endsection
