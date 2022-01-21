@extends('layouts.app')


@section('content')

    <div class="container py-5">
        <img src="{{ $post->poster }}" alt="">
        <h3>
            {{ $post->title }}
        </h3>
        <p class="lead">
            {{ $post->body }}
        </p>
    </div>



@endsection
