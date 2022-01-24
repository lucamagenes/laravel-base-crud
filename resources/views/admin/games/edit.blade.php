@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        <h1>Update a Game</h1>

        @include('partials.error')

        <form action="{{ route('games.update', $game->id) }}" method="post">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="create a new game" aria-describedby="titleHelper" maxlength="200"
                    value="{{ $game->title }}" required>
                <small id="titleHelper" class="text-muted">Add a title for your game, max 200</small>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror"
                    placeholder="https://" aria-describedby="thumbHelper" maxlength="255" value="{{ $game->thumb }}">
                <small id="thumbHelper" class="text-muted">Add a thumb image for your game, max 255</small>
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cover" class="form-label">Cover</label>
                <input type="text" name="cover" id="cover" class="form-control @error('cover') is-invalid @enderror"
                    placeholder="https://" aria-describedby="coverHelper" maxlength="255" value="{{ $game->cover }}">
                <small id="coverHelper" class="text-muted">Add a cover image for your game, max 255</small>
                @error('cover')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label @error('desc') is-invalid @enderror">Description</label>
                <textarea class="form-control" name="desc" id="desc" rows="3">{{ $game->desc }}</textarea>
                @error('desc')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

        </form>
    </div>
@endsection
