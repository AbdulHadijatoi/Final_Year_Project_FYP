@extends('layouts.dashboard')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">View Quiz</h3>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10" href="{{ url('tutor/quizes') }}">View Quizes</a>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 mt-50 align-in-center">

        <form action="" method="POST" class="mt-10 full-width flex-column font-size-12">
            <div class="align-in-center sm_flex-column mb-20">
                <div class="qa-field border-left-3 mr-10 sm_mr-0 sm_mb-10" type="text" name="question" placeholder="Enter your QUESTION">How many built-in data types are there?</div>
                <div class="qa-field align-in-center flex-column">
                    <div class="align-in-center full-width">
                        <div class="op-label">Six</div>
                        <div class="op-label">Eight</div>
                        <div class="op-label correct">Nine</div>
                        <div class="op-label">Ten</div>
                    </div>
                </div>
                <div class="text-light ml-10 sm_full-width sm_ml-0 sm_mt-10 font-weight-600">
                    <a class="btn-dashboard w100 mb-10 cursor-pointer" onclick="showElem('editProfileModal');">UPDATE</a>
                    <a class="cursor-pointer btn-dashboard w100 red" onclick="showElem('deleteModal')">DELETE</a>
                </div>
            </div>
            <div class="align-in-center sm_flex-column mb-20">
                <div class="qa-field border-left-3 mr-10 sm_mr-0 sm_mb-10" type="text" name="question" placeholder="Enter your QUESTION">How many built-in data types are there?</div>
                <div class="qa-field" type="text" name="answer" placeholder="Enter your ANSWER">undefined is the absence of a definition. It is used as the default value to un-initialized variables, function arguments that were not provided and missing properties of objects. Functions return undefined when nothing has been explicitly returned.</div>
                <div class="text-light ml-10 sm_full-width sm_ml-0 sm_mt-10 font-weight-600">
                    <a class="btn-dashboard w100 mb-10 cursor-pointer" onclick="showElem('editProfileModal');">UPDATE</a>
                    <a class="cursor-pointer btn-dashboard w100 red" onclick="showElem('deleteModal');">DELETE</a>
                </div>
            </div>
            <div class="align-in-center sm_flex-column mb-20">
                <div class="qa-field border-left-3 mr-10 sm_mr-0 sm_mb-10" type="text" name="question" placeholder="Enter your QUESTION">How many built-in data types are there?</div>
                <div class="qa-field" type="text" name="answer" placeholder="Enter your ANSWER">undefined is the absence of a definition. It is used as the default value to un-initialized variables, function arguments that were not provided and missing properties of objects. Functions return undefined when nothing has been explicitly returned.</div>
                <div class="text-light ml-10 sm_full-width sm_ml-0 sm_mt-10 font-weight-600">
                    <a class="btn-dashboard w100 mb-10 cursor-pointer" onclick="showElem('editProfileModal');">UPDATE</a>
                    <a class="cursor-pointer btn-dashboard w100 red" onclick="showElem('deleteModal');">DELETE</a>
                </div>
            </div>
            <!-- go to create question page -->
            <a href="{{ url('tutor/create-quiz') }}" class="full-width h100 align-in-center text-decoration-none dashboard-card-bg font-size-100 font-weight-600 text-dark hover-effect cursor-pointer">+</a>
        </form>
    </section>
</div>
@endsection