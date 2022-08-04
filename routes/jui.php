<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\SingleActionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::redirect('/', '/blog-post');

Route::get('/abir', function (){
    echo "Hello Lulu Abir";
});

Route::get('/demo', [DemoController::class, 'demoFun'])->name('demo');

Route::get('/invoke-controller', SingleActionController::class);