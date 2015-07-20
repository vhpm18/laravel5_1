<?php

namespace App\Http\Middleware;

use Closure;

class IsVerified
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
        $user = auth()->user();

        if ($user->registration_token != null) {
            return redirect()->route('home')
                ->with('alert', 'Por favor verifica tu email');
        }

        return $next($request);
    }
}
