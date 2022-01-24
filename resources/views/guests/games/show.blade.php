@extends('layouts.app')


@section('content')

    <div class="jumbo_card">
        <img src="{{ $game->cover }}" alt="">
        <div class="blue_wrapper"></div>
    </div>
    <div class="container py-5">
        <div class="wrapper_thumb">
            <img src="{{ $game->thumb }}" alt="">
        </div>

        <h3 class="mt-4">
            {{ $game->title }}
        </h3>
        <p class="lead mt-4">
            {{ $game->desc }}
        </p>
    </div>



@endsection
