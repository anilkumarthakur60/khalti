<?php

namespace Anil\Khalti\Providers;

use Anil\Khalti\Khalti;
use Illuminate\Support\ServiceProvider;

class KhaltiServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/khalti.php', 'khalti');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/khalti.php' => config_path('khalti.php'),
        ], 'khalti');

        $this->app->bind('khalti', function () {
            return new Khalti();
        });
        $this->app->singleton(Khalti::class, function () {
            return new Khalti();
        });
    }
}
