@extends('layouts.dashboard')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center sm_flex-column">
        <h3 class="h-dashboard sm_full-width">Tutor Profiles</h3>
        <div class="align-in-center sm_full-width sm_mt-10">
            <div class="formField flex-row br-light-white mb-0 align-in-center mr-10">
                <img class="ml-15" src="{{asset('assets/svg-icons/svg_search.svg')}}" width="18">
                <input class="full-width" type="text" name="username" placeholder="Username">
            </div>
            <a class="btn-dashboard mr-10 w200" href="{{('admin/add-tutor')}}">Add Tutor</a>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 border-02 p-15 mt-30 align-in-center sm_p-30">
        <table class="full-width">
            <tbody>
                @foreach($teachers as $teacher)
                <tr>
                    <td class="table-row">
                        <div>
                            <span class="initials">{{ Str::substr($teacher->firstname, 0,1) ?? 'T' }}{{ Str::substr($teacher->lastname, 0,1) ?? 'U' }}</span>
                            <div class="st-info">
                                <label>{{ $teacher->firstname ?? '' }} {{ $teacher->lastname ?? '' }}</label>
                                <p>Joined {{ date('d-M-Y', strtotime($teacher->created_at)) ?? '' }}</p>
                            </div>
                        </div>
                        <div class="sm_full-width align-in-center">
                            <a href="{{ url('tutor/profile') }}" class="btn-dashboard small hover-effect mr-10">View Profile</a>
                            <div class="btn-dashboard small red hover-effect" onclick="showElem('deleteModal');">Delete</div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</div>
@endsection