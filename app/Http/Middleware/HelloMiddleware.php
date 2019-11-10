<?php

namespace App\Http\Middleware;

use Closure;

class HelloMiddleware
{
    public function handle($request, Closure $next)
    {
        $data = [
          ['name'=>'hyde', 'mail'=>'l@yamada'],
          ['name'=>'tetsu', 'mail'=>'a@yamada'],
          ['name'=>'ken', 'mail'=>'r@yamada'],
          ['name'=>'yukihiro', 'mail'=>'c@yamada']
        ];
        $request->merge(['data'=>$data]);
        return $next($request);
    }
}
