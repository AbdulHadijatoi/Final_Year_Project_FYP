@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">My Dashboard</h3>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10" href="{{url('student/quizes')}}">View Quizes</a>
            <a class="btn-dashboard" href="{{url('student/enroll-course')}}">Enroll Course</a>
        </div>
    </div>

    <div class="full-width align-items-center flex-wrap text-white mt-20">
        <div class="_25-width justify-content-between p-20 min-h120 dashboard-card-bg mr-10 sm_48-width">
            <div>
                <p>You have Tutors</p>
                <p class="font-weight-500 font-size-26">@if(isset($tutors)) {{$tutors->totalTutors}} @else 0 @endif</p>
            </div>
            <img src="{{asset('assets/svg-icons/svg_courses_b.svg')}}" alt="student-hat" width="50">
        </div>

        <div class="_25-width justify-content-between p-20 min-h120 dashboard-card-bg sm_48-width">
            <div>
                <p>You have Courses</p>
                <p class="font-weight-500 font-size-26">@if(isset($courses)) {{count($courses)}} @endif</p>
            </div>
            <img src="{{asset('assets/svg-icons/svg_view_records.svg')}}" alt="student-hat" width="50">
        </div>

    </div>

    <div class="full-width mt-50 align-items-start flex-column">
        <p>Your Courses</p>
        <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20">
            @if(isset($courses))
            @foreach($courses as $course)
            <form method="GET" action="{{route('filter_quizes')}}" class="course-card min-h280">
                <span class="category">{{Str::limit($course->category,20)}}</span>
                <p class="title">{{Str::limit($course->title,18)}}</p>
                <hr>
                <p class="para"> {{Str::limit($course->description, 120)}} </p>
                <div class="link-div">
                    <input type="hidden" name="course_id" value="{{$course->id}}">
                    <button type="submit"  class="link">View Quizes</button>
                </div>
            </form>
            @endforeach
            @endif
        </section>
    </div>
</div>
@endsection
