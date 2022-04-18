<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => config('CountryMiddleware.route_prefix')], function () {
    Route::get('/ban', function () {
        return view('Webazin.CountryMiddleware.ban');
    })->name('countryMiddleware.ban_ip');
});
