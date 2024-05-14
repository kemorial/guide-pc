<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$bb->name}}</title>
</head>

<body>
    <div>
        <h1 class="my-3 text-center">Объявления</h1>
        <h2>{{ $bb->name }}</h2>
        <p>{{ $bb->content }}</p>
        <p>{{ $bb->price }} руб.</p>
        <p><a href="/">На перечень объявлений</a></p>
    </div>
</body>

</html>
