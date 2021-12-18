@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="main-content light-text">

    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">My Dashboard</h3>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10" href="{{url('admin/add-tutor')}}">Add User</a>
            <a class="btn-dashboard" href="{{url('admin/tutors')}}">View Tutors</a>
        </div>
    </div>

    <div class="full-width align-items-center flex-wrap text-white mt-20">

        <div class="_25-width justify-content-between p-20 min-h120 dashboard-card-bg mr-10 sm_48-width">
            <div>
                <p>Total Parents</p>
                <p class="font-weight-500 font-size-26">{{ $totalStudents ?? 0 }}</p>
            </div>
            <img src="{{asset('assets/svg-icons/svg_graduation_students.svg')}}" alt="student-hat" width="50">
        </div>

        <div class="_25-width justify-content-between p-20 min-h120 dashboard-card-bg sm_48-width">
            <div>
                <p>Total Tutors</p>
                <p class="font-weight-500 font-size-26">{{ $totalTutors ?? 0 }}</p>
            </div>
            <img src="{{asset('assets/svg-icons/svg_courses_b.svg')}}" alt="student-hat" width="50">
        </div>

    </div>
    @if(count($teachers) > 0)
    <h3 class="h-dashboard mt-30 mb-10">Tutors' Profiles</h3>
    <table class="full-width border-02 p-30">
        <tbody>
            <tr>
                @foreach($teachers as $teacher)
                <td class="table-row">
                    <div>
                        <span class="initials">{{ Str::substr($teacher->firstname, 0,1) ?? 'T' }}{{ Str::substr($teacher->lastname, 0,1) ?? 'U' }}</span>
                        <div class="st-info">
                            <label>{{ $teacher->firstname ?? '' }} {{ $teacher->lastname ?? '' }}</label>
                            <p>Joined {{ date('d-M-Y', strtotime($teacher->created_at)) ?? '' }}</p>
                        </div>
                    </div>
                </td>
                @endforeach
                <td class="table-row">
                    <a href="{{url('admin/tutors')}}" class="btn-dashboard full-width small hover-effect cursor-pointer text-decoration-none">View All</a>
                </td>
        </tbody>
    </table>
    @endif

    @if(count($parents) > 0)
    <h3 class="h-dashboard mt-30 mb-10">Parents' Profiles</h3>
    <table class="full-width border-02 p-30">
        <tbody>
            <tr>
                @foreach($parents as $parent)
                <td class="table-row">
                    <div>
                        <span class="initials">{{ Str::substr($parent->firstname, 0,1) ?? 'S' }}{{ Str::substr($parent->lastname, 0,1) ?? 'T' }}</span>
                        <div class="st-info">
                            <label>{{ $parent->firstname ?? '' }} {{ $parent->lastname ?? '' }}</label>
                            <p>Joined {{ date('d-M-Y', strtotime($parent->created_at)) ?? '' }}</p>
                        </div>
                    </div>
                </td>
                @endforeach
                <td class="table-row">
                    <a href="{{url('admin/parents')}}" class="btn-dashboard full-width small hover-effect cursor-pointer text-decoration-none">View All</a>
                </td>
            </tr>
        </tbody>
    </table>
    @endif
</div>
@endsection