<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Answers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Questions;
use App\Models\Student;
use App\Models\Quiz;
use App\Models\QuizResult;

class TakeQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('student.take-quiz');
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
            'quiz_score' => 'required',
            'total_score' => 'required',
            'quiz_id' => 'required',
        ]);
        $student = Student::where('user_id',Auth::id())->get()->first();
        if($student != null){
            $quizResult = new QuizResult();
            $quizResult->quiz_id = $request->quiz_id;
            $quizResult->student_id = $student->id;
            $quizResult->score = $request->quiz_score;
            $quizResult->total_score = $request->total_score;
            $quizResult->save();
        }
        
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $quiz = Quiz::find($id);
        $questions = Quiz::find($id)->questions()->get();
        $answers = Answers::get();
        return view('student.take-quiz',['questions'=>$questions,'quiz'=>$quiz,'answers'=>$answers]);
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
