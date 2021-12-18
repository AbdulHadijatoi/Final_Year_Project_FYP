<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Images;
use Illuminate\Support\Facades\Auth;
use App\Models\StudentCourse;
use App\Models\Student;
use App\Models\Tutor;
use App\Models\Course;
use App\Models\StudentParent;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = DB::table('users')
            ->join('students', 'students.user_id', '=', Auth::id())
            ->join('student_courses', 'student_courses.student_id', '=', 'students.id')
            ->join('courses', 'courses.id', '=', 'student_courses.course_id')
            ->select('courses.*')
            ->groupBy('courses.id')
            ->get();

        $tutors = Tutor::select('tutors.*', DB::raw('count(tutors.id) as totalTutors'))
            ->leftJoin('courses', 'courses.tutor_id', '=', 'tutors.id')
            ->leftJoin('student_courses', 'student_courses.course_id', '=', 'courses.id')
            ->leftJoin('students','student_courses.student_id', '=','students.id')
            ->where('students.user_id', '=',Auth::id())
            ->groupBy('tutors.id')
            ->first();

        return view('student.dashboard',['courses'=>$courses,'tutors'=>$tutors]);
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
        //
    }
}
