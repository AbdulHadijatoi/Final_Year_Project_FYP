<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ActiveUser
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
        if (auth()->user()->blocked_at) {
            $user = auth()->user();
            auth()->logout();
            return redirect()->route('login')
                ->withError('Your account was blocked at ' . $user->blocked_at);
        }
        
        return $next($request);
    }
}
