@extends('layouts.profile')

@section('title', $user->username)

@section('content')
<main class="full-width vh100">
    <div class="content _80-width align-items-start flex-column pt-40 sm_90-width flex-wrap light-text pb-90">
        <h2 class="font-weight-500 font-size-20 full-width sm_text-align-center">Student Profile</h2>
        <br><br>
        <section class="full-width justify-content-center flex-wrap ">
            <div class="_65-width sm_full-width pr-60 sm_pr-0">
                <div class="d-flex mb-30">
                    <div class="align-in-center">
                        <div class="w80 square profile-icon-bg align-in-center cursor-pointer hover-effect mr-10 font-weight-800 font-size-18 disable-selection">
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
                        <div>
                            <h3 class="light-text font-weight-400">{{$user->firstname.' '.$user->lastname}}</h3>
                            <p class="light-text font-weight-300 font-size-13 opacity-4">{{$user->tagline}}</p>
                        </div>
                    </div>
                </div>

                <div class="justify-content-between mb-30">
                    <div class="align-items-center flex-wrap sm_flex-column sm_align-items-start">

                        <div class="d-flex align-items-center sm_mb-15">
                            <div class="w60 square not-black-bg align-in-center cursor-pointer hover-effect mr-10 font-weight-400 font-size-24 disable-selection">@if(isset($studentCourses)) {{count($studentCourses)}} @endif</div>
                            <p class="light-text font-weight-300 font-size-13 mr-40">Courses Completed</p>
                        </div>

                        <div class="d-flex align-items-center">
                            <div class="w60 square not-black-bg align-in-center cursor-pointer hover-effect mr-10 font-weight-400 font-size-24 disable-selection">@if(isset($tutors)) {{count($tutors)}} @endif</div>
                            <p class="light-text font-weight-300 font-size-13">Tutors studied with</p>
                        </div>
                    </div>
                </div>

                <p class="light-text font-weight-300 font-size-14 line-height-25">{{$user->description}}</p>
                <br>

                <p class="skill"><span><strong>Education: </strong> {{$user->education}}</span>
                    <span><strong>Language: </strong> {{$user->english}}</span>
                    <span><strong>Location: </strong> {{$user->location}}</span>
                    <span><strong>Male: </strong> {{$user->gender}}</span>
                    @if($user->phoneVisibility == 1) <span><strong>Contact#: </strong> {{$user->phone}} </span>@endif
                </p>

                <br>
                <strong class="sm_d-flex sm_justify-content-center sm_full-width sm_text-align-center">Skills</strong><br>
                <div class="align-in-center flex-wrap light-text font-weight-300 font-size-14 line-height-25 sm_text-align-center sm_mb-30 mt-10">
                    @foreach(explode(',',$user->skills) as $skill)
                        <div class="highlight">{{$skill}}</div> 
                    @endforeach
                    
                </div>

            </div>
            <div class="_35-width sm_full-width p-20 pt-0 sm_pl-0 sm_pr-0">
                @if(isset($tutors) && count($tutors) > 0)
                <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center m-5 mb-10">Tutors</h2>
                
                <div class="students">
                    @foreach ($tutors as $tutor)
                            <div>{{Str::substr($tutor->firstname, 0,1). '' .Str::substr($tutor->lastname, 0,1)}}</div>
                    @endforeach
                    
                </div>

                <br>
                @endif
                <div class="share-profile">
                    <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center m-5 mb-10">Share Profile</h2>
                    <input class="input-text" type="text" value="{{url()->current()}}" disabled>
                </div>
            </div>
        </section>
        <br><br><br>
        @if(isset($studentCourses))
        <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center">Completed Courses</h2>
        <br>
        <section class="_65-width justify-content-start sm_full-width flex-wrap sm_justify-content-center">
            @foreach ($studentCourses as $course)
                {{-- <div class="course-card cursor-pointer" onclick="showElem('reviewModal');">     --}}
                <div class="course-card cursor-pointer">    
                    <span class="category">{{$course->course->category}}</span>
                    <p class="title">{{$course->course->title}}</p>
                    <hr>
                    <p class="para">{{$course->course->description}}</p>
                    {{-- <a class="link">Feedback/Reviews</a> --}}
                </div>
            @endforeach
        </section>
        @endif
    </div>
</main>

@endsection