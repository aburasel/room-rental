<?php

namespace App\Http\Middleware;

use App\Enums\Role;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check() && (auth()->user()->role == Role::ADMIN->value)) {
                return redirect(route("admin.dashboard"));
            } else if (Auth::guard($guard)->check() && (auth()->user()->role == Role::RENTAL_OWNER->value)) {
                return redirect(route("rental_owner.dashboard"));
            } else if (Auth::guard($guard)->check() && (auth()->user()->role == Role::GENERAL_USER->value)) {
                return redirect(route("home"));
            }
        }

        return $next($request);
    }
}
