@extends('layouts.master')

@section('content')
    <main class="d-flex w-100 mb-3">
        <div class="container d-flex flex-column">
            <div class="row vh-100">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                    <div class="d-table-cell align-middle">

                        <div class="text-center mt-1">
                            <p class="lead">

                            </p>
                        </div>

                        <div class="card" id="login">
                            <div class="card-body">
                                <div class="m-sm-3">
                                    <form method="post" action="{{route('login')}}">
                                        @csrf

                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input class="form-control form-control-lg @error('email') is-invalid @enderror" type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" />

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control form-control-lg @error('password') is-invalid @enderror"  type="password" name="password" placeholder="Enter your password"/>

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror

                                        </div>

                                        <div>
                                            <div class="form-check align-items-center">
                                                <input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me" name="remember-me" unchecked>
                                                <label class="form-check-label text-small" for="customControlInline">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="d-grid gap-2 mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary ">Sign in</button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mb-4 mt-3">
                            Don't have an account? <a href="{{route('register')}}">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
