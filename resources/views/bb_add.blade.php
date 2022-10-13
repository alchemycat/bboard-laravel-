@extends('layouts.base')

@section('title', "Добавление товара :: Мои обьявления")

@section('main')

<form action="{{ route('bb.store') }}" method="POST">
    @csrf
    <div class="form-group mb-2">
        <label for="txtTitle">Товар</label>
        <input type="text" class="form-control @error('title')
            is-invalid
        @enderror" name="title" id="txtTitle" value="{{ old('title') }}">

        @error('title')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group mb-2">
        <label for="txtContent">Описание</label>
        <input type="text" class="form-control @error('content')
            is-invalid
        @enderror" name="content" id="txtContent" value="{{ old('content') }}">
        
        @error('content')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group mb-2">
        <label for="txtPrice">Цена</label>
        <input type="text" class="form-control @error('price')
         is-invalid
        @enderror" name="price" id="txtPrice" value="{{ old('price') }}">
        
        @error('price')
        <span class="invalid-feedback">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" value="Добавить">
    </div>
</form>

@endsection