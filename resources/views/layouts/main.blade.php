<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>
        <link rel="icon" type="image/x-icon" href="/img/iconhead.png">

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <!-- Styles -->
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light  bg-secondary">
                <div class="collapse navbar-collapse " id="navbar" >
                    <a href="{{ route('home') }}" class="navbar-brand">
                        <img src="/img/home.png" alt="PeresDev" style="height: 55px">
                    </a>
                    <ul class="navbar-nav" id="navbar-txt">
                        <li class="nav-item ">
                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('post.index') }}" class="nav-link">Post</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div>
                <div>
                    @if (session('msg'))
                        <div id="notificacao" class="bg-success text-center col-md-12 p-2">
                            <p class="msg">{{ session('msg') }}</p>
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>
    </body>
</html>
