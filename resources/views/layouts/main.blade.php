<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> @yield('title')</title>
        <link rel="stylesheet" href="">

        <!-- Fonte google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light  bg-secondary">
                <div class="collapse navbar-collapse " id="navbar" >
                    <a href="#" class="navbar-brand">
                        <img src="/img/home.png" alt="PeresDev" style="height: 55px">
                    </a>
                    <ul class="navbar-nav" id="navbar-txt">
                        <li class="nav-item ">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/eventos/criar" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/eventos/entrar" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/eventos/cadastrar" class="nav-link">Home</a>
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
        <footer>
            <div>
                <p>Peres developer &copy; 2022</p>
            </div>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
