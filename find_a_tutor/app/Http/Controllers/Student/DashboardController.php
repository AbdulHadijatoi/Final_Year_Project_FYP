<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    public function index()
    {
        return view('student.dashboard');
    }

}
