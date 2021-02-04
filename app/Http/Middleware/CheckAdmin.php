<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
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
        if(!Auth::user()){
            return redirect(route('admin_login'))->with('info', 'You have to log in ');
        }
        $userRoles = Auth::user()->roles->pluck('name');
        if (!$userRoles->contains('admin')){
            return redirect(route('admin_login'))->with('error', 'You do not have permission!');
        }
        return $next($request);
    }
}
