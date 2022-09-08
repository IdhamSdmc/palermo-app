<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Sentinel;

class SentinelAdmin
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
        $user = 0;
        if (Auth::check()){
            $user = DB::table('role_users')->where('user_id', Auth::user()->id)->where('role_id',1)->get();
        }
        /*dd(count($user));
        dd(Auth::check());*/
        if(!Auth::check()){
            return redirect('admin/signin')->with('info', '¡Usted debe estar conectado!');
        }elseif(count($user)<>1){
            //return redirect('my-account');
            echo "redireccion a my-accout";
        }

        return $next($request);
    }
}