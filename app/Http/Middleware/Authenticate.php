<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use PDO;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (! $request->expectsJson()){

           if($request->route('admin.*')){
            return route('admin.login');
           }

           if ($request->route('doctor.*')){
            return route('doctor.login');
           }

            return route('user.login');
        }
        // return $request->expectsJson() ? null : route('user.login');
    }
}
