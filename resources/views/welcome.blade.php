@extends('layouts.main')
@section('title','Welcome')
@section('content')
<div>
    <h1>Pagina inicial</h1>   
    <a href="{{ route('post.index') }}">Post</a>     
</div>
@endsection