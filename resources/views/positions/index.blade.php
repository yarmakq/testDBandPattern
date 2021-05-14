@extends('home.index')

@section('tittle', 'Должности')

@section('content')

    @foreach($positions as $position)
        {{$position->position}}
    @endforeach

@endsection
