@extends('layouts.admin')

@section('content')

    <div class="container py-4">
        <h1>
            Welcome to the dashboard
        </h1>

        <div class="cards mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">
                                Posts
                            </h3>
                            <p class="card-text">
                                Add a new post
                            </p>
                            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary w-100">
                                Add new</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">
                                Movies
                            </h3>
                            <p class="card-text">
                                Add a new movie
                            </p>
                            <a href="{{ route('movies.create') }}" class="btn btn-primary w-100">
                                Add new</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3 class="card-title">
                                Games
                            </h3>
                            <p class="card-text">
                                Add a new game
                            </p>
                            <a href="{{ route('games.create') }}" class="btn btn-primary w-100">
                                Add new</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
