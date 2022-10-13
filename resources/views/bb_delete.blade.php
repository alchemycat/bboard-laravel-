@extends('layouts.base')

@section('title', "Удалить обьявление :: Мои обьявления")

@section('main')

<form action="{{ route('bb.destroy', ['bb' => $bb->id]) }}" method="POST">
    @csrf
    @method('DELETE')

    <input type="submit" class="btn btn-primary" value="Удалить">

</form>

@endsection