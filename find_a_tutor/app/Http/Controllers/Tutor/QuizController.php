<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Questions;
use App\Models\Quiz;
use App\Models\Answers;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tutor.quiz');
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
        // question_type question answer quiz_id
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

    public function addQuestion(Request $request)
    {
        // question_type question answer quiz_id
        if($request->question_type == 'A'){
            $this->validate($request, [
                'question_type' => 'required',
                'question' => 'required',
                'answer_a' => 'required',
            ]);

            $question = new Questions;
            $question->question_type = $request->question_type;
            $question->question = $request->question;
            $question->answer = $request->answer_a;
            $question->quiz_id = $request->quiz_id;

            $question->save();

            return back()->with('success','Question added successfully!');
        }else{
            //question_type question answer_a correct_option option-a option-b option-c option-d
            // option1 option2 option3 option4 question_id
            // correct_option option1 option2 option3 option4
            $this->validate($request, [
                'question_type' => 'required',
                'question' => 'required',
                'correct_option' => 'required',
                'option1' => 'required',
                'option2' => 'required',
                'option3' => 'required',
                'option4' => 'required',
            ]);

            $question = new Questions;
            $question->question_type = $request->question_type;
            $question->question = $request->question;
            $question->answer = $request->correct_option;
            $question->quiz_id = $request->quiz_id;

            $question->save();
            $answer = new Answers;

            $answer->option1 = $request->option1;
            $answer->option2 = $request->option2;
            $answer->option3 = $request->option3;
            $answer->option4 = $request->option4;
            $answer->question_id = $question->id;

            
            $answer->save();


            return back()->with('success','Question added successfully!');
        }

        return back()->with('fail','Could not add question, please try again.');
    }
}
