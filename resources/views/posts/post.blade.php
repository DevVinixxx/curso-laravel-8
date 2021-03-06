@extends('layouts.main')
@section('title','Posts')
@section('content')
<div>
    <div>
        <div>
            <h1>View de Posts</h1>
            <hr>
                <a href="{{ route('post.create') }}"  class="btn btn-primary">Criar novo post</a>
            <hr>
            @if (session('message'))
                <div class="bg-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="m-2">
            <form action="{{ route('posts.search') }}" method="post">
                @csrf
                <input type="text" name="search" placeholder="Filtrar">
                <button type="submit" class="btn btn-primary">Filtrar</button>
            </form>
        </div>
        <div class="m-3">
            <h3>Todos os Posts: </h3>
            @foreach ($posts as $post)
                
                <p>
                    <img src="{{ url("storage/{$post->image}") }}" alt="{{ $post->title }}" style="max-width:100px;">
                    {{ $post->title }}
                    [ <a href="{{ route('posts.show', $post->id) }}">Ver</a> ] |
                    [ <a href="{{ route('posts.edit', $post->id) }}">Editar</a>]
                </p>
            @endforeach
        </div>
    </div>
    <hr>
    <div>
        @if (isset($filters))
            {{ $posts->appends($filters)->links() }}
        @else
            {{ $posts->links() }}
        @endif
    </div>
</div>
@endsection