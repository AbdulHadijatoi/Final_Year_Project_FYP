@extends('layouts.dashboard')

@section('title', 'Enroll Course')

@section('content')
<div class="main-content light-text">

    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">Enroll Courses</h3>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10" href="{{url('student/courses')}}">View Courses</a>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 dashboard-card-bg p-15 mt-30 align-in-center sm_p-30">
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
        <div class="_70-width sm_full-width pt-50 pb-50 sm_pt-20 sm_pb-20">
            
            <form action="{{route('student.enroll-course.store')}}" method="POST" class="justify-content-center flex-column align-items-center">
                @csrf
                <div class="formField">
                    <label>Enrollment Key</label>
                    <input type="text" name="enrollment_key" placeholder="h123You780zh">
                </div>
                <button type="submit" class="btn-dashboard green cursor-pointer">Enroll Course</button>
            </form>

            
        </div>
    </section>
</div>
@endsection