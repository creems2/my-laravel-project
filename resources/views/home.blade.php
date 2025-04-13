@extends('layouts.default')

@section('content')
    @if($person['age'] > 18)
        <b> {{ $person['age'] }} </b>
    @else
        <i>человек слишком молод<i>
    @endif
@stop