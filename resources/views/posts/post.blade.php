@extends('layouts.main')
@section('title','Welcome')
@section('content')
<div>
    <h1>View de Posts</h1>
    <hr>
        <a href="{{ route('post.create') }}">Criar novo post</a>
    <hr>
    <div class="m-3">
        <h3>Todos os Posts: </h3>
        @foreach ($posts as $post)
            <p>{{ $post->title }}</p>
        @endforeach
    </div>
</div>
@endsection