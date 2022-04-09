<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;
class AdminAuth
{
    public function handle(Request $request, Closure $next)
    {
        if(Session::has('ADMIN_LOGIN')){
            #
        }else{
            Session::flash('error', 'Access Denied!');
            return redirect('/');
        }
        return $next($request);
    }
}
