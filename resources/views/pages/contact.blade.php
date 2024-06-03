@extends('layouts.master')
@section('title','contact')
@section('content')
    <div class="container-fluid border border-light">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 bg-black">
                <div class="p3">
                    <h4 class="text-center p-3" id="contact_details">Contact Details</h4>
                    <p class="text-center"><b><small>We would like to hear from you.!</small></b></p>
                    <ul class="ul_font">
                        <li class="li_font"><i class="fa fa-map-marker fa-2x"></i> Abuja Nigeria</li>
                        <li class="li_font"><i class="fa fa-phone fa-2x"></i> +2347032146138</li>
                        <li class="li_font"><i class="fa fa-envelope fa-2x"></i> ushabeks@gmail.com</li>
                        <li class="li_font"><i class="fa fa-location-arrow fa-2x"></i> Federal Housing Authority, Lugbe Abuja.</li>
                    </ul>

                </div>
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <div class="panel">
                            <div class="panel-body">
                                <ul class="ul_stars">
                                    <li class="star"><i class="fa fa-star "></i></li>
                                    <li class="star"><i class="fa fa-star"></i></li>
                                    <li class="star"><i class="fa fa-star"></i></li>
                                </ul>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- Default form register -->
            </div>
             <div class="col-md-6 col-md-offset-2 bg-black">
                 <!-- Default form register -->
                 <form class="text-center border border-light p-3" action="#!" method="#">

                     <p class="h4 mb-4" id="in_touch">Get in touch</p>

                     <div class="form-row mb-4">
                         <div class="col">
                             <!-- First name -->
                             <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="Full name">
                         </div>

                     </div>

                     <!-- E-mail -->
                     <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">


                     <input type="text" id="defaultRegisterPhonePassword" class="form-control" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                     <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                         Feel free to ask us any question
                     </small>

                     <!-- Password -->
                     <textarea class="form-control" id="form4Example3" placeholder="Message" rows="4"></textarea>
                     <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">

                     </small>

                     <!-- Sign up button -->
                     <button class="btn btn-primary my-4 btn-block " type="submit">Send Message</button>

                     <!-- Social register -->
                     <p>You can contact us via social media</p>

                     <a href="https://www.facebook.com/benjamin.beke.5" class="mx-2" role="button"><i class="fab fa-facebook"></i></a>
                     <a href="#" class="mx-2" role="button"><i class="fab fa-twitter"></i></a>
                     <a href="https://www.linkedin.com/in/beke-benjamin-94b98a23b" class="mx-2" role="button"><i class="fab fa-linkedin"></i></a>
                     <a href="#" class="mx-2" role="button"><i class="fab fa-github"></i></a>
                     <hr>
                 </form>
                 <!-- Default form register -->
            </div>

        </div>

    </div>
@endsection

