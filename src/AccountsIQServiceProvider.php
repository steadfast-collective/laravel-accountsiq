<?php

namespace SteadfastCollective\AccountsIQ;

use Illuminate\Support\ServiceProvider;

class AccountsIQServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/accountsiq.php' => config_path('accountsiq.php'),
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
        $this->mergeConfigFrom(__DIR__.'/../config/accountsiq.php', 'vesta');
    }
}
