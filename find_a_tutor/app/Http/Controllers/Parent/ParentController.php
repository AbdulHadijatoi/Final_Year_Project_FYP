<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\StudentParent;
use App\Models\Tutor;
use App\Models\Student;
use App\Models\Feedback;
use App\Models\StudentCourse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ParentController extends Controller
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
        if($parent_id != null){
            $students = Student::where('student_parent_id',$parent_id->id)->get();
            $studentCourses = DB::table('student_courses')
            ->join('courses', 'student_courses.course_id', '=', 'courses.id')
            ->join('tutors', 'courses.tutor_id', '=', 'tutors.id')
            ->join('students', 'student_courses.student_id', '=', 'students.id')
            ->where('students.student_parent_id', '=',$parent_id->id)
            ->select('student_courses.*','tutors.id as tid')
            ->get();

        // return $studentCourses;
        return view('parent.dashboard',['children'=>$students,'studentCourses'=>$studentCourses]);
        }
        return view('parent.dashboard');
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
        // 'name',
        // 'comment',
        // 'ratting',
        // 'date',
        // 'user_id',
        // 'course_id',

        // username comment student_course_id course_id tutor_id ratting
        $request->validate([
            'comment' => ['required'],
            'ratting' => ['required'],
        ]);
        // feedback_status
        $studentCourse = StudentCourse::where('id',$request->student_course_id)->first();
        $tutor = Tutor::find($request->tutor_id);
        $user = User::where('id',$tutor->user_id)->first();
        // return $user;

        $feedback = new Feedback;
        if($request->has('username')){
            $feedback->name = $request->username;
        }
        if($request->has('comment')){
            $feedback->comment = $request->comment;
        }

        $feedback->ratting = $request->ratting;
        $feedback->user_id = $user->id;
        $feedback->course_id = $request->course_id;

        $feedback->save();
        $studentCourse->feedback_status = 0;
        $studentCourse->save();
        // return $request->input();
        return back();
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
