<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

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
        if (!$request->expectsJson()) {

            if (Auth::guard('webcompany')->check()) {
                return route('admin.login', ['tenant' => $_COOKIE['tenant_name']]);
            }else if(Auth::guard('web')->check()){
                return route('admin.dashboard', ['tenant' => $_COOKIE['tenant_name']]);
            }
            
            return route('login');
        }
    }
}
