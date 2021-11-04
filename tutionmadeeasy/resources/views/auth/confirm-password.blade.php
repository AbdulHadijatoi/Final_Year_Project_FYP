@extends('layouts.account')

@section('title', 'Confirm Password')

@section('content')
    <main class="full-width login-content-bg" style="min-height: calc(100vh - 140px);">

        <div class="mb-4 font-size-13 w300">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.confirm') }}" class="content account-box align-in-center flex-column light-text sm_border-none">
            @csrf

            <div class="account-field hover-effect">
                <img src=" {{ asset('assets/svg-icons/svg_pass.svg') }}" width="20">
                <input type="password" name="password" placeholder="Password" required autocomplete="current-password">
            </div>
            <span class="text-danger text-small"> @error('password'){{ $message }} @enderror</span>

            <input type="submit" value="Confirm" class="btn-account hover-effect">
        </form>

    </main>
@endsection