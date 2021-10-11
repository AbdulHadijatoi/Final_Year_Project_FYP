<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <base href="../">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/panel.css">
    <link rel="stylesheet" href="assets/css/common.css">

</head>

<body>

    <div class="sidebar open">
        <div class="logo-details border-bottom-01-white">
            <img class="" src="assets/logo_light.svg">
        </div>
        <ul class="nav-list" id="navList">

            <li>
                <a class="active" href="#">
                    <img class="" src="assets/svg-icons/svg_dashboard.svg">
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>

            <li>
                <a href="#">
                    <img class="" src="assets/svg-icons/svg_view_records.svg">
                    <span class="links_name">View Courses</span>
                </a>
                <span class="tooltip">View Courses</span>
            </li>

            <li>
                <a href="#">
                    <img class="" src="assets/svg-icons/svg_create_plus.svg">
                    <span class="links_name">Enroll Course</span>
                </a>
                <span class="tooltip">Enroll Course</span>
            </li>
            
            <li>
                <a href="#">
                    <img class="" src="assets/svg-icons/svg_view_records.svg">
                    <span class="links_name">View Quizes</span>
                </a>
                <span class="tooltip">View Quizes</span>
            </li>
            
            <li>
                <a href="#">
                    <img class="" src="assets/svg-icons/svg_profile.svg">
                    <span class="links_name">Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li>
            <li>
                <a href="#">
                    <img class="" src="assets/svg-icons/svg_logout.svg">
                    <span class="links_name">Logout</span>
                </a>
                <span class="tooltip">Logout</span>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <header class="header h80 border-bottom-01-white justify-content-center align-items-center">
            <div class="_85-width justify-content-end sm_justify-content-between">
                <div class="mobile-view-elem align-in-center display-none">
                    <input class="hidden" type="checkbox" id="mobileMenuCheckbox" onchange="toggleDisplay(this, 'mobileMenu')">
                    <img id="btnMobileMenu" src="assets/svg-icons/svg_bars_questions.svg" width="24" onclick="clickTarget('mobileMenuCheckbox');">
                    <div id="mobileMenu" class="mobile-menu position-absolute top-79 left-0 full-height">
                        <ul class="nav-list" id="mobileNavList">
                        </ul>
                    </div>
                </div>
                <div class="mobile-view-elem logo-details display-none">
                    <img class="" src="assets/logo_light.svg">
                </div>
                <div class="position-relative">
                    <input class="hidden" type="checkbox" id="profileMenuCheckbox" onchange="toggleDisplay(this, 'profileMenu')">
                    <div id="profileMenuButton" class="ac-icon profile-icon" onclick="clickTarget('profileMenuCheckbox');">ST</div>

                    <div id="profileMenu" class="profile-menu position-absolute top-60 right-0">
                        <ul class="nav-list">
                            <li>
                                <a href="#">
                                    <img class="" src="assets/svg-icons/svg_logout.svg">
                                    <span class="links_name">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>

        <div class="main-content light-text">

            <div class="justify-content-between align-items-center">
                <h3 class="h-dashboard">My Dashboard</h3>
                <div class="align-in-center">
                    <a class="btn-dashboard mr-10" href="view-all-quiz.html">View Quizes</a>
                    <a class="btn-dashboard" href="enroll-course.html">Enroll Course</a>
                </div>
            </div>

            <div class="full-width align-items-center flex-wrap text-white mt-20">

                <div class="_25-width justify-content-between p-20 min-h120 dashboard-card-bg mr-10 sm_48-width">
                    <div>
                        <p>You have Tutors</p>
                        <p class="font-weight-500 font-size-26">12</p>
                    </div>
                    <img src="assets/svg-icons/svg_courses_b.svg" alt="student-hat" width="50">
                </div>

                <div class="_25-width justify-content-between p-20 min-h120 dashboard-card-bg sm_48-width">
                    <div>
                        <p>You have Courses</p>
                        <p class="font-weight-500 font-size-26">412</p>
                    </div>
                    <img src="assets/svg-icons/svg_view_records.svg" alt="student-hat" width="50">
                </div>

            </div>

            <div class="full-width mt-50 align-items-start flex-column">
                <p>Your Courses</p>
                <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20">
                    <div class="course-card min-h280">
                        <div class="floating-box square">
                            <img alt="star_icon">
                            <p>3.7</p>
                        </div>
                        <span class="category">Programming</span>
                        <p class="title">JS - Javascript</p>
                        <span>43 Quizes</span>
                        <hr>
                        <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
                        <div class="link-div">
                            <a class="link">View Quizes</a>
                        </div>
                    </div>
    
                    <div class="course-card min-h280">
                        <div class="floating-box square">
                            <img alt="star_icon">
                            <p>3.7</p>
                        </div>
                        <span class="category">Programming</span>
                        <p class="title">JS - Javascript</p>
                        <span>43 Quizes</span>
                        <hr>
                        <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
                        <div class="link-div">
                            <a class="link">View Quizes</a>
                        </div>
                    </div>
    
                    <div class="course-card min-h280">
                        <div class="floating-box square">
                            <img alt="star_icon">
                            <p>3.7</p>
                        </div>
                        <span class="category">Programming</span>
                        <p class="title">JS - Javascript</p>
                        <span>43 Quizes</span>
                        <hr>
                        <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
                        <div class="link-div">
                            <a class="link">View Quizes</a>
                        </div>
                    </div>
    
                    <div class="course-card min-h280">
                        <div class="floating-box square">
                            <img alt="star_icon">
                            <p>3.7</p>
                        </div>
                        <span class="category">Programming</span>
                        <p class="title">JS - Javascript</p>
                        <span>43 Quizes</span>
                        <hr>
                        <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
                        <div class="link-div">
                            <a class="link">View Quizes</a>
                        </div>
                    </div>
    
                </section>
            </div>
        </div>

        <footer class="header h80 border-top-01-white justify-content-center align-items-center text-light">

            <p>@ 2121 Tution Made Easy - All Rights Reserved</p>

        </footer>
    </section>

    <script src="assets/js/panel.js"></script>


</body>

</html>