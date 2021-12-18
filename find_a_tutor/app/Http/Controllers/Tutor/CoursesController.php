<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Tutor;
use Illuminate\Support\Facades\Auth;
use App\Models\Schedule;
use App\Models\Quiz;
use App\Models\StudentCourse;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutor_id = Tutor::where('user_id',Auth::id())->first()->id;
        $courses = Course::where('tutor_id',$tutor_id)->get();
        return view('tutor.courses',['courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $schedule = Schedule::where('course_id',$id)->first();
        $course = Course::where('id',$id)->first();
        $quizes = Quiz::where('course_id',$course->id)->get();

        $questions = DB::table('courses')
            ->join('quizes', 'quizes.course_id', '=', 'courses.id')
            ->join('questions', 'questions.quiz_id', '=', 'quizes.id')
            ->where('courses.id', '=',$course->id)
            ->select('questions.*','quizes.id')
            ->get();
        $students = DB::table('users')
            ->join('students', 'students.user_id', '=', 'users.id')
            ->join('student_courses', 'student_courses.student_id', '=', 'students.id')

            ->where('student_courses.course_id', '=',$course->id)
            ->select('users.*')
            ->get();

        return view('tutor/course', ['course'=>$course, 'schedule'=>$schedule, 'quizes'=>$quizes, 'questions'=>$questions,'students'=>$students]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::where('id',$id)->get()->first();
        $studentCourse = StudentCourse::where('course_id',$course->id)->first();

        $tutor = Tutor::where('user_id',Auth::id())->get()->first();
        if($tutor->id != $course->tutor_id){
            return back()->with('fail',"You don't have neccessary permission to perform this action.");
        }
        if($course->status == 1){
            $course->status = 0;
            $course->save();
            if($studentCourse != null){
                $studentCourse->status = 0;
                $studentCourse->save();
            }
            
            return back()->with('success',"This course is now available in the completed courses list.");
        }else{
            $course->status = 1;
            $course->save();
            if($studentCourse != null){
            $studentCourse->status = 1;
            $studentCourse->save();
            }
            return back()->with('success',"This is now available in running courses list.");
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
