@extends('layouts.profile')

@section('content')
<main class="full-width vh100">
    <div class="content _80-width align-items-start flex-column pt-40 sm_90-width flex-wrap light-text pb-90">
        <h2 class="font-weight-500 font-size-20 full-width sm_text-align-center">Student Profile</h2>
        <br><br>
        <section class="full-width justify-content-center flex-wrap ">
            <div class="_65-width sm_full-width pr-60 sm_pr-0">
                <div class="d-flex mb-30">
                    <div class="align-in-center">
                        <div class="w80 square profile-icon-bg align-in-center cursor-pointer hover-effect mr-10 font-weight-800 font-size-18 disable-selection">MU</div>
                        <div>
                            <h3 class="light-text font-weight-400">Abdul Hadi</h3>
                            <p class="light-text font-weight-300 font-size-13 opacity-4">Part time Freelancer</p>
                        </div>
                    </div>
                </div>

                <div class="justify-content-between mb-30">
                    <div class="align-items-center flex-wrap">
                        <div class="w60 square not-black-bg align-in-center cursor-pointer hover-effect mr-10 font-weight-400 font-size-24 disable-selection">12</div>
                        <p class="light-text font-weight-300 font-size-13 opacity-7 mr-40">Courses Completed</p>

                        <div class="w60 square not-black-bg align-in-center cursor-pointer hover-effect mr-10 font-weight-400 font-size-24 disable-selection">12</div>
                        <p class="light-text font-weight-300 font-size-13 opacity-7">Tutors Studied</p>
                    </div>
                </div>

                <p class="light-text font-weight-300 font-size-14 line-height-25 opacity-7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                <br>

                <p class="skill"><span><strong>Education: </strong> Graduating</span>
                    <span><strong>Language: </strong> English</span>
                    <span><strong>Location: </strong> Larkana</span>
                    <span><strong>Email: </strong> ah@tutionmadeeasy.com</span>
                    <span><strong>Contact#: </strong> 03362735187</span>
                </p>

            </div>
            <div class="_35-width sm_full-width p-20 pt-0">
                <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center m-5 mb-10">Tutors</h2>
                <div class="students">
                    <div>AB</div>
                    <div>SK</div>
                    <div>RN</div>
                    <div>HR</div>
                    <div>TK</div>
                    <div>CM</div>
                    <div>AB</div>
                    <div>SK</div>
                    <div>RN</div>
                    <div>HR</div>
                </div>

            </div>
        </section>
        <br><br><br>
        <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center">Completed Courses</h2>
        <br>
        <section class="_65-width justify-content-start sm_full-width flex-wrap sm_justify-content-center">
            <div class="course-card">
                <div class="floating-box square">
                    <img alt="star_icon">
                    <p>3.7</p>
                </div>
                <span class="category">Programming</span>
                <p class="title">JS - Javascript</p>
                <span>43 Students</span>
                <hr>
                <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
                <a class="link">Still running</a>
            </div>
            <div class="course-card">
                <div class="floating-box square">
                    <img alt="star_icon">
                    <p>3.7</p>
                </div>
                <span class="category">Programming</span>
                <p class="title">JS - Javascript</p>
                <span>43 Students</span>
                <hr>
                <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
                <a class="link">Still running</a>
            </div>
            <div class="course-card">
                <div class="floating-box square">
                    <img alt="star_icon">
                    <p>3.7</p>
                </div>
                <span class="category">Programming</span>
                <p class="title">JS - Javascript</p>
                <span>43 Students</span>
                <hr>
                <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
                <a class="link">Still running</a>
            </div>
        </section>
    </div>
</main>

@endsection