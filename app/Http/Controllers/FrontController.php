<?php

namespace App\Http\Controllers;
use App\Post;
use DB;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $title = 'formation';
        $posts = Post::orderBy('post_type','desc')->paginate(5);

        return view('front.formation')->with(['posts'=>$posts ,'title'=> $title]);
    }

    public function show(){
        $title = 'Detail formation/stage';
        return view('posts.show')->with('title', $title);
    }


    public function showPostByFormation(){
        $title = 'formation';
        $posts = Post::where('post_type', 'formation')->orderBy('created_at','desc')->paginate(15);
        return view('front.formation')->with(['posts'=>$posts ,'title'=> $title]);
    }

    public function showPostByStage(){
        $title = 'stage';
        $posts = Post::where('post_type', 'stage')->orderBy('created_at','desc')->paginate(15);
        return view('front.stage')->with(['posts'=>$posts,'title'=> $title]);
    }

    public function contact(){
        $title = 'CONTACT';
        return view('front.contact')->with('title', $title);
    }
}
