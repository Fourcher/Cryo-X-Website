<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $blogs = Blog::where('published', true)->latest()->get();

        return view('blog.index', compact('blogs'));
    }


    public function post(Blog $post)
    {
        return view('blog.post', compact('post'));
    }   

    
}
