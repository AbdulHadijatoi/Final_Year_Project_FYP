@extends('layouts.dashboard')

@section('title', 'Add User')

@section('content')
<div class="main-content light-text">

    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">Add User</h3>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10" href="{{url('admin/tutors')}}">View Tutors</a>
            <a class="btn-dashboard mr-10" href="{{url('admin/students')}}">View Students</a>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 dashboard-card-bg p-15 mt-30 align-in-center sm_p-30 flex-column">
        
        @if(Session::has('success'))
            <div class="session-status">
                {{Session::get('success')}}
            </div>
        @endif 
        
        <form method="POST" action="{{ route('admin.add-user.store') }}" class="_70-width sm_full-width pt-50 pb-50 sm_pt-20 sm_pb-20">
            @csrf
            <div class="flex-column">
                <div class="formField">
                    <label>email</label>
                    <input type="email" name="email" placeholder="email" value="{{ old('email') }}" autocomplete="off" required>
                </div>

                <span class="text-danger text-small"> @error('email'){{ $message }} @enderror</span>

                <div class="formField">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password" autocomplete="off" required>
                </div>

                <span class="text-danger text-small"> @error('password'){{ $message }} @enderror</span>

                <div class="formField">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" autocomplete="off" required>
                </div>

                <span class="text-danger text-small"> @error('cpassword'){{ $message }} @enderror</span>

                <div class="formField">
                    <select name="role" required>
                        <option selected disabled>Select account type</option>
                        <option>Student</option>
                        <option>Teacher</option>
                    </select>
                </div>
                <span class="text-danger text-small"> @error('role'){{ $message }} @enderror</span>
            </div>
            
            

            <div class="justify-content-between align-items-end full-width">
                <div class="form-field sm_60-width">
                    
                </div>
                <button type="submit" class="btn-dashboard green mb-10">Create User</button>
            </div>
        </form>
    </section>
</div>
@endsection