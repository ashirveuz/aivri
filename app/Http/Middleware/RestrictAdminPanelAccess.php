<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RestrictAdminPanelAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('admin/login') || $request->is('logout')) {
            return $next($request);
        }

        if (!auth()->check() || auth()->user()->role !== 'admin') {
            return abort(404);
        }

        return $next($request);
    }
}
