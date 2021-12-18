@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">My Dashboard</h3>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10" href="{{ asset('parent/add-child') }}">Add Child</a>
            <a class="btn-dashboard" href="{{ asset('parent/view-child') }}">View Children</a>
        </div>
    </div>

    <div class="full-width align-items-center flex-wrap text-white mt-20">

        <div class="_25-width justify-content-between p-20 min-h120 dashboard-card-bg mr-10 sm_48-width">
            <div>
                <p>Total Children</p>
                <p class="font-weight-500 font-size-26"> @if(isset($children)) {{count($children)}} @else 0 @endif</p>
            </div>
            <img src="{{ asset('assets/svg-icons/svg_graduation_students.svg') }}" alt="student-hat" width="50">
        </div>
    </div>

    @if(Session::has('success'))
        <div class="session-status">
            {{Session::get('success')}}
        </div>
    @endif 
    @if(Session::has('fail'))
        <div class="session-error">
            {{Session::get('fail')}}
        </div>
    @endif

    {{-- name comment ratting --}}
    @if(isset($studentCourses))
    @foreach ($studentCourses as $course)
    
    @if($course->status == 0 && $course->feedback_status == 1)
    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 dashboard-card-bg p-15 mt-30 align-in-center sm_p-30">
        <form action="{{ route('parent.dashboard.store') }}" method="POST" class="_70-width sm_full-width pt-50 pb-50 sm_pt-20 sm_pb-20">
            @csrf
            <div class="flex-column">
                <div class="formField">
                    <label>Name (optional)</label>
                    <input type="text" name="username" value="{{ old('username') }}" placeholder="Name (optional)">
                </div>
                <span class="text-danger text-small"> @error('username'){{ $message }} @enderror</span>

                <div class="formField">
                    <label>Comment (Review)</label>
                    <textarea name="comment" value="{{ old('comment') }}" placeholder="Provide comment/review about the tutor"></textarea>
                </div>
                <input type="hidden" name="student_course_id" value="{{$course->id}}">
                <input type="hidden" name="course_id" value="{{$course->course_id}}">
                <input type="hidden" name="tutor_id" value="{{$course->tid}}">
                <span class="text-danger text-small"> @error('comment'){{ $message }} @enderror</span>
            </div>
            <br>
    
            <label class="font-size-14 mt-20">Ratting</label>
            <div id="availability" class="availability _50-width mt-10 sm_full-width sm_font-size-11">
                <input class="availability-checkbox display-none" type="radio" id="ONE" name='ratting' value="1"><label for="ONE" class="square">1</label>
                <input class="availability-checkbox display-none" type="radio" id="TWO" name='ratting' value="2"><label for="TWO" class="square">2</label>
                <input class="availability-checkbox display-none" type="radio" id="THREE" name='ratting' value="3"><label for="THREE" class="square">3</label>
                <input class="availability-checkbox display-none" type="radio" id="FOUR" name='ratting' value="4"><label for="FOUR" class="square">4</label>
                <input class="availability-checkbox display-none" type="radio" id="FIVE" name='ratting' value="5"><label for="FIVE" class="square">5</label>
            </div>
            <span class="text-danger text-small"> @error('ratting'){{ $message }} @enderror</span>
            <br>
            <br>
            <div class="justify-content-between align-items-end full-width">
                <button type="submit" class="btn-dashboard green mb-10">Submit</button>
            </div>
        </form>
    </section>
    @endif
    @endforeach
    @endif

    @if(isset($children))
    <h3 class="h-dashboard mt-30 mb-10">Children Profiles</h3>
    <table class="full-width border-02 p-30">
        <tbody>
            <tr>
                
                @foreach($children as $child)
                <td class="table-row">
                    <div>
                        <span class="initials">{{ Str::substr($child->user->firstname, 0,1) ?? 'C' }}{{ Str::substr($child->user->lastname, 0,1) ?? 'H' }}</span>
                        <div class="st-info">
                            <label>{{ $child->user->firstname ?? '' }} {{ $child->user->lastname ?? '' }}</label>
                            <p>{{$child->user->created_at ?? ''}}</p>
                        </div>
                    </div>
                </td>
                @endforeach
                
                <td class="table-row">
                    <a href="{{url('parent/view-child')}}" class="btn-dashboard full-width small hover-effect cursor-pointer text-decoration-none">View All Children</a>
                </td>
        </tbody>
    </table>
    @endif
</div>
@endsection