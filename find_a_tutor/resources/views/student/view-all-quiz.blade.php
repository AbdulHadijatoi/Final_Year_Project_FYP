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
                <h3 class="h-dashboard">View Quizes</h3>
                <div class="align-in-center">
                    <div class="form-field sm_60-width">
                        <div class="select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                            <select name="subjects">
                                <option  disabled>Choose Category</option>
                                <option selected>JS - Programming Language</option>
                                <option>English</option>
                                <option>Physics</option>
                                <option>Psychology</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20">
                <div class="course-card h200">
                    <div class="floating-box square">
                        <p>37</p>
                        <span class="font-size-10">Minutes</span>
                    </div>
                    <span class="category">Programming</span>
                    <p class="title text-center">JS - Javascript</p>
                    <p class="font-size-70 font-weight-800 full-width overflow-hidden text-center line-height-32">43</span>
                    
                    <div class="link-div">
                        <a class="link" onclick="showElem('alertModal');">Attemp Quiz</a>
                    </div>
                </div>

                <div class="course-card h200">
                    <div class="floating-box square">
                        <p>37</p>
                        <span class="font-size-10">Minutes</span>
                    </div>
                    <span class="category">Programming</span>
                    <p class="title text-center">JS - Javascript</p>
                    <p class="font-size-70 font-weight-800 full-width overflow-hidden text-center line-height-32">43</span>
                    
                    <div class="link-div">
                        <a class="link" onclick="showElem('alertModal');">Attemp Quiz</a>
                    </div>
                </div>

                <div class="course-card h200">
                    <div class="floating-box square">
                        <p>37</p>
                        <span class="font-size-10">Minutes</span>
                    </div>
                    <span class="category">Programming</span>
                    <p class="title text-center">JS - Javascript</p>
                    <p class="font-size-70 font-weight-800 full-width overflow-hidden text-center line-height-32">43</span>
                    
                    <div class="link-div">
                        <a class="link" onclick="showElem('alertModal');">Attemp Quiz</a>
                    </div>
                </div>

                <div class="course-card h200">
                    <div class="floating-box square">
                        <p>37</p>
                        <span class="font-size-10">Minutes</span>
                    </div>
                    <span class="category">Programming</span>
                    <p class="title text-center">JS - Javascript</p>
                    <p class="font-size-70 font-weight-800 full-width overflow-hidden text-center line-height-32">43</span>
                    
                    <div class="link-div">
                        <a class="link" onclick="showElem('alertModal');">Attemp Quiz</a>
                    </div>
                </div>

                <div class="course-card align-in-center hover-effect" style="padding: 0px; font-size: 100px; color: var(--profile-bg);">
                    +
                </div>

            </section>
        </div>

        <footer class="header h80 border-top-01-white justify-content-center align-items-center text-light">

            <p>@ 2121 Tution Made Easy - All Rights Reserved</p>

        </footer>
    </section>

    <!-- MODAL DIALOG BOX FOR DELETE-->
    <div id="alertModal" class="main-content popup-container display-none">
        <div class="dialog alert align-in-center flex-column">
            <label for="close_checkbox" class="btn-close" onclick="hideElem('alertModal');">+</label>
            <h2 class="heading2 mb-20">You are about to attemp Quiz!</h2>
            
            <div class="full-width align-in-center">
                <a href="#" class="btn-dashboard red mt-20 sm_mt-10 mr-10">Confirm</a>
                <a href="#" class="btn-dashboard green mt-20 sm_mt-10">Cancel</a>
            </div>
            
        </div>      
    </div>

    <script src="assets/js/panel.js"></script>

</body>

</html>