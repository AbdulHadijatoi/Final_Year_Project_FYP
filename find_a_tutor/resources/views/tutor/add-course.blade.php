@extends('layouts.dashboard')

@section('title', 'Add Course')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">Create Courses</h3>
        <div class="align-in-center">
            <a class="btn-dashboard mr-10" href="{{ url('tutor/courses') }}">View Courses</a>
        </div>
    </div>

    {{-- category, title, description, enrollment_key, status, tutor_id --}}
    <section class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20 dashboard-card-bg p-15 mt-30 align-in-center sm_p-30">
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
        <form action="{{ route('tutor.add-course.store') }}" method="POST" class="_70-width sm_full-width pt-50 pb-50 sm_pt-20 sm_pb-20">
            @csrf
            <div class="flex-column">
                <div class="formField">
                    <label>Title</label>
                    <input type="text" name="title" value="{{ old('title') }}" placeholder="Course Title">
                </div>
                <span class="text-danger text-small"> @error('title'){{ $message }} @enderror</span>

                <div class="formField">
                    <label>Description</label>
                    <textarea name="description" value="{{ old('description') }}" placeholder="What is your course about"></textarea>
                </div>
                <span class="text-danger text-small"> @error('description'){{ $message }} @enderror</span>
            </div>
            
            <div class="justify-content-between sm_flex-column align-items-center">
                <div class="formField mr-20">
                    <label>Enrollment Key</label>
                    <input id="enrollment_key" type="text" name="enrollment_key" value="{{ old('enrollment_key') }}" placeholder="Generate ->" required>
                </div>
                <a class="btn-dashboard green mt-10 cursor-pointer sm_mb-30" onclick="document.getElementById('enrollment_key').value = generateKey(8);">Generate</a>
            </div>
            <span class="text-danger text-small"> @error('enrollment_key'){{ $message }} @enderror</span>

            <label class="font-size-14">Session Duration</label>
            <div class="sessionduration _50-width mt-10 sm_full-width position-relative">
                <input type="range" name="duration" min="1" max="200" value="60" class="slider" id="duration">
                <p><span id="timeview"></span> minutes</p>
            </div>
            <span class="text-danger text-small"> @error('duration'){{ $message }} @enderror</span>

            <br>
    
            <label class="font-size-14 mt-20">Days of the week</label>
            <div id="availability" class="availability _50-width mt-10 sm_full-width sm_font-size-11">
                <input class="availability-checkbox" type="checkbox" name='monday' id="monday" value="1"><label for="monday" class="square">MON</label>
                <input class="availability-checkbox" type="checkbox" name='tuesday' id="tuesday" value="1"><label for="tuesday" class="square">TUE</label>
                <input class="availability-checkbox" type="checkbox" name='wednesday' id="wednesday" value="1"><label for="wednesday" class="square">WED</label>
                <input class="availability-checkbox" type="checkbox" name='thursday' id="thursday" value="1"><label for="thursday" class="square">THU</label>
                <input class="availability-checkbox" type="checkbox" name='friday' id="friday" value="1"><label for="friday" class="square">FRI</label>
                <input class="availability-checkbox" type="checkbox" name='saturday' id="saturday" value="1"><label for="saturday" class="square">SAT</label>
                <input class="availability-checkbox" type="checkbox" name='sunday' id="sunday" value="1"><label for="sunday" class="square">SUN</label>
            </div>
            <br>
            <br>
            <div class="justify-content-between align-items-end full-width">
                <div class="form-field sm_60-width">
                    <label>Category</label>
                    <div class="select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                        <select name="category">
                            <option selected disabled>Choose Category</option>
                            <option value="School &amp; College Education (FA/FSc/BA/BSc)">School &amp; College Education (FA/FSc/BA/BSc)</option>
                            <option value="Medical Sciences">Medical Sciences</option>
                            <option value="Engineering">Engineering</option>
                            <option value="Technical">Technical</option>
                            <option value="Computer Sciences &amp; Information Technology">Computer Sciences &amp; Information Technology</option>
                            <option value="Management Sciences">Management Sciences</option>
                            <option value="Social Sciences">Social Sciences</option>
                            <option value="Biological &amp; Life Sciences">Biological &amp; Life Sciences</option>
                            <option value="Chemical &amp; Material Sciences">Chemical &amp; Material Sciences</option>
                            <option value="Physics &amp; Numerical Sciences">Physics &amp; Numerical Sciences</option>
                            <option value="Earth &amp; Environmental Sciences">Earth &amp; Environmental Sciences</option>
                            <option value="Agricultural Sciences">Agricultural Sciences</option>
                            <option value="Religious Studies">Religious Studies</option>
                            <option value="Art &amp; Design">Art &amp; Design</option>
                            <option value="Media Studies">Media Studies</option>
                            <option value="Commerce / Finance &amp; Accounting">Commerce / Finance &amp; Accounting</option>
                            <option value="Education">Education</option>
                            <option value="Languages">Languages</option>
                            <option value="Training">Training</option>
                            <option value="Professional Other">Professional Other</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn-dashboard green mb-10">Add Course</button>
            </div>
            <span class="text-danger text-small"> @error('subjects'){{ $message }} @enderror</span>
        </form>
    </section>
</div>
@endsection