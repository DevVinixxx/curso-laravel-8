<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatePost;
class PostController extends Controller
{
    public function index(){
        
        $posts= Post::get();

        return view('posts.post', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(StoreUpdatePost $request){

       Post::create($request->all());
       
       return redirect()->route('post.index');
    }

    public function show($id){
        //$post = Post::where('id', $id)->first();
        $post = Post::find($id);

        if(!$post){
            return redirect()->route('post.create');
        }

        return view('posts.show',compact('post'));
    }

    public function destroy($id){
        if(!$post = Post::find($id)){
            return redirect()->route('post.create');

            $post->delete();
        }
        return redirect()->route('post.create')->with('message','Post deletado com sucesso ');
            
            
    }
}
