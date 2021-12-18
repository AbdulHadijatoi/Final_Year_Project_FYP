@extends('layouts.dashboard')

@section('title', 'Courses')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">Your enrolled Courses</h3>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10" href="{{('student/enroll-course')}}">Enroll Course</a>
        </div>
    </div>

    
    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20">
        @if(isset($courses))
        @foreach($courses as $course)
        <form method="GET" action="{{route('filter_quizes')}}" class="course-card min-h280">
            <span class="category">{{Str::limit($course->category,20)}}</span>
            <p class="title">{{Str::limit($course->title,18)}}</p>
            <hr>
            <p class="para"> {{ Str::limit($course->description, 120)}} </p>
            <div class="link-div">
                <input type="hidden" name="course_id" value="{{$course->id}}">
                <button type="submit"  class="link">View Quizes</button>
            </div>
        </form>
        @endforeach
        @endif

        <a href="{{url('student/enroll-course')}}" class="course-card height-auto align-in-center hover-effect text-decoration-none cursor-pointer" style="padding: 0px; font-size: 100px; color: var(--profile-bg);">
            +
        </a>
    </section>

</div>
@endsection