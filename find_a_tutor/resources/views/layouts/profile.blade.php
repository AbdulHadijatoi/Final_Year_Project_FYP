<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Tution Made Easy' }}</title>
        <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
    <head>
<body>

    @if(!request()->is('student/take-quiz*'))
        @include('includes.header_1')
    @endif
    @yield('content')


    @if(!request()->is('student/take-quiz*'))
    <footer>
        <div class="bottom-details border-t-01">
            <div class="bottom_text">
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
    
    <script src="{{ asset('assets/js/profile.js') }}"></script>
</body>

</html>