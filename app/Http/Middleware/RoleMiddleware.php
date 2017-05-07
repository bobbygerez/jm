<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next, ...$params)
    {

        $roles = $request->user()->roles()->get()->toArray();

        $roleNames = [];

        foreach ($roles as $oV) {
            
            foreach ($oV as $iK => $iV) {
                
                if($iK === "name"){

                    $roleNames[] = $iV;
                }
            }
        }


        foreach ($params as $value) {
            
            if( ! in_array($value, $roleNames)){

                return redirect()->action('NavController@home');
            }
        }


        return $next($request);
    }
}
