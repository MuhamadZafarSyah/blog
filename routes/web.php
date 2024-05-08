<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

// BLOG || BLOG || BLOG ||BLOG
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// CATEGORY || CATEGORY || CATEGORY ||CATEGORY
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);

// AUTHOR || AUTHOR ||AUTHOR ||AUTHOR
Route::get('/authors/{author:username}', [AuthorController::class, 'show']);
// Route::get('/students', [StudentController::class, 'index']);
