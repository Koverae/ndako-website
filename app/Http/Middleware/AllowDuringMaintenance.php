<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AllowDuringMaintenance
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Allow these routes during maintenance
        $allowedRoutes = [
            'early',
        ];

        // Check if the current route is in the allowed list
        if (in_array($request->route()?->getName(), $allowedRoutes)) {
            return $next($request);
        }

        // Otherwise, respect maintenance mode
        if (app()->isDownForMaintenance()) {
            abort(503);
        }

        return $next($request);
    }
}
