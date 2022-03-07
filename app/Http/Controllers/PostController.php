<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    public function index(){
        
        $posts= Post::get();

        return view('posts.post', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
       Post::create($request->all());
       return redirect()->route('post.index');
    }
}
