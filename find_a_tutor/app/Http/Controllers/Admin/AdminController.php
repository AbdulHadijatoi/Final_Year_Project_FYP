<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    
    public function index()
    {
        // if(Gate::denies('manage-courses')){
        //     abort(403);
        // }

        return view('admin.dashboard');
    }

    public function addTutor()
    {
        // if(Gate::denies('manage-courses')){
        //     abort(403);
        // }

        // return view('admin.add-tutor');
    }

}
