@extends('layouts.profile')

@section('title', 'Take Quiz')

@section('content')
<main class="full-width flex-column light-text">
    <div class="full-width h80 align-in-center flex-column flex-wrap light-text bg-dark2 sm_h60">
        <h2 class="font-weight-400 font-size-20 _80-width sm_text-align-center sm_font-size-14">@if(isset($quiz)) {{$quiz->title}} @endif</h2>
    </div>
    @if(isset($questions))
    @foreach ($questions as $question)
        <input type="hidden" class="question" value="{{$question->question}}">
        <input type="hidden" class="question_type" value="{{$question->question_type}}">
        <input type="hidden" class="answer" value="{{$question->answer}}">
        <input type="hidden" class="option1" value="@if(isset($answers)) @foreach($answers as $answer)  @if($answer->questions_id == $question->id){{$answer->option1}}@break  @endif @endforeach @endif">
        <input type="hidden" class="option2" value="@if(isset($answers)) @foreach($answers as $answer)  @if($answer->questions_id == $question->id){{$answer->option2}}@break  @endif @endforeach @endif">
        <input type="hidden" class="option3" value="@if(isset($answers)) @foreach($answers as $answer)  @if($answer->questions_id == $question->id){{$answer->option3}}@break  @endif @endforeach @endif">
        <input type="hidden" class="option4" value="@if(isset($answers)) @foreach($answers as $answer)  @if($answer->questions_id == $question->id){{$answer->option4}}@break  @endif @endforeach @endif">
    @endforeach
    @endif

    {{-- <input type="hidden" class="question" value="Q1">
    <input type="hidden" class="question_type" value="A">
    <input type="hidden" class="answer" value="hello">
    <input type="hidden" class="option1" value="A">
    <input type="hidden" class="option2" value="B">
    <input type="hidden" class="option3" value="C">
    <input type="hidden" class="option4" value="D"> --}}

    <div id="questionContainer">
        <div id="questionFieldContainer" class="full-width align-in-center h200 sm_h80">
            
        </div>
    
        <div id="answerContainer">

        </div>
    </div>
    
    <div class="full-width bg-dark-grey p-30 margin-auto sm_mt-15 position-absolute bottom-0 left-0 align-in-center">
        <div class="_80-width h80 justify-content-between align-items-center sm_flex-column sm_mb-50">
            <div>
                <!-- PROGRESS BAR SCORE -->
                <p class="font-size-13 align-in-center">Current Score <span id="score" class="ml-10 font-size-16 p-10 border-radius-150 br-1-subj-2">0.0</span></p>
            </div>

            <div class="flex-column justify-content-between align-items-center w500 _60-height border-l-01 border-r-01 px-20 pt-5 pb-5 sm_full-width sm_border-none sm_mt-10 sm_mb-10">
                <div class="full-width justify-content-between">
                    <p class="font-size-12 font-weight-500">Progress</p>
                    <p id="questionsCounter" class="font-size-12 font-weight-500">(0 Questions Left)</p>
                </div>
                <!-- PROGRESS BAR QUESTIONS -->
                <div class="full-width h6 bg-dark2 border-radius-150 overflow-hidden">
                    <div id="progressBar" class="w0 whatsapp-bg h6"></div>
                </div>
            </div>
            
            <div class="align-in-center">
                <form method="POST" action="{{route('student.take-quiz.store')}}" onsubmit="getElem('quiz_score').value = countScore; getElem('total_score').value = (totalQuestions*2); return confirm('Are you sure you want to end quiz?');">
                    @csrf
                    <input type="hidden" id="quiz_score" name="quiz_score">
                    <input type="hidden" id="total_score" name="total_score">
                    <input type="hidden" name="quiz_id" value="{{$_GET['quiz_id']}}">
                    <button type="submit" class="btn-dashboard w150 h50 subj-8-bg hover-effect mr-30 sm_w100 sm_h40 sm_mr-20" onclick="">End Quiz</button>
                </form>
                <button id="btnNext" onclick="nextQuestion();" class="btn-dashboard w150 h50 whatsapp-bg hover-effect sm_w100 sm_h40">Next</button>
            </div>
        </div>
    </div>
</main>

<script>
    function getElem(id){
        return document.getElementById(id);
    }
    function getAllElem(query){
        return document.querySelectorAll(query);
    }

    var questionContainer = getElem('questionContainer');
    var questionFieldContainer = getElem('questionFieldContainer');
    var answerContainer = getElem('answerContainer');
    var btnNext = getElem('btnNext');
    var progressBar = getElem('progressBar');
    var score = getElem('score');
    var countScore = 0;
    var questionsCounter = getElem('questionsCounter');
    var answer = getElem('answer');
    var option_1 = getElem('option_a');
    var option_2 = getElem('option_b');
    var option_3 = getElem('option_c');
    var option_4 = getElem('option_d');
    
    function getQuestion(index){
        return getAllElem('.question')[index].value;
    }
    function getAnswer(index){
        return getAllElem('.answer')[index].value;
    }
    function getQuestion_Type(index){
        return getAllElem('.question_type')[index].value;
    }
    function getOption1(index){
        return getAllElem('.option1')[index].value;
    }
    function getOption2(index){
        return getAllElem('.option2')[index].value;
    }
    function getOption3(index){
        return getAllElem('.option3')[index].value;
    }
    function getOption4(index){
        return getAllElem('.option4')[index].value;
    }
    var questions = [
            ['questions_1','C','B','A','B','C','D'],
            ['questions_2','B','B','1','2','3','4'],
            ['questions_3','hello','A'],
        ];

    var totalQuestions = getAllElem('.question').length;        
    var counter = 1;
    var progressValue = 0;
    var progressIncreament = (100/totalQuestions);

    function setMCQ(_question,_correctOption,_type,_option1 = '',_option2 = '',_option3 = '',_option4 = ''){
        questionFieldContainer.innerHTML = '<p id="question" class="">'+ _question +'</p>'
        if(_type =='A'){
            answerContainer.innerHTML = '<textarea id="answer" name="answer" placeholder="Answer"></textarea> <input type="hidden" name="correct_answer" value="'+_correctOption+'">';
        }else{
            answerContainer.innerHTML = '<label id="option_1"><input type="checkbox" id="option_a" name="option_a" value="A">a) '+
            _option1
            +'</label><label id="option_2"><input type="checkbox" id="option_b" name="option_b" value="B">b) '+
            _option2
            +'</label><label id="option_3"><input type="checkbox" id="option_c" name="option_c" value="C">c) '+
            _option3
            +'</label><label id="option_4"><input type="checkbox" id="option_d" name="option_d" value="D">d) '+
            _option4
            +'</label><input type="hidden" name="correct_answer" value="'+_correctOption+'">'
        }
    }

    document.querySelector('body').onload = function(){
        if(getQuestion_Type[0]== 'A'){
            setMCQ(getQuestion(0),getAnswer(0),getQuestion_Type(0));
        }else{
            setMCQ(getQuestion(0),getAnswer(0),getQuestion_Type(0),getOption1(0),getOption2(0),getOption3(0),getOption4(0));
        }

        questionsCounter.innerHTML = '('+(totalQuestions-counter)+' Questions Left)';
        progressBar.style.width = progressValue+'%';
    };

    function checkAnswer(correctAnswer,givenAnswer){
        if(givenAnswer == correctAnswer){
            countScore +=2;
            score.innerHTML = countScore+'.0';
        }else{
            score.innerHTML = countScore+'.0';
        }
    }

    function nextQuestion(){

        if(getQuestion_Type(counter-1)== 'A'){
            if(getElem('answer').value == ''){
                alert('Answer required');
                return;
            }else{
                // validate answer and make score
                checkAnswer(getAnswer(counter-1),getElem('answer').value);
            }
        }else{
            if(!(getElem('option_a').checked || getElem('option_b').checked || getElem('option_c').checked || getElem('option_d').checked)){
                alert('Choice is required');
                return;
            }else{
                // validate answer and make score
                if(getElem('option_a').checked){
                    checkAnswer(getAnswer(counter-1),getElem('option_a').value);
                }else if(getElem('option_b').checked){
                    checkAnswer(getAnswer(counter-1),getElem('option_b').value);
                }else if(getElem('option_c').checked){
                    checkAnswer(getAnswer(counter-1),getElem('option_c').value);
                }else if(getElem('option_d').checked){
                    checkAnswer(getAnswer(counter-1),getElem('option_d').value);
                }
            }
        }

        if(getQuestion_Type(counter)== 'A'){
            setMCQ(getQuestion(counter),getAnswer(counter),getQuestion_Type(counter));
        }else{
            setMCQ(getQuestion(counter),getAnswer(counter),getQuestion_Type(counter),getOption1(counter),getOption2(counter),getOption3(counter),getOption4(counter));
        }

        counter++;
        questionsCounter.innerHTML = '('+(totalQuestions-counter)+' Questions Left)';
        progressValue += progressIncreament;
        progressBar.style.width = progressValue+'%';
        if(counter == totalQuestions){
            btnNext.style.display = 'none';
        }

    }

</script>

@endsection
