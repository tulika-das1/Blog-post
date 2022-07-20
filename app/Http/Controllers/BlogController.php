<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class BlogController extends Controller
{
    public function blog()
    {
        return view('blog-post-page');
    }

    public function bloglist()
    {
        $blogPosts = BlogPost::all();
        return view('all-blogs')->with(compact('blogPosts'));
    }

    public function blogPost(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:255',
        ]);

        $blogPost = new BlogPost();
        $blogPost->title = $request->title;
        $blogPost->description = $request->description;
        $blogPost->save();

        return redirect()->route('all-blogs');
    }

    public function editBlog(BlogPost $blogPost)
    {
        $blogPost = BlogPost::where('id', $blogPost->id)->first();
        return view('edit-blog')->with(compact('blogPost'));
    }

    public function updateBlog(Request $request, BlogPost $blogPost)
    {
        $request->validate([
            'title' => 'required|max:50',
            'description' => 'required|max:255',
        ]);
        $blogPost->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('all-blogs');
    }

    public function deleteBlog(BlogPost $blogPost)
    {
        $blogPost->delete();
        return redirect()->route('all-blogs');
    }
    
}
