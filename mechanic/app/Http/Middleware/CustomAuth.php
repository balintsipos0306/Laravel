<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        $response = $next($request);
        return $response;
    }

    public function permission(Request $request, Closure $next, $permission)
    {
        if (Auth::check() && Auth::user()->hasPermission($permission)) {
            return $next($request);
        }

        return redirect('/'); // Vagy 403-as hibakód visszaadása: abort(403);
    }
}
