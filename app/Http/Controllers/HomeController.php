<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::all();
        $products = \App\Models\Product::all();
        return view('homepage')->with('categories', $categories )->with('products', $products);
    }
    public function dashboard(){
        return view('dashboard');
    }
    public function Adminproducts(){

        return view('Adminproducts')->with('products', \App\Models\Product::all());
    }
    public function AdminCategories(){

        return view('AdminCategories')->with('categories', \App\Models\Category::all());
    }
    public function AdminOrders(){
        return view('AdminOrders')->with('orders', \App\Models\Order::all());
    }
}
