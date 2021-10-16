@extends('layouts.home')

@section('content')
<main class="full-width">
    <div class="content vh100 _70-width justify-content-center pt-60 sm_90-width">
        <section class="full-width light-text pb-90">

            <h2 class="text-uppercase font-weight-600 font-size-20 full-width sm_text-align-center primary-2-text">Find A Teacher</h2>
            <form class="field-container hover-effect mb-40">
                <input class="sm_text-align-center" type="text" name="keyword" placeholder="Search subject, location, or tutor name">
            </form>

            <div class="full-width justify-content-between sm_flex-column sm_flex_wrap mb-30">
                <form class="align-in-center sm_flex_wrap">
                    <div class="select-container hover-effect mr-10 sm_mt-10">
                        <select name="subjects">
                            <option selected>All Subjects</option>
                            <option>Javascript</option>
                            <option>English</option>
                            <option>Physics</option>
                            <option>Psychology</option>
                        </select>
                    </div>
                    <div class="select-container hover-effect mr-10 sm_mt-10">
                        <select name="subjects">
                            <option selected>All Subjects</option>
                            <option>Javascript</option>
                            <option>English</option>
                            <option>Physics</option>
                            <option>Psychology</option>
                        </select>
                    </div>
                    <span class="font-size-14 font-weight-500 sm_mt-10" style="opacity: 0.7;">Showing 10 out of 10000 tutors</span>
                </form>

                <div class="align-in-center sm_mt-10">
                    <div class="btn-change-view hover-effect">
                        <img src="{{asset('}assets/svg-icons/svg_list_view.svg')}" width="15">
                    </div>
                    <div class="btn-change-view hover-effect">
                        <img src="{{asset('assets/svg-icons/svg_thumb_view.svg')}}" width="15">
                    </div>
                </div>
            </div>

            <div class="list-item">
                <div class="list-sec-1">
                    <h4>Dr. Sanaullah</h4>
                    <p class="font-weight-300 font-size-15 mb-5">Category: Programming Language</p>
                    <p class="w350 font-weight-300 font-size-15">Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.<a class="hover-effect" href="#">READ MORE</a></p>
                </div>
                <div class="list-sec-2">
                    <p class="hover-effect"> <img class="mr-10" src="{{asset('assets/svg-icons/svg_subject_2.svg')}}" alt="course" width="18"><span>Java Script</span></p>
                    <p class="hover-effect"> <img class="mr-10" src="{{asset('assets/svg-icons/svg_location_2.svg')}}" alt="course" width="18"><span>Larkana, Sindh Pakistan</span></p>
                    <p class="hover-effect"> <img class="mr-10" src="{{asset('assets/svg-icons/svg_students.svg')}}" alt="course" width="18"><span>12,452 Students</span></p>
                </div>
                <div class="list-sec-3 flex-column font-size-13">
                    <p>Overall Ratting (3)</p>
                    <div class="align-items-center mt-5 mb-10">
                        <img class="gold-star">
                        <img class="gold-star">
                        <img class="gold-star">
                        <img class="gold-star">
                        <img class="star">
                        <span class="ml-5 mt-5">4.7</span>
                    </div>
                    <a href="{{ url('tutor/profile') }}" class="btn-viewprofile hover-effect">View Profile</a>
                </div>
            </div>

            <div class="list-item">
                <div class="list-sec-1">
                    <h4>Dr. Sanaullah</h4>
                    <p class="font-weight-300 font-size-15 mb-5">Category: Programming Language</p>
                    <p class="w350 font-weight-300 font-size-15">Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.<a class="hover-effect" href="#">READ MORE</a></p>
                </div>
                <div class="list-sec-2">
                    <p class="hover-effect"> <img class="mr-10" src="{{asset('assets/svg-icons/svg_subject_2.svg')}}" alt="course" width="18"><span>Java Script</span></p>
                    <p class="hover-effect"> <img class="mr-10" src="{{asset('assets/svg-icons/svg_location_2.svg')}}" alt="course" width="18"><span>Larkana, Sindh Pakistan</span></p>
                    <p class="hover-effect"> <img class="mr-10" src="{{asset('assets/svg-icons/svg_students.svg')}}" alt="course" width="18"><span>12,452 Students</span></p>
                </div>
                <div class="list-sec-3 flex-column font-size-13">
                    <p>Overall Ratting (3)</p>
                    <div class="align-items-center mt-5 mb-10">
                        <img class="gold-star">
                        <img class="gold-star">
                        <img class="gold-star">
                        <img class="gold-star">
                        <img class="star">
                        <span class="ml-5 mt-5">4.7</span>
                    </div>
                    <a href="{{ url('tutor/profile') }}" class="btn-viewprofile hover-effect">View Profile</a>
                </div>
            </div>

            <div class="list-item">
                <div class="list-sec-1">
                    <h4>Dr. Sanaullah</h4>
                    <p class="font-weight-300 font-size-15 mb-5">Category: Programming Language</p>
                    <p class="w350 font-weight-300 font-size-15">Lorem Ipsum is simply dummy text of the printing and typesetting industry printing and typesetting industry.<a class="hover-effect" href="#">READ MORE</a></p>
                </div>
                <div class="list-sec-2">
                    <p class="hover-effect"> <img class="mr-10" src="{{asset('assets/svg-icons/svg_subject_2.svg')}}" alt="course" width="18"><span>Java Script</span></p>
                    <p class="hover-effect"> <img class="mr-10" src="{{asset('assets/svg-icons/svg_location_2.svg')}}" alt="course" width="18"><span>Larkana, Sindh Pakistan</span></p>
                    <p class="hover-effect"> <img class="mr-10" src="{{asset('assets/svg-icons/svg_students.svg')}}" alt="course" width="18"><span>12,452 Students</span></p>
                </div>
                <div class="list-sec-3 flex-column font-size-13">
                    <p>Overall Ratting (3)</p>
                    <div class="align-items-center mt-5 mb-10">
                        <img class="gold-star">
                        <img class="gold-star">
                        <img class="gold-star">
                        <img class="gold-star">
                        <img class="star">
                        <span class="ml-5 mt-5">4.7</span>
                    </div>
                    <a href="{{ url('tutor/profile') }}" class="btn-viewprofile hover-effect">View Profile</a>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection