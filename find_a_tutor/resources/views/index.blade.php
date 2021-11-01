
@extends('layouts.home')

@section('title', 'Home')

@section('content')

<main class="full-width">
    <div class="content vh100">
        <section class="hero-image">
            <div class="gradient-overlay">
                <div class="_70-width justify-content-between sm_flex-column sm_align-items-center sm_90-width">


                    <div class="justify-content-center flex-column light-text w250 sm_full-width sm_mb-20">
                        <h2 class="font-weight-800 font-size-35 mb-10 sm_text-align-center" style="line-height: 1.4;">{{$name ?? ' '}}Find the Right Tutor For You</h2>
                        <p class="font-size-14 font-weight-300 sm_text-align-center" style="line-height: 1.7;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    </div>


                    <form action="listing.html" class="input-box w400 h300 bg-white font-size-13 sm_full-width border-radius-10">

                        <div class="form-field">
                            <label for="subject">Enter a subject</label>
                            <input type="text" class="input-field border-radius-3" autocomplete="off" placeholder="Javascript" id="subject">
                        </div>


                        <div class="form-field">
                            <label for="location">Select a location</label>
                            <select class="input-field border-radius-3" placeholder="Javascript" id="location">
                                <option selected disabled>Choose location</option>
                                <option >Karachi</option>
                                <option >Islamabad</option>
                                <option >Larkana</option>
                            </select>
                        </div>


                        <div class="form-field">
                            <input type="button" class="input-field border-radius-3" id="location" value="Find Tutor Now">
                            <img class="btn-right-icon" src="{{asset('assets/svg-icons/svg_search.svg')}}" width="20">
                        </div>

                    </form>


                </div>
            </div>
        </section>


        <section class="_70-width flex-column align-items-center pt-50 sm_90-width">

            <div class="_85-width sm_full-width flex-column align-items-center text-center mb-40">

                <img src="{{asset('assets/svg-icons/svg_tutors.svg')}}" width="35">
                <h2 class="text-uppercase mt-10 mb-20 opacity-8">Choose from 1000s of Tutors</h2>
                <p class="font-size-14 opacity-7 _75-width sm_full-width">At Tution Made Easy we understand that finding a tutor is not always easy task. Whether searching for primary. A-Level or an adult learner, we strive to make the process as simple as possible - listing all personal and private tutors
                    closest to you</p>

            </div>


            <div class="_85-width sm_full-width justify-content-center">
                <div class="_30-width h350 footer-light-bg border-radius-15 align-items-end p-40 justify-content-center hover-effect bg-cover-center sm_h200 sm_p-10 mr-30 sm_mr-10" style="background-image: url('assets/images/s2_img_1.jpg');">
                    <a href="listing.html" class="font-weight-800 light-text font-size-15 text-decoration-none">Find a Tutor ►</a>
                </div>
                @if(!Auth::check())
                <div class="_30-width h350 footer-light-bg border-radius-15 align-items-end p-40 justify-content-center hover-effect bg-cover-center sm_h200 sm_p-10" style="background-image: url('assets/images/s2_img_2.jpg');">
                    <a href="account/signup.html" class="font-weight-800 light-text font-size-15 text-decoration-none">Become a Tutor ►</a>
                </div>
                @endif
                <div class="_30-width h350 footer-light-bg border-radius-15 align-items-end p-40 justify-content-center hover-effect sm_h200 sm_p-10 ml-30 sm_ml-10" style="background-image: url('assets/images/s2_img_3.jpg'); ">
                    <a href="#" class="font-weight-800 light-text font-size-15 text-decoration-none">Learn More ►</a>
                </div>
            </div>
            <hr class="_85-width mt-50 opacity-3 sm_full-width">
        </section>

        <section class="_85-width flex-column align-items-center pt-50 sm_90-width">


            <div class="_70-width sm_full-width flex-column align-items-center text-center mb-40">

                <img src="{{asset('assets/svg-icons/svg_course_dark.svg')}}" width="35">
                <h2 class="text-uppercase mt-10 mb-20 opacity-8">Browse by subject</h2>
                <p class="font-size-14 opacity-7 _75-width sm_full-width">At Tution Made Easy we understand that finding a tutor is not always easy task. Whether searching for primary.</p>

            </div>

            <div class="full-width align-in-center justify-content-center flex-wrap">
                <a href="#" class="subj-1-bg w250 h220 border-radius-15 overflow-hidden text-decoration-none m-10 sm_w150 sm_h150 sm_border-radious-10">
                    <div class="full-width h160 align-in-center sm_h100">
                        <img src="{{asset('assets/svg-icons/svg_academic.svg')}}" width="50" style="filter: brightness(0%); opacity: 0.3;" class="sm_h50">
                    </div>
                    <div class="full-width h60 border-01-black bg-white align-in-center font-weight-800 text-black sm_h50"><span class="opacity-8">Academic</span></div>
                </a>
                <a href="#" class="subj-2-bg w250 h220 border-radius-15 overflow-hidden text-decoration-none m-10 sm_w150 sm_h150 sm_border-radious-10">
                    <div class="full-width h160 align-in-center sm_h100">
                        <img src="{{asset('assets/svg-icons/svg_languages.svg')}}" width="50" style="filter: brightness(0%); opacity: 0.3;" class="sm_h50">
                    </div>
                    <div class="full-width h60 border-01-black bg-white align-in-center font-weight-800 text-black"><span class="opacity-8">Languages</span></div>
                </a>
                <a href="#" class="subj-3-bg w250 h220 border-radius-15 overflow-hidden text-decoration-none m-10 sm_w150 sm_h150 sm_border-radious-10">
                    <div class="full-width h160 align-in-center sm_h100">
                        <img src="{{asset('assets/svg-icons/svg_music.svg')}}" width="50" style="filter: brightness(0%); opacity: 0.3;" class="sm_h50">
                    </div>
                    <div class="full-width h60 border-01-black bg-white align-in-center font-weight-800 text-black"><span class="opacity-8">Music</span></div>
                </a>
                <a href="#" class="subj-4-bg w250 h220 border-radius-15 overflow-hidden text-decoration-none m-10 sm_w150 sm_h150 sm_border-radious-10">
                    <div class="full-width h160 align-in-center sm_h100">
                        <img src="{{asset('assets/svg-icons/svg_art.svg')}}" width="50" style="filter: brightness(0%); opacity: 0.3;" class="sm_h50">
                    </div>
                    <div class="full-width h60 border-01-black bg-white align-in-center font-weight-800 text-black"><span class="opacity-8">Art</span></div>
                </a>
                <a href="#" class="subj-5-bg w250 h220 border-radius-15 overflow-hidden text-decoration-none m-10 sm_w150 sm_h150 sm_border-radious-10">
                    <div class="full-width h160 align-in-center sm_h100">
                        <img src="{{asset('assets/svg-icons/svg_health.svg')}}" width="50" style="filter: brightness(0%); opacity: 0.3;" class="sm_h50">
                    </div>
                    <div class="full-width h60 border-01-black bg-white align-in-center font-weight-800 text-black"><span class="opacity-8">Health</span></div>
                </a>
                <a href="#" class="subj-6-bg w250 h220 border-radius-15 overflow-hidden text-decoration-none m-10 sm_w150 sm_h150 sm_border-radious-10">
                    <div class="full-width h160 align-in-center sm_h100">
                        <img src="{{asset('assets/svg-icons/svg_it.svg')}}" width="50" style="filter: brightness(0%); opacity: 0.3;" class="sm_h50">
                    </div>
                    <div class="full-width h60 border-01-black bg-white align-in-center font-weight-800 text-black"><span class="opacity-8">IT</span></div>
                </a>
                <a href="#" class="subj-7-bg w250 h220 border-radius-15 overflow-hidden text-decoration-none m-10 sm_w150 sm_h150 sm_border-radious-10">
                    <div class="full-width h160 align-in-center sm_h100">
                        <img src="{{asset('assets/svg-icons/svg_professional.svg')}}" width="50" style="filter: brightness(0%); opacity: 0.3;" class="sm_h50">
                    </div>
                    <div class="full-width h60 border-01-black bg-white align-in-center font-weight-800 text-black"><span class="opacity-8">Professional</span></div>
                </a>
                <a href="#" class="subj-8-bg w250 h220 border-radius-15 overflow-hidden text-decoration-none m-10 sm_w150 sm_h150 sm_border-radious-10">
                    <div class="full-width h160 align-in-center sm_h100">
                        <img src="{{asset('assets/svg-icons/svg_lifestyle.svg')}}" width="50" style="filter: brightness(0%); opacity: 0.3;" class="sm_h50">
                    </div>
                    <div class="full-width h60 border-01-black bg-white align-in-center font-weight-800 text-black"><span class="opacity-8">Lifestyle</span></div>
                </a>
            </div>

            <br><br>
            <p class="font-size-14 opacity-7 _60-width sm_full-width text-center">To browse through our list of tutors we have registered with us, please click on one of the main subject categories on top, or see more below</p>
            <br>
            <a href="#" class="w200 h50 font-weight-800 light-text font-size-15 text-decoration-none primary-2-bg border-radius-3 align-in-center"><span>View all Subjects</span></a>
            <br><br><br><br>
        </section>

        <section class="full-width bg-white justify-content-center h700 sm_flex-column-reverse sm_h600">
            <div class="_50-width full-height sm_h450 sm_full-width align-in-center flex-column">
                <h2 class="text-uppercase mt-10 mb-10 opacity-8 full-width text-center">Explore by location</h2>
                <div class="light-text _80-width mt-20 sm_full-width flex-wrap justify-content-center">
                    <a class="location-item sm_m-10" href="#"><img src="{{asset('assets/svg-icons/svg_checked.svg')}}">Karachi</a>
                    <a class="location-item sm_m-10" href="#"><img src="{{asset('assets/svg-icons/svg_checked.svg')}}">Lahore</a>
                    <a class="location-item sm_m-10" href="#"><img src="{{asset('assets/svg-icons/svg_checked.svg')}}">Islamabad</a>
                    <a class="location-item sm_m-10" href="#"><img src="{{asset('assets/svg-icons/svg_checked.svg')}}">Hyderabad</a>
                    <a class="location-item sm_m-10" href="#"><img src="{{asset('assets/svg-icons/svg_checked.svg')}}">Sindh</a>
                    <a class="location-item sm_m-10" href="#"><img src="{{asset('assets/svg-icons/svg_checked.svg')}}">Sukkur</a>
                    <a class="location-item sm_m-10" href="#"><img src="{{asset('assets/svg-icons/svg_checked.svg')}}">Khairpur</a>
                    <a class="location-item sm_m-10" href="#"><img src="{{asset('assets/svg-icons/svg_checked.svg')}}">Balochistan</a>
                    <a class="location-item sm_m-10" href="#"><img src="{{asset('assets/svg-icons/svg_checked.svg')}}">Skardu</a>
                    <a class="location-item sm_m-10" href="#"><img src="{{asset('assets/svg-icons/svg_checked.svg')}}">Rawalpindi</a>
                    <a class="location-item sm_m-10" href="#"><img src="{{asset('assets/svg-icons/svg_checked.svg')}}">Larkana</a>
                    <a class="location-item sm_m-10" href="#"><img src="{{asset('assets/svg-icons/svg_checked.svg')}}">Gilgit Baltistan</a>
                </div>
                <a href="#" class="w200 h50 font-weight-600 light-text font-size-13 text-decoration-none primary-2-bg border-radius-3 align-in-center mt-20"><img class="mr-10" src="{{asset('assets/svg-icons/svg_location_2.svg')}}" width="18"><span>See More Location </span></a>
            </div>
            <div class="_50-width full-height sm_h150 bg-cover-center sm_full-width" style="background-image: url('assets/images/location_2.jpg');"></div>
        </section>
        <br><br><br>

        <section class="full-width text-center align-in-center flex-column">
            <div class="_60-width align-in-center flex-column">
                <h2 class="text-uppercase mt-10 mb-10 opacity-8">How it works</h2>
                <p class="font-size-14 opacity-7 _75-width sm_full-width">At Tution Made Easy we understand that finding a tutor is not always easy task. Whether searching for primary.</p>
            </div>
            <div class="_80-width justify-content-between flex-wrap mt-70 sm_90-width sm_justify-content-center">
                <img src="{{asset('assets/svg-icons/step_1.svg')}}" class="w220 sm_w140 m-10">
                <img src="{{asset('assets/svg-icons/step_2.svg')}}" class="w220 sm_w140 m-10">
                <img src="{{asset('assets/svg-icons/step_3.svg')}}" class="w220 sm_w140 m-10">
                <img src="{{asset('assets/svg-icons/step_4.svg')}}" class="w220 sm_w140 m-10">
            </div>
            <br><br><br><br><br><br><br><br>
        </section>


        <section class="faq full-width light-text full-width justify-content-center align-in-center flex-column">
            <p class="full-width h60 footer-dark-bg font-weight-800 font-size-14 text-center text-uppercase align-in-center">Useful tutor information</p>
            <p class="question-para primary-2-bg">How to start teaching at Tution Made Easy?</p>
            <p class="answer-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <p class="question-para primary-2-bg brightness-105">How to Find a teacher at tuition Made Easy?</p>
            <p class="answer-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <p class="question-para primary-2-bg">The Benifits of using this platform</p>
            <p class="answer-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <p class="question-para primary-2-bg brightness-105">How to Find a teacher at tuition Made Easy?</p>
            <p class="answer-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <p class="question-para primary-2-bg">The Benifits of using this platform</p>
            <p class="answer-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <p class="question-para primary-2-bg brightness-105">How to Find a teacher at tuition Made Easy?</p>
            <p class="answer-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
            <p class="question-para primary-2-bg">The Benifits of using this platform</p>
            <p class="answer-para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>

        </section>

        <section class="secondary-bg light-text full-width justify-content-center align-in-center">
            <div class="align-in-center">
                <h2 class="font-weight-800 font-size-25 sm_text-align-center sm_display-none mr-30" style="line-height: 1.4;">Find the Right Tutor For You</h2>
                <a href="#" class="w200 h50 font-weight-700 light-text font-size-13 text-decoration-none primary-2-bg border-radius-3 align-in-center"><span>Find Tutor Now </span><img class="ml-10" src="{{asset('assets/svg-icons/svg_search.svg')}}" width="18"></a>
            </div>
        </section>

    </div>
</main>

@endsection
