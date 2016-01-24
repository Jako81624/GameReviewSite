<?php

namespace App\Http\Middleware;

use Closure;
use App\Tools\Permissions;

class Debugger
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
        if (!Permissions::check('debug')) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                abort(403);
            }
        }

        return $next($request);
    }
}
