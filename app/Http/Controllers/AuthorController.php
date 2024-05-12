<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function show(User $author)
    {
        return view('posts', [
            "title" => "Post by Author : $author->username",
            "posts" => $author->posts->load(['category', 'author'])
        ]);
    }
}
