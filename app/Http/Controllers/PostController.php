<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "All Post",
            "posts" => Post::with(['category', 'author'])->latest()->filter(request(['search', 'category']))->get()
        ]);
    }

    public function show(Post $post)
    {

        return view('post', [
            "post" => $post
        ]);
    }
}
