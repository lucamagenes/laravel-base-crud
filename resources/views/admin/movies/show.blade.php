@extends('layouts.admin')

@section('content')


    <div class="container py-4">
        <div class="hero">
            <img src="{{ $movie->thumb }}" alt="{{ $movie->title }}">
        </div>
        <h1>
            {{ $movie->title }}
        </h1>
        <p class="lead">
            {{ $movie->desc }}
        </p>
        <p>
            {{ $movie->year }}
        </p>
    </div>




@endsection
