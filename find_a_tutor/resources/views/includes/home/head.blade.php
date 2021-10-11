
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Tution Made Easy' }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">

    @if($title == 'Home')
        <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    @endif

    @if($title == 'Listing')
        <link rel="stylesheet" href="{{ asset('assets/css/listing.css') }}">
    @endif

    @if($title == 'Tutor Profile' || $title == 'Student Profile')
        <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
    @endif

    @if($title == 'Forgot Password' || $title == 'Login' || $title == 'Reset Password' || $title == 'Signup' )
        <link rel="stylesheet" href="{{ asset('assets/css/account.css') }}">
    @endif

</head>