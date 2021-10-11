<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <base href="../">
    <meta charset="UTF-8">
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
                <a href="#">
                    <img class="" src="assets/svg-icons/svg_dashboard.svg">
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="#">
                    <img class="" src="assets/svg-icons/svg_view_records.svg">
                    <span class="links_name">View Tutors</span>
                </a>
                <span class="tooltip">View Tutors</span>
            </li>
            <li>
                <a class="active" href="#">
                    <img class="" src="assets/svg-icons/svg_create_plus.svg">
                    <span class="links_name">Create Course</span>
                </a>
                <span class="tooltip">Create Course</span>
            </li>
            <li>
                <a href="#">
                    <img class="" src="assets/svg-icons/svg_view_records.svg">
                    <span class="links_name">View Students</span>
                </a>
                <span class="tooltip">View Students</span>
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

    <section class="home-section full-width">
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
                    <div id="profileMenuButton" class="ac-icon profile-icon" onclick="clickTarget('profileMenuCheckbox');">AD</div>

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

            <div class="justify-content-between align-items-center sm_flex-column">
                <h3 class="h-dashboard sm_full-width">Tutor Profiles</h3>
                <div class="align-in-center sm_full-width sm_mt-10">
                    <div class="formField flex-row br-light-white mb-0 align-in-center mr-10">
                        <img class="ml-15" src="assets/svg-icons/svg_search.svg" width="18">
                        <input class="full-width" type="text" name="username" placeholder="Username">
                    </div>
                    <a class="btn-dashboard mr-10 w200" href="view-tutors.html">Create Tutor</a>
                </div>
            </div>

            <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 border-02 p-15 mt-30 align-in-center sm_p-30">
                <table class="full-width">
                    <tbody>
                        <tr>
                            <td class="table-row">
                                <div>
                                    <span class="initials">MU</span>
                                    <div class="st-info">
                                        <label>Muhammad Usman</label>
                                        <p>Joined 21. August 2021</p>
                                    </div>
                                </div>
                                <div class="sm_full-width align-in-center">
                                    <div class="btn-dashboard small hover-effect mr-10">Edit</div>
                                    <div class="btn-dashboard small red hover-effect">Delete</div>
                                </div>
                            </td>
                            <td class="table-row">
                                <div>
                                    <span class="initials">MU</span>
                                    <div class="st-info">
                                        <label>Muhammad Usman</label>
                                        <p>Joined 21. August 2021</p>
                                    </div>
                                </div>
                                <div class="sm_full-width align-in-center">
                                    <div class="btn-dashboard small hover-effect mr-10">Edit</div>
                                    <div class="btn-dashboard small red hover-effect">Delete</div>
                                </div>
                            </td>
                            <td class="table-row">
                                <div>
                                    <span class="initials">MU</span>
                                    <div class="st-info">
                                        <label>Muhammad Usman</label>
                                        <p>Joined 21. August 2021</p>
                                    </div>
                                </div>
                                <div class="sm_full-width align-in-center">
                                    <div class="btn-dashboard small hover-effect mr-10">Edit</div>
                                    <div class="btn-dashboard small red hover-effect">Delete</div>
                                </div>
                            </td>
                            <td class="table-row">
                                <div>
                                    <span class="initials">MU</span>
                                    <div class="st-info">
                                        <label>Muhammad Usman</label>
                                        <p>Joined 21. August 2021</p>
                                    </div>
                                </div>
                                <div class="sm_full-width align-in-center">
                                    <div class="btn-dashboard small hover-effect mr-10">Edit</div>
                                    <div class="btn-dashboard small red hover-effect">Delete</div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>

        <footer class="header h80 border-top-01-white justify-content-center align-items-center text-light">

            <p>@ 2121 Tution Made Easy - All Rights Reserved</p>

        </footer>
    </section>

    <script src="assets/js/panel.js"></script>

</body>

</html>