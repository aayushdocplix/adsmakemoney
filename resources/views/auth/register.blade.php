@extends('admin.include.headerless')

@section('title')
 Register
@endsection

@section('content')
<!-- BEGIN : Main Content-->
<div class="main-content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <!--Login Page Starts-->
        <section id="login" class="auth-height">
            <div class="row full-height-vh m-0">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="card overflow-hidden">
                        <div class="card-content">
                            <div class="card-body auth-img">
                                <div class="row m-0">
                                    <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center auth-img-bg p-3">
                                        <img src="{{asset('public/app-assets/img/gallery/login.png')}}" alt="" class="img-fluid" width="300" height="230">
                                    </div>
                                    <div class="col-lg-6 col-12 px-4 py-3">
                                    <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <h4 class="mb-2 card-title">Register</h4>
                                        <p>Welcome , please Register to your account.</p>

                                            
                                                    <input id="name" type="text" class="form-control mb-2 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name">

                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                               

                                            
                                                    <input id="email" type="email" class="form-control mb-2 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                               

                                                    <input id="referral_code" type="text" class="form-control mb-2 @error('referral_code') is-invalid @enderror" name="referral_code" value="{{ old('referral_code') }}" placeholder="Please Enter Referral">

                                                    @error('referral_code')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                              

                                            
                                                    <input id="password" type="password" class="form-control mb-2 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Please Enter Password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                

                                            
                                                    <input id="password-confirm" type="password" class="form-control mb-2" name="password_confirmation" required autocomplete="new-password" placeholder="Please Confirm Password">
                                               

                                            <!-- <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Register') }}
                                                    </button>
                                                </div>
                                            </div> -->
                                            <div class="d-flex justify-content-between flex-sm-row flex-column">
                                            <a href="{{url('/login')}}" class="btn bg-light-primary mb-2 mb-sm-0">Back To Login</a>
                                            <button type="submit" class="btn btn-primary"> {{ __('Register') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Login Page Ends-->
    </div>
</div>
<!-- END : End Main Content-->
@endsection

