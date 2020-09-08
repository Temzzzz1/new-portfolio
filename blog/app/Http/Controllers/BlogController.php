<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{

    public function recentBlog() {
        $blog = new Blog();
        return view('welcome', ['blog' => $blog->take(5)->get()]);
    }

    public function allData()
    {
        return view('blog', ['data' => Blog::all()]);
    }

    public function backBlog()
    {
        return redirect()->route('blog');
    }

    public function showPost($id)
    {
        $blog = new Blog();

        return view('post', ['post' => $blog->find($id)]);
    }
}
