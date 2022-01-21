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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Wait the page is fully loaded to load our script using 'defer' -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>

    <div class="wrapper d-flex p-4">

        <aside class="w-25">

            @include('partials.logo')
            <nav class="nav flex-column pt-4">
                <a class="nav-link w-50 {{ Route::currentRouteName('admin.posts.index') ? 'active' : '' }}"
                    href="{{ route('admin.posts.index') }}">Posts</a>
                <a class="nav-link w-50" href="#">Movies</a>
                <a class="nav-link w-50" href="#">Comics</a>
                <a class="nav-link w-50" href="#">Videos</a>
            </nav>
        </aside>

        <div class="w-75">
            @yield('content')
        </div>


    </div>


</body>

</html>
