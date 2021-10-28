<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        //if user isn't logged, redirect to login page
        if(!session()->has('LoggedUser') && ($request->path() !='login' && $request->path() !='register')){
            return redirect('login')->with('fail','You must be logged in'); 
        }

        // if user is logged in he can't go to login or register
        if(session()->has('LoggedUser') && ($request->path() == 'login' || $request->path() == 'signup') ){ 
            return back(); 
        }

        return $next($request);
    }
}
