@extends('layouts.dashboard')

@section('title', 'Students')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">View Students</h3>
        <div class="align-in-center">
            <div class="formField flex-row br-light-white mb-0 align-in-center mr-10">
                <img class="ml-15" src="{{ asset('assets/svg-icons/svg_search.svg') }}" width="18">
                <input class="full-width" type="text" name="username" placeholder="Username">
            </div>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 border-02 p-15 mt-30 align-in-center sm_p-30">
        @if(!count($students) > 0)
            <p class="font-size-15 font-weight-800 opacity-2">Students must be having problem in enrolling your courses!</p>
        @else
            <table class="full-width">
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td class="table-row">
                                <div>
                                    <span class="initials">{{ Str::substr($student->firstname, 0,1) ?? 'S' }}{{ Str::substr($student->lastname, 0,1) ?? 'T' }}</span>
                                    <div class="st-info">
                                        <label>{{ $student->firstname ?? '' }} {{ $student->lastname ?? '' }}</label>
                                        <p>Joined {{ date('d-M-Y', strtotime($student->created_at)) ?? '' }}</p>
                                    </div>
                                </div>
                                <form class="d-flex" method="POST" action="{{route('tutor.students.destroy',$student->sid)}}" onsubmit="return confirm('Are you sure you want to remove {{ $student->firstname ?? '' }} {{ $student->lastname ?? '' }}');">
                                    @csrf
                                    @method('delete')
                                    <a href="https://wa.me/92{{$student->phone}}" class="btn-whatsapp hover-effect"><img src="{{ asset('assets/svg-icons/svg_whatsapp.svg') }}" width="24"></a>
                                    <button type="submit" class="btn-delete hover-effect text-light">Remove</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>
</div>
@endsection