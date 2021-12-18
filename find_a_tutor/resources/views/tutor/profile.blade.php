@extends('layouts.profile')

@section('title', $user->username)

@section('content')
    <main class="full-width vh100">
        <div class="content _80-width align-items-start flex-column pt-40 sm_90-width flex-wrap light-text pb-90 sm_pt-0">
            <h2 class="font-weight-500 font-size-20 full-width sm_text-align-center sm_display-none">Tutor Profile</h2>
            <br><br>
            <section class="full-width justify-content-center flex-wrap ">
                <div class="_65-width sm_full-width pr-60 sm_pr-0">
                    <div class="justify-content-between mb-30 sm_flex-column">
                        <div class="align-in-center sm_flex-column sm_mb-15">
                            <div class="w80 square profile-icon-bg align-in-center cursor-pointer hover-effect mr-10 font-weight-800 font-size-18 disable-selection sm_mb-15">
                                @if($photo != null)
                                    <img class="full-width full-height" src="{{asset('images/'.$photo->photo_path)}}"/>
                                @else
                                    @if($user->firstname != '' || $user->lastname != '')
                                        {{ Str::substr($user->firstname, 0,1) ?? 'S' }}{{ Str::substr($user->lastname, 0,1) ?? 'T' }}
                                    @else
                                        {{ Str::substr($user->email, 0,2) }}
                                    @endif
                                @endif

                            </div>
                            <div class="sm_align-in-center">
                                <h3 class="light-text font-weight-400 sm_text-align-center">{{$user->firstname. ' '. $user->lastname}}</h3>
                                <p class="light-text font-weight-300 font-size-13 opacity-4">{{$user->tagline}}</p>
                            </div>
                        </div>
                        <div class="align-in-center">
                            @if($user->phoneVisibility == 1) <a href="https://wa.me/92{{$user->phone}}" class="w50 square whatsapp-bg align-in-center cursor-pointer hover-effect mr-10"><img src="{{ asset('assets/svg-icons/svg_whatsapp.svg') }}" width="24"></a>@endif
                            <input class="display-none" type="checkbox" id="fav_checkbox" name="fav_checkbox" value='1'> 
                            <label for="fav_checkbox" class="favorite_icon hover-effect"><img src="{{ asset('assets/svg-icons/svg_heart.svg') }}" width="24"></label>
                        </div>
                    </div>

                    <div class="justify-content-between mb-30">
                        <div class="align-items-center flex-wrap sm_flex-column sm_full-width">
                            <div class="d-flex align-items-center">
                                <div class="w60 square not-black-bg align-in-center cursor-pointer hover-effect mr-10 font-weight-400 font-size-24 disable-selection">@if($students != null) {{count($students)}} @else {{'0'}} @endif</div>
                                <p class="light-text font-weight-300 font-size-13 mr-40 sm_mr-0">Total Students</p>
                            </div>

                            <div class="d-flex align-items-center sm_mt-20">
                                <div class="w60 square not-black-bg align-in-center cursor-pointer hover-effect mr-10 font-weight-400 font-size-24 disable-selection">{{ $totalCourses ?? 0}}</div>
                                <p class="light-text font-weight-300 font-size-13">Courses Created</p>
                            </div>

                            <div class="user-ratting flex-column font-size-13 ml-75 sm_ml-0 sm_mt-20">
                                
                                <p>Overall Ratting ({{count($user->feedback)}})</p>
                                <div class="align-items-center mt-5 mb-10">
                                    @if(isset($user->feedback))
                                    <?php 
                                        $countRatting = 0; 
                                        $totalRattings = count($user->feedback);
                                    ?>
                                        @foreach ($user->feedback as $feedback)
                                            <?php $countRatting +=$feedback->ratting; ?>
                                        @endforeach

                                        <?php 
                                        if($totalRattings>0){
                                            $overallRatting = round($countRatting/$totalRattings,1);
                                        }else {
                                            $overallRatting = 0.0;
                                        }
                                        ?>
                                    @endif

                                    @if($overallRatting>=1)<img class="gold-star"> @else <img class="star"> @endif
                                    @if($overallRatting>=2)<img class="gold-star"> @else <img class="star"> @endif
                                    @if($overallRatting>=3)<img class="gold-star"> @else <img class="star"> @endif
                                    @if($overallRatting>=4)<img class="gold-star"> @else <img class="star"> @endif
                                    @if($overallRatting>=5)<img class="gold-star"> @else <img class="star"> @endif
                                    
                                    <span class="ml-5 mt-5">  {{$overallRatting}}</span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <p class="light-text font-weight-300 font-size-14 line-height-25 sm_text-align-center">
                        <strong>About</strong><br>
                        {{$user->description}}
                    </p>
                    <br>

                    <p class="skill"><span><strong>Education: </strong> {{$user->education}}</span>
                        <span><strong>Language: </strong> {{$user->language}}</span>
                        <span><strong>Location: </strong> {{$user->location}}</span>
                        <span><strong>Gender: </strong> {{$user->gender}}</span>
                        @if($user->phoneVisibility == 1) <span><strong>Contact#: </strong> {{$user->phone}} </span>@endif
                    </p>
                    <br>
                    <strong class="sm_d-flex sm_justify-content-center sm_full-width sm_text-align-center">Skills</strong><br>
                    <div class="align-in-center light-text font-weight-300 font-size-14 line-height-25 sm_text-align-center sm_mb-30">
                        @foreach(explode(',',$user->skills) as $skill)
                            <div class="highlight">{{$skill}}</div> 
                        @endforeach
                        
                    </div>

                </div>
                <div class="_35-width sm_full-width p-20 pt-0">
                    @if(isset($students) && count($students) > 0)
                    <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center m-5 mb-10">Students</h2>
                    <div class="students">
                        @foreach ($students as $student)
                            <div>{{Str::substr($student->firstname, 0,1). '' .Str::substr($student->lastname, 0,1)}}</div>
                        @endforeach
                    </div>
                    <br><br>
                    @endif
                    @if($schedule != null)
                    <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center m-5 mb-10">Availability</h2>
                    <div id="availability" class="availability">
                        <div class="square @if($schedule->monday == 1) {{'active'}} @endif">MON</div>
                        <div class="square @if($schedule->tuesday == 1) {{'active'}} @endif">TUE</div>
                        <div class="square @if($schedule->wednesday == 1) {{'active'}} @endif">WED</div>
                        <div class="square @if($schedule->thursday == 1) {{'active'}} @endif">THU</div>
                        <div class="square @if($schedule->friday == 1) {{'active'}} @endif">FRI</div>
                        <div class="square @if($schedule->saturday == 1) {{'active'}} @endif">SAT</div>
                        <div class="square @if($schedule->sunday == 1) {{'active'}} @endif">SUN</div>
                    </div>
                    <br>
                    @endif
                    <div class="share-profile">
                        <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center m-5 mb-10">Share Profile</h2>
                        <input class="input-text sm_text-align-center" type="text" value="{{url()->current()}}" disabled>
                    </div>
                </div>
            </section>
            <br><br><br>
            @if(isset($pastCourses) && $pastCourses != null)
            <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center">Completed Courses</h2>
            <br>
            <section class="_65-width justify-content-start sm_full-width flex-wrap sm_justify-content-center">
                
                @foreach ($pastCourses as $course)
                    {{-- <div class="course-card cursor-pointer" onclick="showElem('reviewModal');"> --}}
                    <div class="course-card cursor-pointer">
                        {{-- <div class="floating-box square">
                            <img alt="star_icon">
                            <p>3.7</p>
                        </div> --}}
                        <span class="category">{{$course->category}}</span>
                        <p class="title">{{$course->title}}</p>
                        <span>43 Students</span>
                        <hr>
                        <p class="para">{{ Str::limit($course->description,100)}}</p>
                        {{-- <a class="link">Feedback/Reviews</a> --}}
                    </div>
                @endforeach
                
                
            </section>
            @endif
        </div>
    </main>
@endsection