<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Demo\DemoController;
use App\Custom_Facades_made_by_abir_and_tulika\Haha;
use App\Http\Controllers\SmilingTulikAbirController;

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

// Route::get('blog', BlogPostController::class, 'blog');
Route::get('blog-post', [BlogController::class, 'blog'])->name('blog-post');
Route::post('blog-post', [BlogController::class, 'blogPost']);
Route::get('all-blogs', [BlogController::class, 'bloglist'])->name('all-blogs');
Route::get('edit-blog/{blogPost}', [BlogController::class, 'editBlog'])->name('edit-blog');
Route::post('edit-blog/{blogPost}', [BlogController::class, 'updateBlog']);
Route::get('delete-blog/{blogPost}', [BlogController::class, 'deleteBlog'])->name('delete-blog');


// test routes for practice routes
// Route::get('/test/{count?}', function ($count = 1) {
    
//     for($i = 0; $i <$count; $i++)
//     {
//         echo 'Hello Abir'. '<br>';
//     }
// })->name('test');

Route::group(['prefix' => 'test', 'as' => 'mashimoni.'], function() {

    Route::get('/index', function(){
        echo "Tulika is a good girl";
    })->name('index');

    Route::get('/jui', function(){
        echo "Tulika is also known as Jui";
    })->name('jui');

});

Route::get('/go', function () {
    return redirect(route('mashimoni.jui'));
});

Route::group(['prefix' => 'admin' , 'as' => 'murgichor.'], function() {
    Route::group(['prefix' => 'tina', 'as' => 'tuntuni.'], function() {
        Route::get('/nested-route', function() {
            echo "Hello from nested route";
        })->name('nested-route');
    });

    Route::get('/index', function(){
        echo "My name is Abir";
    })->name('abir');

});

Route::get('/lulu', function(){
    return redirect(route('murgichor.abir'));
});

Route::get('/tulika', function(){
    return redirect(route('murgichor.tuntuni.nested-route'));
});

Route::get('/train', function(){
    echo "escaped from TT";
})->middleware('tina');

Route::get('/storage-file',[DemoController::class, 'uploadImage'])->name('storage-file');

Route::get('/good-mrng',function(){
    // $abir = new \App\Custom_Facades_made_by_abir_and_tulika\Abir();
    // $abir->goodMorning();

    \App\Custom_Facades_made_by_abir_and_tulika\Tulika::goodMorning();
    \App\Custom_Facades_made_by_abir_and_tulika\Tulika::hi5();
    \App\Custom_Facades_made_by_abir_and_tulika\Tulika::gutenGirl();
});


Route::get('/haha', function(Haha $haha)
{  
    $haha->subhasubhaHaha();
});

Route::get('hasi-toh-phasi', [SmilingTulikAbirController::class, 'poke'])->name('poke');


Route::get('/login',[DemoController::class, 'login'])->name('login');
Route::post('/login',[DemoController::class, 'signin']);

Route::get('/register',[DemoController::class, 'register'])->name('register');
Route::post('/register',[DemoController::class, 'signup']);

Route::get('/home',function(){
    return view('home');
})->name('home');