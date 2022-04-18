<?php

namespace Webazin\CountryMiddleware;

use Illuminate\Support\ServiceProvider;

class CountryMiddlewareServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations');
        $this->publishes([
            realpath(__DIR__ . '/migrations') => database_path('migrations')
        ], 'migrations');

        $this->loadRoutesFrom(__DIR__ . '/Routes/routes.php');

        $this->loadViewsFrom(__DIR__ . '/Views', 'CountryMiddleware');
        $this->publishes([
            __DIR__ . '/Views' => base_path('resource/views/Webazin/CountryMiddleware')
        ]);

        $this->app['router']->aliasMiddleware('webazin:countryCheck', CountryCheck::class);
    }
}
