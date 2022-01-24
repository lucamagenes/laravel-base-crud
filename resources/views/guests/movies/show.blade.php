@extends('layouts.app')


@section('content')

    <div class="jumbo_card">
        <img src="{{ $movie->cover }}" alt="">
        <div class="blue_wrapper"></div>
    </div>
    <div class="container py-5">
        <div class="wrapper_thumb">
            <img src="{{ $movie->thumb }}" alt="">
        </div>

        <h3 class="mt-4">
            {{ $movie->title }}
        </h3>
        <p class="lead mt-4">
            {{ $movie->desc }}
        </p>
        <p class="mt-4">
            {{ $movie->year }}
        </p>
    </div>



@endsection
