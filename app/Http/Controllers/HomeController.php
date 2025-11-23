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

    public function checkout($id)
    {
        $product = Product::findOrFail($id);
        return view('welcome.checkout', compact('product'));
    }

    public function complete(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:500',
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
            'payment_method' => 'required|string|in:cod,gcash,visa,mastercard,paypal',
        ]);

        // Get the product
        $product = Product::find($request->product_id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Calculate total price
        $totalPrice = $product->price * $request->quantity;

        // Save the order
        $order = new \App\Models\Order();
        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->product_title = $product->title;
        $order->product_price = $product->price;
        $order->product_category = $product->category;
        $order->product_image = $product->image;
        $order->quantity = $request->quantity;
        $order->price = $totalPrice;
        $order->payment_method = $request->payment_method;
        $order->status = 'pending';
        $order->save();

        // Optionally, reduce product quantity if needed
        // $product->quantity -= $request->quantity;
        // $product->save();

        // Redirect to complete page with success message
        return view('welcome.complete')->with('success', 'Order placed successfully!');
    }
}
