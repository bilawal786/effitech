<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
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
        if (Auth::user()->role == '1'){
            return redirect()->route('client.dashboard');
        }elseif (Auth::user()->role == '2' || Auth::user()->role == '3' || Auth::user()->role == '4'){
            return redirect()->route('provider.dashboard');
        }
        else{
            return $next($request);
        }
    }
}
