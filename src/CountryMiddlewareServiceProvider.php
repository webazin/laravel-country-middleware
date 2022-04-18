<?php

namespace Webazin\CountryMiddleware;

use Illuminate\Support\ServiceProvider;
use Webazin\CountryMiddleware\Middlewars\CountryCheck;

class CountryMiddlewareServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/Config/CountryMiddleware.php', 'CountryMiddleware'
        );
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
            __DIR__ . '/Views' => resource_path('/views/Webazin/CountryMiddleware')
        ]);

        $this->app['router']->aliasMiddleware('countryCheck', CountryCheck::class);

        $this->publishes([
            __DIR__ . '/Config/CountryMiddleware.php' => config_path('CountryMiddleware.php'),
        ]);

        $this->loadTranslationsFrom(__DIR__ . '/Lang', 'CountryMiddleware');
        $this->publishes([
            __DIR__ . '/Lang' => resource_path('/lang/vendor/webazin'),
        ]);

    }
}
