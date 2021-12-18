@extends('layouts.dashboard')

@section('title', 'Admin Students')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center sm_flex-column">
        <h3 class="h-dashboard sm_full-width">Parents Profiles</h3>
        <div class="align-in-center sm_full-width sm_mt-10">
            <form action="{{ route('AdminParentSearch') }}" method="GET" class="formField flex-row br-light-white mb-0 align-in-center mr-10">
                <img class="ml-15" src="{{asset('assets/svg-icons/svg_search.svg')}}" width="18">
                <input class="full-width" type="text" name="search" value="{{ old('search') }}" placeholder="Username">
                <button type="submit" class="display-none"></button>
            </form>

            <a class="btn-dashboard mr-10 w200" href="{{ url('admin/add-user')}}">Add Parent</a>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 border-02 p-15 mt-30 align-in-center sm_p-30">
        @if(!isset($parents))
            <p class="font-size-15 font-weight-800 opacity-4">Looks like, there is no any record for parents!</p>
        @else
        <table class="full-width">
            <tbody>
                @if(isset($parents))
                @foreach($parents as $parent)
                <tr>
                    <td class="table-row">
                        <div>
                            <span class="initials">{{ Str::substr($parent->firstname, 0,1) ?? 'S' }}{{ Str::substr($parent->lastname, 0,1) ?? 'T' }}</span>
                            <div class="st-info">
                                <label>{{ $parent->firstname ?? '' }} {{ $parent->lastname ?? '' }}</label>
                                <p>Joined {{ date('d-M-Y', strtotime($parent->created_at)) ?? '' }}</p>
                            </div>
                        </div>
                        <div class="sm_full-width align-in-center">
                            {{-- VIEW PROFILE BUTTON --}}
                            @if($parent->email != '')
                            <a href="{{ route('admin.students.show',$parent->id) }}" class="btn-dashboard small hover-effect mr-10">View Children</a>
                            @endif
                            @if(!empty($parent->blocked_at))
                                <form method="POST" action="{{ route('admin.students.update',$parent->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn-dashboard green small hover-effect mr-10">Unblock</button>
                                </form>
                            @else
                                <a class="btn-dashboard red small hover-effect mr-10" onclick="showElem('blockModal{{$parent->id}}');">Block</a>
                                <!-- MODAL DIALOG BOX FOR BLOCK-->
                                <form method="POST" action="{{ route('admin.tutors.update',$parent->id) }}" id="blockModal{{$parent->id}}" class="main-content popup-container display-none">
                                    @csrf
                                    @method('PUT')
                                    <div class="backdrop" onclick="hideElem('blockModal{{$parent->id}}');"></div>
                                    <div class="dialog alert align-in-center flex-column">
                                        <label for="close_checkbox" class="btn-close" onclick="hideElem('blockModal{{$parent->id}}');">+</label>
                                        <h2 class="heading2 mb-20">Are you sure you want to block?</h2>
                                        
                                        <div class="full-width align-in-center">
                                            <input type="submit" class="btn-dashboard red mt-20 sm_mt-10 mr-10 cursor-pointer" value="Block">
                                            <a class="btn-dashboard green mt-20 sm_mt-10 cursor-pointer" onclick="hideElem('blockModal{{$parent->id}}');">Dismiss</a>
                                        </div>
                                    </div>      
                                </form>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        @endif
    </section>
</div>
@endsection