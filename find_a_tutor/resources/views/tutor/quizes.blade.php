
@extends('layouts.dashboard')

@section('content')

        <div class="main-content light-text">

            <div class="justify-content-between align-items-center">
                <h3 class="h-dashboard">View Quizes</h3>
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

            <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20">
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
                        <a class="link">View</a>
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
                        <a class="link">View</a>
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
                        <a class="link">View</a>
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
                        <a class="link">View</a>
                    </div>
                </div>

                <div class="course-card align-in-center hover-effect" style="padding: 0px; font-size: 100px; color: var(--profile-bg);">
                    +
                </div>

            </section>
        </div>

        @endsection

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

  