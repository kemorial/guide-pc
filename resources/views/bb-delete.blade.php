@extends('layouts.app')
@section('title', 'Удаление объявления')
@section('content')
<form action="{{ route('bb.destroy', ['bb' => $bb->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" class="btn btn-danger" value="Удалить" style="margin-left:50%;">
</form>
@endsection
