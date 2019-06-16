<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogsController extends Controller
{
    public function view() {
        $posts = Post::all();

        $new_posts = Post::where('post_status', 'new')->orderBy('created_at', 'desc')->get();
        $approved_posts = Post::where('post_status', 'approved')->orderBy('created_at', 'desc')->get();
        $rejected_posts = Post::where('post_status', 'rejected')->orderBy('created_at', 'desc')->get();

        return view('blog_admin.dashboard', [
            'posts' => $posts,
            'new_posts' => $new_posts,
            'approved_posts' => $approved_posts,
            'rejected_posts' => $rejected_posts
        ]);
    }

    public function viewApproved() {
        $posts = Post::all();

        $new_posts = Post::where('post_status', 'new')->orderBy('created_at', 'desc')->get();
        $approved_posts = Post::where('post_status', 'approved')->orderBy('created_at', 'desc')->get();
        $rejected_posts = Post::where('post_status', 'rejected')->orderBy('created_at', 'desc')->get();

        return view('blog_admin.approved_posts', [
            'posts' => $posts,
            'new_posts' => $new_posts,
            'approved_posts' => $approved_posts,
            'rejected_posts' => $rejected_posts
        ]);
    }

    public function viewRejected() {
        $posts = Post::all();

        $new_posts = Post::where('post_status', 'new')->orderBy('created_at', 'desc')->get();
        $approved_posts = Post::where('post_status', 'approved')->orderBy('created_at', 'desc')->get();
        $rejected_posts = Post::where('post_status', 'rejected')->orderBy('created_at', 'desc')->get();

        return view('blog_admin.rejected_posts', [
            'posts' => $posts,
            'new_posts' => $new_posts,
            'approved_posts' => $approved_posts,
            'rejected_posts' => $rejected_posts
        ]);
    }

    public function approvePost(Request $request, $id)
    {
        $post = Post::find($id);
        $post->post_status = 'approved';
        $post->save();

        return redirect('/blog_admin/home');

        return response()->json([
            'error' => false
        ]);
    }

    public function rejectPost(Request $request, $id)
    {
        $post = Post::find($id);
        $post->post_status = 'rejected';
        $post->save();

        return redirect('/blog_admin/home');

        return response()->json([
            'error' => false
        ]);
    }

    public function deletePost($id) {
        Post::destroy($id);

        return redirect('/blog_admin/home');

        return response()->json([
            'error' => false
        ]);
    }
}
