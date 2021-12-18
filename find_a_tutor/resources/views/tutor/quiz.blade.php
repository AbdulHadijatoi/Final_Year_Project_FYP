@extends('layouts.dashboard')

@section('title', 'Quiz')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <div class="align-in-center">
            <h3 class="h-dashboard">{{$quiz->title}}</h3>
        </div>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10" href="{{ url('tutor/quizes') }}">View All Quizes</a>
            <a class="btn-dashboard mr-10" onclick="showElem('addQuestionModal');">Add New Question</a>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 mt-50 align-in-center">

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

        @if($errors->any())
            {!! implode('', $errors->all('<div class="session-error">:message</div>')) !!}
        @endif

        <div class="mt-10 full-width flex-column font-size-12">

            @foreach ($questions as $question)
                <div class="align-in-center sm_flex-column mb-20">
                    <div class="qa-field border-left-3 mr-10 sm_mr-0 sm_mb-10" type="text" name="question" placeholder="Enter your QUESTION">{{$question->question}}</div>
                    @if($question->question_type == 'B')
                        <div class="qa-field align-in-center flex-column">
                            <div class="align-in-center full-width">
                                @foreach ($answers as $answer)
                                    @if($answer->questions_id == $question->id)
                                        <div class="op-label @if($question->answer == 'a') {{'correct'}} @endif">{{$answer->option1}}</div>
                                        <div class="op-label @if($question->answer == 'b') {{'correct'}} @endif">{{$answer->option2}}</div>
                                        <div class="op-label @if($question->answer == 'c') {{'correct'}} @endif">{{$answer->option3}}</div>
                                        <div class="op-label @if($question->answer == 'd') {{'correct'}} @endif">{{$answer->option4}}</div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @else
                        <div class="qa-field" type="text" name="answer" placeholder="Enter your ANSWER">{{$question->answer}}</div>
                    @endif
                    
                    <div class="text-light ml-10 sm_full-width sm_ml-0 sm_mt-10 font-weight-600">
                        {{-- <a class="btn-dashboard w100 mb-10 cursor-pointer" onclick="showElem('editProfileModal');">UPDATE</a> --}}
                        <a class="cursor-pointer btn-dashboard w100 red" onclick="showElem('deleteQuestionModal')">DELETE</a>

                        <!-- MODAL DIALOG BOX FOR DELETE QUESTION-->
                        <div id="deleteQuestionModal" class="main-content popup-container display-none">
                            <div class="backdrop" onclick="hideElem('deleteQuestionModal');"></div>
                            <div class="dialog alert align-in-center flex-column">
                                <label for="close_checkbox" class="btn-close" onclick="hideElem('deleteQuestionModal');">+</label>
                                <h2 class="heading2 mb-20">Are you sure you want to delete?</h2>
                                
                                <div class="full-width align-in-center">
                                    <a onclick="location.reload();" class="btn-dashboard red mt-20 sm_mt-10 mr-10 cursor-pointer">Delete</a>
                                    <a class="btn-dashboard green mt-20 sm_mt-10 cursor-pointer" onclick="hideElem('deleteQuestionModal');">Dismiss</a>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- WORKING ON UPDATE!!!! --}}
            <!-- go to create question page -->
            <a onclick="showElem('addQuestionModal');" class="full-width h100 align-in-center text-decoration-none dashboard-card-bg font-size-100 font-weight-600 text-dark hover-effect cursor-pointer">+</a>
            
            <!-- MODAL DIALOG BOX FOR ADD QUESTION-->
            <div id="addQuestionModal" class="main-content popup-container display-none">
                <div class="backdrop" onclick="hideElem('addQuestionModal');"></div>
                <div class="dialog alert align-in-center flex-column">
                    <label for="close_checkbox" class="btn-close" onclick="hideElem('addQuestionModal');">+</label>
                    <h2 class="heading2 mb-20">Add Question</h2>
                    
                    <form action="{{ route('add_question_route') }}" method="POST" class="mt-50 full-width flex-column">
                        @csrf 
                        {{-- CHANGE TYPE BUTTONS --}}
                        <div class="text-light sm_full-width sm_ml-0 sm_mt-10 align-in-center mb-10">
                            <div class="align-in-center">
                                <label class="qa-label hover-effect mr-10" id="qal" for="qa">
                                    <input class="qar" id="qa" type="radio" name="question_type" value="A" checked onchange="showHide('qa_container','mc_container'); clearMCQ();">
                                    <span class="align-in-center">SINGLE ANSWER</span>
                                </label>
                                <label class="qa-label hover-effect" id="qam" for="mc">
                                    <input class="qar" id="mc" type="radio" name="question_type" value="B" onchange="showHide('mc_container','qa_container'); clearAnswer();">
                                    <span class="align-in-center">MULTI CHOICE</span>
                                </label>
                            </div>
                            <span class="text-danger text-small"> @error('description'){{ $message }} @enderror</span>
                        </div>
                        <div class="align-in-center sm_flex-column full-width">
                            <textarea class="qa-field mr-10 sm_mr-0 sm_mb-10" type="text" name="question" placeholder="Enter your QUESTION" required></textarea>
                            <textarea id="qa_container" class="qa-field" type="text" name="answer_a" placeholder="Enter your ANSWER"></textarea>
                            {{-- OPTIONS --}}
                            <div id="mc_container" class="qa-field align-in-center flex-column">
                                
                            </div>
                        </div>
                        <p></p>
                        <span class="text-danger text-small"> @error('question'){{ $message }} @enderror</span>
                        <span class="text-danger text-small"> @error('answer_a'){{ $message }} @enderror</span>
                        <span class="text-danger text-small"> @error('correct_option'){{ $message }} @enderror</span>
                        <span class="text-danger text-small"> @error('option_a'){{ $message }} @enderror</span>
                        <span class="text-danger text-small"> @error('option_b'){{ $message }} @enderror</span>
                        <span class="text-danger text-small"> @error('option_c'){{ $message }} @enderror</span>
                        <span class="text-danger text-small"> @error('option_d'){{ $message }} @enderror</span>
                        <input type="hidden" name="quiz_id" value="{{$quiz->id}}">
                        <div class="full-width align-in-center">
                            <button type="submit" onsubmit="if(document.getElementById('qa').checked) document.getElementById('mc_container').innertHTML = '';" class="btn-dashboard green mt-20 sm_mt-10 mr-10">Save</button>
                            <a class="btn-dashboard mt-20 sm_mt-10 cursor-pointer" onclick="hideElem('addQuestionModal');">Dismiss</a>
                        </div>
                    </form>
                </div>      
            </div>



        </div>
    </section>
</div>
@endsection