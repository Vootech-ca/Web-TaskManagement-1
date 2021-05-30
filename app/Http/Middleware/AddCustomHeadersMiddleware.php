<?php

namespace App\Http\Middleware;

use Closure;

class AddCustomHeadersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $response->headers->set('Access-Control-Expose-Headers', ['x-total-count']);
        return $response;
    }
}
