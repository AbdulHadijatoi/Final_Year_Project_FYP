@extends('layouts.dashboard')

@section('content')
<div class="main-content light-text">

    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">Add Tutor</h3>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10" href="{{url('admin/tutors')}}">View Tutors</a>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 dashboard-card-bg p-15 mt-30 align-in-center sm_p-30">
        <div class="_70-width sm_full-width pt-50 pb-50 sm_pt-20 sm_pb-20">
            <div class="flex-column">
                <div class="formField">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Username">
                </div>

                <div class="formField">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password">
                </div>

                <div class="formField">
                    <label>Confrim Password</label>
                    <input type="password" name="cpassword" placeholder="Confirm Password">
                </div>
            </div>
            
            

            <div class="justify-content-between align-items-end full-width">
                <div class="form-field sm_60-width">
                    
                </div>
                <a class="btn-dashboard green mb-10">Add Tutor</a>
            </div>
        </div>
    </section>
</div>
@endsection