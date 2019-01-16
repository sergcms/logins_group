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
        $seoUrl = str_replace(url('/'), '', url()->current());

        $meta = Seo::where('url', $seoUrl)
                ->Orwhere('url', mb_substr($seoUrl, 1))
                ->first();

        if(!$meta) {
            $meta = Seo::where('url', '/')->first();
        } 

        view()->share('meta', $meta);
        
        return $next($request);
    }
}
