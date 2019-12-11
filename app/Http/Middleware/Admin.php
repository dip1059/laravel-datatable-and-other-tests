<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user() && Auth::user()->role_id == ADMIN_ROLE) {
            return $next($request);
        } elseif(Auth::user() && Auth::user()->role_id > ADMIN_ROLE) {
            Auth::logout();
            return redirect('/');
        } else {
            return redirect('/');
        }
    }
}
