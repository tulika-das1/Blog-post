<?php

namespace App\Custom_Facades_made_by_abir_and_tulika;

use Illuminate\Support\Facades\Facade;

class Tulika extends Facade
{
    protected static function getFacadeAccessor() {
        return \App\Custom_Facades_made_by_abir_and_tulika\Abir::class;
    }
}