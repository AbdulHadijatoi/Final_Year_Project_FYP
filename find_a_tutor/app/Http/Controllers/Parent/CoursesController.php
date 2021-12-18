<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentParent;
use App\Models\Student;
use App\Models\StudentCourse;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        $user_id = Auth::id();
        $parent_id = StudentParent::where('user_id',$user_id)->first();
        // return $parent_id;
        if($parent_id != null){
            $students = Student::where('student_parent_id',$parent_id->id)->get();
            // $studentCourses = StudentCourse::get();
            $studentCourses = DB::table('courses')
            ->join('student_courses', 'student_courses.course_id', '=', 'courses.id')
            ->join('students', 'students.id', '=', 'student_courses.student_id')
            ->where('students.student_parent_id', '=',$parent_id->id)
            ->select('courses.*')
            ->get();
            return view('parent.courses',['children'=>$students,'studentCourses'=>$studentCourses]);
        }else{
            return view('parent.courses');
        }
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
        return response()->json(['check'=>$request->student_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $schedule = Schedule::where('course_id',$request->course_id)->get()->first();
        
        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
    */
    public function filter_student_courses(Request $request){
        // $studentCourses = StudentCourse::where('student_id',$request->student_id)->get();
        $studentCourses = DB::table('courses')
        ->join('student_courses', 'student_courses.course_id', '=', 'courses.id')
        ->join('students', 'students.id', '=', 'student_courses.student_id')
        ->where('students.id', '=',$request->student_id)
        ->select('courses.*')
        ->get();
        return response()->json($studentCourses);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = StudentCourse::find($id);
        $course->delete();
        return redirect()->back();
    }
}
