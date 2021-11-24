<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware



{ 
    public function handle($request, Closure $next)
    {
        // for Admin   
        if (!Auth::guest() && (Auth::user()->role == "Admin") ) {
        return $next($request);
        }
        // for Editor
        if (!Auth::guest() && (Auth::user()->role == "Editor") ) {
        return $next($request);
        }     
        // for Writer
        if (!Auth::guest() && (Auth::user()->role == "Writer") ) {
        return $next($request);
        }    
        // for Author
        if (!Auth::guest() && (Auth::user()->role == "Author") ) {
        return $next($request);
        } 

        return redirect(route('login'));
 
    }

}