@extends('layouts.main')
@section('title','Edit')
@section('content')
<div class="container text-center">
    <h1>Editar o post {{ $post->title }}</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('put')
        <div class="">
            <div class="form-group m-1">
                <input type="text" name="title" id="title" placeholder="Titulo" value="{{ $post->title }}">
            </div>
            <div class="form-group m-1">
                <textarea name="content" id="content" cols="30" rows="4" placeholder="Descrição">{{ $post->content }}</textarea>
            </div>
            <button class="" type="submit">Atualizar</button>
        </div>
    </form>
</div>
@endsection