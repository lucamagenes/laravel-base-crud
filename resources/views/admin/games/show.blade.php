@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <div class="hero">
            <img src="{{ $game->thumb }}" alt="{{ $game->title }}">
        </div>
        <h1>
            {{ $game->title }}
        </h1>
        <p class="lead">
            {{ $game->desc }}
        </p>
    </div>
@endsection
