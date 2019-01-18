<?php

namespace App\Http\Middleware;

use Closure;
use App\Seo;

class Meta
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
        $meta = Seo::where('url', '/' . $request->path())
                ->Orwhere('url', $request->path())
                ->first();

        if(!$meta) {
            $meta = Seo::where('url', '/')->first();
        } 

        view()->share('meta', $meta);
        
        return $next($request);
    }
}
