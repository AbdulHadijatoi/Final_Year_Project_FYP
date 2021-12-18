@extends('layouts.dashboard')

@section('title', 'Courses')

@section('content')
<div class="main-content light-text">
    <div class="justify-content-between align-items-center">
        <h3 class="h-dashboard">Your Child Courses</h3>
        <div class="align-in-center">
            <div class="form-field sm_60-width">
                <div class="select-container brightness-120 hover-effect mr-10 sm_mt-10 align-in-center h45" style="border: none;">
                    <select id="selected_child" name="child_id" onchange="filter_child_courses();">
                        <option selected disabled>All Children</option>
                        @if(isset($children))
                        @foreach ($children as $child)
                            <option value="{{$child->id}}">{{$child->user->firstname .' '. $child->user->lastname}}</option>    
                        @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>
    </div>

    <section id="coursesContainer" class="_100-width justify-content-start sm_full-width flex-wrap sm_justify-content-center mt-20">
        @if(isset($studentCourses))
        @foreach($studentCourses as $course)
        <div class="course-card min-h280">
            <span class="category">{{Str::limit($course->category,20)}}</span>

            <p class="title">{{Str::limit($course->title,18)}}</p>

            <hr>
            <p class="para"> {{Str::limit($course->description, 120)}} </p>

            <div class="link-div">
                <a class="link-red" onclick="showElem('blockModal{{$course->id}}');">Leave</a>
            </div>
        </div>
        <!-- MODAL DIALOG BOX FOR REMOVE CHILD-->
        <form method="POST" action="{{ route('parent.courses.destroy',$course->id) }}" id="blockModal{{$course->id}}" class="main-content popup-container display-none">
            @csrf
            @method('delete')
            <div class="backdrop" onclick="hideElem('blockModal{{$course->id}}');"></div>
            <div class="dialog alert align-in-center flex-column">
                <label for="close_checkbox" class="btn-close" onclick="hideElem('blockModal{{$course->id}}');">+</label>
                <h2 class="heading2 mb-20 text-center">Are you sure you want to leave<br> {{ $course->title ?? '' }}</h2>
                
                <div class="full-width align-in-center">
                    <input type="submit" class="btn-dashboard border-none red mt-20 sm_mt-10 mr-10 cursor-pointer" value="Leave">
                    <a class="btn-dashboard green mt-20 sm_mt-10 cursor-pointer" onclick="hideElem('blockModal{{$course->id}}');">Dismiss</a>
                </div>
            </div>      
        </form>
        @endforeach
        @endif

        <a href="{{url('parent/enroll-course')}}" class="course-card height-auto align-in-center hover-effect text-decoration-none cursor-pointer" style="padding: 0px; font-size: 100px; color: var(--profile-bg);">
            +
        </a>
    </section>

</div>
<script>
    function getElem(id){
        return document.getElementById(id);
    }
    let monday = getElem('monday');

    var coursesContainer = getElem('coursesContainer');

    function filter_child_courses() {
        var student_id = getElem('selected_child').value;
        var request = new XMLHttpRequest();
        request.open("POST", "{{ route('get_student_courses') }}" );
        request.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);

        
        var formData = new FormData();
        formData.set("student_id", student_id);
        request.send(formData);
        request.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                var response = this.responseText;
                var response = JSON.parse(this.responseText);
                coursesContainer.innerHTML = '';
                // alert(response.);
                response.forEach(stdcourse => {
                    // console.log(stdcourse.title);
                    coursesContainer.innerHTML += '<div class="course-card min-h280"> <span class="category">'+
                    stdcourse.category.substring(0,20)
                    +'</span> <p class="title">'+
                    stdcourse.title.substring(0,18)
                    +'</p> <hr> <p class="para">'
                    +stdcourse.description.substring(0,120)+
                    '</p><div class="link-div"> <a class="link-red">Leave</a></div></div> '
                });


            }
        };

        // alert(student_id);
        
    }

    
</script>
@endsection