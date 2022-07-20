<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;

class BlogPostController extends Controller
{
    public function blog(){
        return view('blog-post-page');
    }
}
