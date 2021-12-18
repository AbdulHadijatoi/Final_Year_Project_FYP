@extends('layouts.account')

@section('title', 'Forgot Password')

@section('content')
    <main class="full-width login-content-bg" style="min-height: calc(100vh - 140px);">
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->

        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form id="forgot_password_form" method="POST" action="{{ route('password.email') }}" class="content account-box align-in-center flex-column light-text sm_border-none">
        @csrf

            <div class="mb-4 font-size-13 w300 text-center">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <div class="account-field hover-effect">
                <img src="{{ asset('assets/svg-icons/svg_user.svg') }}" width="20">
                <input type="email" name="email" placeholder="Email address" value="{{ old('email') }}" required autofocus>
            </div>
            <span class="text-danger text-small"> @error('email'){{ $message }} @enderror</span>

            <input type="submit" value="Email Password Reset Link" class="btn-account hover-effect">

            <hr class="full-width opacity-2 mt-50 mb-50">

            <div class="min-w350 justify-content-between light-text font-weight-600">
                <hr class="opacity-9 m-10 w70 h1">
                <span class="font-size-14">Don't have an account?</span>
                <hr class="opacity-9 m-10 w70 h1">
            </div>

            <a href="{{ route('register') }}" class="btn-account hover-effect">Sign Up</a>


        </form>
    </main>
@endsection
