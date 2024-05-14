<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Объявления</title>
</head>

<body>
    <div class="container">
        <h1 class="my-3 text-center">Объявления</h1>
        @if (count($bbs) > 0)
            <table class="table table-striped table-borderless">
                <thead>
                    <tr>
                        <th>Товар</th>
                        <th>Цена, руб.</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bbs as $bb)
                        <tr>
                            <td>
                                <h4>{{$bb->name}}</h4>
                            </td>
                            <td>{{$bb->price}}</td>
                            <td>
                                <a href="/{{$bb->id}}">Подробнее...</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        @endif
</body>

</html>
