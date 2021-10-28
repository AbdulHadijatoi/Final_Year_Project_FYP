<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function login(){
        return view('account.login');
    }
    public function signup(){
        return view('account.signup');
    }
    public function forgotPassword(){
        return view('account.forgot-password');
    }
    public function resetPassword(){
        return view('account.reset-password');
    }

    public function save( Request $request ){
        
        //Validate requests
        $request->validate([
            'email'=>'required|email|unique:users',
            'password'=>'required|min:3',
            'role'=>'required'
        ]);

        // insert data into database
        $user = new Users;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;

        $save = $user->save();

        $request->input();
        if($save){
            return back()->with('success','You have been registered successfully!');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }

    public function check(Request $request){
        //Validate requests
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:3'
        ]);

        $userInfo = Users::where('email','=',$request->email)->first();

        if(!$userInfo){
            return back()->with('fail','We do not recognize your email address');
        }else{
            //check password
            if(Hash::check($request->password,$userInfo->password)){
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('tutor/dashboard');
            }else{
                return back()->with('fail','Incorrect password');
            }
        }

        // insert data into database
        $user = new Users;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $check = $user->check();

        $request->input();
        if($check){
            return back()->with('success','You have logged in successfully!');
        }else{
            return back()->with('fail','Something went wrong, try again later');
        }
    }


    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/account/login');
        }
    }

    public function tutorDashboard(){
        $data = ['LoggedUserInfo'=>Users::where('id','=',session('LoggedUser'))->first()];
        return view('tutor.dashboard', $data);
    }


}
