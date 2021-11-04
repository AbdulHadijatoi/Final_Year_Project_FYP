<?php

namespace App\Http\Controllers\Tutor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Support\Facades\Auth;
use App\Models\Tutor;

class DashboardController extends Controller
{

    public function index()
    {
        $tutor = Tutor::where('user_id',Auth::id())->get()->first();
        $courses = Course::where('tutor_id',$tutor->id)->get();
        // $schedule = Schedule::where('course_id',$id)->get()->first();
        return view('tutor.dashboard', ['courses'=> $courses]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getSchedule(Request $request){
        return response()->json(['success'=>'Course id is '.$request->course_id]);
    }

}
