@extends('layouts.dashboard')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center sm_flex-column">
        <h3 class="h-dashboard sm_full-width">Student Profiles</h3>
        <div class="align-in-center sm_full-width sm_mt-10">
            <div class="formField flex-row br-light-white mb-0 align-in-center mr-10">
                <img class="ml-15" src="{{asset('assets/svg-icons/svg_search.svg')}}" width="18">
                <input class="full-width" type="text" name="username" placeholder="Username">
            </div>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 border-02 p-15 mt-30 align-in-center sm_p-30">
        <table class="full-width">
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td class="table-row">
                        <div>
                            <span class="initials">{{ Str::substr($student->firstname, 0,1) ?? 'S' }}{{ Str::substr($student->lastname, 0,1) ?? 'T' }}</span>
                            <div class="st-info">
                                <label>{{ $student->firstname ?? '' }} {{ $student->lastname ?? '' }}</label>
                                <p>Joined {{ date('d-M-Y', strtotime($student->created_at)) ?? '' }}</p>
                            </div>
                        </div>
                        <div class="sm_full-width align-in-center">
                            <a href="{{ url('student/profile') }}" class="btn-dashboard small hover-effect mr-10">View Profile</a>
                            <div class="btn-dashboard small red hover-effect" onclick="showElem('blockModal');">Block</div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
@endsection