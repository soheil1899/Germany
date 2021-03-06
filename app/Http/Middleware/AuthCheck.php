<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if (Auth::user()->checkroll()->first()->roll == 'user') {
                if (Auth::user()->tokenmobile != null) {

                    return $next($request);
                } else {
                    return redirect('/userpanel');
                }
            } else {
                return redirect('/');

            }
        } else {
            return redirect('/login');
        }
    }
}
