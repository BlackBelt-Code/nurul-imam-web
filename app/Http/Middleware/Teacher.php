<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Session;
class Teacher
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
        if(Auth::user()->status_account_id == 1) {
            Session::flash('message', 'Sorry You Cannot Access User Teacher !!'); 
            Session::flash('alert-class', 'alert-danger');  
            return redirect('app/');
        }
        return $next($request);
    }
}
