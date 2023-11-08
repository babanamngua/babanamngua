<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class role
{
    public function handle($request, Closure $next)
    {
        if(auth()->user()->role == 1){
            return $next($request);
        }
   
        return redirect('clients.home')->with('error',"You don't have admin access.");
    }
}
