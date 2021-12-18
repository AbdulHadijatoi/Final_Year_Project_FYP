<?php

namespace App\Http\Controllers\Tutor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use App\Models\Tutor;

class DashboardController extends Controller
{

    public function index()
    {
        $tutor = Tutor::where('user_id',Auth::id())->get()->first();
        $courses = Course::where('tutor_id',$tutor->id)->get();
        // $studentCourses = Course::find(1)->studentCourse()->get();

        $totalStudents = DB::table('tutors')
            ->join('courses', 'courses.tutor_id', '=', $tutor->id)
            ->join('student_courses', 'student_courses.course_id', '=', 'courses.id')
            ->join('students', 'student_courses.student_id', '=', 'students.id')
            ->groupBy('students.id')
            ->select('students.id')->get();

        // return $totalStudents;
        $totalCourses = DB::table('courses')->where('tutor_id', $tutor->id)->count();
        return view('tutor.dashboard', ['courses'=> $courses, 'totalCourses'=> $totalCourses, 'totalStudents'=> $totalStudents]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getSchedule(Request $request){
        $schedule = Schedule::where('course_id',$request->course_id)->get()->first();
        
        return response()->json($schedule);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function setSchedule(Request $request){

        $request->validate([
            'course_id' => ['required'],
            'duration' => ['required'],
        ]);


        // return $request->input();
        $course = Course::where('id',$request->course_id)->get()->first();
        $schedule= Schedule::find($request->course_id);
        // return $request->input();
        $schedule->duration = $request->duration;
        if($request->monday == 1){
            $schedule->monday = 1;
        }else{
            $schedule->monday = 0;
        }
        if($request->tuesday == 1){
            $schedule->tuesday = 1;
        }else{
            $schedule->tuesday = 0;
        }
        if($request->wednesday == 1){
            $schedule->wednesday = 1;
        }else{
            $schedule->wednesday = 0;
        }
        if($request->friday == 1){
            $schedule->friday = 1;
        }else{
            $schedule->friday = 0;
        }
        if($request->saturday == 1){
            $schedule->saturday = 1;
        }else{
            $schedule->saturday = 0;
        }
        if($request->sunday == 1){
            $schedule->sunday = 1;
        }else{
            $schedule->sunday = 0;
        }
        if($request->thursday == 1){
            $schedule->thursday = 1;
        }else{
            $schedule->thursday = 0;
        }
        $schedule->save();
        return back()->with('success',"Updated Successfully!");
    }

}
