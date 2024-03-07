<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthUrlParameter
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
    if ($request->query('secure_param') !== 'magnitsky') {
        abort(403, 'Unauthorized');
    }

    return $next($request);
}

}
