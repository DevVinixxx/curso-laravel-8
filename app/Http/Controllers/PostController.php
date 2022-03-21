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
       
       return redirect()->route('post.index')->with('message','Post criado com sucesso!');
    }

    

    public function destroy($id){
        if(!$post = Post::find($id))
            return redirect()->route('post.index');

            $post->delete();
        
        return redirect()->route('post.index')->with('message','Post deletado com sucesso ');  
    }

    public function show($id){
        $post = Post::find($id);

        if(!$post){
            return redirect()->route('post.index');
        }

        return view('posts.show',compact('post'));
    }

    public function edit($id){
        if(!$post = Post::find($id)){
            return redirect()->back();
        }

        return view('posts.edit', compact('post'));
    }

    public function update(StoreUpdatePost $request, $id){
        if(!$post = Post::find($id)){
            return redirect()->back();
        }

        $post->update($request->all());

        return redirect()->route('post.index')->with('message','Post Editado com sucesso!');
    }
}
