<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
</head>
<body>
    <header>
        <span>--NAVBAR--</span>
        <span><a href="{{route('homepage')}}">Home</a></span>
        <span><a href="{{route('comics.index')}}">Lista dei Fumetti</a></span>
        <span><a href="{{route('comics.create')}}">Crea un fumetto</a></span>
        <hr>
    </header>

    @yield('main_content')

</body>
</html>
