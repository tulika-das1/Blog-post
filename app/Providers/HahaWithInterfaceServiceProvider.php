<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\InterfaceHaha\React;

class HahaWithInterfaceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\InterfaceHaha\ServiceOfHaha', 'App\InterfaceHaha\React', function($app){
            return new React();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
