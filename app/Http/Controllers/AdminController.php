<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Gate::allows('onlyAdmin')) {
            abort(403);
        }
        return view('dashboard.admin.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('dashboard.admin.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required'
        ]);

        $validate['slug'] = Str::slug($request->name);
        Category::create($validate);

        return redirect('/dashboard/admin')->with('status', 'New Data has ben Add!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {

        Category::destroy($category->id);

        return redirect('/dashboard/admin')->with('status', 'Category has been deleted!');
    }
}
