
@extends('layouts.dashboard')

@section('content')
        <div class="main-content light-text">

            <div class="justify-content-between align-items-center">
                <h3 class="h-dashboard">View Courses</h3>
                <div class="align-in-center">
                    <a class="btn-dashboard mr-10" href="{{ url('tutor/add-course') }}">Add Course</a>
                </div>
            </div>

            <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20">
                <div class="course-card min-h280">
                    <span class="category">Programming</span>
                    <p class="title">JS - Javascript</p>
                    <span>43 Students</span>
                    <hr>
                    <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
                    <div class="link-div">
                        <a class="link-red">Delete</a>
                        <a href="{{ url('tutor/view-course') }}" class="link">View</a>
                    </div>
                </div>

                <div class="course-card min-h280">
                    <span class="category">Programming</span>
                    <p class="title">JS - Javascript</p>
                    <span>43 Students</span>
                    <hr>
                    <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
                    <div class="link-div">
                        <a class="link-red">Delete</a>
                        <a href="{{ url('tutor/view-course') }}" class="link">View</a>
                    </div>
                </div>

                <div class="course-card min-h280">
                    <span class="category">Programming</span>
                    <p class="title">JS - Javascript</p>
                    <span>43 Students</span>
                    <hr>
                    <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
                    <div class="link-div">
                        <a class="link-red">Delete</a>
                        <a href="{{ url('tutor/view-course') }}" class="link">View</a>
                    </div>
                </div>

                <div class="course-card min-h280">
                    <span class="category">Programming</span>
                    <p class="title">JS - Javascript</p>
                    <span>43 Students</span>
                    <hr>
                    <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been</p>
                    <div class="link-div">
                        <a class="link-red">Delete</a>
                        <a href="{{ url('tutor/view-course') }}" class="link">View</a>
                    </div>
                </div>

                <a href="{{ url('tutor/add-course') }}" class="course-card align-in-center hover-effect text-decoration-none" style="padding: 0px; font-size: 100px; color: var(--profile-bg);">
                    +
                </a>

            </section>
        </div>
@endsection