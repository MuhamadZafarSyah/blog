<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\onlyAdmin;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


// BLOG || BLOG || BLOG ||BLOG
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// // CATEGORY || CATEGORY || CATEGORY ||CATEGORY
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);

// // AUTHOR || AUTHOR ||AUTHOR ||AUTHOR
// Route::get('/authors/{author:username}', [AuthorController::class, 'show']);

// LOGIN || LOGIN || LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

// REGISTER || REGISTER || REGISTER
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// DASHBOARD || DASHBOARD || DASHBOARD ||
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'users' => User::count(),
        'categories' => Category::count(),
        'posts' => Post::count(),
        'myposts' => Post::where('id_user', auth()->user()->id)->count()
    ]);
})->middleware('auth');

// DASHBOARD POST
Route::resource('/dashboard/posts', DashboardPostsController::class)->middleware('auth');

Route::resource('/dashboard/admin', AdminController::class)->except('show')->parameters(['admin' => 'category'])->middleware('onlyAdmin');
