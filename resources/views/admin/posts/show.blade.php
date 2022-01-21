@extends('layouts.admin')


@section('content')

    <div class="container py-5">
        <div class="pb-5">
            <h5>
                Title:
            </h5>
            <h1>
                {{ $post->title }}
            </h1>
        </div>

        <div class="">
            <h5>
                Body:
            </h5>
            <p class="lead">
                {{ $post->body }}
            </p>
        </div>
    </div>




@endsection
