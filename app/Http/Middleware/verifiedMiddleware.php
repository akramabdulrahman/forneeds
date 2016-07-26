<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class verifiedMiddleware {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (Auth::user()->verified == 0) {
            return redirect('/')->with(array('error' => 'your email must be verified in order to continue', 'emailVerificationFlash' => 1));
        }
        return $next($request);
    }

}
