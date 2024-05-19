@extends('layouts/app')
@section('name', 'Добавление объявления')
@section('content')
<form action="{{ route('bb.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="txtTitle" class="form-label">Товар</label>
        <input name="name" id="txtTitle" class="form-control @error('name') is-invalid @enderror">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="txtContent" class="form-label">Описание</label>
        <textarea name="content" id="txtContent" class="form-control @error('content') is-invalid @enderror" row="3"></textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="txtPrice" class="form-label">Цена</label>
        <input name="price" id="txtPrice" class="form-control @error('price') is-invalid @enderror">
        @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <input type="submit" class="btn btn-primary" value="Добавить">
</form>
@endsection
