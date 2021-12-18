<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use App\Models\Schedule;
use App\Models\Student;
use App\Models\StudentCourse;
use Illuminate\Support\Facades\Auth;
use App\Models\Tutor;
use App\Models\User;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutor = Tutor::where('user_id',Auth::id())->first();
        $students = DB::table('tutors')
                ->join('courses', 'courses.tutor_id', '=', $tutor->id)
                ->join('student_courses', 'student_courses.course_id', '=', 'courses.id')
                ->join('students', 'student_courses.student_id', '=', 'students.id')
                ->join('users', 'students.user_id', '=', 'users.id')
                ->groupBy('students.id')
                ->select('users.*','students.id as sid')->get();
        return view('tutor.students', ['students'=>$students]);
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
        //
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
        $studentCourse = StudentCourse::where('student_id',$id)->get();
        // return $studentCourse;
        foreach($studentCourse as $course){
            $course->delete();
        }
        return back();
    }
}
