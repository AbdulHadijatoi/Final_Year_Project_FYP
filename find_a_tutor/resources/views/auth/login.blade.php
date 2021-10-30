@extends('layouts.account')

@section('content')
    <main class="full-width login-content-bg" style="min-height: calc(100vh - 140px);">
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form id="login_form" method="POST" action="{{ route('login') }}" class="content account-box align-in-center flex-column light-text sm_border-none">
            @csrf

            <h3 class="font-weight-600 mb-10">Log in to Tution Made Easy</h3>

            <div class="account-field hover-effect">
                <img src="{{ asset('assets/svg-icons/svg_user.svg') }}" width="20">
                <input type="email" name="email" :value="old('email')" required autofocus placeholder="Username or Email">
            </div>

            <div class="account-field hover-effect">
                <img src="{{asset('assets/svg-icons/svg_pass.svg')}}" width="20">
                <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
            </div>

            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>

            <input type="submit" value="Log in" class="btn-account hover-effect">
            <a href="{{ route('password.request') }}" class="text-decoration-underline font-weight-600 font-size-16 hover-effect mt-20">Forgot Password</a>


            <hr class="full-width opacity-2 mt-50 mb-50">

            <div class="min-w350 justify-content-between light-text font-weight-600">
                <hr class="opacity-9 m-10 w70 h1">
                <span class="font-size-14">Don't have an account?</span>
                <hr class="opacity-9 m-10 w70 h1">
            </div>

            <a href="{{ url('register') }}" class="btn-account hover-effect">Sign Up</a>


        </form>
    </main>
@endsection
