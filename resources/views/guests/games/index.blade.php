@extends('layouts.app')

@section('name')

@section('content')

    <div class="jumbotron p-5">
        <div class="container">
            <h1 class="display-3">BROWSE GAMES</h1>
        </div>
    </div>

    <section class="posts container py-5">
        <div class="row">
            @forelse ($games as $game)

                <div class="col-3">
                    <div class="card">
                        <a href="{{ route('guests.games.show', $game->id) }}">
                            <div class="card-img">
                                <img src="{{ $game->thumb }}" alt="">
                            </div>
                            <div class="card-body text-center">
                                <h3>
                                    {{ $game->title }}
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
            {{ $games->links() }}
        </div>
    </section>


@endsection
