<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authmiddleware
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
        if (session('type') =='admin'){
            return redirect()->route('fr');

        }else{

            return redirect()->route('formationcomponentuser');
        }

        return $next($request);
    }
}