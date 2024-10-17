<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log; // Corrected import for Log
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LogMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();
        Log::info('User ID:'. $user->id. '| name:'.$user->name .' access to URL: ' . $request->fullUrl()); // Corrected log statement

        return $next($request);
    }
}
