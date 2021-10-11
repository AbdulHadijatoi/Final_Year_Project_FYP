<!DOCTYPE html>
<html lang="en">

@include('includes.dashboard.head')
<body>

    
    @include('includes.dashboard.sidebar')
    <section class="home-section full-width">
        @include('includes.dashboard.header')
        @yield('content')
    </section>

    @include('includes.dashboard.footer')
    <script src="assets/js/panel.js"></script>

</body>

</html>