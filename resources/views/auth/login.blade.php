@extends('frontend.layouts.auth_layout')

@section('content')
    <body id="login_bg">

    <nav id="menu" class="fake_menu"></nav>

    <div id="preloader">
        <div data-loader="circle-side"></div>
    </div>
    <!-- End Preload -->

    <div id="login">
        <aside>
            <figure>
                <a href="/"><img src="/frontend/img/logo_sticky.png" width="155" height="36" data-retina="true" alt="" class="logo_sticky"></a>
            </figure>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="access_social">
                    <a href="#0" class="social_bt facebook">Login with Facebook</a>
                    <a href="#0" class="social_bt google">Login with Google</a>
                    <a href="#0" class="social_bt linkedin">Login with Linkedin</a>
                </div>
                <div class="divider"><span>Or</span></div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email">
                    <i class="icon_mail_alt"></i>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="">
                    <i class="icon_lock_alt"></i>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="clearfix add_bottom_30">
                    <div class="checkboxes float-left">
                        <label class="container_check">Remember me
                            <input type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="float-right mt-1"><a id="forgot" href="{{ route('password.request') }}">Forgot Password?</a></div>
                </div>
                <input type="submit" class="btn_1 rounded full-width" value="Login"/>
                <div class="text-center add_top_10">New to TravelGo? <strong><a href="{{ route('register') }}">Sign up!</a></strong></div>
            </form>
            <div class="copy">Créé par Hanane Jabou</div>
        </aside>
    </div>
    <!-- /login -->
@endsection

