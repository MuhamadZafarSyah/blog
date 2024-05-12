<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::where('id_user', auth()->user()->id)->get(),
            'users' => User::count()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|min:5|max:255|unique:posts',
            'id_category' => 'required',
            'body' => 'required|min:5',
            'image' => 'image|file|max:1024'
        ]);

        $image = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Str::slug($request->title) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('posts', $name);
            $image = $path;
        }
        $validate['image'] = $image;
        $validate['id_user'] = auth()->user()->id;
        $validate['slug'] = Str::slug($request->title);
        $validate['excerpt'] = Str::limit(strip_tags($request->body), 50);


        Post::create($validate);

        return redirect('/dashboard/posts')->with('status', 'New Post has been added!');
        //
        //


    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validate = $request->validate([
            'title' => 'required|min:5|max:255',
            'id_category' => 'required',
            'body' => 'required|min:5',
            'image' => 'image|file|max:1024'
        ]);

        $image = null;


        if ($request->hasFile('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $file = $request->file('image');
            $name = Str::slug($request->title) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('posts', $name);
            $image = $path;
        }
        // if ($request->file('image')) {
        //     if ($request->oldImage) {
        //         Storage::delete($request->oldImage);
        //     }
        //     $validate['image'] = $request->file('image')->store('posts');
        // }
        $validate['image'] = $image;
        $validate['id_user'] = auth()->user()->id;
        $validate['slug'] = Str::slug($request->title);
        $validate['excerpt'] = Str::limit(strip_tags($request->body), 50);


        Post::where('id', $post->id)
            ->update($validate);

        return redirect('/dashboard/posts')->with('status', 'Post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        if ($post->image) {
            Storage::delete($post->image);
        }
        Post::destroy($post->id);

        return redirect('/dashboard/posts')->with('status', 'Post has been deleted!');
    }
}
