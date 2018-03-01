<?php

namespace App\Http\Middleware;

use Closure;

class RenterMiddleware
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
        if(auth()->user()->type != 'agent') {
            return redirect()->back();

        }
        return $next($request);
    }
}
