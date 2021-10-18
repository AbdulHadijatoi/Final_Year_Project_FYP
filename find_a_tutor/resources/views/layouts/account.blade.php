<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Tution Made Easy' }}</title>
        <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/account.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <head>
<body>

    <header class="login-bg-hf full-width justify-content-center">
        <a href="{{url('/')}}" class="_75-width h70 sm_90-width justify-content-between align-items-center opacity-8"><img src="{{ asset('assets/logo_light.svg') }}" height="20"></a>
    </header>

    @yield('content')

    @include('includes.modals')
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>