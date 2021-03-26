<?php

namespace App\Http\Middleware;

use Closure;

class IsCustomer
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
        if (!is_customer()) {
            return redirect()->route('login',['redirect' => $request->getUri()]);
        }
        return $next($request);
    }
}
