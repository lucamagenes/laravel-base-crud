<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(9);
        return view('guests.posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('guests.posts.show', compact('post'));
    }
}
