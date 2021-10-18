<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Tution Made Easy' }}</title>
        <link rel="stylesheet" href="{{ asset('assets/css/panel.css')}}">
        
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    <head>
<body>
    <div class="sidebar open">
        <div class="logo-details border-bottom-01-white">
            <img class="" src="{{asset('assets/logo_light.svg')}}">
        </div>
        <ul class="nav-list" id="navList">
        
        @if(request()->is('tutor/*'))

            <li>
                <a class="{{ (request()->is('tutor/dashboard*')) ? 'active' : '' }}" href="{{ url('tutor/dashboard')}}">
                    <img class="" src="{{ asset('assets/svg-icons/svg_dashboard.svg')}}">
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a class="{{ (request()->is('tutor/courses*')) ? 'active' : '' }}" href="{{ url('tutor/courses')}}">
                    <img class="" src="{{ asset('assets/svg-icons/svg_subject_a.svg')}}">
                    <span class="links_name">Courses</span>
                </a>
                <span class="tooltip">Courses</span>
            </li>
            <li>
                <a class="{{ (request()->is('tutor/add-course*')) ? 'active' : '' }}" href="{{ url('tutor/add-course')}}">
                    <img class="" src="{{ asset('assets/svg-icons/svg_create_plus.svg')}}">
                    <span class="links_name">Add Course</span>
                </a>
                <span class="tooltip">Add Course</span>
            </li>
            <li>
                <a class="{{ (request()->is('tutor/students*')) ? 'active' : '' }}" href="{{ url('tutor/students')}}">
                    <img class="" src="{{ asset('assets/svg-icons/svg_graduation_students.svg')}}">
                    <span class="links_name">Students</span>
                </a>
                <span class="tooltip">Students</span>
            </li>
            <li>
                <a class="{{ (request()->is('tutor/quizes*')) ? 'active' : '' }}" href="{{ url('tutor/quizes')}}">
                    <img class="" src="{{ asset('assets/svg-icons/svg_quiz.svg')}}">
                    <span class="links_name">Quizes</span>
                </a>
                <span class="tooltip">Quizes</span>
            </li>
            <li>
                <a class="{{ (request()->is('tutor/create-quiz*')) ? 'active' : '' }}" href="{{ url('tutor/create-quiz')}}">
                    <img class="" src="{{ asset('assets/svg-icons/svg_create_plus.svg')}}">
                    <span class="links_name">Create Quiz</span>
                </a>
                <span class="tooltip">Create Quiz</span>
            </li>
            <li>
                <a class="{{ (request()->is('tutor/profile*')) ? 'active' : '' }}" href="{{ url('tutor/profile')}}">
                    <img class="" src="{{ asset('assets/svg-icons/svg_profile.svg')}}">
                    <span class="links_name">Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li>
        @elseif(request()->is('student/*'))
            <li>
                <a class="{{ (request()->is('student/dashboard*')) ? 'active' : '' }}" href="{{ url('student/dashboard')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_dashboard.svg')}}">
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <li>
                <a class="{{ (request()->is('student/courses*')) ? 'active' : '' }}" href="{{ url('student/courses')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_view_records.svg')}}">
                    <span class="links_name">View Courses</span>
                </a>
                <span class="tooltip">View Courses</span>
            </li>

            <li>
                <a class="{{ (request()->is('student/enroll-course*')) ? 'active' : '' }}" href="{{ url('student/enroll-course')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_create_plus.svg')}}">
                    <span class="links_name">Enroll Course</span>
                </a>
                <span class="tooltip">Enroll Course</span>
            </li>
            
            <li>
                <a class="{{ (request()->is('student/quizes*')) ? 'active' : '' }}" href="{{ url('student/quizes')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_view_records.svg')}}">
                    <span class="links_name">View Quizes</span>
                </a>
                <span class="tooltip">View Quizes</span>
            </li>
            
            <li>
                <a class="{{ (request()->is('student/profile*')) ? 'active' : '' }}" href="{{ url('student/profile')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_profile.svg')}}">
                    <span class="links_name">Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li>
        @else
            <li>
                <a class="{{ (request()->is('admin/dashboard*')) ? 'active' : '' }}" href="{{ url('admin/dashboard')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_dashboard.svg')}}">
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a class="{{ (request()->is('admin/add-tutor*')) ? 'active' : '' }}" href="{{ url('admin/add-tutor')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_view_records.svg')}}">
                    <span class="links_name">Add Tutor</span>
                </a>
                <span class="tooltip">Add Tutor</span>
            </li>
            <li>
                <a class="{{ (request()->is('admin/tutors*')) ? 'active' : '' }}" href="{{ url('admin/tutors')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_view_records.svg')}}">
                    <span class="links_name">View Tutors</span>
                </a>
                <span class="tooltip">View Tutors</span>
            </li>
            <li>
                <a class="{{ (request()->is('admin/students*')) ? 'active' : '' }}" href="{{ url('admin/students')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_create_plus.svg')}}">
                    <span class="links_name">View Students</span>
                </a>
                <span class="tooltip">View Students</span>
            </li>
        @endif
            <li>
                <a href="{{ url('account/logout')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_logout.svg')}}">
                    <span class="links_name">Logout</span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
    </div>
    
    <section class="home-section full-width">
        <header class="header h80 border-bottom-01-white justify-content-center align-items-center">
            <div class="_85-width justify-content-end sm_justify-content-between">
                <div class="mobile-view-elem align-in-center display-none">
                    <input class="hidden" type="checkbox" id="mobileMenuCheckbox" onchange="toggleDisplay(this, 'mobileMenu')">
                    <img id="btnMobileMenu" src="{{ asset('assets/svg-icons/svg_bars_questions.svg')}} " width="24" onclick="clickTarget('mobileMenuCheckbox');">
                    <div id="mobileMenu" class="mobile-menu position-absolute top-79 left-0 full-height">
                        <ul class="nav-list" id="mobileNavList">
                        </ul>
                    </div>
                </div>
                <div class="mobile-view-elem logo-details display-none">
                    <img class="" src="{{ asset('assets/logo_light.svg')}}">
                </div>
                <div class="position-relative">
                    <input class="hidden" type="checkbox" id="profileMenuCheckbox" onchange="toggleDisplay(this, 'profileMenu')">
                    <div id="profileMenuButton" class="ac-icon profile-icon" onclick="clickTarget('profileMenuCheckbox');">MU</div>

                    <div id="profileMenu" class="profile-menu position-absolute top-60 right-0">
                        <ul class="nav-list">
                            <li>
                                <a href="{{url('account/logout')}}">
                                    <img class="" src="{{ asset('assets/svg-icons/svg_logout.svg')}}">
                                    <span class="links_name">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>
        @yield('content')
    </section>

    <footer class="header h80 border-top-01-white justify-content-center align-items-center text-light">
        <p>@ 2121 Tution Made Easy - All Rights Reserved</p>
    </footer>

    @include('includes.modals')
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>

</html>