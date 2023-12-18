<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!($request->session()->has('user')) && ($request->path()=='dashboard' || $request->path()=='project') )
        {
            return redirect('/admin');
        }

        if(($request->session()->has('user')) && $request->path()=='admin' )
        {
            return redirect('/dashboard');
        }
        return $next($request);

    }
}
