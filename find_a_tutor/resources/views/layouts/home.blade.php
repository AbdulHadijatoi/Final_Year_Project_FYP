<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Tution Made Easy' }}</title>
        <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <head>
<body>

    @include('includes.header_1')

    @yield('content')

    <footer>
        <div class="content">
            <div class="link-boxes">
                <ul class="box">
                    <li class="link_name">
                        <a href="home.html"><img src="{{ asset('assets/logo_footer.svg') }}" height="24" class="footer-logo"></a>
                    </li>
                    <p class="footer-text font-weight-300 font-size-13">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                    <br>
                    <li>
                        <a class="align-items-center" href="tel:+923362735187"><img class="m-10" src="{{ asset('assets/svg-icons/svg_phone.svg') }}" width="20"><span class="font-weight-800 footer-text">0336 2735187</span></a>
                    </li>
                </ul>
                <ul class="box">
                    <li class="link_name">Popular Subjects</li>
                    <li><a href="#">Maths Tutor</a></li>
                    <li><a href="#">English us Tutor</a></li>
                    <li><a href="#">Physics Tutor</a></li>
                    <li><a href="#">Chemistry Tutor</a></li>
                    <li><a href="#">Biology Tutor</a></li>
                    <li><a href="#">It Tutor</a></li>
                    <li><a href="#">History Tutor</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Popular Locations</li>
                    <li><a href="#">Larkana Tutor</a></li>
                    <li><a href="#">Sukkur Tutor</a></li>
                    <li><a href="#">Karachi Tutor</a></li>
                    <li><a href="#">Islamabad Tutor</a></li>
                    <li><a href="#">Lahore Tutor</a></li>
                    <li><a href="#">Hyderabad Tutor</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Popular Courses</li>
                    <li><a href="#">Maths</a></li>
                    <li><a href="#">Programming</a></li>
                    <li><a href="#">English</a></li>
                </ul>
                <ul class="box">
                    <li class="link_name">Courses</li>
                    <li><a href="#">HTML & CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                    <li><a href="#">Photography</a></li>
                    <li><a href="#">Photoshop</a></li>
                </ul>
            </div>
        </div>
        <div class="bottom-details">
            <div class="bottom_text">
                <span class="copyright_text">@ 2021 Tuition Made Easy - All Rights Reserved</span>
                <span class="policy_terms">
                <a href="#">Privacy Policy</a>
                <a href="#">Copyright</a>
                <a href="#">Terms of Service</a>
                </span>
            </div>
        </div>
    </footer>

    <script src="{{asset('assets/js/home.js')}}"></script>
</body>

</html>