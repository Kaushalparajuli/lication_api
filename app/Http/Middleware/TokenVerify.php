<?php

namespace App\Http\Middleware;

use App\Models\TokenRequest;
use App\Models\UserToken;
use Closure;
use Illuminate\Http\Request;

class TokenVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if ($request->has('token')) {
            $token = UserToken::where('token', $request->get('token'))->first();
            if ($token) {
                $token_req = TokenRequest::create([
                    'user_id' => $token->user_id,
                    'user_token_id' => $token->id,
                    'ip' => @$request->ip(),
                    'user_agent' => @$request->userAgent(),
                ]);
                return $next($request);
            } else {
                return response()->json(['message' => 'Invalid Token'], 401);
            }
        } else {
            return response()->json(['message' => 'Token not found'], 401);
        }

    }
}