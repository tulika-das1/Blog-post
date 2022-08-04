<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;

class TulikaAbirFacadesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('good-mrng',function() {
            return new \App\Custom_Facades_made_by_abir_and_tulika\Abir;
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
