@extends('layouts.dashboard')

@section('title', 'Students')

@section('content')

<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">Your children</h3>
        <div class="align-in-center">
            <form action="" method="POST" class="formField flex-row br-light-white mb-0 align-in-center mr-10">
                @csrf
                <img class="ml-15" src="{{asset('assets/svg-icons/svg_search.svg')}}" width="18">
                <input class="full-width" type="text" name="search" value="{{ old('search') }}" placeholder="Search..">
                <button type="submit" class="display-none"></button>
            </form>

            <a class="btn-dashboard mr-10 w200" href="{{ url('parent/add-child')}}">Add Child</a>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 border-02 p-15 mt-30 align-in-center sm_p-30">
        @if(!isset($students))
            <p class="font-size-15 font-weight-800 opacity-2">Looks like you don't have any child right now :(</p>
        @else
            <table class="full-width">
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td class="table-row">
                                <div>
                                    <span class="initials">{{ Str::substr($student->user->firstname, 0,1) ?? 'S' }}{{ Str::substr($student->user->lastname, 0,1) ?? 'T' }}</span>
                                    {{-- <span class="initials">ST</span> --}}
                                    <div class="st-info">
                                        <label>{{ $student->user->firstname ?? '' }} {{ $student->user->lastname ?? '' }}</label>
                                        {{-- <label>Sanaullah</label> --}}
                                        <p>Joined {{ date('d-M-Y', strtotime($student->created_at)) ?? '' }}</p>
                                        {{-- <p>2 courses 5 quizes</p> --}}
                                    </div>
                                </div>
                                <div>

                                    <a class="btn-dashboard red small hover-effect mr-10" onclick="showElem('blockModal{{$student->id}}');">Not Child</a>
                                    <!-- MODAL DIALOG BOX FOR REMOVE CHILD-->
                                    <form method="POST" action="{{ route('parent.view-child.destroy',$student->id) }}" id="blockModal{{$student->id}}" class="main-content popup-container display-none">
                                        @csrf
                                        @method('delete')
                                        <div class="backdrop" onclick="hideElem('blockModal{{$student->id}}');"></div>
                                        <div class="dialog alert align-in-center flex-column">
                                            <label for="close_checkbox" class="btn-close" onclick="hideElem('blockModal{{$student->id}}');">+</label>
                                            <h2 class="heading2 mb-20">Are you sure {{ $student->user->firstname ?? '' }} {{ $student->user->lastname ?? '' }} is not your child?</h2>
                                            
                                            <div class="full-width align-in-center">
                                                <input type="submit" class="btn-dashboard border-none red mt-20 sm_mt-10 mr-10 cursor-pointer" value="Remove">
                                                <a class="btn-dashboard green mt-20 sm_mt-10 cursor-pointer" onclick="hideElem('blockModal{{$student->id}}');">Dismiss</a>
                                            </div>
                                        </div>      
                                    </form>
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