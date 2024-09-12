<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class isAdmin
{
    use AuthorizesRequests;
    public function isAdmin($type): bool
    {
        return $type === 2;
    }

    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            if (!$request->is('login')) {
                return redirect()->route('login');
            }
        } else {
            if (Auth::user()->user_type !== 2) {
                if (!$request->is('error')) {
                    return redirect('/error');
                }
            }
        }

        return $next($request);
    }
}
