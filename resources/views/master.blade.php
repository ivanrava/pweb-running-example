<!doctype html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        #jumbotron-home {
            background: rgb(1,0,20);
            background: linear-gradient(156deg, rgba(1,0,20,1) 0%, rgba(43,43,95,1) 65%, rgba(13,125,93,1) 100%);
        }
        #jumbotron-other {
            background: rgb(1,0,20);
            background: linear-gradient(156deg, rgba(1,0,20,1) 0%, rgba(67,43,95,1) 65%, rgba(13,125,93,1) 100%);
        }
    </style>
</head>
<body>
    @include('navbar')
    <header>
        <div class="h-100 p-5" id="{{ Route::current()->getName() == 'home' ? 'jumbotron-home' : 'jumbotron-other' }}" data-bs-theme="dark">
            @yield('header')
        </div>
    </header>
    <main class="p-4">
        <h1>@yield('title')</h1>
        <hr>
        @yield('content')
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
            crossorigin="anonymous"></script>
</body>
</html>
