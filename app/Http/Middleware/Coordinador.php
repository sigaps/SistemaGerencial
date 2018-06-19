<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Coordinador
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
        if (Auth::user()->type=="gerente" || Auth::user()->type=="coordinador") {
            return $next($request);
        }else{
            //return redirect()->guest('/');
            abort(401);
        }
        
        
    }
}
