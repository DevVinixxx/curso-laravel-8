@extends('layouts.main')
@section('title','Welcome')
@section('content')
<div class="p-3">
    <h1>Cadastrar novo post</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="form-group p-1">
                <input type="text" name="title" id="title" placeholder="Titulo" value="{{ old('title') }}">
            </div>
            <div class="form-group p-1">
                <textarea name="content" id="content" cols="30" rows="4" placeholder="Descrição">{{ old('content') }}</textarea>
            </div>
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>
@endsection