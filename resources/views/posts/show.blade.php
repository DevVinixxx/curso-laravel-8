@extends('layouts.main')
@section('title','Welcome')
@section('content')
<div class="p-2">
    <h1>Detalhes do post:<br> {{ $post->title }}</h1>

    <ul>
        <li><strong> Titutlo: </strong>{{ $post->title }}</li>
        <li><strong> Conteudo: </strong>{{ $post->content }}</li>
    </ul>

    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE" id="">
        <button type="submit">Deletar post {{ $post->title }}</button>
    </form>
    <a href="{{ route('post.create') }}">Criarrrr</a>
</div>
@endsection