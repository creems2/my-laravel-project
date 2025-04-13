@extends('layouts.default')

@section('content')
    <h1>Добро пожаловать, {{ $name }}!</h1>
    <p>Возраст: 
        @if ($age > 18)
            {{ $age }}
        @else
            <strong>Слишком молод</strong>
        @endif
    </p>
    <p>Должность: {{ $position }}</p>
    <p>Адрес: {{ $address }}</p>
@endsection
