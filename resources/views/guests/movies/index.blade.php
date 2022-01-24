@extends('layouts.app')

@section('content')

    <div class="jumbotron p-5">
        <div class="container">
            <h1 class="display-3">BROWSE MOVIES</h1>
            <p class="lead">DC Movies</p>

        </div>
    </div>

    <section class="posts container py-5">
        <div class="row">
            @forelse ($movies as $movie)

                <div class="col-3">
                    <div class="card">
                        <a href="{{ route('guests.movies.show', $movie->id) }}">
                            <div class="card-img">
                                <img src="{{ $movie->thumb }}" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h3>
                                    {{ $movie->title }}
                                </h3>
                            </div>
                        </a>
                    </div>
                </div>

            @empty
                <p>
                    Nothing to show
                </p>

            @endforelse
        </div>

        <div class="my-4 text-center">
            {{ $movies->links() }}
        </div>
    </section>


@endsection
