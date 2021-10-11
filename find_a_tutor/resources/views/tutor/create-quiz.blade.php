
@extends('layouts.dashboard')

@section('content')
        <div class="main-content light-text">

            <div class="justify-content-between align-items-center">
                <h3 class="h-dashboard">Create Quiz</h3>
                <div class="align-in-center">
                    <div class="form-field sm_60-width">
                        <div class="select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                            <select name="subjects">
                                <option  disabled>Choose Category</option>
                                <option selected>JS - Programming Language</option>
                                <option>English</option>
                                <option>Physics</option>
                                <option>Psychology</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 mt-50 align-in-center">

                <div class="justify-content-between align-items-center sm_flex-column sm_align-items-start">
                    <div class="full-width mr-30 sm_mr-0 sm_mb-20">
                        <h2 class="heading2">JS - Javascript Programming</h2>
                        <p class="para">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, Nascetur Pellentesque Ridules mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis
                            Integer tincidunt. Cras dapibus.
                        </p>
                    </div>
                    <a href="#" class="btn-dashboard">View Quizes</a>
                </div>
                <div class="border-y-1-white full-width p-5 mt-30 justify-content-between align-items-center">
                    <div class="symbol-box">
                        <span class="symbol-questions"><img src="assets/svg-icons/svg_bars_questions.svg"></span>
                        <span class="symbol-label">72 Questions</span>
                    </div>

                    <div class="symbol-box">
                        <span class="symbol-questions"><img src="assets/svg-icons/svg_graduation_students.svg"></span>
                        <span class="symbol-label">23 Students</span>
                    </div>
                    <div class="symbol-box"></div>
                </div>

                <form action="" method="POST" class="mt-50 full-width flex-column">
                    <div class="align-in-center sm_flex-column">
                        <textarea class="qa-field mr-10 sm_mr-0 sm_mb-10" type="text" name="question" placeholder="Enter your QUESTION"></textarea>
                        <textarea id="qa_container" class="qa-field" type="text" name="answer" placeholder="Enter your ANSWER"></textarea>
                        <div id="mc_container" class="qa-field align-in-center flex-column">
                            <div class="align-in-center">
                                <div class="op-field"><input type="radio" name="c-op" value="1"><input type="text" placeholder="A"></div>
                                <div class="op-field ml-15"><input type="radio" name="c-op" value="3"><input type="text" placeholder="C"></div>
                            </div>
                            <div class="align-in-center">
                                <div class="op-field"><input type="radio" name="c-op" value="2"><input type="text" placeholder="B"></div>
                                <div class="op-field ml-15"><input type="radio" name="c-op" value="4"><input type="text" placeholder="D"></div>
                            </div>
                        </div>
                        <div class="text-light ml-10 sm_full-width sm_ml-0 sm_mt-10">
                            <label class="qa-label hover-effect" id="qal" for="qa"><input class="qar" id="qa" type="radio" name="q-type" value="1" checked onchange="showHide('qa_container','mc_container')"><span>QUESTION ANSWER</span></label>
                            <label class="qa-label hover-effect" id="qam" for="mc"><input class="qar" id="mc" type="radio" name="q-type" value="2" onchange="showHide('mc_container','qa_container')"><span>MULTI CHOICE</span></label>
                        </div>
                    </div>
                    <div class="full-width align-in-center">
                        <a href="#" class="btn-dashboard green mt-20 sm_mt-10">Save & Add new</a>
                    </div>
                </form>
            </section>
        </div>
@endsection