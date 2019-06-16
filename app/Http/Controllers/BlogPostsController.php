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

        $new_posts = Post::where('post_status', 'new')->get();
        $approved_posts = Post::where('post_status', 'approved')->get();
        $rejected_posts = Post::where('post_status', 'rejected')->get();

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

        $new_posts = Post::where('post_status', 'new')->get();
        $approved_posts = Post::where('post_status', 'approved')->get();
        $rejected_posts = Post::where('post_status', 'rejected')->get();

        return view('blogger.pending_posts', [
            'posts' => $user->posts,
            'new_posts' => $new_posts
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

    public function editPost(Request $request, $id)
    {
        $post = Post::find($id);

        /*if (auth()->user()->id !==$post->user_id) {
            return redirect('/posts')->with('error', 'Unauthorised Page!');
        }
        */

        return view('blogger.create', [
            'post' => $post
        ]);
    }

    /** This method may be integrated with `createCategory()` */
    public function updatePost(Request $request, $id) {
        $post = Post::find($id);
        
        $post->title = $request->input('postTitle');

        $post->body = $request->input('richPostBody');

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

    public function deletePost($id) {
        Post::destroy($id);

        return response()->json([
            'error' => false
        ]);
    }
}
