<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function index(){
    	return view('index');
    }
    public function category(){
        return view('user.category');
    }
    public function blog(){
        return view('blog');
    }
    public function criteria(){
        return view('user.criteria');
    }
    public function contact(){
        return view('contact');
    }
    public function models(){
        return view('models');
    }
    public function projects(){
        return view('projects');
    }
    public function singleblog(){
        return view('single-blog');
    }
    public function login(){
        return view('login');
    }
    public function signup(){
    return view ('signup');
    }
    public function vote(){
        return view ('vote');
    }
    public function test(){
        return view ('test');
    }
}
