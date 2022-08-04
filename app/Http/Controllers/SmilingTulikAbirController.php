<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InterfaceHaha\React;

class SmilingTulikAbirController extends Controller
{
    public function poke(React $react)
    {
        $react->dillKhush();
        echo "<br>";
        $react->smilingAbirAndTulika();

    }
    
}
