<?php

namespace Webazin\CountryMiddleware;

use App\Models\Country\Country;
use Closure;
use Illuminate\Support\Facades\Cookie;

class CountryCheck {
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle( $request , Closure $next ) {
        $countryBanIp    = Country::whereStatus( 'ban_ip' )->pluck( 'country_code' );
        $countryCpatchIp = Country::whereStatus( 'captcha_ip' )->pluck( 'country_code' );
        $requestIp       = $request->ip();
        $geo             = geoip( $requestIp );
        if ( $countryBanIp->contains( $geo->iso_code ) ) {
            return redirect( route( 'home.banip' ) );
        }
        $session = $request->session()->has( 'captchaIp' );

        if ( $countryCpatchIp->contains( $geo->iso_code ) && ! $session ) {
            return redirect( route( 'home.captchaIp' ) );
        }


        return $next( $request );
    }
}
