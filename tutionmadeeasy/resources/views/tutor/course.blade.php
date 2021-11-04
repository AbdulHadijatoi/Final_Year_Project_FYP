@extends('layouts.dashboard')

@section('title', 'Course')

@section('content')
<div class="main-content light-text">
    @if(Session::has('success'))
        <div class="session-status">
            {{Session::get('success')}}
        </div>
    @endif 
    @if(Session::has('fail'))
        <div class="session-error">
            {{Session::get('fail')}}
        </div>
    @endif 
    <div class="justify-content-between align-items-center">
        <div>
            <h2 class="heading2">{{$course->title}}</h2>
            <p class="font-size-12 opacity-7">Category: <strong>{{$course->category}}</strong> | Duration <strong>{{$schedule->duration}}</strong> minutes</p>
        </div>
        <div class="align-in-center">
            
            <button class="btn-dashboard mr-10" onclick="document.getElementById('editScheduleForm').submit();">Save</button>

            

            @if($course->status == 1)
                <a class="btn-dashboard red" onclick="showElem('endCourseModal');">End Course</a>
            @else
                <form method="POST" action="{{ route('tutor.courses.update',$course->id) }}">
                    @csrf
                    @method('PUT')
                    <input type="submit" class="btn-dashboard cursor-pointer" value="Start Again">
                </form>
            @endif
            <!-- MODAL DIALOG BOX FOR END CORUSE-->
            <form method="POST" action="{{ route('tutor.courses.update',$course->id) }}" id="endCourseModal" class="main-content popup-container display-none">
                @csrf
                @method('PUT')
                <div class="backdrop" onclick="hideElem('endCourseModal');"></div>
                <div class="dialog alert align-in-center flex-column">
                    <label for="close_checkbox" class="btn-close" onclick="hideElem('endCourseModal');">+</label>
                    <h2 class="heading2 mb-20">Are you sure you want to end course?</h2>
                    
                    <div class="full-width align-in-center">
                        <input type="submit" class="btn-dashboard red mt-20 sm_mt-10 mr-10 cursor-pointer" value="endCourse">
                        <a class="btn-dashboard green mt-20 sm_mt-10 cursor-pointer" onclick="hideElem('endCourseModal');">Dismiss</a>
                    </div>
                </div>      
            </form>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 align-in-center">

        <div class="full-width justify-content-between align-items-center sm_flex-column sm_align-items-start">
            <div class="full-width sm_mr-0 sm_mb-20">
                <p class="para full-width">
                    {{$course->description}}
                </p>
            </div>
        </div>
        
    </section>

    <section class="full-width justify-content-between mt-40 sm_flex-column sm_mt-10">
        <div class="_60-width h200 justify-content-start sm_full-width flex-wrap sm_justify-content-center">
            


            @foreach ($quizes as $quiz) 
                <div class="course-card h200">
                    <div class="floating-box square">
                        <p>{{$quiz->duration}}</p>
                        <span class="font-size-10">Minutes</span>
                    </div>
                    <span class="category">{{Str::limit($quiz->category,18)}}</span>
                    <p class="title text-center">{{$quiz->title}}</p>
                    <p class="font-size-70 font-weight-800 full-width overflow-hidden text-center line-height-32">
                        <?php
                            $count = 0;
                        ?>
                        @foreach ($questions as $question)
                            @if($question->quiz_id == $quiz->id)
                                <?php $count +=1; ?>
                            @endif
                        @endforeach
                        {{$count}}
                    </span>
                    
                    <div class="link-div">
                        <a class="link-red" onclick="showElem('deleteModal');">Delete</a>
                        <a href="{{ route('tutor.quizes.show',$quiz->id) }}" class="link">View</a>
                    </div>
                </div>
            @endforeach


            <a href="{{ url('tutor/create-quiz') }}" class="course-card align-in-center hover-effect text-decoration-none" style="padding: 0px; font-size: 100px; color: var(--profile-bg);">
                +
            </a>
        </div>


        <form id="editScheduleForm" method="POST" action="{{ route('tutor.course.update',$schedule->id) }}" class="_35-width sm_full-width sm_mt-50">
            @csrf
            @method('PUT')
            <h2 class="font-weight-300 font-size-14 full-width sm_text-align-center m-5 mb-10 p-10" style="background: var(--subj-6);">Enrollment Key: <strong>{{$course->enrollment_key}}</strong></h2>
                <br>
                <label class="font-size-14">Duration: <span id="timeview"></span> minutes</label>
                <div class="sessionduration mt-10 full-width position-relative">
                    <input type="range" name="duration" min="1" max="200" value="{{$schedule->duration}}" class="slider" id="duration">
                </div>
                <span class="text-danger text-small"> @error('duration'){{ $message }} @enderror</span>

                <br>
        
                <label class="font-size-14 mt-20">Working days ({{$schedule->monday + $schedule->tuesday+$schedule->wednesday+$schedule->thursday+$schedule->friday+$schedule->saturday+$schedule->sunday}})</label>
                <div id="availability" class="availability full-width mt-10 sm_font-size-11">
                    <input class="availability-checkbox" type="checkbox" name='monday' @if($schedule->monday == 1) {{'checked'}} @endif id="monday" value="1"><label for="monday" class="square">MON</label>
                    <input class="availability-checkbox" type="checkbox" name='tuesday' @if($schedule->tuesday == 1) {{'checked'}} @endif id="tuesday" value="1"><label for="tuesday" class="square">TUE</label>
                    <input class="availability-checkbox" type="checkbox" name='wednesday' @if($schedule->wednesday == 1) {{'checked'}} @endif id="wednesday" value="1"><label for="wednesday" class="square">WED</label>
                    <input class="availability-checkbox" type="checkbox" name='thursday' @if($schedule->thursday == 1) {{'checked'}} @endif id="thursday" value="1"><label for="thursday" class="square">THU</label>
                    <input class="availability-checkbox" type="checkbox" name='friday' @if($schedule->friday == 1) {{'checked'}} @endif id="friday" value="1"><label for="friday" class="square">FRI</label>
                    <input class="availability-checkbox" type="checkbox" name='saturday' @if($schedule->saturday == 1) {{'checked'}} @endif id="saturday" value="1"><label for="saturday" class="square">SAT</label>
                    <input class="availability-checkbox" type="checkbox" name='sunday' @if($schedule->sunday == 1) {{'checked'}} @endif id="sunday" value="1"><label for="sunday" class="square">SUN</label>
                </div>
                <br>

                <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center m-5 mb-10">Students</h2>
                <div class="students">
                    <div>AB</div>
                    <div>SK</div>
                    <div>RN</div>
                    <div>HR</div>
                    <div>TK</div>
                    <div>CM</div>
                    <div>AB</div>
                    <div>SK</div>
                    <div>RN</div>
                    <div>HR</div>
                </div>

                <br>
                
        </form>

    </section>
    
</div>
@endsection