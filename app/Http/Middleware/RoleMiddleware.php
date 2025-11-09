<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,  ...$roles): Response
    {
        $user = Auth::user();
        // Compare role name (or slug) against the allowed roles
        $userRole = $user->role->name ?? null; // or ->slug

        if (!$userRole || !in_array($userRole, $roles)) {
            abort(403, 'Unauthorized => '.$userRole);
        }

        return $next($request);
    }
}
