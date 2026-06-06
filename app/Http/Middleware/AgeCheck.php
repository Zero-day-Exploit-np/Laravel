<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "<pre>";
        print_r($request->age);
        if($request->age<18){
            die("you cannot visite this site");
        }
        echo "Echo from age check";
        return $next($request);
    }
}
