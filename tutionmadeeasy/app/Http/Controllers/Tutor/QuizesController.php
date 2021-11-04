<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Course;
use App\Models\Questions;
use Illuminate\Support\Facades\Auth;
use App\Models\Tutor;
use Illuminate\Support\Facades\DB;


class QuizesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizes = DB::table('tutors')
            ->join('courses', 'tutors.id', '=', 'courses.tutor_id')
            ->join('quizes', 'quizes.course_id', '=', 'courses.id')
            ->where('tutors.user_id', '=',Auth::id())
            ->select('quizes.*','courses.category')
            ->get();

        $questions = DB::table('tutors')
            ->join('courses', 'tutors.id', '=', 'courses.tutor_id')
            ->join('quizes', 'quizes.course_id', '=', 'courses.id')
            ->join('questions', 'questions.quiz_id', '=', 'quizes.id')
            ->where('tutors.user_id', '=',Auth::id())
            ->select('questions.*','quizes.id')
            ->get();

        $tutor = Tutor::where('user_id',Auth::id())->get()->first();
        $courses = Course::where('tutor_id',$tutor->id)->get();
        // $quizes = Quiz::where('course_id',$courses->id)->get();
        return view('tutor.quizes',['quizes'=>$quizes, 'courses'=>$courses, 'questions'=>$questions]);
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
        $answers = DB::table('quizes')
            ->join('questions', 'quizes.id', '=', 'questions.quiz_id')
            ->join('answers', 'questions.id', '=', 'answers.question_id')
            ->where('quizes.id', '=',$id)
            ->select('answers.*')
            ->get();
        $quiz = Quiz::where('id',$id)->get()->first();
        $questions = Questions::where('quiz_id',$quiz->id)->get();
        return view('tutor.quiz',['answers'=>$answers,'quiz'=>$quiz, 'questions'=>$questions]);
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
