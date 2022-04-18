<?php

namespace Webazin\CountryMiddleware\Middlewars;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Webazin\CountryMiddleware\Country;

class CountryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $countryBanIp = collect(config('CountryMiddleware.countries_ban'));
        $requestIp = $request->ip();
        $geo = geoip($requestIp);
        if ($countryBanIp->contains($geo->iso_code)) {
            return redirect(route('countryMiddleware.ban_ip'));
        }
        return $next($request);
    }
}
