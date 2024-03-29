<?php

namespace App\Http\Middleware;

use Closure;

class CheckBloggerAdmin
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
        if($request->user() && $request->user()->role != 'blog_admin'){
            return new Response(view('unauthorized'));
        }

        return $next($request);
    }
}
