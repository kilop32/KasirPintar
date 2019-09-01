<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == 'owner'){
            if (Auth::guard($guard)->check()) {
                return redirect('/owner/home');
            }
        }
        if ($guard == 'admin'){
            if (Auth::guard($guard)->check()) {
                return redirect('admin/home');
            }
        }
        if ($guard == 'staff'){
            if (Auth::guard($guard)->check()) {
                return redirect('staff/home');
            }
        }
        
        return $next($request);
    }
}
