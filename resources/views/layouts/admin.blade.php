<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC Comics | @yield('page-title', 'comics') </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
        integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

    <!-- Wait the page is fully loaded to load our script using 'defer' -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>


    <div class="d-flex">
        <div class="sidenav d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                @include('partials.logo')
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li>
                    <a href="{{ route('admin') }}"
                        class="nav-link text-white {{ Route::currentRouteName('admin') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt fa-lg fa-fw"></i>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.posts.index') }}"
                        class="nav-link text-white {{ Route::currentRouteName('admin.posts.index') ? 'active' : '' }}">
                        <i class="fas fa-thumbtack fa-lg fa-fw"></i>
                        Posts
                    </a>
                </li>
                <li>
                    <a href="{{ route('movies.index') }}"
                        class="nav-link text-white {{ Route::currentRouteName('movies.index') ? 'active' : '' }}">
                        <i class="fas fa-film fa-lg fa-fw"></i>
                        Movies
                    </a>
                </li>
                <li>
                    <a href="{{ route('games.index') }}"
                        class="nav-link text-white {{ Route::currentRouteName('games.index') ? 'active' : '' }}">
                        <i class="fas fa-gamepad fa-lg fa-fw"></i>
                        Games
                    </a>
                </li>
            </ul>
        </div>

    </div>

    <div class="content container">
        @yield('content')
    </div>





</body>

</html>
