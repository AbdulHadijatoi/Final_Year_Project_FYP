<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class TutorController extends Controller
{
    public function tutorDashboard(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('tutor.dashboard', $data);
    }

    public function tutorCourses(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('tutor.courses', $data);
    }

    public function tutorAddCourse(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('tutor.add-course', $data);
    }
    
    public function tutorCreateQuiz(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('tutor.create-quiz', $data);
    }
    public function tutorMakeProfile(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('tutor.make-profile', $data);
    }
    public function tutorStudents(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('tutor.students', $data);
    }
    public function tutorQuizes(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('tutor.quizes', $data);
    }
    public function tutorQuiz(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('tutor.quiz', $data);
    }
    public function tutorCourse(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('tutor.course', $data);
    }
}
