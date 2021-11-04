<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use App\Models\Tutor;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tutor/course');
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
        $schedule = Schedule::where('id',$id)->get()->first();
        $course = Course::where('id',$schedule->course_id)->get()->first();
        $tutor = Tutor::where('user_id',Auth::id())->get()->first();
        if($tutor->id != $course->tutor_id){
            return back()->with('fail',"You don't have neccessary permission to perform this action.");
        }

        $schedule->duration = $request->duration;
        
        if($request->monday == 1){
            $schedule->monday = 1;
        }else{
            $schedule->monday = 0;
        }

        if($request->tuesday == 1){
            $schedule->tuesday = 1;
        }else{
            $schedule->tuesday = 0;
        }
        if($request->wednesday == 1){
            $schedule->wednesday = 1;
        }else{
            $schedule->wednesday = 0;
        }
        if($request->friday == 1){
            $schedule->friday = 1;
        }else{
            $schedule->friday = 0;
        }
        if($request->saturday == 1){
            $schedule->saturday = 1;
        }else{
            $schedule->saturday = 0;
        }
        if($request->sunday == 1){
            $schedule->sunday = 1;
        }else{
            $schedule->sunday = 0;
        }
        if($request->thursday == 1){
            $schedule->thursday = 1;
        }else{
            $schedule->thursday = 0;
        }

        $schedule->save();
        return back()->with('success',"Saved successfully.");

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

    // public function getCourse(Request $request){
    //     $course_id = $request->course_id;
    //     $schedule = Schedule::where('course_id',$course_id)->get()->first();
    //     $course = Course::where('id',$course_id)->get()->first();

    //     return view('tutor/course', ['course'=>$course, 'schedule'=>$schedule]);
    // }
}
