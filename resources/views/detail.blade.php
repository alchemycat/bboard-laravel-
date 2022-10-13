@extends('layouts.base')

@section('title', "Обьявление: " . $bb->title)

@section('main')

<h2>{{$bb->title}}</h2>
<p>{{$bb->content}}</p>
<p>{{$bb->price}} грн.</p>
<p>Автор: {{$bb->user->name}}</p>
<p><a href="{{route('index')}}">На перечень обьявлений</a></p>

@endsection