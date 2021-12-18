<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') - Tution Made Easy</title>
        <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <head>
<body>

    @if(!request()->is('student/take-quiz*'))
        @include('includes.header_1')
    @endif
    @yield('content')

    @if(!request()->is('student/take-quiz*'))
    <footer>
        <div class="bottom-details border-t-01">
            <div class="bottom_text sm_flex-column sm_align-items-center">
                <span class="copyright_text">@ 2021 Tuition Made Easy - All Rights Reserved</span>
                <span class="policy_terms">
                    <a href="#">Privacy Policy</a>
                    <a href="#"> Copyright</a>
                    <a href="#"> Terms of Service</a>
                </span>
            </div>
        </div>
    </footer>
    @endif
    
    @include('includes.modals')
    <script src="{{asset('assets/js/app.js')}}"></script>
    <script src="{{asset('assets/js/ajax-functions.js')}}"></script>
</body>

</html>