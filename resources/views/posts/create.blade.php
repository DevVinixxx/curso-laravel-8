@extends('layouts.main')
@section('title','Welcome')
@section('content')
<div class="bg-light">
    <div class="container">
    <h1>cadastrar novo post</h1>

    <form action="{{ route('posts.store') }}" method="post">
        @csrf
            <input type="text" name="title" id="title" placeholder="Titulo">
            <textarea name="content" id="content" cols="30" rows="4"></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>
</div>
@endsection