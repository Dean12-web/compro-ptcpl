<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            return $next($request);
        }

        // skip asset (css, js, dll)
        if ($request->is('build/*')) {
            return $next($request);
        }

        if (!session()->has('visited')) {
            Visitor::create([
                'ip' => $request->ip(),
                'date' => now()->toDateString(),
                'user_agent' => $request->userAgent(),
                'url' => $request->fullUrl(),
            ]);

            session()->put('visited', true);
        }
        return $next($request);
    }
}
