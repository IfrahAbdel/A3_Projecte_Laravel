<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Marca;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $category_id = $request->query('category_id');
        if ($category_id) {
            $products = Product::where('category_id', $category_id)->get();
        }else{
            $products = Product::all();
        }
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        $marcas = Marca::all();
        return view('products.create', ['categories' => $categories, 'marcas' => $marcas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        // $request->validate([
            
        // ])
        $image = $request->file('image');
        $imageUrl = time().'.'.$image->extension();
        $image->move(public_path('assets/img/products'), $imageUrl);
        $imagetab = Image::create([
            'url' => 'assets/img/products/'.$imageUrl
        ]);
        $imagetab->save();
        $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'image_id' => $imagetab->id,
            'marca_id' => $request->marca_id,
            'stock' => $request->stock,
            'discount' => $request->discount
        ]);
        return redirect('/dashboard/Adminproducts')->with('message', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // 
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
        $categories = Category::all();
        $marcas = Marca::all();
        return view('products.edit', compact('product'), ['categories' => $categories, 'marcas' => $marcas]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        
        // $request->validate([
            

        // ]);
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'marca_id' => $request->marca_id,
            'stock' => $request->stock,
            'discount' => $request->discount
        ]);
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageUrl = time().'.'.$image->extension();
            $image->move(public_path('assets/img/products'), $imageUrl);
            $imagetab = Image::create([
                'url' => 'assets/img/products/'.$imageUrl
            ]);
            $imagetab->save();
            $product->image_id = $imagetab->id;
        }      
        return redirect('/dashboard/Adminproducts')->with('info', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return redirect('/dashboard/Adminproducts')->with('message', 'Product deleted successfully');
    }
}