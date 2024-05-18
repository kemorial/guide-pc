@extends('layouts.app')
@section('name', $bb->name)
@section('content')
<h2>{{ $bb->name }}</h2>
<p>{{ $bb->content }}</p>
<p>{{ $bb->price }} руб.</p>
<p>Автор: {{$bb->user->name}}</p>
<p>Напишите ему на почту: {{$bb->user->email}}</p>
<p><a href="{{Route('index')}}">На перечень объявлений</a></p>
@endsection
