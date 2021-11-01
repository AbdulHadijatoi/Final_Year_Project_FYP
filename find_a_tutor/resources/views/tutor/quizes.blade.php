@extends('layouts.dashboard')

@section('title', 'Quizes')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">View Quizes</h3>
        <div class="align-in-center">
            <div class="form-field sm_60-width">
                <div class="select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                    <select name="subjects">
                        <option  disabled>Choose Category</option>
                        <option selected>JS - Programming Language</option>
                        <option>English</option>
                        <option>Physics</option>
                        <option>Psychology</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20">
        <div class="course-card h200">
            <div class="floating-box square">
                <p>37</p>
                <span class="font-size-10">Minutes</span>
            </div>
            <span class="category">Programming</span>
            <p class="title text-center">JS - Javascript</p>
            <p class="font-size-70 font-weight-800 full-width overflow-hidden text-center line-height-32">43</span>
            
            <div class="link-div">
                <a class="link-red" onclick="showElem('deleteModal');">Delete</a>
                <a href="{{ url('tutor/quiz') }}" class="link">View</a>
            </div>
        </div>

        <div class="course-card h200">
            <div class="floating-box square">
                <p>37</p>
                <span class="font-size-10">Minutes</span>
            </div>
            <span class="category">Programming</span>
            <p class="title text-center">JS - Javascript</p>
            <p class="font-size-70 font-weight-800 full-width overflow-hidden text-center line-height-32">43</span>
            
            <div class="link-div">
                <a class="link-red" onclick="showElem('deleteModal');">Delete</a>
                <a href="{{ url('tutor/quiz') }}" class="link">View</a>
            </div>
        </div>

        <div class="course-card h200">
            <div class="floating-box square">
                <p>37</p>
                <span class="font-size-10">Minutes</span>
            </div>
            <span class="category">Programming</span>
            <p class="title text-center">JS - Javascript</p>
            <p class="font-size-70 font-weight-800 full-width overflow-hidden text-center line-height-32">43</span>
            
            <div class="link-div">
                <a class="link-red" onclick="showElem('deleteModal');">Delete</a>
                <a href="{{ url('tutor/quiz') }}" class="link">View</a>
            </div>
        </div>

        <div class="course-card h200">
            <div class="floating-box square">
                <p>37</p>
                <span class="font-size-10">Minutes</span>
            </div>
            <span class="category">Programming</span>
            <p class="title text-center">JS - Javascript</p>
            <p class="font-size-70 font-weight-800 full-width overflow-hidden text-center line-height-32">43</span>
            
            <div class="link-div">
                <a class="link-red" onclick="showElem('deleteModal');">Delete</a>
                <a href="{{ url('tutor/quiz') }}" class="link">View</a>
            </div>
        </div>

        <a href="{{ url('tutor/create-quiz') }}" class="course-card align-in-center hover-effect text-decoration-none" style="padding: 0px; font-size: 100px; color: var(--profile-bg);">
            +
        </a>
    </section>
</div>
@endsection