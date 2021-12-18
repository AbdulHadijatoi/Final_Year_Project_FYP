@extends('layouts.dashboard')

@section('title', 'Enroll Course')

@section('content')
<div class="main-content light-text">

    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">Enroll Courses</h3>
        <div class="align-in-center">
            <div class="form-field sm_60-width">
                
            </div>
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
            
            <form action="{{route('parent.enroll-course.store')}}" method="POST" class="justify-content-center flex-column align-items-center">
                @csrf
                <div class="select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                    <select name="student_id" required>
                        <option selected disabled>Select Child</option>
                        @if(isset($children))
                        @foreach ($children as $child)
                            <option value="{{$child->id}}">{{$child->user->firstname .' '. $child->user->lastname}}</option>    
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="formField">
                    <label>Enrollment Key</label>
                    <input type="text" name="enrollment_key" placeholder="h123You780zh" required>
                </div>
                <button type="submit" class="btn-dashboard green cursor-pointer">Enroll Course</button>
            </form>

            
        </div>
    </section>
</div>
@endsection