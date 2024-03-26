<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class ExtractBearerToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();
        // return $next($request);
        if(!$token){
            return response()->json([
               'error message' => 'Bearer token not found Unauthorized'
            ], 401);
        }
        if($token !== env('BEARER_TOKEN')){
            return response()->json([
                'error message' => 'forbidden token'
            ], 403);
        }

        return $next($request);
    }
}
