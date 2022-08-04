<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SingleActionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        echo "Hello Murgi Abir" . '<br>';
        echo "tulika guten girl". '<br>';
        echo "guten means good";
    }
}
