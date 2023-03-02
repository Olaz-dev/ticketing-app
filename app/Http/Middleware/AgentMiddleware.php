<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentMiddleware
{
  
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role_as == 3) {
            return $next($request);
        }
        abort(403);
    }
}
