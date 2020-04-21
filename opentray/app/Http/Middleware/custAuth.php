<?php

namespace App\Http\Middleware;

use Closure;

class custAuth
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
        //error_log($request->path());
        if (!strcmp(session()->get('permission', 'default'), 'default')) {
            return redirect('/')->withErrors(["Please sign in."]);
        } else if (session()->get('permission', 'default') > 2) {
            if (strcmp($request->path(), 'print') && strcmp($request->path(), 'print/cards')) {
                return redirect('/print')->withErrors(["You don't have permission to access that page."]);
            }
        } else if (session()->get('permission', 'default') > 1) {
            if (!strcmp($request->path(), 'foods') || !strcmp($request->path(), 'facilities') || !strcmp($request->path(), 'staff')) {
                return redirect('/print')->withErrors(["You don't have permission to access that page."]);
            }
        } else if (session()->get('permission', 'default') > 0) {
            if (!strcmp($request->path(), 'facilities')) {
                return redirect('/print')->withErrors(["You don't have permission to access that page."]);
            }
        }
        return $next($request);
    }
}
