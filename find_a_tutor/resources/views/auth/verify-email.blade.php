@extends('layouts.account')

@section('title', 'Verify Email')

@section('content')
    <main class="full-width login-content-bg" style="min-height: calc(100vh - 140px);">

        <div class="mb-4 font-size-13 w300">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-size-13 text-green w300">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif    

        <form method="POST" action="{{ route('verification.send') }}" class="content account-box align-in-center flex-column light-text sm_border-none">
            @csrf

            <input type="submit" value="Resend Verification Email" class="btn-account hover-effect">
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <input type="submit" value="Logout" class="btn-account hover-effect">
        </form>
    </main>
@endsection