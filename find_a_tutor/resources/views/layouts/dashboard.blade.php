<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Tution Made Easy' }}</title>
        <link rel="stylesheet" href="{{ asset('assets/css/panel.css')}}">
        
        <link rel="stylesheet" href="{{ asset('assets/css/common.css') }}">
    <head>
<body>
    <div class="sidebar open">
        <div class="logo-details border-bottom-01-white">
            <img class="" src="{{asset('assets/logo_light.svg')}}">
        </div>
        <ul class="nav-list" id="navList">
        
        @if(str_contains($title,'Tutor'))
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
        @elseif(str_contains($title,'Student'))
            <li>
                <a class="active" href="{{ url('student/dashboard')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_dashboard.svg')}}">
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <li>
                <a href="{{ url('student/courses')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_view_records.svg')}}">
                    <span class="links_name">View Courses</span>
                </a>
                <span class="tooltip">View Courses</span>
            </li>

            <li>
                <a href="{{ url('student/enroll-course')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_create_plus.svg')}}">
                    <span class="links_name">Enroll Course</span>
                </a>
                <span class="tooltip">Enroll Course</span>
            </li>
            
            <li>
                <a href="{{ url('student/quizes')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_view_records.svg')}}">
                    <span class="links_name">View Quizes</span>
                </a>
                <span class="tooltip">View Quizes</span>
            </li>
            
            <li>
                <a href="{{ url('student/profile')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_profile.svg')}}">
                    <span class="links_name">Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li>
        @else
            <li>
                <a href="{{ url('admin/dashboard')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_dashboard.svg')}}">
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="{{ url('admin/add-tutor')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_view_records.svg')}}">
                    <span class="links_name">Add Tutor</span>
                </a>
                <span class="tooltip">Add Tutor</span>
            </li>
            <li>
                <a href="{{ url('admin/tutors')}}">
                    <img class="" src="{{asset('assets/svg-icons/svg_view_records.svg')}}">
                    <span class="links_name">View Tutors</span>
                </a>
                <span class="tooltip">View Tutors</span>
            </li>
            <li>
                <a class="active" href="{{ url('admin/students')}}">
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


    <!-- MODAL DIALOG BOX FOR UPDATE QUESTION-->
    <div id="editProfileModal" class="main-content popup-container display-none">
        <div class="dialog question align-in-center flex-column">
            <label for="close_checkbox" class="btn-close" onclick="hideElem('editProfileModal')">+</label>
            <h2 class="heading2 mb-20">Edit/update Question</h2>

            <form action="" method="POST" class="mt-50 full-width flex-column">
                <div class="align-in-center sm_flex-column">
                    <textarea class="qa-field mr-10 sm_mr-0 sm_mb-10" type="text" name="question" placeholder="Enter your QUESTION"></textarea>
                    <textarea id="qa_container" class="qa-field" type="text" name="answer" placeholder="Enter your ANSWER"></textarea>
                    <div id="mc_container" class="qa-field align-in-center flex-column">
                        <div class="align-in-center">
                            <div class="op-field"><input type="radio" name="c-op" value="1"><input type="text" placeholder="A"></div>
                            <div class="op-field ml-15"><input type="radio" name="c-op" value="3"><input type="text" placeholder="C"></div>
                        </div>
                        <div class="align-in-center">
                            <div class="op-field"><input type="radio" name="c-op" value="2"><input type="text" placeholder="B"></div>
                            <div class="op-field ml-15"><input type="radio" name="c-op" value="4"><input type="text" placeholder="D"></div>
                        </div>
                    </div>
                    <div class="text-light ml-10 sm_full-width sm_ml-0 sm_mt-10">
                        <label class="qa-label hover-effect" id="qal" for="qa"><input class="qar" id="qa" type="radio" name="q-type" value="1" checked onchange="showHide('qa_container','mc_container')"><span>QUESTION ANSWER</span></label>
                        <label class="qa-label hover-effect" id="qam" for="mc"><input class="qar" id="mc" type="radio" name="q-type" value="2" onchange="showHide('mc_container','qa_container')"><span>MULTI CHOICE</span></label>
                    </div>
                </div>
                <div class="full-width align-in-center">
                    <a class="btn-dashboard green mt-20 sm_mt-10 cursor-pointer">Save</a>
                </div>
            </form>
        </div>      
    </div>

    <!-- MODAL DIALOG BOX FOR DELETE-->
    <div id="deleteModal" class="main-content popup-container display-none">
        <div class="dialog alert align-in-center flex-column">
            <label for="close_checkbox" class="btn-close" onclick="hideElem('deleteModal');">+</label>
            <h2 class="heading2 mb-20">Are you sure you want to delete?</h2>
            
            <div class="full-width align-in-center">
                <a class="btn-dashboard red mt-20 sm_mt-10 mr-10 cursor-pointer">Delete</a>
                <a class="btn-dashboard green mt-20 sm_mt-10 cursor-pointer">Cancel</a>
            </div>
        </div>      
    </div>

    <!-- MODAL DIALOG BOX FOR ALERT-->
    <!-- <div id="alertModal" class="popup-container">
        <div class="dialog alert align-in-center flex-column">
            <label for="close_checkbox" class="btn-close" onclick="hideElem('alertModal');">+</label>
            <h2 class="heading2 mb-20">Are you sure you want to end quiz?</h2>
            
            <div class="full-width align-in-center">
                <a href="#" class="btn-dashboard w100 h40 subj-8-bg red mt-20 sm_mt-10 mr-10">END QUIZ</a>
                <a href="#" class="btn-dashboard w100 h40 whatsapp-bg green mt-20 sm_mt-10">Cancel</a>
            </div>
        </div>      
    </div> -->

    <script src="{{ asset('assets/js/panel.js') }}"></script>
</body>

</html>