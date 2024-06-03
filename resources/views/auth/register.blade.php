@extends('layouts.master')
@section('content')
   <div class="container-fluid">
       <div class="row justify-content-center bg-white">
           <div class="col-md-4  mt-2 mb-3">
               <!-- Default form register -->
               <div class="card">
                   <div class="card-body">
                       <form class="text-center p-4" action="{{route('register')}}" method="post">
                           @csrf
                           <p class="h4 mb-3">Sign up</p>

                           <div class="form-row mb-4">
                               <div class="col">
                                   <!-- First name -->

                                   <input type="text" id="defaultRegisterFormFirstName" name="name" class="form-control @error('name') is-invalid @enderror " placeholder="Full Name" value="{{ old('name') }}" required autocomplete="name">
                                   @error('name')
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                   @enderror

                               </div>

                           </div>

                           <!-- E-mail -->
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                           @enderror
                           <input type="email" id="defaultRegisterFormEmail" name="email" class="form-control mb-3 @error('email') is-invalid @enderror" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email">
                           @error('email')

                       <!--mobile number -->
                           <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                           @enderror
                           <input type="tel" id="defaultRegisterFormPhone" name="phone" class="form-control mb-3 @error('phone') is-invalid @enderror" placeholder="Mobile Number" value="{{ old('phone') }}" required autocomplete="phone">

                           <!-- Password -->
                           @error('password')
                           <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                   </span>
                           @enderror
                           <input type="password" id="defaultRegisterFormPassword" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                           <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                               At least 8 characters and 1 digit
                           </small>

                           <!-- confirm password -->

                           <input type="password" id="defaultConfirmPassword" class="form-control" name="password_confirmation" placeholder="Confirm Password" aria-describedby="defaultRegisterFormPhoneHelpBlock">
                           <small id="defaultRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">

                           </small>

                           <!-- Sign up button -->
                           <button class="btn btn-info my-4 btn-block" type="submit">Sign up</button>
                           <p>Already have an account.? <a href="{{route('login')}}"> Sign in </a> By signing up
                           you agreed to our <a href="{{url('terms')}}">Terms</a>
                           </p>

                           <hr>
                       </form>

                   </div>
               </div>
               <!-- Default form register -->

           </div>

       </div>

   </div>

@endsection
