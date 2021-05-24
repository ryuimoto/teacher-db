<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            // if (route('user.login')) {
            //     return route('user.login');
            // } elseif (route('admin.login')) {
            //     return route('admin.login');
            // } // user 

            if(route('admin.login')){
                return route('admin.login');
            }
        }
    }
}
