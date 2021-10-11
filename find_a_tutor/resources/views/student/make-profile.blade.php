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
                <h3 class="h-dashboard">Update Profile</h3>
                <div class="align-in-center">
                    <a class="btn-dashboard mr-10" href="add-course.html">View Profile</a>
                </div>
            </div>

            <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 dashboard-card-bg p-15 mt-30 align-in-center sm_p-30">
                <div class="_70-width sm_full-width pt-50 pb-50 sm_pt-20 sm_pb-20">
                    
                    <div class="justify-content-between sm_flex-column">
                        <div class="formField mr-10 sm_mr-0">
                            <label>First name</label>
                            <input type="text" name="firstname" placeholder="First name">
                        </div>
    
                        <div class="formField">
                            <label>Last name</label>
                            <input type="text" name="lastname" placeholder="Last name">
                        </div>
                    </div>

                    <div class="justify-content-between sm_flex-column">
                        <div class="form-field sm_60-width mr-10 sm_mr-0">
                            <label>Country</label>
                            <div class="select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                                <select name="country">
                                    <option selected disabled>Choose Country</option>
                                    <option>Pakistan</option>
                                    <option>USA</option>
                                    <option>UK</option>
                                    <option>Behrain</option>
                                </select>
                            </div>
                        </div>
    
                        <div class="form-field sm_60-width mr-10 sm_mr-0">
                            <label>Province</label>
                            <div class="full-width select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                                <select name="province">
                                    <option selected disabled>Choose Province</option>
                                    <option>Sindh</option>
                                    <option>Panjab</option>
                                    <option>Baltistan</option>
                                    <option>KPK</option>
                                </select>
                            </div>
                        </div>

                        <div class="formField">
                            <label>City</label>
                            <input type="text" name="city" placeholder="Enter city">
                        </div>
                    </div>

                    <div class="justify-content-between sm_flex-column">
                        <div class="formField mr-10 sm_mr-0">
                            <label>Gender</label>
                            <input type="text" name="gender" placeholder="Gender">
                        </div>

                        <div class="formField mr-10 sm_mr-0">
                            <label>Contact</label>
                            <input type="text" name="contact" placeholder="contact">
                        </div>
    
                        <div class="formField">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    
                    <div class="justify-content-between sm_flex-column align-items-center">
                        <div class="formField mr-10 sm_mr-0">
                            <label>Upload Photo</label>
                            <input type="file" name="photo">
                        </div>

                        <div class="formField mr-10 sm_mr-0">
                            <label>Language</label>
                            <input type="text" name="language" placeholder="Language">
                        </div>
    
                        <a class="btn-dashboard full-width green" href="add-course.html">Save</a>
                    </div>

                </div>
            </section>
        </div>

        <footer class="header h80 border-top-01-white justify-content-center align-items-center text-light">

            <p>@ 2121 Tution Made Easy - All Rights Reserved</p>

        </footer>
    </section>

    <script src="assets/js/panel.js"></script>

</body>

</html>