<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;
use Redirect;
use Flash;

class SentinelPermission
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Sentinel::check()) {
            if (!Sentinel::inRole('superadmin')) {
                if (!$request->route()->getName()) {
                    return $next($request);
                }
                if ($request->route()->getName() != 'admin.dashboard' && !Sentinel::hasAccess($request->route()->getName())) {
                   // return Redirect::route('admin.dashboard')->withErrors('Permission denied.');
                }
            }
        }

        return $next($request);
    }
}
