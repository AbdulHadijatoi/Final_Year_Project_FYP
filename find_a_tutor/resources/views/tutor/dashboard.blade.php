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
                <p class="font-weight-500 font-size-26">@if(isset($totalStudents)) {{count($totalStudents)}} @endif </p>
            </div>
            <img src="{{ asset('assets/svg-icons/svg_graduation_students.svg') }}" alt="student-hat" width="50">
        </div>

        <div class="_25-width justify-content-between p-20 min-h120 dashboard-card-bg sm_48-width">
            <div>
                <p>You have Courses</p>
                <p class="font-weight-500 font-size-26">{{$totalCourses ?? 0}}</p>
            </div>
            <img src=" {{ asset('assets/svg-icons/svg_courses_b.svg') }}" alt="student-hat" width="50">
        </div>
    </div>

    <form action="{{route('set_schedule')}}" method="POST" onsubmit="if(getElem('selected_course') === ''){ alert('Please select course'); return false;}" class="full-width mt-10 p-30 dashboard-card-bg align-items-start flex-column">
        @csrf
        <span id="outputMessage" class="ajax-message display-none"></span>
        <div id="dashboard_course_filter_form" class="full-width justify-content-between">

            <h3>My Schedule</h3>
            <div id="courseForm" class="align-items-start flex-column">
                <label>Choose Course</label>
                <div class="select-container hover-effect mr-10 sm_mt-10">
                    <select id="selected_course" name="course_id" onchange="filter_dashboard_course();" required>
                        <option selected disabled>Choose Course</option>
                        @foreach ($courses as $course)
                            <option value="{{$course->id}}">{{$course->title}}</option>    
                        @endforeach
                    </select>
                </div>
            </div>
        </div> 
        <label class="font-size-14">Session Duration</label>

        <div class="sessionduration _50-width mt-10 sm_full-width position-relative">
            <input type="range" id="duration" name="duration" min="1" max="200" value="60" class="slider" id="duration">
            <p><span id="timeview"></span> minutes</p>
        </div>

        <label class="font-size-14 mt-20">Days of the week</label>
        <div id="availability" class="availability _50-width mt-10 sm_full-width sm_font-size-11">
            <input class="availability-checkbox" type="checkbox" name='monday' id="monday" value="1"><label for="monday" class="square">MON</label>
            <input class="availability-checkbox" type="checkbox" name='tuesday' id="tuesday" value="1"><label for="tuesday" class="square">TUE</label>
            <input class="availability-checkbox" type="checkbox" name='wednesday' id="wednesday" value="1"><label for="wednesday" class="square">WED</label>
            <input class="availability-checkbox" type="checkbox" name='thursday' id="thursday" value="1"><label for="thursday" class="square">THU</label>
            <input class="availability-checkbox" type="checkbox" name='friday' id="friday" value="1"><label for="friday" class="square">FRI</label>
            <input class="availability-checkbox" type="checkbox" name='saturday' id="saturday" value="1"><label for="saturday" class="square">SAT</label>
            <input class="availability-checkbox" type="checkbox" name='sunday' id="sunday" value="1"><label for="sunday" class="square">SUN</label>
        </div>
        <span class="text-danger text-small">@error('course_id'){{ $message }} @enderror</span>
        <span class="text-danger text-small">@error('duration'){{ $message }} @enderror</span>
        <div class="full-width justify-content-end mt-20">
            
            {{-- <a class="btn-dashboard mr-10" onclick="save_dashboard_schedule();">Save</a> --}}
            <button type="submit" class="btn-dashboard mr-10">Save</button>
        </div>
    </form>

    <script>
        function getElem(id){
            return document.getElementById(id);
        }
        let monday = getElem('monday');
        let tuesday = getElem('tuesday');
        let wednesday = getElem('wednesday');
        let thursday = getElem('thursday');
        let friday = getElem('friday');
        let saturday = getElem('saturday');
        let sunday = getElem('sunday');
        let duration = getElem('duration');

        function filter_dashboard_course() {
            var request = new XMLHttpRequest();
            request.open("POST", "{{route('get_schedule')}}");
            request.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);

            var course_id = getElem('selected_course').value;
            var formData = new FormData();
            formData.set("course_id", course_id);
            request.send(formData);
            request.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    var response = this.responseText;
                    var response = JSON.parse(this.responseText);
                    if(response.monday == 1){
                        monday.checked = true;
                    }else{
                        monday.checked = false;
                    }
                    if(response.tuesday == 1){
                        tuesday.checked = true;
                    }else{
                        tuesday.checked = false;
                    }
                    if(response.wednesday == 1){
                        wednesday.checked = true;
                    }else{
                        wednesday.checked = false;
                    }
                    if(response.thursday == 1){
                        thursday.checked = true;
                    }else{
                        thursday.checked = false;
                    }
                    if(response.friday == 1){
                        friday.checked = true;
                    }else{
                        friday.checked = false;
                    }
                    if(response.saturday == 1){
                        saturday.checked = true;
                    }else{
                        saturday.checked = false;
                    }
                    if(response.sunday == 1){
                        sunday.checked = true;
                    }else{
                        sunday.checked = false;
                    }
                    duration.value = response.duration;
                }
            };
        }

        
    </script>
</div>
@endsection