@extends('layouts.admin')

@section('content')

    <div class="container py-4">

        <h1>Update Post</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Type your title here"
                    aria-describedby="titleHelper" value="{{ $post->title }}">
                <small id="titleHelper" class="text-muted">Type a title for your post.</small>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" name="body" id="body" rows="3">{{ $post->body }}</textarea>
            </div>
            @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>


@endsection
