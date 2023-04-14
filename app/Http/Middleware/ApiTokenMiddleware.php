<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ApiTokenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->header('api_token');
    
        $user = User::where('api_token', $token)->first();
    
        if (!$user) {
            return response()->json(['error' => 'Invalid API token'], 401);
        }
    
        $request->setUserResolver(function () use ($user) {
            return $user;
        });
    
        return $next($request);
    }
}
