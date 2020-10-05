<?php

namespace SteadfastCollective\AccountsIQ;

use Illuminate\Support\ServiceProvider;

class AccountsIQServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/accountsiq.php' => config_path('accountsiq.php'),
            ], 'config');
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/accountsiq.php', 'vesta');

        $this->app->bind('AccountsIQ', AccountsIQ::class);
    }
}
