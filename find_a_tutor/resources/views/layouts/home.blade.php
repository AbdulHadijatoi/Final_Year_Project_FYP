<!DOCTYPE html>
<html>

@include('includes.home.head')

<body>
@if($title == 'Forgot Password' || $title == 'Login' || $title == 'Reset Password' || $title == 'Signup' )
    @include('includes.home.small-header')
@else
    @include('includes.home.header')
@endif


@yield('content')

@if($title == 'Home' || $title == "Listing")
    @include('includes.home.footer')
@endif

<script src="assets/js/home.js"></script>
@if($title == 'Tutor Profile' || $title == "Student Profile")
    @include('includes.home.small-footer')
    <script src="{{ asset('assets/js/profile.js') }}"></script>
@endif

@if($title == 'Forgot Password' || $title == 'Login' || $title == 'Reset Password' || $title == 'Signup' )
    @include('includes.home.small-footer')
@endif
</body>

</html>