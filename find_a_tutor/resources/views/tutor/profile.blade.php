
@extends('layouts.profile')

@section('content')
    <main class="full-width vh100">
        <div class="content _80-width align-items-start flex-column pt-40 sm_90-width flex-wrap light-text pb-90">
            <h2 class="font-weight-500 font-size-20 full-width sm_text-align-center">Tutor Profile</h2>
            <br><br>
            <section class="full-width justify-content-center flex-wrap ">
                <div class="_65-width sm_full-width pr-60 sm_pr-0">
                    <div class="justify-content-between mb-30">
                        <div class="align-in-center">
                            <div class="w80 square profile-icon-bg align-in-center cursor-pointer hover-effect mr-10 font-weight-800 font-size-18 disable-selection">MU</div>
                            <div>
                                <h3 class="light-text font-weight-400">Muhammad Usman</h3>
                                <p class="light-text font-weight-300 font-size-13 opacity-4">Javascript | Programming Language</p>
                            </div>
                        </div>
                        <div class="align-in-center">
                            <div class="w50 square whatsapp-bg align-in-center cursor-pointer hover-effect mr-10"><img src="{{ asset('assets/svg-icons/svg_whatsapp.svg') }}" width="24"></div>
                            <div class="w50 square profile-icon-bg align-in-center cursor-pointer hover-effect"><img src="{{ asset('assets/svg-icons/svg_heart.svg') }}" width="24"></div>
                        </div>
                    </div>

                    <div class="justify-content-between mb-30">
                        <div class="align-items-center flex-wrap">
                            <div class="w60 square not-black-bg align-in-center cursor-pointer hover-effect mr-10 font-weight-400 font-size-24 disable-selection">421</div>
                            <p class="light-text font-weight-300 font-size-13 mr-40">Total Students</p>

                            <div class="w60 square not-black-bg align-in-center cursor-pointer hover-effect mr-10 font-weight-400 font-size-24 disable-selection">12</div>
                            <p class="light-text font-weight-300 font-size-13">Courses Created</p>

                            <div class="user-ratting flex-column font-size-13 ml-75 sm_ml-0 sm_mt-20">
                                <p class="light-text font-weight-300 font-size-13">Overall Ratting (3)</p>
                                <div class="align-items-center mt-5 mb-10">
                                    <img class="gold-star">
                                    <img class="gold-star">
                                    <img class="gold-star">
                                    <img class="gold-star">
                                    <img class="star">
                                    <span class="ml-5 mt-5">4.7</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <p class="light-text font-weight-300 font-size-14 line-height-25">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <br>

                    <p class="skill"><span><strong>Education: </strong> Phd</span>
                        <span><strong>Language: </strong> Urdu</span>
                        <span><strong>Location: </strong> Larkana</span>
                        <span><strong>Email: </strong> mu@tutionmadeeasy.com</span>
                        <span><strong>Contact#: </strong> 03362735187</span>
                    </p>

                </div>
                <div class="_35-width sm_full-width p-20 pt-0">
                    <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center m-5 mb-10">Students</h2>
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
                    <br><br>
                    <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center m-5 mb-10">Availability</h2>
                    <div id="availability" class="availability">
                        <div class="square active">MON</div>
                        <div class="square active">TUE</div>
                        <div class="square">WED</div>
                        <div class="square">THU</div>
                        <div class="square">FRI</div>
                        <div class="square active">SAT</div>
                        <div class="square">SUN</div>
                    </div>

                    <br>
                    <div class="share-profile">
                        <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center m-5 mb-10">Share Profile</h2>
                        <input class="input-text" type="text" value="tutionmadeeasy.com/tutor1" disabled>
                    </div>
                </div>
            </section>
            <br><br><br>
            <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center">Courses Created</h2>
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
                    <a class="link">Feedback/Reviews</a>
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
                    <a class="link">Feedback/Reviews</a>
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
                    <a class="link">Feedback/Reviews</a>
                </div>
            </section>
        </div>
    </main>
@endsection