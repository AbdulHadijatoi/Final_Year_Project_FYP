@extends('layouts.home')

@section('content')
<main class="full-width flex-column light-text">
    <div class="full-width h80 align-in-center flex-column flex-wrap light-text bg-dark2 sm_h60">
        <h2 class="font-weight-400 font-size-20 _80-width sm_text-align-center sm_font-size-14">JS - Javascript Programming</h2>
    </div>

    <div class="full-width align-in-center h200 sm_h80">
        <p class="font-weight-400 font-size-28 _50-width text-center font-family-monospace sm_font-size-20 sm_80-width">How many built-in data types are there and what are they?</p>
    </div>

    <div class="_50-width h200 answer-bg p-30 margin-auto border-01 sm_mt-15 sm_90-width">
        <textarea class="full-width font-size-20 full-height border-none bg-transparent light-text font-family-monospace sm_font-size-15" name="answer" placeholder="Answer"></textarea>
    </div>
    
    <div class="full-width bg-dark-grey p-30 margin-auto sm_mt-15 position-absolute bottom-0 left-0 align-in-center">
        <div class="_80-width h80 justify-content-between align-items-center sm_flex-column sm_mb-50">
            <div>
                <!-- PROGRESS BAR SCORE -->
                <p class="font-size-13 align-in-center">Current Score <span class="ml-10 font-size-16 p-10 border-radius-150 br-1-subj-2">4.7</span></p>
            </div>

            <div class="flex-column justify-content-between align-items-center w500 _60-height border-l-01 border-r-01 px-20 pt-5 pb-5 sm_full-width sm_border-none sm_mt-10 sm_mb-10">
                <div class="full-width justify-content-between">
                    <p class="font-size-12 font-weight-500">Progress</p>
                    <p class="font-size-12 font-weight-500">(7 Questions Left)</p>
                </div>
                <!-- PROGRESS BAR QUESTIONS -->
                <div class="full-width h6 bg-dark2 border-radius-150 overflow-hidden">
                    <div class="_30-width whatsapp-bg h6"></div>
                </div>
            </div>
            
            <div class="align-in-center">
                <button class="btn-dashboard w150 h50 subj-8-bg hover-effect mr-30 sm_w100 sm_h40 sm_mr-20" onclick="showElem('alertModal');">End Quiz</button>
                <button class="btn-dashboard w150 h50 whatsapp-bg hover-effect sm_w100 sm_h40">Next</button>
            </div>
        </div>
    </div>
</main>
@endsection
