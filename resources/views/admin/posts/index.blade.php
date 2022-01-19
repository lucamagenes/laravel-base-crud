@extends('layouts.app')


@section('content')


    <div class="container py-5">
        <div class="heading d-flex justify-content-between align-items-center py-4">
            <h1>All posts in a table</h1>
            <a class="btn btn-primary" href="{{ route('admin.posts.create') }}" role="button">create</a>
        </div>

        <table class="table table-light">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)

                    <tr>
                        <td scope="row">
                            {{ $post->id }}
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                        <td>
                            {{ $post->body }}
                        </td>
                        <td>
                            {{ $post->created_at }}
                        </td>
                        <td>
                            {{ $post->updated_at }}
                        </td>
                        <td>
                            View - edit - delete
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
        {{-- {{ $posts->links() }} --}}
    </div>



@endsection
