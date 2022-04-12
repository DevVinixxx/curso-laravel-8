<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatePost;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        
        $posts= Post::orderBy('id')->paginate(3);

        return view('posts.post', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(StoreUpdatePost $request){

        $data = $request->all();

        if($request->image->isValid()){

            $nameFile = Str::of($request->title)->slug('-'). '.' .$request->image->getClientOriginalExtension();

            $image = $request->image->storeAs('posts', $nameFile);
            $data['image']=$image;
        }

       Post::create($data);
       
       return redirect()->route('post.index')
       ->with('message','Post criado com sucesso!');
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

    public function search(Request $request){

        $filters = $request->except('_token');

       $posts= Post::where('title','%{$request->search}%')
                        ->orWhere('content', 'LIKE', "%{$request->search}%")
                        ->paginate(3);
                        
        return view('posts.post', compact('posts','filters'));
    }
}
