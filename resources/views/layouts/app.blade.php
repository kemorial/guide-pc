<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('name')::Пидорасия</title>
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a href="{{Route('index')}}" class="">Главная</a>
                <a href="{{Route('register')}}" class="nav-item nav-link">Регистрация</a>
                <a href="{{Route('login')}}" class="nav-item nav-link">Вход</a>
                <a href="{{Route('home')}}" class="nav-item nav-link">Мои объявления</a>
                <form action="{{Route('logout')}}" method="post" class="form-inline">
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Выход">
                </form>
            </div>
        </nav>
        <h1>Объявления</h1>
        @yield('content')
    </div>
</body>

</html>
