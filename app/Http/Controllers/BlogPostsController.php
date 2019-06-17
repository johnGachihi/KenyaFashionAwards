<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Post;
use App\User;

class BlogPostsController extends Controller
{
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $posts = Post::all();

        $new_posts = Post::where('post_status', 'new')->orderBy('created_at', 'desc')->get();
        $approved_posts = Post::where('post_status', 'approved')->orderBy('created_at', 'desc')->get();
        $rejected_posts = Post::where('post_status', 'rejected')->orderBy('created_at', 'desc')->get();
        
        return view('blogger.blogger_dash', [
            'posts' => $user->posts,
            'approved_posts' => $approved_posts
        ]);
    }

    public function viewPending()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $posts = Post::all();

        $new_posts = Post::where('post_status', 'new')->orderBy('created_at', 'desc')->get();
        $approved_posts = Post::where('post_status', 'approved')->orderBy('created_at', 'desc')->get();
        $rejected_posts = Post::where('post_status', 'rejected')->orderBy('created_at', 'desc')->get();

        return view('blogger.pending_posts', [
            'posts' => $user->posts,
            'new_posts' => $new_posts
        ]);
    }

    public function viewRejected()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $posts = Post::all();

        $new_posts = Post::where('post_status', 'new')->orderBy('created_at', 'desc')->get();
        $approved_posts = Post::where('post_status', 'approved')->orderBy('created_at', 'desc')->get();
        $rejected_posts = Post::where('post_status', 'rejected')->orderBy('created_at', 'desc')->get();

        return view('blogger.rejected_posts', [
            'posts' => $user->posts,
            'rejected_posts' => $rejected_posts
        ]);
    }

    public function createPost(Request $request, $id = null)
    {
        $this->validate($request, [
            'coverImage' => 'image|nullable|max:1999'
        ]);

        //Handle File Upload
        if($request->hasFile('coverImage')) {
            //Get filename with extension
            $filenameWithExt = $request->file('coverImage')->getClientOriginalName();
            //Get filename only
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get extension only
            $extension = $request->file('coverImage')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('coverImage')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        

        $post = $id == null ? new Post() : Post::find($id);
        
        $post->title = $request->input('postTitle');


        $post->body = $request->input('ckEditor');

        $post->user_id = auth()->user()->id;
        if($request->hasFile('coverImage')) {
            $post->cover_image = $fileNameToStore;
        }

        $post->save();
        
        return response()->json([
            'error' => false
        ]); 

        return view('blogger.blogger_dash');
    }

    public function create() 
    {
        return view('blogger.create');
    }

    public function editPost($id)
    {
        $post = Post::find($id);

        if (auth()->user()->id !==$post->user_id) {
            return redirect('/blog')->with('error', 'Unauthorised Page!');
        }

        return view('blogger.edit', [
            'post' => $post
        ]);
    }

    /** This method may be integrated with `createCategory()` */
    public function updatePost(Request $request, $id) {

        //Handle File Upload
        if($request->hasFile('coverImage')) {
            //Get filename with extension
            $filenameWithExt = $request->file('coverImage')->getClientOriginalName();
            //Get filename only
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get extension only
            $extension = $request->file('coverImage')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //Upload image
            $path = $request->file('coverImage')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        

        $post = Post::find($id);
        
        $post->title = $request->input('postTitle');
        $post->body = $request->input('ckEditor');
        
        if($request->hasFile('coverImage')) {
            $post->cover_image = $fileNameToStore;
        }
        
        $post->save();

        return redirect('/blogger/myblogs');

        return response()->json([
            'error' => false
        ]);
    }

    public function deletePost($id) {
        Post::destroy($id);

        if (auth()->user()->id !==$post->user_id) {
            return redirect('/myblog')->with('error', 'Unauthorised Page!');
        }

        return response()->json([
            'error' => false
        ]);
    }
}
