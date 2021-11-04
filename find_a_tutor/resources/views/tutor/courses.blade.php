@extends('layouts.dashboard')

@section('title', 'Courses')

@section('content')
        <div class="main-content light-text">
            
            <div class="justify-content-between align-items-center">
                <h3 class="h-dashboard">Active Courses</h3>
                <div class="align-in-center">
                    <a class="btn-dashboard mr-10" href="{{ url('tutor/add-course') }}">Add Course</a>
                </div>
            </div>

            <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20">
                @foreach($courses as $course)
                @if($course->status == 1)
                <div class="course-card min-h280">
                    <span class="category">{{Str::limit($course->category,20)}}</span>
                    <p class="title">{{Str::limit($course->title,18)}}</p>
                    <span>43 Students</span>
                    <hr>
                    <p class="para"> {{Str::limit($course->description, 120)}} </p>
                    <div class="link-div">
                        <a href="{{ route('tutor.courses.show',$course->id) }}"  class="link">View</a>
                    </div>
                    
                </div>
                @endif
                @endforeach
                <a href="{{ url('tutor/add-course') }}" class="course-card align-in-center hover-effect text-decoration-none" style="padding: 0px; font-size: 100px; color: var(--profile-bg);">
                    +
                </a>
            </section>
            <br><br>
            <h3 class="h-dashboard">Ended Courses</h3>
            <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center opacity-5">
                @foreach ($courses as $course)
                    @if($course->status == 0)
                        <div class="course-card min-h280">
                            <span class="category">{{Str::limit($course->category,20)}}</span>
                            <p class="title">{{Str::limit($course->title,18)}}</p>
                            <span>43 Students</span>
                            <hr>
                            <p class="para"> {{Str::limit($course->description, 120)}} </p>
                            <div class="link-div">
                                <a href="{{ route('tutor.courses.show',$course->id) }}"  class="link">View</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </section>
        </div>
@endsection