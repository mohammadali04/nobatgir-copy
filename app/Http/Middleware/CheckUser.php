<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Validation\Rules\Exists;
use Route;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $service_parameter=Route::current()->parameter('service');
        $turn_parameter=Route::current()->parameter('turn');
        if(isset($service_parameter)){
            $parameter=$service_parameter;
        }
        if(isset($turn_parameter)){
            
            $parameter=$turn_parameter->service()->first();
        }
        $service_id=auth()->user()->service()->first()->id;
        if($service_id==$parameter->id){
            return $next($request);
        }
        else{
            $msg='دسترسی به این لینک برای شما مقدور نیست';
            return redirect(Route('index'))->with('warning',$msg);
        }
        
    }
}
