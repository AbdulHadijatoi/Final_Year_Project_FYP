@extends('layouts.dashboard')

@section('title', 'Quizes')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">View Quizes</h3>
        <div class="align-in-center">
            <form action="{{route('filter_quizes')}}" method="GET" class="form-field sm_60-width">
                <div class="select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                    <select name="course_id" onchange="this.form.submit();">
                        <option selected disabled>All Courses</option>
                        @if(isset($courses))
                            @foreach ($courses as $course)
                                <option value="{{ $course->id}}" @if(isset($_GET['course_id']) && $_GET['course_id'] == $course->id) selected @endif>{{ $course->title}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </form>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20">
        
        @if(isset($quizes))
        @foreach ($quizes as $quiz) 
            <div class="course-card h200">
                <div class="floating-box square">
                    <p>{{$quiz->duration}}</p>
                    <span class="font-size-10">Minutes</span>
                </div>
                <span class="category">{{Str::limit($quiz->category,18)}}</span>
                <p class="title text-center">{{$quiz->title}}</p>
                <p class="font-size-40 font-weight-800 full-width overflow-hidden text-center line-height-32">
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
                @if($count>0)
                <div class="link-div">
                    <a class="link-green" onclick="showElem('alertModal{{$quiz->id}}');">Attemp Quiz</a>
                </div>
                @endif
            </div>
            <!-- MODAL DIALOG BOX FOR EDIT USER-->
            <form method="GET" action="{{route('student.take-quiz.show',$quiz->id)}}" id="alertModal{{$quiz->id}}" class="main-content popup-container display-none">
                <div class="backdrop" onclick="hideElem('alertModal{{$quiz->id}}');"></div>
                <div class="dialog alert align-in-center flex-column">
                    <label for="close_checkbox" class="btn-close" onclick="hideElem('alertModal{{$quiz->id}}');">+</label>
                    <h2 class="heading2 mb-20">Are you sure you want to attemp?</h2>
                    
                    <div class="full-width align-in-center">
                        <input type="hidden" name="quiz_id" value="{{$quiz->id}}">
                        <button type="submit" class="btn-dashboard red mt-20 sm_mt-10 mr-10 cursor-pointer">Attemp</button>
                        <a class="btn-dashboard mt-20 sm_mt-10 cursor-pointer" onclick="hideElem('alertModal{{$quiz->id}}');">Cancel</a>
                    </div>
                </div>      
            </form>
        @endforeach
        @endif
        

    </section>
</div>
@endsection