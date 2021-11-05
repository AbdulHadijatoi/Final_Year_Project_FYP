<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class DashboardController extends Controller
{
    
    public function index()
    {
        $totalStudents = User::where('role',"Student")->count();
        $totalTutors = User::where('role',"Teacher")->count();
        $teachers = User::where('role',"Teacher")->orderBy('firstname')->get()->take(10);
        $students = User::where('role',"Student")->orderBy('firstname')->get()->take(10);

        return view('admin.dashboard', ['teachers' => $teachers, 'students'=> $students, 'totalStudents' => $totalStudents, 'totalTutors' => $totalTutors]);
    }

}
