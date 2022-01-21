@extends('layouts.app')

@section('content')

    <div class="jumbotron p-5">
        <div class="container">
            <h1 class="display-3">Blog</h1>
            <p class="lead">Welcome to DC Comics News</p>

        </div>
    </div>

    <section class="posts container py-5">
        <div class="row">
            @forelse ($posts as $post)

                <div class="col-4">
                    <div class="card">
                        <div class="card-img">
                            <img src="{{ $post->poster }}" alt="">
                        </div>
                        <div class="card-body text-center">
                            <h3>
                                <a href="{{ route('guests.posts.show', $post->id) }}">{{ $post->title }}</a>

                            </h3>
                        </div>

                    </div>
                </div>

            @empty
                <p>
                    Nothing to show
                </p>

            @endforelse
        </div>

        <div class="my-4 text-center">
            {{ $posts->links() }}
        </div>
    </section>


@endsection
