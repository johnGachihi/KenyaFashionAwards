<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogPageController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        $approved_posts = Post::where('post_status', 'approved')->orderBy('created_at', 'desc')->get();

        return view('blog', [
            'approved_posts' => $approved_posts
        ]);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('show_blog',[
            'post' => $post
        ]);
    }

    public function single($id)
    {
        $post = Post::find($id);
        return view('single-blog', [
            'post' => $post
        ]);
    }
}
