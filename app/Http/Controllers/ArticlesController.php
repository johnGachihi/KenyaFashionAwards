<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Storage;

class ArticlesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index', 'show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$articles = Article::orderBy('title','desc ')->get();  
        //$articles = Article::all(); 
        //$articles = DB::select('SELECT * FROM articles');
         $articles = Article::orderBy('id','desc')->paginate(4); 
        return view('articles.index')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required',
            'body'=> 'required',
            'cover_image'=>'image|nullable|max:1999'
        ]);

        if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images'.$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $article = new Article;
        $article->title = $request->input('title');
        $article->body = $request->input('body');
        $article->user_id = auth()->user()->id;
        $article->cover_image = $fileNameToStore;
        $article->save();
        return redirect('/articles')->with('success', "Article posted");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('articles.show')->with('article', $article);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        //Check for correct user
        if(auth()->user()->id !== $article->user_id){
            return redirect('/articles')->with('error', 'Unauthorized page');
        }
        return view('articles.edit')->with('article', $article);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, ['title'=> 'required',
            'body'=> 'required']);

          if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images'.$fileNameToStore);
        }

        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->body =    $request->input('body');
        if($request->hasFile('cover_image')){
             $article->cover_image = $fileNameToStore;
        }
        $article->save();
        return redirect('/articles')->with('success', "Article updated");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);

        //Check for authorization
         if(auth()->user()->id !== $article->user_id){
            return redirect('/articles')->with('error', 'Unauthorized page');
        }
        if($article->cover_image != 'noimage.jpg'){
            Storage::delete('public/cover_image/'. $article->cover_image);
        }

        $article->delete();
        return redirect('/articles')->with('success', "Article deleted");

    }
}
