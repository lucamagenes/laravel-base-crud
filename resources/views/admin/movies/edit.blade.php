@extends('layouts.admin')

@section('content')

    <div class="container py-4">
        <h1>Update {{ $movie->title }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('movies.update', $movie->id) }}" method="post">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="lorem ipsum movie" aria-describedby="titleHelper" maxlength="200"
                    value="{{ $movie->title }}" required>
                <small id="titleHelper" class="text-muted">Add a title for your movie title, max 200</small>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cover" class="form-label">Cover</label>
                <input type="text" name="cover" id="cover" class="form-control @error('cover') is-invalid @enderror"
                    placeholder="https://" aria-describedby="coverHelper" maxlength="255" value="{{ $movie->cover }}">
                <small id="coverHelper" class="text-muted">Add a cover image for your movie title, max 255</small>
                @error('cover')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="number" min="1900" max="2099" step="1" name="year" id="year" class="form-control"
                    placeholder="2000" aria-describedby="yearHelper" value="{{ $movie->title }}">
                <small id="yearHelper" class="text-muted">Insert Year</small>
                @error('year')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror"
                    placeholder="https://" aria-describedby="thumbHelper" maxlength="255" value="{{ $movie->thumb }}">
                <small id="thumbHelper" class="text-muted">Add a thumbnail image for your movie title, max 255</small>
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <textarea class="form-control @error('desc') is-invalid @enderror" name="desc" id="desc"
                    rows="3">{{ $movie->desc }}</textarea>
                @error('desc')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save</button>

        </form>
    </div>


@endsection
