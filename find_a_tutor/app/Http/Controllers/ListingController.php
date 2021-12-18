<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutors;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use App\Models\Schedule;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutors = User::where('role','Teacher')->get();
        // $users = DB::table('users')
            // ->join('tutors', 'tutors.user_id', '=', 'users.id')
            // ->join('courses', 'courses.tutor_id', '=', 'tutors.id')
            // ->join('student_courses', 'student_courses.course_id', '=', 'courses.id')
            // ->join('students', 'students.id', '=', 'student_courses.student_id')
            // ->select('users.*')
            // ->groupBy('users.id')
            // ->get();

        return view('/listing',['tutors'=>$tutors]);
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

    public function search(Request $request){
        // $tutors = User::where('role','Teacher')
        // ->where('firstname','like','%{' . $request->search . '}%')
        // ->orwhere('lastname','like','%' . $request->search . '%')
        // ->get();
        $search_item = $request->search;
        $tutors = User::where('role','Teacher')
        ->where(function ($query) use ($search_item) {
            $query->where('firstname', 'like', "%{$search_item}%")
                  ->orWhere('lastname', 'like', "%{$search_item}%")
                  ->orWhere('email', 'like', "%{$search_item}%")
                  ->orWhere('skills', 'like', "%{$search_item}%")
                  ->orWhere('tagline', 'like', "%{$search_item}%")
                  ->orWhere('location', 'like', "%{$search_item}%");
        })
        ->get();

        return view('/listing',['tutors'=>$tutors]);
    }
}
