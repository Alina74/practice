@extends('index')
@section('title','Страница личного кабинета')
@section('content')
    <h1>Личный кабинет</h1>

    <p>Добрый день {{ auth()->user()->getAuthIdentifierName() }}!</p>
@endsection
