@extends('layouts.admin')

@section('content')

    <div class="container py-4">
        <div class="heading d-flex justify-content-between align-items-center">
            <h1>Games</h1>
            <a class="btn btn-primary" href="{{ route('games.create') }}" role="button">Create</a>
        </div>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif


        <table class="table table-striped table-light">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Thumb</th>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($games as $game)
                    <tr>
                        <td scope="row">{{ $game->id }}</td>
                        <td><img width="100" src="{{ $game->thumb }}" alt="{{ $game->title }}"></td>
                        <td>{{ $game->title }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('games.show', $game->id) }}">
                                <i class="fas fa-eye    "></i>
                            </a>
                            <a class="btn btn-secondary" href="{{ route('games.edit', $game->id) }}">
                                <i class="fas fa-pencil-alt    "></i>
                            </a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#modal_{{ $game->id }}">
                                <i class="fas fa-trash-alt fa-lg fa-fw"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal_{{ $game->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="modal_{{ $game->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Stai eliminando: {{ $game->title }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Attenzione!! <br>
                                            Azione irreversibile, una volta cancellato non potrà più essere recuperato.
                                            <br>
                                            Vuoi continuare?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('games.destroy', $game->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $games->links() }}
    </div>



@endsection
