<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Course;
use App\Models\User;
use App\Models\Tutor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AddCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tutor.add-course');
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

        //ADD TUTOR FROM USERS FIRST THEN PROCEED!!!
        $tutor = Tutor::firstOrCreate([
            'user_id' => Auth::id()
        ]);

        $tutor->save();

        $this->validate($request, [
            'category' => 'required',
            'title' => 'required|unique:courses',
            'description' => 'required',
            'enrollment_key' => 'required|unique:courses',
            'duration' => 'required',
        ]);

        

        $course = new Course;

        $course->category = $request->category;
        $course->title = $request->title;
        $course->description = $request->description;
        $course->enrollment_key = $request->enrollment_key;
        $course->status = 1;
        $course->tutor_id = $tutor->id;
        $course->save();

        $course_id = $course->id;

        $schedule = new Schedule;
        $schedule->course_id = $course_id;
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
        return back()->with('success',"Added successfully, to view it, please navigate to courses tab");
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
