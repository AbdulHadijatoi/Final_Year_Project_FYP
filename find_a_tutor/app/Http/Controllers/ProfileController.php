<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Images;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use App\Models\Schedule;
use App\Models\Tutor;
use App\Models\Student;
use App\Models\StudentCourse;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
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
        $user = User::where('username',$id)->get()->first();
        
        if($user != null){
            $photo = Images::where('user_id',$user->id)->get()->first();
        }else{
            abort(405, 'User profile is not available right now.');
        }
        if($user === null || $user->profileVisibility == 0 || $user->role == "Admin"){
            abort(405, 'User profile is not available right now.');
        }else{

            if($user->role == "Student"){
                $student = Student::where('user_id',$user->id)->get()->first();
                $studentCourses = StudentCourse::where('student_id',$student->id)->where('feedback_status','1')->get();
                $tutors = DB::table('users')
                    ->join('tutors', 'tutors.user_id', '=', 'users.id')
                    ->join('courses', 'courses.tutor_id', '=', 'tutors.id')
                    ->join('student_courses', 'student_courses.course_id', '=', 'courses.id')
                    ->where('student_courses.student_id', '=', $student->id)
                    ->groupBy('users.id')
                    ->select('users.*')->get();
                // return $tutors;
                return view('student/profile',['user'=>$user, 'photo'=>$photo, 'studentCourses'=>$studentCourses,'tutors'=>$tutors]);
            }else if($user->role == "Teacher"){
                $tutor = Tutor::where('user_id',$user->id)->get()->first();
                $course = Course::where('tutor_id',$tutor->id)->get()->first();
                if($course == null ){
                    $students = null;
                    $pastCourses = null;
                    $schedule = null;
                    $course = null;
                    $totalCourses = 0;
                    return view('tutor/profile',['user'=>$user, 'photo'=>$photo, 'schedule'=>$schedule, 'totalCourses'=>$totalCourses, 'pastCourses'=>$pastCourses, 'students'=>$students]);
                }
                $pastCourses = Course::where('tutor_id',$tutor->id)->where('status',0)->get();
                $schedule = Schedule::where('course_id',$course->id)->get()->first();
    
                $students = DB::table('tutors')
                ->join('courses', 'courses.tutor_id', '=', $tutor->id)
                ->join('student_courses', 'student_courses.course_id', '=', 'courses.id')
                ->join('students', 'student_courses.student_id', '=', 'students.id')
                ->join('users', 'students.user_id', '=', 'users.id')
                ->groupBy('students.id')
                ->select('users.*')->get();
                
                $totalCourses = DB::table('courses')->where('tutor_id', $tutor->id)->count();
                return view('tutor/profile',['user'=>$user, 'photo'=>$photo, 'schedule'=>$schedule, 'totalCourses'=>$totalCourses, 'pastCourses'=>$pastCourses, 'students'=>$students]);
            }
        }
        abort(405, 'User profile is not available right now.');
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
