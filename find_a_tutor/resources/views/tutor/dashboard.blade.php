@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">My Dashboard</h3>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10" href="{{ asset('tutor/add-course') }}">Add Course</a>
            <a class="btn-dashboard" href="{{ asset('tutor/create-quiz') }}">Create Quiz</a>
        </div>
    </div>

    <div class="full-width align-items-center flex-wrap text-white mt-20">

        <div class="_25-width justify-content-between p-20 min-h120 dashboard-card-bg mr-10 sm_48-width">
            <div>
                <p>You have students</p>
                <p class="font-weight-500 font-size-26">421</p>
            </div>
            <img src="{{ asset('assets/svg-icons/svg_graduation_students.svg') }}" alt="student-hat" width="50">
        </div>

        <div class="_25-width justify-content-between p-20 min-h120 dashboard-card-bg sm_48-width">
            <div>
                <p>You have Courses</p>
                <p class="font-weight-500 font-size-26">12</p>
            </div>
            <img src=" {{ asset('assets/svg-icons/svg_courses_b.svg') }}" alt="student-hat" width="50">
        </div>

    </div>

    <form class="full-width mt-10 p-30 dashboard-card-bg align-items-start flex-column">
        <div class="full-width justify-content-between">
            <h3>My Schedule</h3>
            <div class="align-items-start flex-column">
                <label>Select Course</label>
                <div class="select-container hover-effect mr-10 sm_mt-10">
                    <select name="subjects">
                        <option disabled>Select Course</option>
                        <option selected>JS - Programming Language</option>
                        <option>English</option>
                        <option>Physics</option>
                        <option>Psychology</option>
                    </select>
                </div>
            </div>
        </div> 
        <label class="font-size-14">Session Duration</label>

        <div class="sessionduration _50-width mt-10 sm_full-width position-relative">
            <input type="range" name="duration" min="1" max="200" value="60" class="slider" id="duration">
            <p><span id="timeview"></span> minutes</p>
        </div>

        <label class="font-size-14 mt-20">Days of the week</label>
        <div id="availability" class="availability _50-width mt-10 sm_full-width sm_font-size-11">
            <input class="availability-checkbox" checked type="checkbox" name='monday' id="monday"><label for="monday" class="square">MON</label>
            <input class="availability-checkbox" type="checkbox" name='tuesday' id="tuesday"><label for="tuesday" class="square">TUE</label>
            <input class="availability-checkbox" type="checkbox" name='wednesday' id="wednesday"><label for="wednesday" class="square">WED</label>
            <input class="availability-checkbox" type="checkbox" name='thursday' id="thursday"><label for="thursday" class="square">THU</label>
            <input class="availability-checkbox" type="checkbox" name='friday' id="friday"><label for="friday" class="square">FRI</label>
            <input class="availability-checkbox" type="checkbox" name='saturday' id="saturday"><label for="saturday" class="square">SAT</label>
            <input class="availability-checkbox" type="checkbox" name='sunday' id="sunday"><label for="sunday" class="square">SUN</label>
        </div>

        <div class="full-width justify-content-end mt-20">
            <a class="btn-dashboard mr-10">Save</a>
        </div>
    </form>
</div>
@endsection