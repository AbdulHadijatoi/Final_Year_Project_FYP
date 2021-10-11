
@extends('layouts.dashboard')

@section('content')

        <div class="main-content light-text">

            <div class="justify-content-between align-items-center">
                <h3 class="h-dashboard">View Quiz</h3>
                <div class="align-in-center">
                    <a class="btn-dashboard mr-10" href="add-course.html">View All Quiz</a>
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
                    <a href="#" class="full-width h100 align-in-center text-decoration-none dashboard-card-bg font-size-100 font-weight-600 text-dark hover-effect">+</a>
                </form>
            </section>
        </div>

        @endsection

    <!-- MODAL DIALOG BOX FOR UPDATE QUESTION-->
    <div id="editProfileModal" class="main-content popup-container display-none">
        <div class="dialog question align-in-center flex-column">
            <label for="close_checkbox" class="btn-close" onclick="hideElem('editProfileModal')">+</label>
            <h2 class="heading2 mb-20">Edit/update Question</h2>

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
                    <a href="#" class="btn-dashboard green mt-20 sm_mt-10">Save</a>
                </div>
            </form>
        </div>      
    </div>

    <!-- MODAL DIALOG BOX FOR DELETE-->
    <div id="deleteModal" class="main-content popup-container display-none">
        <div class="dialog alert align-in-center flex-column">
            <label for="close_checkbox" class="btn-close" onclick="hideElem('deleteModal');">+</label>
            <h2 class="heading2 mb-20">Are you sure you want to delete?</h2>
            
            <div class="full-width align-in-center">
                <a href="#" class="btn-dashboard red mt-20 sm_mt-10 mr-10">Delete</a>
                <a href="#" class="btn-dashboard green mt-20 sm_mt-10">Cancel</a>
            </div>
            
        </div>      
    </div>
    