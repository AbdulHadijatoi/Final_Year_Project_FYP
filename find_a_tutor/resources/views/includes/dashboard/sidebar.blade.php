<div class="sidebar open">
    <div class="logo-details border-bottom-01-white">
        <img class="" src="{{ asset('assets/logo_light.svg')}}">
    </div>
    <ul class="nav-list" id="navList">
        <li>
            <a class="active" href="{{ url('tutor/dashboard')}}">
                <img class="" src="{{ asset('assets/svg-icons/svg_dashboard.svg')}}">
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="{{ url('tutor/courses')}}">
                <img class="" src="{{ asset('assets/svg-icons/svg_subject_a.svg')}}">
                <span class="links_name">Courses</span>
            </a>
            <span class="tooltip">Courses</span>
        </li>
        <li>
            <a href="{{ url('tutor/add-course')}}">
                <img class="" src="{{ asset('assets/svg-icons/svg_create_plus.svg')}}">
                <span class="links_name">Add Course</span>
            </a>
            <span class="tooltip">Add Course</span>
        </li>
        <li>
            <a href="{{ url('tutor/students')}}">
                <img class="" src="{{ asset('assets/svg-icons/svg_graduation_students.svg')}}">
                <span class="links_name">Students</span>
            </a>
            <span class="tooltip">Students</span>
        </li>
        <li>
            <a href="{{ url('tutor/quizes')}}">
                <img class="" src="{{ asset('assets/svg-icons/svg_quiz.svg')}}">
                <span class="links_name">Quizes</span>
            </a>
            <span class="tooltip">Quizes</span>
        </li>
        <li>
            <a href="{{ url('tutor/create-quiz')}}">
                <img class="" src="{{ asset('assets/svg-icons/svg_create_plus.svg')}}">
                <span class="links_name">Create Quiz</span>
            </a>
            <span class="tooltip">Create Quiz</span>
        </li>
        <li>
            <a href="{{ url('tutor/profile')}}">
                <img class="" src="{{ asset('assets/svg-icons/svg_profile.svg')}}">
                <span class="links_name">Profile</span>
            </a>
            <span class="tooltip">Profile</span>
        </li>
        <li>
            <a href="{{ url('tutor/logout')}}">
                <img class="" src="{{ asset('assets/svg-icons/svg_logout.svg')}}">
                <span class="links_name">Logout</span>
            </a>
            <span class="tooltip">Logout</span>
        </li>
    </ul>
</div>