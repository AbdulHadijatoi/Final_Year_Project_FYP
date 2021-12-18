@extends('layouts.home')

@section('title','Listing')

@section('content')
<main class="full-width">
    <div class="content vh100 _70-width justify-content-center pt-60 sm_90-width">
        <section class="full-width light-text pb-90">

            <h2 class="text-uppercase font-weight-600 font-size-20 full-width sm_text-align-center primary-2-text">Find A Teacher</h2>
            <form id="searchForm" action="{{route('search_tutors')}}" method="GET" class="field-container hover-effect mb-40">
                <input id="search" class="sm_text-align-center" type="text" name="search" placeholder="Search tutors..." @if(isset($_GET['search'])) value="{{$_GET['search']}}" @endif>
            </form>

            <div class="full-width justify-content-between sm_flex-column sm_flex_wrap mb-30">
                <form class="align-in-center sm_flex_wrap">
                    
                    {{-- <div class="select-container hover-effect mr-10 sm_mt-10">
                        <select name="category">
                            <option selected value='all'>All Subjects</option>
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
                    </div> --}}
                    <span class="font-size-14 font-weight-500 sm_mt-10" style="opacity: 0.7;">Showing @if(isset($tutors)) {{count($tutors)}} @else 0 @endif tutors</span>
                </form>

                <div class="align-in-center sm_mt-10">
                    <div class="btn-change-view hover-effect">
                        <img src="{{asset('assets/svg-icons/svg_list_view.svg')}}" width="15">
                    </div>
                    {{-- <div class="btn-change-view hover-effect">
                        <img src="{{asset('assets/svg-icons/svg_thumb_view.svg')}}" width="15">
                    </div> --}}
                </div>
            </div>

            @if(isset($tutors))
            @foreach ($tutors as $tutor)
                <div class="list-item">
                    <div class="list-sec-1">
                        <h4>{{$tutor->firstname. ' ' .$tutor->lastname}}</h4>
                        <p class="font-weight-300 font-size-15 mb-5">{{$tutor->tagline}}</p>
                        <p class="w350 font-weight-300 font-size-15">{{ Str::limit($tutor->description,80)}}</p>
                    </div>
                    <div class="list-sec-2">
                        <p class="hover-effect"> <img class="mr-10" src="{{asset('assets/svg-icons/svg_subject_2.svg')}}" alt="course" width="18"><span>{{ Str::limit($tutor->skills,40)}}</span></p>
                        <p class="hover-effect"> <img class="mr-10" src="{{asset('assets/svg-icons/svg_location_2.svg')}}" alt="course" width="18"><span>{{$tutor->location}}</span></p> 
                        {{-- @if(isset($tutor->studentCourse))<p class="hover-effect"> <img class="mr-10" src="{{asset('assets/svg-icons/svg_students.svg')}}" alt="course" width="18"><span> {{count($tutor->studentCourses)}} Students</span></p> @endif --}}
                    </div>
                    <div class="list-sec-3 flex-column font-size-13">
                        <p>Overall Ratting ({{count($tutor->feedback)}})</p>
                        <div class="align-items-center mt-5 mb-10">
                            @if(isset($tutor->feedback))
                            <?php 
                                $countRatting = 0; 
                                $totalRattings = count($tutor->feedback);
                            ?>
                                @foreach ($tutor->feedback as $feedback)
                                    <?php $countRatting +=$feedback->ratting; ?>
                                @endforeach

                                <?php 
                                if($totalRattings>0){
                                    $overallRatting = round($countRatting/$totalRattings,1);
                                }else {
                                    $overallRatting = 0.0;
                                }
                                ?>
                            @endif

                            @if($overallRatting>=1)<img class="gold-star"> @else <img class="star"> @endif
                            @if($overallRatting>=2)<img class="gold-star"> @else <img class="star"> @endif
                            @if($overallRatting>=3)<img class="gold-star"> @else <img class="star"> @endif
                            @if($overallRatting>=4)<img class="gold-star"> @else <img class="star"> @endif
                            @if($overallRatting>=5)<img class="gold-star"> @else <img class="star"> @endif
                            
                            <span class="ml-5 mt-5">  {{$overallRatting}}</span>
                        </div>
                        <a href="{{ url('/profile/'.$tutor->username) }}" class="btn-viewprofile hover-effect">View Profile</a>
                    </div>
                </div>
            @endforeach
            @endif
        </section>
    </div>

    <script>
        var input = document.getElementById("search");
        input.addEventListener("keyup", function(event) {
          if (event.keyCode === 13) {
           event.preventDefault();
           document.getElementById('searchForm').submit();
          }
        });
    </script>
    
</main>
@endsection