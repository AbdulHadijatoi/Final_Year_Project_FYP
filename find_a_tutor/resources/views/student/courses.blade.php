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
        <div class="course-card min-h280">
            <span class="category">Programming</span>
            <p class="title">JS - Javascript</p>
            <span>43 Quizes</span>
            <hr>
            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
            <div class="link-div">
                <a href="{{url('student/quizes')}}" class="link">View Quizes</a>
            </div>
        </div>

        <div class="course-card min-h280">
            <span class="category">Programming</span>
            <p class="title">JS - Javascript</p>
            <span>43 Quizes</span>
            <hr>
            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
            <div class="link-div">
                <a href="{{url('student/quizes')}}" class="link">View Quizes</a>
            </div>
        </div>

        <div class="course-card min-h280">
            <span class="category">Programming</span>
            <p class="title">JS - Javascript</p>
            <span>43 Quizes</span>
            <hr>
            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
            <div class="link-div">
                <a href="{{url('student/quizes')}}" class="link">View Quizes</a>
            </div>
        </div>

        <div class="course-card min-h280">
            <span class="category">Programming</span>
            <p class="title">JS - Javascript</p>
            <span>43 Quizes</span>
            <hr>
            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
            <div class="link-div">
                <a href="{{url('student/quizes')}}" class="link">View Quizes</a>
            </div>
        </div>

        <a href="{{url('student/enroll-course')}}" class="course-card height-auto align-in-center hover-effect text-decoration-none cursor-pointer" style="padding: 0px; font-size: 100px; color: var(--profile-bg);">
            +
        </a>
    </section>

    <h3 class="h-dashboard mt-60">Ended Courses</h3>
    <section class="_65-width justify-content-start sm_full-width flex-wrap sm_justify-content-center">
        <div class="course-card cursor-pointer" onclick="showElem('reviewModal');">
            <div class="floating-box square">
                <img alt="star_icon">
                <p>3.7</p>
            </div>
            <span class="category">Programming</span>
            <p class="title">JS - Javascript</p>
            <span>43 Quizes</span>
            <hr>
            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
            <div class="link-div">
                <a class="link">Feedback/Reviews</a>
            </div>
        </div>
        <div class="course-card cursor-pointer" onclick="showElem('reviewModal');">
            <div class="floating-box square">
                <img alt="star_icon">
                <p>3.7</p>
            </div>
            <span class="category">Programming</span>
            <p class="title">JS - Javascript</p>
            <span>43 Quizes</span>
            <hr>
            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
            <div class="link-div">
                <a class="link">Feedback/Reviews</a>
            </div>
        </div>
        <div class="course-card cursor-pointer" onclick="showElem('reviewModal');">
            <div class="floating-box square">
                <img alt="star_icon">
                <p>3.7</p>
            </div>
            <span class="category">Programming</span>
            <p class="title">JS - Javascript</p>
            <span>43 Quizes</span>
            <hr>
            <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
            <div class="link-div">
                <a class="link">Feedback/Reviews</a>
            </div>
        </div>
    </section>
</div>
@endsection