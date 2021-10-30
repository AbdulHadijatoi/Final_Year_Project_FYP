<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Gate;

class TutorController extends Controller
{

    public function index()
    {
        return view('tutor.dashboard');
    }

}
