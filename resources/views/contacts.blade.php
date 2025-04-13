@extends('layouts.default')

@section('content')
    <h1>Контакты</h1>
    <p>Адрес: {{ $address }}</p>
    <p>Индекс: {{ $post_code }}</p>
    <p>Email: 
        @if ($email)
            {{ $email }}
        @else
            <strong>Адрес электронной почты не указан</strong>
        @endif
    </p>
    <p>Телефон: {{ $phone }}</p>
@endsection
