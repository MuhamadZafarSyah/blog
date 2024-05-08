<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        return view('categoris', [
            'title' => 'Jenis Categories',
            'categories' => Category::all()
        ]);
    }

    public function show(Category $category)
    {
        return view('posts', [
            'title' => "Post by category: $category->name",
            'posts' => $category->posts->load(['category', 'author']),
            'category' => $category->name,

        ]);
    }
}

// return view('post', [
//     "post" => $post
// ]);
