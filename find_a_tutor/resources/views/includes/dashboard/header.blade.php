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
                        <a href="#">
                            <img class="" src="{{ asset('assets/svg-icons/svg_logout.svg')}}">
                            <span class="links_name">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</header>