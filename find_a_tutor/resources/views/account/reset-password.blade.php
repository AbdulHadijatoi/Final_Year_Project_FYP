@extends('layouts.account')

@section('content')
    <main class="full-width login-content-bg" style="min-height: calc(100vh - 140px);">
        <form id="reset_password_form" action="" method="POST" class="content account-box align-in-center flex-column light-text sm_border-none">

            <h3 class="font-weight-600 mb-10">Reset Password</h3>

            <div class="account-field hover-effect">
                <img src="{{ asset('assets/svg-icons/svg_pass.svg') }}" width="20">
                <input type="password" name="password" placeholder="Password">
            </div>

            <div class="account-field hover-effect">
                <img src="{{ asset('assets/svg-icons/svg_pass.svg') }}" width="20">
                <input type="password" name="cpassword" placeholder="Confirm Password">
            </div>

            <input type="button" value="Reset Password" class="btn-account hover-effect">

            <hr class="full-width opacity-2 mt-50 mb-50">

            <div class="min-w350 justify-content-between light-text font-weight-600">
                <hr class="opacity-9 m-10 w70 h1">
                <span class="font-size-14">Don't have an account?</span>
                <hr class="opacity-9 m-10 w70 h1">
            </div>

            <a href=" {{ url('signup') }}" class="btn-account hover-effect">Sign Up</a>


        </form>
    </main>
@endsection