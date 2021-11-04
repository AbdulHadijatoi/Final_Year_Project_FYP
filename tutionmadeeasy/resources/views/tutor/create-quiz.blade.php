@extends('layouts.dashboard')

@section('title', 'Create Quiz')

@section('content')
        <div class="main-content light-text">
            <div class="justify-content-between align-items-center">
                <h3 class="h-dashboard">Create Quiz</h3>
                <div class="align-in-center">
                    <a href="{{ url('tutor/quizes') }}" class="btn-dashboard">View All Quizes</a>
                </div>
            </div>

            <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 mt-50 align-in-center">
                {{-- course_id,title, description, duration --}}
                <form action="{{ route('tutor.create-quiz.store') }}" method="POST" class="_70-width sm_full-width pt-50 pb-50 sm_pt-20 sm_pb-20">
                    @csrf
                    <div class="flex-column">
                        <div class="form-field sm_60-width">
                            <label>Course</label>
                            <div class="select-container full-width brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45 focus-green" style="border: none;">
                                <select class="full-width" name="course_id">
                                    <option selected disabled>Choose Course</option>
                                    @foreach ($courses as $course)
                                        <option value="{{$course->id}}">{{$course->title}}</option>    
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <span class="text-danger text-small"> @error('course'){{ $message }} @enderror</span>

                        <div class="formField">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ old('title') }}" placeholder="Course Title">
                        </div>
                        <span class="text-danger text-small"> @error('title'){{ $message }} @enderror</span>
        
                        <div class="formField">
                            <label>Description</label>
                            <textarea name="description" value="{{ old('description') }}" placeholder="What is your course about"></textarea>
                        </div>
                        <span class="text-danger text-small"> @error('description'){{ $message }} @enderror</span>
                    </div>
        
                    <label class="font-size-14">Quiz Duration</label>
                    <div class="sessionduration mt-10 full-width position-relative">
                        <input type="range" name="duration" min="1" max="200" value="60" class="slider" id="duration">
                        <p><span id="timeview"></span> minutes</p>
                    </div>
                    <span class="text-danger text-small"> @error('duration'){{ $message }} @enderror</span>
        
                    <br>
            
                    <div class="justify-content-between align-items-end full-width">
                        <div></div>
                        <button type="submit" class="btn-dashboard green mb-10">Create Quiz</button>
                    </div>
                </form>


            </section>
        </div>
@endsection