<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($user->hasAnyRole('manager')) {
            return redirect('/approval');
        } else if ($user->hasManyRole('unit')) {
            return redirect('/home');
        }
        return $next($request);
    }
}
