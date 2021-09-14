@extends('layouts.auth')

@section('content')

    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 col-xl-6 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background: url(/adminpage/assets/img/dogs/bg_3.jpg);background-size: cover;"></div>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <div class="p-5" style="border-radius: 25px;">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group"><input class="form-control form-control-user" type="text" id="exampleFirstName" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group"><input class="form-control form-control-user" type="email" id="exampleInputEmail-2" aria-describedby="emailHelp" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password"  name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password"></div>
                                </div><button class="btn btn-primary btn-block text-white btn-user" type="submit" style="
                                background: #f85959;border-color: rgb(255, 255, 255);border-top-color: rgb(255,;border-right-color: 255,;border-bottom-color: 255);border-left-color: 255,;"> {{ __('Register') }}</button>
                                <hr>
                                <hr>
                            </form>
                            <div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div>
                            <div class="text-center"><a class="small" href="login.html">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <body id="register_bg">

    <nav id="menu" class="fake_menu"></nav>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->

    <div id="login">
        <aside>
            <figure>
                <a href="index.html"><img src="img/logo_sticky.png" width="155" height="36" data-retina="true" alt="" class="logo_sticky"></a>
            </figure>
            <form action="{{ route('register') }}" method="post" autocomplete="off">
                <div class="form-group">
                    <label>Your Name</label>
                    <input class="form-control" type="text" name="name" value="{{ old('name') }}" required>
                    <i class="ti-user"></i>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Your Email</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" required>
                    <i class="icon_mail_alt"></i>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Your password</label>
                    <input class="form-control" type="password" id="password1" name="password" required>
                    <i class="icon_lock_alt"></i>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Confirm password</label>
                    <input class="form-control" type="password" id="password2" name="password_confirmation" required>
                    <i class="icon_lock_alt"></i>
                </div>
                <div id="pass-info" class="clearfix"></div>
                <input class="btn_1 rounded full-width add_top_30" type="submit" value="Register Now!"/>
                <div class="text-center add_top_10">Already have an acccount? <strong><a href="{{ route('Login') }}">Sign In</a></strong></div>
            </form>
            <div class="copy">Crée par Hanane Jabou</div>
        </aside>
    </div>
    <!-- /login -->
@endsection
