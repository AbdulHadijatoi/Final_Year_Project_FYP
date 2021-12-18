@extends('layouts.dashboard')

@section('title', 'Admin Students')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center sm_flex-column">
        <h3 class="h-dashboard sm_full-width">Student Profiles</h3>
        <div class="align-in-center sm_full-width sm_mt-10">
            <form action="{{ route('AdminStudentSearch') }}" method="POST" class="formField flex-row br-light-white mb-0 align-in-center mr-10">
                @csrf
                <img class="ml-15" src="{{asset('assets/svg-icons/svg_search.svg')}}" width="18">
                <input class="full-width" type="text" name="search" value="{{ old('search') }}" placeholder="Username">
                <button type="submit" class="display-none"></button>
            </form>

            <a class="btn-dashboard mr-10 w200" href="{{ url('admin/add-user')}}">Add Student</a>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 border-02 p-15 mt-30 align-in-center sm_p-30">
        @if(!count($students) > 0)
            <p class="font-size-15 font-weight-800 opacity-2">Looks like, there is no any record for students!</p>
        @else
        <table class="full-width">
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td class="table-row">
                        <div>
                            <span class="initials">{{ Str::substr($student->user->firstname, 0,1) ?? 'S' }}{{ Str::substr($student->user->lastname, 0,1) ?? 'T' }}</span>
                            <div class="st-info">
                                <label>{{ $student->user->firstname ?? '' }} {{ $student->user->lastname ?? '' }}</label>
                                <p>Joined {{ date('d-M-Y', strtotime($student->created_at)) ?? '' }}</p>
                            </div>
                        </div>
                        <div class="sm_full-width align-in-center">
                            {{-- VIEW PROFILE BUTTON --}}
                            @if($student->user->username != '')
                            <a href="{{ route('profile',$student->user->username) }}" class="btn-dashboard small hover-effect mr-10">View Profile</a>
                            @endif
                            @if(!empty($student->user->blocked_at))
                                <form method="POST" action="{{ route('admin.students.update',$student->user->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn-dashboard green small hover-effect mr-10">Unblock</button>
                                </form>
                            @else
                                <a class="btn-dashboard red small hover-effect mr-10" onclick="showElem('blockModal{{$student->user->id}}');">Block</a>
                                <!-- MODAL DIALOG BOX FOR BLOCK-->
                                <form method="POST" action="{{ route('admin.tutors.update',$student->user->id) }}" id="blockModal{{$student->user->id}}" class="main-content popup-container display-none">
                                    @csrf
                                    @method('PUT')
                                    <div class="backdrop" onclick="hideElem('blockModal{{$student->user->id}}');"></div>
                                    <div class="dialog alert align-in-center flex-column">
                                        <label for="close_checkbox" class="btn-close" onclick="hideElem('blockModal{{$student->user->id}}');">+</label>
                                        <h2 class="heading2 mb-20">Are you sure you want to block?</h2>
                                        
                                        <div class="full-width align-in-center">
                                            <input type="submit" class="btn-dashboard red mt-20 sm_mt-10 mr-10 cursor-pointer" value="Block">
                                            <a class="btn-dashboard green mt-20 sm_mt-10 cursor-pointer" onclick="hideElem('blockModal{{$student->user->id}}');">Dismiss</a>
                                        </div>
                                    </div>      
                                </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </section>
</div>
@endsection