<?php

namespace Anil\Khalti\Providers;

use Anil\Khalti\Khalti;
use Illuminate\Support\ServiceProvider;

class KhaltiServiceProvider extends ServiceProvider
{
    public function register()
    {


        $this->mergeConfigFrom(__DIR__ . '/../config/khalti.php', 'khalti');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/khalti.php' => config_path('khalti.php'),
        ], 'config');

        $this->app->bind('khalti', function () {
            return new Khalti();
        });
    }
}
