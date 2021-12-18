@extends('layouts.dashboard')

@section('title', 'Child Progress')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">View Progress</h3>
        <div class="align-in-center">
           

            <div class="form-field sm_60-width">
                <div class="select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                    <select id="selected_child" name="child_id" onchange="filter_child();">
                        <option selected disabled>All Children</option>
                        @if(isset($children))
                        @foreach ($children as $child)
                            <option value="{{$child->id}}">{{$child->user->firstname .' '. $child->user->lastname}}</option>    
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20">
        
        @if(isset($quizResult))
        @foreach ($quizResult as $result) 
            {{-- CALCULATION OF PASSING SCORE --}}
            <?php
                $obtained = $result->score;
                $total = $result->total_score;
                $passing = floor(($total*0.6));
            ?>
            <div class="course-card h200">
                
                @if($obtained < $passing)
                <div class="floating-box square" style="background-color: var(--subj-8);">
                    <p>{{$result->score ?? ''}}/{{$result->total_score ?? ''}}</p>
                @else
                <div class="floating-box square" style="background-color: var(--whatsapp);">
                    <p>{{$result->score ?? ''}}/{{$result->total_score ?? ''}}</p>
                @endif
                    <span class="font-size-10">Marks</span>
                </div>
                {{-- <span class="category">{{Str::limit($quiz->category,18)}}</span> --}}
                <span class="category">{{$result->quiz->course->category}}</span>
                <p class="title text-center">{{$result->quiz->title}}</p>
                <span class="text-center">{{count($result->quiz->questions)}} Questions</span>
                
                <div class="link-div">
                    
                    @if($obtained < $passing)
                    <a class="link-red">Failed</a>
                    @else
                    <a class="link-green">Passed</a>
                    @endif
                </div>
            </div>
        @endforeach
        @endif

    </section>
</div>
@endsection