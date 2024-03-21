<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        foreach ($categories as $category) {
            $images[$category->id] = Image::find($category->image_id)->url;
        }
        return view('categories.index', ['categories' => $categories, 'images' => $images]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $image = $request->file('image');
        $imageUrl = time().'.'.$image->extension();
        $image->move(public_path('assets/img/products'), $imageUrl);
        $imagetab = Image::create([
            'url' => 'assets/img/products/'.$imageUrl
        ]);
        $imagetab->save();
        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_id' =>  $imagetab->id
        ]);
        return redirect()->route('AdminCategories')->with('info', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        
        return view('categories.show', ['category' => $category]);
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
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('AdminCategories')->with('info', 'Category deleted successfully');
    }
}
