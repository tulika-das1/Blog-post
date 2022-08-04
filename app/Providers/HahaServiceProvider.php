<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class HahaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Haha', function($app) {
            return new \App\Custom_Facades_made_by_abir_and_tulika\Haha();
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
