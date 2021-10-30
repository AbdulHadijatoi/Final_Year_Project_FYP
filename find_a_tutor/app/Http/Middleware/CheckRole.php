<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if($role == 'admin' && auth()->user()->role != 'Admin'){ 
            abort(403);
        }
        if($role == 'student' && auth()->user()->role != 'Student'){ 
            abort(403);
        }
        if($role == 'tutor' && auth()->user()->role != 'Teacher'){ 
            abort(403);
        }
        return $next($request);
    }
}
