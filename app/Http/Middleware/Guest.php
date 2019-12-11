<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Guest
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
            return redirect()->route('admin.dashboard');
        } elseif(Auth::user() && Auth::user()->role_id > ADMIN_ROLE ) {
            return redirect()->route('user.dashboard');
        } else {
            return $next($request);
        }
    }
}
