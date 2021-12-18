@extends('layouts.dashboard')

@section('title', 'Add User')

@section('content')
<div class="main-content light-text">

    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">Add Child</h3>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10" href="{{url('parent/view-child')}}">View Children</a>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 dashboard-card-bg p-15 mt-30 align-in-center sm_p-30 flex-column">
        
        @if(Session::has('success'))
            <div class="session-status">
                {{Session::get('success')}}
            </div>
        @endif 
        
        <form method="POST" action="{{ route('parent.add-child.store') }}" class="_70-width sm_full-width pt-50 pb-50 sm_pt-20 sm_pb-20">
            @csrf
            <div class="flex-column">
                <div class="formField">
                    <label>Firstname</label>
                    <input type="text" name="firstname" placeholder="Firstname" value="{{ old('firstname') }}" autocomplete="off" required>
                </div>
                <div class="formField">
                    <label>Lastname</label>
                    <input type="text" name="lastname" placeholder="Lastname" value="{{ old('lastname') }}" autocomplete="off" required>
                </div>
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
                <input type='hidden' name="role" value="Student">
                <input type='hidden' name="parent_id" value="@if(isset($parent)){{$parent->id}} @endif">
            </div>
            
            

            <div class="justify-content-between align-items-end full-width">
                <div class="form-field sm_60-width">
                    
                </div>
                <button type="submit" class="btn-dashboard green mb-10">Create Child</button>
            </div>
        </form>
    </section>
</div>
@endsection