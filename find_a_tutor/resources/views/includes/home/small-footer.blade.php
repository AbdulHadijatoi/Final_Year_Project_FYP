@if($title == 'Tutor Profile' || $title == 'Student Profile')
<footer>
    <div class="bottom-details border-t-01">
        <div class="bottom_text">
            <span class="copyright_text">@ 2021 Tuition Made Easy - All Rights Reserved</span>
            <span class="policy_terms">
        <a href="#">Privacy Policy</a>
            <a href="#"> Copyright</a>
            <a href="#"> Terms of Service</a>
            </span>
        </div>
    </div>
</footer>
@else
<footer class="login-bg-hf full-width justify-content-center">
    <div class="_75-width h70 sm_90-width justify-content-between align-items-center font-weight-300 font-size-15 light-text opacity-8 sm_flex-column sm_justify-content-center">
        <span class="copyright_text">@ 2021 Tuition Made Easy - All Rights Reserved</span>
        <span class="policy_terms">
            <a href="#">Privacy Policy</a>
            <a href="#"> Copyright</a>
            <a href="#"> Terms of Service</a>
            </span>
    </div>
</footer>
@endif