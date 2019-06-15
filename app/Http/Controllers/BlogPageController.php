<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogPageController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        $approved_posts = Post::where('post_status', 'approved')->get();

        return view('blog', [
            'posts' => $posts,
            'approved_posts' => $approved_posts
        ]);
    }
}
