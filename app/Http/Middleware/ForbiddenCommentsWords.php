<?php

namespace App\Http\Middleware;

use Closure;

class ForbiddenCommentsWords
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
        $forbiden_words = [
            'hate', 'idiot','stupid','Hate','Idiot', 'Stupid'
        ];
        foreach($forbiden_words as $word){

            if(strstr($request->content, $word)){

                return response(view('Teams.forbidden-comment'));
                
            }
        }   
        
        return $next($request);
    }
}
