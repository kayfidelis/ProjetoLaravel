<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>

    </head>
    <body> 
        <h1>ewhjhejwhwejh</h1>
        @if(10 > 15)
            <p>é verdade</p>
        @endif   
        
        <p>{{ $nome }}</p>

        @for($i = 2; $i < count($arr); $i++)

            <p>{{ $arr[$i] }}

        @endfor
    </body>
</html>
