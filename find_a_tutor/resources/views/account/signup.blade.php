@extends('layouts.account')

@section('content')
<<<<<<< Updated upstream
    <main class="full-width login-content-bg" style="min-height: calc(100vh - 140px);">
        <form id="signup_form" action="" method="POST" class="content account-box align-in-center flex-column light-text sm_border-none">
=======
    <main class="full-width login-content-bg flex-column" style="min-height: calc(100vh - 140px);">
            @if(Session::get('success'))
                <div class="full-width text-center bg-green text-white p-10">
                    {{ Session::get('success') }}
                </div>
            @endif
                
            @if(Session::get('fail'))
                <div class="full-width text-center bg-red text-white p-10">
                    {{ Session::get('fail') }}
                </div>
            @endif
            
        <form id="signup_form" action="{{ route('account.save') }}" method="POST" class="content account-box align-in-center flex-column light-text sm_border-none">
        
            @csrf
            <h3 class="font-weight-600 mb-10">Create a free account</h3>
>>>>>>> Stashed changes

            <h3 class="font-weight-600 mb-10">Create a free account</h3>
            <div class="account-field hover-effect">
                <img src=" {{ asset('assets/svg-icons/svg_user.svg') }}" width="20">
                <input type="email" name="email" placeholder="Username or Email">
            </div>

            <div class="account-field hover-effect">
                <img src=" {{ asset('assets/svg-icons/svg_pass.svg') }}" width="20">
                <input type="password" name="password" placeholder="Password">
            </div>

            <div class="account-field hover-effect">
                <img src=" {{ asset('assets/svg-icons/svg_pass.svg') }}" width="20">
                <input type="password" name="cpassword" placeholder="Confirm Password">
            </div>
            <div class="account-field hover-effect">
                <select name="role">
                    <option selected disabled>Are you Student or Teacher?</option>
                    <option>Student</option>
                    <option>Teacher</option>
                </select>
            </div>

            <input type="button" value="Sign Up" class="btn-account hover-effect">

            <hr class="full-width opacity-2 mt-30 mb-50">

            <div class="min-w350 justify-content-between light-text font-weight-600">
                <hr class="opacity-9 m-10 w70 h1">
                <span class="font-size-14">Already have an account?</span>
                <hr class="opacity-9 m-10 w70 h1">
            </div>

            <a href="{{ asset('login') }}" class="btn-account hover-effect">Log In</a>


        </form>
    </main>
@endsection