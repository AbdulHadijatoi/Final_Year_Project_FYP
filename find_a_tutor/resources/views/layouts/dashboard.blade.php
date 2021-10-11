<!DOCTYPE html>
<html lang="en">

@include('includes.dashboard.head')
<body>

    
    @include('includes.dashboard.tutor-sidebar')
    <section class="home-section full-width">
        @include('includes.dashboard.header')
        @yield('content')
    </section>

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
                    <a class="btn-dashboard green mt-20 sm_mt-10 cursor-pointer">Save</a>
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
                <a class="btn-dashboard red mt-20 sm_mt-10 mr-10 cursor-pointer">Delete</a>
                <a class="btn-dashboard green mt-20 sm_mt-10 cursor-pointer">Cancel</a>
            </div>
        </div>      
    </div>

    <!-- MODAL DIALOG BOX FOR DELETE-->
    <div id="alertModal" class="popup-container">
        <div class="dialog alert align-in-center flex-column">
            <label for="close_checkbox" class="btn-close" onclick="hideElem('alertModal');">+</label>
            <h2 class="heading2 mb-20">Are you sure you want to end quiz?</h2>
            
            <div class="full-width align-in-center">
                <a href="#" class="btn-dashboard w100 h40 subj-8-bg red mt-20 sm_mt-10 mr-10">END QUIZ</a>
                <a href="#" class="btn-dashboard w100 h40 whatsapp-bg green mt-20 sm_mt-10">Cancel</a>
            </div>
        </div>      
    </div>
    

    @include('includes.dashboard.footer')
    <script src="{{ asset('assets/js/panel.js') }}"></script>

</body>

</html>