@extends('layouts.main')
@section('title',"Post $post->title")
@section('content')
<div class="p-2">
    <div class="">
        <h1>Detalhes do post:<br> {{ $post->title }}</h1>

        <ul>
            <li><strong> Titutlo: </strong>{{ $post->title }}</li>
            <li><strong> Conteudo: </strong>{{ $post->content }}</li>
            <li><strong>Imagem: {{ $post->image }}</strong></li>
        </ul>
        <div>
            
        </div>

        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE" id="">
            <button type="submit" class="btn btn-primary">Deletar post {{ $post->title }}</button>
        </form>
        <div class="button p-1 m-1">
            <a class="btn btn-primary" href="{{ route('post.index') }}" role="button">Voltar</a>
        </div>
    </div>
</div>
@endsection

