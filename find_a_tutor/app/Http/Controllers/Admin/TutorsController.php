<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class TutorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = User::where('role',"Teacher")->orderBy('firstname')->get();
        return view('admin.tutors',['teachers'=>$teachers]);
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
        $user = User::find($id);
        $user->blocked_at = now();
        $user->save();
        return redirect()->route('admin.tutors')-with('success','User has been blocked.'); 
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
        $user = User::find($id);
        
        if(!empty($user->blocked_at)){
            $user->blocked_at = '';
        }else{
            $user->blocked_at = now();
        }

        $user->save();
        // return redirect()->route('admin.tutors.index')-with('success','User has been blocked.'); 
        return redirect()->back(); 
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->back();
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        
        $tutors = User::query()
            ->where('role', '=', "Teacher")
            ->where('firstname', 'LIKE', "%{$search}%")
            ->get();
        return view('admin.tutors', ['teachers' => $tutors]);
    }
}
