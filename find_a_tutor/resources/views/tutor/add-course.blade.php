@extends('layouts.dashboard')

@section('title', 'Add Course')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">Create Courses</h3>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10" href="{{ url('tutor/courses') }}">View Courses</a>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 dashboard-card-bg p-15 mt-30 align-in-center sm_p-30">
        <div class="_70-width sm_full-width pt-50 pb-50 sm_pt-20 sm_pb-20">
            <div class="flex-column">
                <div class="formField">
                    <label>Title</label>
                    <input type="text" name="title" placeholder="Course Title">
                </div>

                <div class="formField">
                    <label>Description</label>
                    <textarea name="description" placeholder="What is your course about"></textarea>
                </div>
            </div>
            
            <div class="justify-content-between sm_flex-column align-items-center">
                <div class="formField mr-20">
                    <label>Enrollment Key</label>
                    <input type="text" name="enrollment-key" disabled placeholder="h123You780zh">
                </div>
                <a class="btn-dashboard green mt-10 cursor-pointer">Generate</a>
            </div>

            <div class="justify-content-between align-items-end full-width">
                <div class="form-field sm_60-width">
                    <label>Category</label>
                    <div class="select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                        <select name="subjects">
                            <option selected disabled>Choose Category</option>
                            <option >JS - Programming Language</option>
                            <option>English</option>
                            <option>Physics</option>
                            <option>Psychology</option>
                        </select>
                    </div>
                </div>
                <a class="btn-dashboard green mb-10">Add Course</a>
            </div>
        </div>
    </section>
</div>
@endsection