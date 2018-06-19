<?php

namespace App\Http\Middleware;

use Closure;

class MiddSIGAPS
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    /**
     * fecha: 10/06/2018
     * autor: BRALSR
     * version:1.0
     * este es alchivo de configuracion de los accesos de 
     * los usuarion tactico, estrategico y del administrador
     * segun sus funciones y necesidades    
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
