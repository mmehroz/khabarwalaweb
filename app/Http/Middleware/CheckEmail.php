<?php

namespace App\Http\Middleware;

use Closure;

class CheckEmail
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
		if(session()->get("email")){
            
			if(session()->get("role") == "2" || session()->get("role") == "1" ){

				return $next($request);
				
			}else{
				
				return redirect('/')->with('message','You Are Not Allowed To Visit This Page');
			}
			
        }else{
			return redirect('/')->with('message','You Are Not Allowed To Visit Portal Without login');
        }
    }
}
