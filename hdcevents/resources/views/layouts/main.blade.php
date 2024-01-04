<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonte do google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- CSS da aplicação -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- JS da aplicação -->
    <script src="/js/script.js"></script>
</head>

<body>

    @yield('content')
    <footer>
        <p>ShowTime &copy; 2024</p>
    </footer>
</body>

</html>