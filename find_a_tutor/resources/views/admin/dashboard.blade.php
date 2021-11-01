@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="main-content light-text">

    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">My Dashboard</h3>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10" href="{{url('admin/add-tutor')}}">Add Tutor</a>
            <a class="btn-dashboard" href="{{url('admin/tutors')}}">View Tutors</a>
        </div>
    </div>

    <div class="full-width align-items-center flex-wrap text-white mt-20">

        <div class="_25-width justify-content-between p-20 min-h120 dashboard-card-bg mr-10 sm_48-width">
            <div>
                <p>Total Students</p>
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

    <h3 class="h-dashboard mt-30 mb-10">Tutor Profiles</h3>
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

    <h3 class="h-dashboard mt-30 mb-10">Student Profiles</h3>
    <table class="full-width border-02 p-30">
        <tbody>
            <tr>
                @foreach($students as $student)
                <td class="table-row">
                    <div>
                        <span class="initials">{{ Str::substr($student->firstname, 0,1) ?? 'S' }}{{ Str::substr($student->lastname, 0,1) ?? 'T' }}</span>
                        <div class="st-info">
                            <label>{{ $student->firstname ?? '' }} {{ $student->lastname ?? '' }}</label>
                            <p>Joined {{ date('d-M-Y', strtotime($student->created_at)) ?? '' }}</p>
                        </div>
                    </div>
                </td>
                @endforeach
                <td class="table-row">
                    <a href="{{url('admin/students')}}" class="btn-dashboard full-width small hover-effect cursor-pointer text-decoration-none">View All</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection