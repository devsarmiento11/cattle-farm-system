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
        // Fetch products with average rating and review count joined from reviews table
        $products = Product::leftJoin('reviews', 'products.id', '=', 'reviews.product_id')
            ->select(
                'products.id',
                'products.title',
                'products.description',
                'products.image',
                'products.price',
                'products.age',
                'products.weight',
                'products.category',
                'products.quantity',
                'products.created_at',
                'products.updated_at',
                \DB::raw('COALESCE(AVG(reviews.rating), 0) as average_rating'),
                \DB::raw('COUNT(reviews.id) as review_count')
            )
            ->groupBy(
                'products.id',
                'products.title',
                'products.description',
                'products.image',
                'products.price',
                'products.age',
                'products.weight',
                'products.category',
                'products.quantity',
                'products.created_at',
                'products.updated_at'
            )
            ->get();

        // Format average_rating to one decimal place
        $products->transform(function ($product) {
            $product->average_rating = number_format($product->average_rating, 1);
            return $product;
        });

        return view('home.index', compact('products'));
    }

    public function dashboard()
    {
        // Fetch products with average rating and review count joined from reviews table
$products = Product::leftJoin('reviews', 'products.id', '=', 'reviews.product_id')
    ->select(
        'products.id',
        'products.title',
        'products.description',
        'products.image',
        'products.price',
        'products.age',
        'products.weight',
        'products.category',
        'products.quantity',
        'products.created_at',
        'products.updated_at',
        \DB::raw('COALESCE(AVG(reviews.rating), 0) as average_rating'),
        \DB::raw('COUNT(reviews.id) as review_count')
    )
    ->groupBy(
        'products.id',
        'products.title',
        'products.description',
        'products.image',
        'products.price',
        'products.age',
        'products.weight',
        'products.category',
        'products.quantity',
        'products.created_at',
        'products.updated_at'
    )
    ->get();

        // Format average_rating to one decimal place
        $products->transform(function ($product) {
            $product->average_rating = number_format($product->average_rating, 1);
            return $product;
        });

        return view('welcome.index', compact('products'));
    }

    public function native()
    {
        $products = Product::leftJoin('reviews', 'products.id', '=', 'reviews.product_id')
            ->select(
                'products.id',
                'products.title',
                'products.description',
                'products.image',
                'products.price',
                'products.age',
                'products.weight',
                'products.category',
                'products.quantity',
                'products.created_at',
                'products.updated_at',
                \DB::raw('COALESCE(AVG(reviews.rating), 0) as average_rating'),
                \DB::raw('COUNT(reviews.id) as review_count')
            )
            ->where('products.category', 'Native')
            ->groupBy(
                'products.id',
                'products.title',
                'products.description',
                'products.image',
                'products.price',
                'products.age',
                'products.weight',
                'products.category',
                'products.quantity',
                'products.created_at',
                'products.updated_at'
            )
            ->get();

        // Format average_rating to one decimal place
        $products->transform(function ($product) {
            $product->average_rating = number_format($product->average_rating, 1);
            return $product;
        });

        return view('welcome.native', compact('products'));
    }

    public function imported()
    {
        $products = Product::leftJoin('reviews', 'products.id', '=', 'reviews.product_id')
            ->select(
                'products.id',
                'products.title',
                'products.description',
                'products.image',
                'products.price',
                'products.age',
                'products.weight',
                'products.category',
                'products.quantity',
                'products.created_at',
                'products.updated_at',
                \DB::raw('COALESCE(AVG(reviews.rating), 0) as average_rating'),
                \DB::raw('COUNT(reviews.id) as review_count')
            )
            ->where('products.category', 'Imported')
            ->groupBy(
                'products.id',
                'products.title',
                'products.description',
                'products.image',
                'products.price',
                'products.age',
                'products.weight',
                'products.category',
                'products.quantity',
                'products.created_at',
                'products.updated_at'
            )
            ->get();

        // Format average_rating to one decimal place
        $products->transform(function ($product) {
            $product->average_rating = number_format($product->average_rating, 1);
            return $product;
        });

        return view('welcome.imported', compact('products'));
    }

    public function crossbreed()
    {
        $products = Product::leftJoin('reviews', 'products.id', '=', 'reviews.product_id')
            ->select(
                'products.id',
                'products.title',
                'products.description',
                'products.image',
                'products.price',
                'products.age',
                'products.weight',
                'products.category',
                'products.quantity',
                'products.created_at',
                'products.updated_at',
                \DB::raw('COALESCE(AVG(reviews.rating), 0) as average_rating'),
                \DB::raw('COUNT(reviews.id) as review_count')
            )
            ->where('products.category', 'Crossbreed')
            ->groupBy(
                'products.id',
                'products.title',
                'products.description',
                'products.image',
                'products.price',
                'products.age',
                'products.weight',
                'products.category',
                'products.quantity',
                'products.created_at',
                'products.updated_at'
            )
            ->get();

        // Format average_rating to one decimal place
        $products->transform(function ($product) {
            $product->average_rating = number_format($product->average_rating, 1);
            return $product;
        });

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
            'payment_method' => 'required|string|in:cod,pick_up,gcash,visa,mastercard,paypal',
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

        // Redirect to order success for both guests and logged-in users
        session()->flash('order_id', $order->id);
        return redirect()->route('order.success');
    }

    public function orderSuccess(Request $request)
    {
        $orderId = session('order_id');
        if (!$orderId) {
            return redirect('/')->with('error', 'No order to display.');
        }

        $order = \App\Models\Order::find($orderId);
        if (!$order) {
            return redirect('/')->with('error', 'Order not found.');
        }

        return view('welcome.order_success', compact('order'));
    }

    public function showRatingForm($order_id)
    {
        $order = \App\Models\Order::find($order_id);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        // Optionally, add logic to verify user ownership of the order if users are authenticated.

        return view('welcome.rate_product', compact('order'));
    }

public function submitRating(Request $request, $order_id)
    {
        $order = \App\Models\Order::find($order_id);

        if (!$order) {
            return redirect()->back()->with('error', 'Order not found.');
        }

        // Validate rating input
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review_text' => 'nullable|string|max:1000',
        ]);

        // Check if review already exists for this order to prevent duplicate rating
        $existingReview = \App\Models\Review::where('order_id', $order_id)->first();
        if ($existingReview) {
            return redirect()->back()->with('error', 'You have already reviewed this order.');
        }

        // Find product by order's product_title
        $product = \App\Models\Product::where('title', $order->product_title)->first();
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found for this order.');
        }

        $review = new \App\Models\Review();
        $review->order_id = $order->id;
        $review->product_id = $product->id;
        $review->user_name = $order->name;
        $review->user_email = $order->email;
        $review->rating = $request->rating;
        $review->review_text = $request->review_text;
        $review->save();

        return redirect()->route('dashboard')->with('success', 'Review submitted successfully!');
    }

    public function myOrders()
    {
        $orders = \App\Models\Order::where('email', auth()->user()->email)->get();
        return view('welcome.my_orders', compact('orders'));
    }

    public function quickBuy($id)
    {
        $product = Product::findOrFail($id);
        $user = auth()->user();

        // Calculate total price (assuming quantity 1)
        $totalPrice = $product->price * 1;

        // Save the order
        $order = new \App\Models\Order();
        $order->name = $user->name;
        $order->email = $user->email;
        $order->phone = $user->phone ?? '';
        $order->address = $user->address ?? '';
        $order->product_title = $product->title;
        $order->product_price = $product->price;
        $order->product_category = $product->category;
        $order->product_image = $product->image;
        $order->quantity = 1;
        $order->price = $totalPrice;
        $order->payment_method = 'quick_buy';
        $order->status = 'pending';
        $order->save();

        return redirect()->route('my.orders')->with('success', 'Order placed successfully!');
    }
}
