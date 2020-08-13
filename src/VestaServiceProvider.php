<?php

namespace SteadfastCollective\Vesta;

use Illuminate\Support\ServiceProvider;

class VestaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/vesta.php' => config_path('vesta.php'),
            ], 'config');

            // $this->loadViewsFrom(__DIR__.'/../resources/views', 'vesta');

            // $this->publishes([
            //     __DIR__.'/../resources/views' => base_path('resources/views/vendor/vesta'),
            // ], 'views');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/vesta.php', 'vesta');
    }
}
