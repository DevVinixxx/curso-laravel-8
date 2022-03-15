@extends('layouts.main')
@section('title','Post')
@section('content')
<div>
    <h1>View de Posts</h1>
    <hr>
        <a href="{{ route('post.create') }}">Criar novo post</a>
    <hr>
    @if (session('message'))
        <div class="bg-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="m-3">
        <h3>Todos os Posts: </h3>
        @foreach ($posts as $post)
            <p>{{ $post->title }}
            [ <a href="{{ route('posts.show', $post->id) }}">Ver</a> ] 
        </p>
        @endforeach
    </div>
</div>
@endsection