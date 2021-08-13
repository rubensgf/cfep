<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JwtAuth\Http\Middleware\BaseMiddleware;
use Tymon\JwtAuth\JWTAuth;

class apiProtectedRoute extends BaseMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try{
            $user = JWTAuth::parseToken()->authenticate();

        } catch (\Exception $e) {
            return response()->json(['status' => 'Authorization token not found']);
        }
        return $next($request);
    }
}
