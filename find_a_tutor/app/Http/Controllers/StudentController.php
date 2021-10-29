<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;


class StudentController extends Controller
{
    public function studentDashboard(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('student.dashboard', $data);
    }

    public function studentTakeQuiz(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('student.take-quiz', $data);
    }
    public function studentCourses(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('student.courses', $data);
    }

    public function studentEnrollCourse(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('student.enroll-course', $data);
    }
    public function studentMakeProfile(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('student.make-profile', $data);
    }
    public function studentQuizes(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('student.quizes', $data);
    }
}