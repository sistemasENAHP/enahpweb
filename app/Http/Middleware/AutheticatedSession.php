<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutheticatedSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
{
    if (!Auth::check() || !$request->user()->hasAnyRole($roles)) {
        return redirect('/'); // Redirigir si no tiene el rol
    }

    return $next($request);
}
}
