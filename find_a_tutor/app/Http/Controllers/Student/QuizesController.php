<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Questions;
use App\Models\Quiz;
use App\Models\Student;

class QuizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::where('user_id',Auth::id())->first();
        $qr = Quiz::find(1)->quizResult()->where('student_id', $student->id)->get('quiz_id');
        
        if(!$qr->isEmpty()){
            foreach($qr as $rid){
                $quizes = DB::table('users')
                    ->join('students', 'students.user_id', '=', Auth::id())
                    ->join('student_courses', 'student_courses.student_id', '=', 'students.id')
                    ->join('courses', 'courses.id', '=', 'student_courses.course_id')
                    ->join('quizes', 'quizes.course_id', '=', 'courses.id')
                    ->where('quizes.id', '!=', $rid->quiz_id)
                    ->select('quizes.*','courses.category as category')
                    ->groupBy('quizes.id')
                    ->get();

                $questions = DB::table('users')
                    ->join('students', 'students.user_id', '=', Auth::id())
                    ->join('student_courses', 'student_courses.student_id', '=', 'students.id')
                    ->join('courses', 'courses.id', '=', 'student_courses.course_id')
                    ->join('quizes', 'quizes.course_id', '=', 'courses.id')
                    ->join('questions', 'questions.quiz_id', '=', 'quizes.id')
                    ->where('quizes.id', '!=', $rid->quiz_id)
                    ->select('questions.*')
                    ->groupBy('questions.id')
                    ->get();
            }
        }else{
            $quizes = DB::table('users')
            ->join('students', 'students.user_id', '=', Auth::id())
            ->join('student_courses', 'student_courses.student_id', '=', 'students.id')
            ->join('courses', 'courses.id', '=', 'student_courses.course_id')
            ->join('quizes', 'quizes.course_id', '=', 'courses.id')
            ->select('quizes.*','courses.category as category')
            ->groupBy('quizes.id')
            ->get();

            $questions = DB::table('users')
                ->join('students', 'students.user_id', '=', Auth::id())
                ->join('student_courses', 'student_courses.student_id', '=', 'students.id')
                ->join('courses', 'courses.id', '=', 'student_courses.course_id')
                ->join('quizes', 'quizes.course_id', '=', 'courses.id')
                ->join('questions', 'questions.quiz_id', '=', 'quizes.id')
                ->select('questions.*')
                ->groupBy('questions.id')
                ->get();
        }
        $courses = DB::table('users')
            ->join('students', 'students.user_id', '=', Auth::id())
            ->join('student_courses', 'student_courses.student_id', '=', 'students.id')
            ->join('courses', 'courses.id', '=', 'student_courses.course_id')
            ->select('courses.*')
            ->groupBy('courses.id')
            ->get();
        return view('student.quizes', ['quizes'=> $quizes,'courses'=>$courses, 'questions'=> $questions]);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function filterQuizes(Request $request)
    {

        $student = Student::where('user_id',Auth::id())->first();
        $qr = Quiz::find(1)->quizResult()->where('student_id', $student->id)->get('quiz_id');
        
        if(!$qr->isEmpty()){
            foreach($qr as $rid){
                $quizes = DB::table('users')
                    ->join('students', 'students.user_id', '=', Auth::id())
                    ->join('student_courses', 'student_courses.student_id', '=', 'students.id')
                    ->join('courses', 'courses.id', '=', 'student_courses.course_id')
                    ->join('quizes', 'quizes.course_id', '=', 'courses.id')
                    ->where('quizes.course_id', '=', $request->course_id)
                    ->where('quizes.id', '!=', $rid->quiz_id)
                    ->select('quizes.*','courses.category as category')
                    ->groupBy('quizes.id')
                    ->get();

                
                $questions = DB::table('users')
                    ->join('students', 'students.user_id', '=', Auth::id())
                    ->join('student_courses', 'student_courses.student_id', '=', 'students.id')
                    ->join('courses', 'courses.id', '=', 'student_courses.course_id')
                    ->join('quizes', 'quizes.course_id', '=', 'courses.id')
                    ->join('questions', 'questions.quiz_id', '=', 'quizes.id')
                    ->where('quizes.id', '!=', $rid->quiz_id)
                    ->select('questions.*')
                    ->groupBy('questions.id')
                    ->get();
            }
        }else{
            $quizes = DB::table('users')
                ->join('students', 'students.user_id', '=', Auth::id())
                ->join('student_courses', 'student_courses.student_id', '=', 'students.id')
                ->join('courses', 'courses.id', '=', 'student_courses.course_id')
                ->join('quizes', 'quizes.course_id', '=', 'courses.id')
                ->where('quizes.course_id', '=', $request->course_id)
                ->select('quizes.*','courses.category as category')
                ->groupBy('quizes.id')
                ->get();

            
            $questions = DB::table('users')
                ->join('students', 'students.user_id', '=', Auth::id())
                ->join('student_courses', 'student_courses.student_id', '=', 'students.id')
                ->join('courses', 'courses.id', '=', 'student_courses.course_id')
                ->join('quizes', 'quizes.course_id', '=', 'courses.id')
                ->join('questions', 'questions.quiz_id', '=', 'quizes.id')
                ->select('questions.*')
                ->groupBy('questions.id')
                ->get();
        }
        $courses = DB::table('users')
            ->join('students', 'students.user_id', '=', Auth::id())
            ->join('student_courses', 'student_courses.student_id', '=', 'students.id')
            ->join('courses', 'courses.id', '=', 'student_courses.course_id')
            ->select('courses.*')
            ->groupBy('courses.id')
            ->get();
        

        return view('student.quizes', ['quizes'=> $quizes,'courses'=>$courses, 'questions'=> $questions]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $quizes = DB::table('users')
            ->join('students', 'students.user_id', '=', Auth::id())
            ->join('student_courses', 'student_courses.student_id', '=', 'students.id')
            ->join('courses', 'courses.id', '=', 'student_courses.course_id')
            ->join('quizes', 'quizes.course_id', '=', 'courses.id')
            ->select('quizes.*','courses.category as category')
            ->groupBy('quizes.id')
            ->get();
        $questions = DB::table('users')
            ->join('students', 'students.user_id', '=', Auth::id())
            ->join('student_courses', 'student_courses.student_id', '=', 'students.id')
            ->join('courses', 'courses.id', '=', 'student_courses.course_id')
            ->join('quizes', 'quizes.course_id', '=', 'courses.id')
            ->join('questions', 'questions.quiz_id', '=', 'quizes.id')
            ->select('questions.*')
            ->groupBy('questions.id')
            ->get();
        
        $courses = DB::table('users')
            ->join('students', 'students.user_id', '=', Auth::id())
            ->join('student_courses', 'student_courses.student_id', '=', 'students.id')
            ->join('courses', 'courses.id', '=', 'student_courses.course_id')
            ->select('courses.*')
            ->groupBy('courses.id')
            ->get();
        

        return view('student/quizes', ['quizes'=> $quizes,'courses'=>$courses, 'questions'=> $questions]);
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
