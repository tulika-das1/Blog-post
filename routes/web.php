<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/blog-post');

// Route::get('blog', BlogPostController::class, 'blog');
Route::get('blog-post', [BlogController::class, 'blog'])->name('blog-post');
Route::post('blog-post', [BlogController::class, 'blogPost']);
Route::get('all-blogs', [BlogController::class, 'bloglist'])->name('all-blogs');
Route::get('edit-blog/{blogPost}', [BlogController::class, 'editBlog'])->name('edit-blog');
Route::post('edit-blog/{blogPost}', [BlogController::class, 'updateBlog']);
Route::get('delete-blog/{blogPost}', [BlogController::class, 'deleteBlog'])->name('delete-blog');