
@extends('layouts.dashboard')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <div>
            <h2 class="heading2">JS - Javascript Programming</h2>
        </div>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10">Edit</a>
            <a class="btn-dashboard red" onclick="showElem('deleteModal');">End Course</a>
        </div>
    </div>

    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 align-in-center">

        <div class="justify-content-between align-items-center sm_flex-column sm_align-items-start">
            <div class="full-width mr-30 sm_mr-0 sm_mb-20">
                <p class="para">
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, Nascetur Pellentesque Ridules mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis
                    Integer tincidunt. Cras dapibus.
                </p>
            </div>
        </div>
        
    </section>

    <section class="full-width justify-content-between mt-40 sm_flex-column sm_mt-10">
        <div class="_60-width justify-content-start sm_full-width flex-wrap sm_justify-content-center">
            <div class="course-card h200">
                <div class="floating-box square">
                    <p>37</p>
                    <span class="font-size-10">Minutes</span>
                </div>
                <span class="category">Programming</span>
                <p class="title text-center">JS - Javascript</p>
                <p class="font-size-70 font-weight-800 full-width overflow-hidden text-center line-height-32">43</span>
                
                <div class="link-div">
                    <a class="link-red" onclick="showElem('deleteModal');">Delete</a>
                    <a href="{{ url('tutor/quiz') }}" class="link">View</a>
                </div>
            </div>

            <div class="course-card h200">
                <div class="floating-box square">
                    <p>37</p>
                    <span class="font-size-10">Minutes</span>
                </div>
                <span class="category">Programming</span>
                <p class="title text-center">JS - Javascript</p>
                <p class="font-size-70 font-weight-800 full-width overflow-hidden text-center line-height-32">43</span>
                
                <div class="link-div">
                    <a class="link-red" onclick="showElem('deleteModal');">Delete</a>
                    <a href="{{ url('tutor/quiz') }}" class="link">View</a>
                </div>
            </div>

            <div class="course-card h200">
                <div class="floating-box square">
                    <p>37</p>
                    <span class="font-size-10">Minutes</span>
                </div>
                <span class="category">Programming</span>
                <p class="title text-center">JS - Javascript</p>
                <p class="font-size-70 font-weight-800 full-width overflow-hidden text-center line-height-32">43</span>
                
                <div class="link-div">
                    <a class="link-red" onclick="showElem('deleteModal');">Delete</a>
                    <a href="{{ url('tutor/quiz') }}" class="link">View</a>
                </div>
            </div>

            <div class="course-card h200">
                <div class="floating-box square">
                    <p>37</p>
                    <span class="font-size-10">Minutes</span>
                </div>
                <span class="category">Programming</span>
                <p class="title text-center">JS - Javascript</p>
                <p class="font-size-70 font-weight-800 full-width overflow-hidden text-center line-height-32">43</span>
                
                <div class="link-div">
                    <a class="link-red" onclick="showElem('deleteModal');">Delete</a>
                    <a href="{{ url('tutor/quiz') }}" class="link">View</a>
                </div>
            </div>

            <a href="{{ url('tutor/create-quiz') }}" class="course-card align-in-center hover-effect text-decoration-none" style="padding: 0px; font-size: 100px; color: var(--profile-bg);">
                +
            </a>
        </div>


        <div class="_35-width sm_full-width sm_mt-50">

                <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center m-5 mb-10">Students</h2>
                <div class="students">
                    <div>AB</div>
                    <div>SK</div>
                    <div>RN</div>
                    <div>HR</div>
                    <div>TK</div>
                    <div>CM</div>
                    <div>AB</div>
                    <div>SK</div>
                    <div>RN</div>
                    <div>HR</div>
                </div>
                <br><br>
                <h2 class="font-weight-500 font-size-14 full-width sm_text-align-center m-5 mb-10">Availability</h2>
                <div id="availability" class="availability">
                    <div class="square active">MON</div>
                    <div class="square active">TUE</div>
                    <div class="square">WED</div>
                    <div class="square">THU</div>
                    <div class="square">FRI</div>
                    <div class="square active">SAT</div>
                    <div class="square">SUN</div>
                </div>

                <br>
                
            </div>

    </section>
    
</div>
@endsection