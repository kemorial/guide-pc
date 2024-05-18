@extends('layouts.app')
@section('name', 'Главная')
@section('content')
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
                        <a href="{{Route('details',['bb'=>$bb->id])}}">Подробнее...</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
@endsection
