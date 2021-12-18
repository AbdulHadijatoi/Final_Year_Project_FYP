<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentCourse;
use App\Models\Student;
use App\Models\Course;
use App\Models\User;
use App\Models\StudentParent;
use Illuminate\Support\Facades\Auth;

class EnrollCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parent_id = StudentParent::where('user_id',Auth::id())->first();
        if($parent_id !=null){
            $students = Student::where('student_parent_id',$parent_id->id)->get();
            return view('parent.enroll-course',['children'=>$students]);
        }
        
        return view('parent.enroll-course');
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
        $this->validate($request, [
            'enrollment_key' => 'required',
            'student_id' => 'required',
        ]);
        // dd($request);
        $student = Student::where('id',$request->student_id)->get()->first();
        $course = Course::where('enrollment_key',$request->enrollment_key)->get()->first();
        
        if($course != null){
            $sc = StudentCourse::where('course_id',$course->id)
            ->where('student_id',$student->id)->get()->first();
            if($sc == null){
                $studentCourse = new StudentCourse();
                $studentCourse->student_id = $student->id;
                $studentCourse->course_id = $course->id;
                $studentCourse->save();
                return back()->with('success','Successfully enrolled!');
            }else{
                return back()->with('fail','You have already enrolled this course.');
            }
        }
        // dd($course);
        return back()->with('fail','Course not found, please try again');
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
