@extends('layouts.app')
@section('title','Register')
@section('content')
<div class="container mt-70">
    <div class="row">

        <div class="">
            @if($message = Session::get('errormsg'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if($message = Session::get('msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session()->has('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>

        <!--login area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form">
                <h2>login</h2>
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <p>
                        <label>Email <span>*</span></label>
                        <input id="name" type="email" class="form-control @error('user_email') is-invalid @enderror" name="user_email" value="{{ old('user_email') }}" autocomplete="user_email" autofocus placeholder="Email">
                        @error('user_email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </p>
                    <p>
                        <label>Passwords <span>*</span></label>
                        <input id="pass" type="password" class="form-control @error('user_password') is-invalid @enderror" name="user_password" autocomplete="current-user_password" placeholder="Password">
                        @error('user_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </p>
                    <div class="login_submit">
                        <a href="#">Lost your password?</a>
                        <label for="remember">
                            <!-- <input id="remember" type="checkbox"> -->
                            <!-- Remember me -->
                        </label>
                        <button type="submit">login</button>

                    </div>

                </form>
            </div>
        </div>
        <!--login area start-->

        <!--register area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form register">
                <h2>Register</h2>
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                                <label>First Name <span>*</span></label>
                                <input id="first_name" placeholder="First Name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" autocomplete="first_name">
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </p>
                        </div>

                        <div class="col-sm-6">
                            <p>
                                <label>Last Name <span>*</span></label>
                                <input id="last_name" placeholder="Last Name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" autocomplete="last_name">
                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </p>
                        </div>
                    </div>

                    <p>
                        <label>Email address <span>*</span></label>
                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </p>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>
                                <label>Mobile Number <span>*</span></label>
                                <input id="mobile" placeholder="Mobile no" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" autocomplete="mobile">
                                @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p>
                                <label>Referral Mobile Number <span>*</span></label>
                                <input id="mobile" placeholder="Referral mobile no" type="text" class="form-control @error('ref_mobile') is-invalid @enderror" name="ref_mobile" value="{{ old('ref_mobile') }}" autocomplete="ref_mobile">
                                @error('ref_mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </p>
                        </div>
                    </div>

                    <p>
                        <label>Passwords <span>*</span></label>
                        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </p>
                    <div class="login_submit">
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
        <!--register area end-->
    </div>
</div>
@endsection