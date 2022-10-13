<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <a href="{{ route('index') }}" class="navbar-brand mr-auto">Главная</a>
            @guest
            <a href="{{ route('register') }}" class="navbar-brand mr-auto">Регистрация</a>
            <a href="{{ route('login') }}" class="navbar-brand mr-auto">Вход</a>
            @endguest
            @auth
            <a href="{{ route('home') }}" class="navbar-brand mr-auto">Мои обьявления</a>
            <form action="{{ route('logout')}}" method="POST" class="form-inline">
                @csrf
                <input type="submit" class="btn btn-danger" value="Выход">
            </form>    
            @endauth
        </nav>
        <h1 class="my-3 text-center">Обьявления</h1>
        @yield('main')
    </div>
</body>
</html>