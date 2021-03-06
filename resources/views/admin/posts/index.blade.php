@extends('layouts.admin')


@section('content')


    <div class="container py-4">
        <div class="heading d-flex justify-content-between align-items-center">
            <h1>Posts</h1>
            <a class="btn btn-primary" href="{{ route('admin.posts.create') }}" role="button">create</a>
        </div>

        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <table class="table table-striped table-light">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
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
                            {{ $post->created_at }}
                        </td>
                        <td>
                            {{ $post->updated_at }}
                        </td>
                        <td>
                            <a title="view post" class="btn btn-primary"
                                href="{{ route('admin.posts.show', $post->id) }}"><i class="fas fa-eye"></i> </a>

                            <a title="modify post" class="btn btn-secondary"
                                href="{{ route('admin.posts.edit', $post->id) }}"><i class="fas fa-pencil-alt"></i>
                            </a>

                            <!-- Button trigger modal -->
                            <button title="delete post" type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#delete{{ $post->id }}">
                                <i class="fas fa-trash-alt"></i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="delete{{ $post->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="modal-{{ $post->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Delete Post: " {{ $post->title }} "</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Attenzione stai per cancellare per sempre un post! Questa operazione non pu??
                                                essere annullata</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="post">
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
        {{ $posts->links() }}
    </div>



@endsection
