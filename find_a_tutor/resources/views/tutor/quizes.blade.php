@extends('layouts.dashboard')

@section('title', 'Quizes')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">Your Quizes</h3>
        <div class="align-in-center">
            <div class="form-field sm_60-width">
                <form method="POST" action="{{route('tutor.quizes.store')}}" class="select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                    @csrf
                    <select name="course_id" onchange="this.form.submit();">
                        <option selected disabled>All Course</option>
                        @if(isset($courses))
                        @foreach ($courses as $course)
                            <option value="{{ $course->id}}" @if(isset($course_id) && $course->id == $course_id) {{'selected'}} @endif>{{ $course->title}}</option>
                        @endforeach
                        @endif
                    </select>
                </form>
            </div>
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
                <p class="title text-center">{{Str::limit($quiz->title,14)}}</p>
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
                
                <form  method="POST" action="{{route('tutor.quizes.destroy',$quiz->id)}}" onsubmit="return confirm('Are you sure you want to remove {{ $quiz->title ?? '' }}');" class="link-div">
                    @csrf
                    @method('delete')
                    <button type="submit" class="link-red">Delete</button>
                    <a href="{{ route('tutor.quizes.show',$quiz->id) }}" class="link">View</a>
                </form>
            </div>
        @endforeach
        @endif
        <a href="{{ url('tutor/create-quiz') }}" class="course-card align-in-center hover-effect text-decoration-none" style="padding: 0px; font-size: 100px; color: var(--profile-bg);">
            +
        </a>
    </section>
</div>
@endsection