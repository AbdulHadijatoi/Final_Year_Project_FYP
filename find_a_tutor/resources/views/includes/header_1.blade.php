<header class="h70 justify-content-center align-items-center footer-dark-bg">
    <div class="_85-width justify-content-between">
        <div class="align-in-center for-mobile">
            <input class="hidden" type="checkbox" id="mobileMenuCheckbox" onchange="toggleDisplay(this, 'mobileMenu')">
            <img id="btnMobileMenu" src="{{ asset('assets/svg-icons/svg_bars_questions.svg') }}" width="24" onclick="clickTarget('mobileMenuCheckbox');">
            <div id="mobileMenu" class="mobile-menu position-absolute top-70 left-0 full-height">
                <ul class="nav-list" id="mobileNavList">
                </ul>
            </div>
        </div>
        <a href="{{ url('/') }}" class="align-in-center"><img class="logo" src="{{ asset('assets/logo_light.svg') }}" height="20"></a>
        <div class="position-relative align-in-center">
            <ul id="navList" class="align-in-center for-desktop">
                <li class="{{ (request()->is('/')) ? 'active' : '' }}">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="{{ (request()->is('listing*')) ? 'active' : '' }}">
                    <a href="{{url('listing')}}">Find Tutor</a>
                </li>
                
                @auth @else
                <li>
                    <a href="{{ route('register') }}">Become Tutor</a>
                </li>
                <li>
                    <a href="{{ route('login') }}">Sign in</a>
                </li>
                <li class="highlight">
                    <a href="{{ route('register') }}">Register</a>
                </li>
                @endauth
            </ul>
            <input class="hidden" type="checkbox" id="profileMenuCheckbox" onchange="toggleDisplay(this, 'profileMenu')">
            @auth
            <img class="ac-icon cursor-pointer" id="profileMenuButton" src="{{ asset('assets/svg-icons/svg_empty-ac.svg') }}" onclick="clickTarget('profileMenuCheckbox');">
            <div id="profileMenu" class="profile-menu position-absolute top-50 right-0 border-01-white">
                <ul class="nav-list">
                    <li>
                        @if(auth()->user()->role == 'Admin')
                            <a href="{{ url('admin/dashboard') }}">
                        @elseif(auth()->user()->role == 'Student')
                            <a href="{{ url('student/dashboard') }}">
                        @elseif(auth()->user()->role == 'Teacher')
                            <a href="{{ url('tutor/dashboard') }}">
                        @endif
                            <img class="" src="{{ asset('assets/svg-icons/svg_profile.svg') }}">
                            <span class="links_name">Dashbord</span>
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout')}}">
                            @csrf
                            <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                <img class="" src="{{ asset('assets/svg-icons/svg_logout.svg') }}">
                                <span class="links_name">Logout</span>
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
            @endauth
        </div>
    </div>
</header>