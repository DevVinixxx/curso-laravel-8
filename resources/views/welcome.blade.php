@extends('layouts.main')
@section('title','Principal')
@section('content')
<div>
    <h1>Pagina inicial</h1>  
    <div class="m-4">     
        <a href="{{ route('home') }}" class="nav-link">Home</a>        
        <a href="{{ route('post.index') }}" class="nav-link">Post</a>
    </div>
</div>
@endsection


