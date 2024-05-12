<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:4|unique:users',
            'class' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5',
            'image' => 'image|file|max:1024'
        ]);


        $image = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = Str::slug($request->username) . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('profile', $name);
            $image = $path;
        }
        $validate['image'] = $image;
        $validate['password'] = bcrypt($validate['password']);

        User::create($validate);

        return redirect('/register')->with('status', 'Registration success')->header('Refresh', '5');
        ;

    }
}
