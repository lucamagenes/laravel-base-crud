@extends('layouts.app')

@section('content')

    <div class="container py-5">

        <h1>Create a new Post</h1>

        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Type your title here"
                    aria-describedby="titleHelper">
                <small id="titleHelper" class="text-muted">Type a title for your post.</small>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" name="body" id="body" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>

    </div>


@endsection
