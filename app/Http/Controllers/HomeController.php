<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        $products = Product::all();
        return view('home.index', compact('products'));
    }

    public function dashboard()
    {
        $products = Product::all();
        return view('welcome.index', compact('products'));
    }

    public function native()
    {
        $products = Product::where('category', 'Native')->get();
        return view('welcome.native', compact('products'));
    }

    public function imported()
    {
        $products = Product::where('category', 'Imported')->get();
        return view('welcome.imported', compact('products'));
    }

    public function crossbreed()
    {
        $products = Product::where('category', 'Crossbreed')->get();
        return view('welcome.crossbreed', compact('products'));
    }
}
