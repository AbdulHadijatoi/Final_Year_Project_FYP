<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Gate;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.dashboard');
    }

}
