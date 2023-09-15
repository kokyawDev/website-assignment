<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Post;
use App\Models\Product;
use App\Rules\ProductValidationRule;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ClientSiteController extends Controller
{
    public function index()
    {

        $popular_products = Product::select('id', 'uuid', 'name', 'status', 'price', 'discounted_price', 'thumbnail')->latest()->get()->shuffle();

        $trending_products = Product::select('id', 'uuid', 'name', 'status', 'price', 'discounted_price', 'thumbnail')->latest()->get()->shuffle()->toArray();

        $posts = Post::latest()->get();

        return view('user.index')
            ->with([
                'popular_products' => $popular_products,
                'trending_products' => $trending_products,
                'posts' => $posts
            ]);
    }

    public function products()
    {
        $query = Product::select('id', 'uuid', 'name', 'status', 'price', 'discounted_price', 'thumbnail');

        if(request()->category_id) {
            $query = $query->where('category_id', request()->category_id);
        }

        if(request()->keyword) {
            $query = $query->where('name', 'like', '%'.request()->keyword.'%');
        }

        $products = $query->latest()->paginate(3);

        return view('user.products')
            ->with([
                'categories' => Category::pluck('name', 'id')->toArray(),
                'products' => $products
            ]);
    }
    public function productDetail(Product $product)
    {
        $posts = Post::latest()->get();

        $products = Product::where('id', '!=', $product->id)->get();

        return view('user.product-detail')
            ->with([
                'posts' => $posts,
                'product' => $product,
                'products' => $products
            ]);
    }

    public function checkoutPage()
    {
        return view('user.checkout');
    }

    public function checkout(Request $request)
    {
        $data = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
            'shipping_method' => 'required|string|max:255',
            'shipping_address' => 'required|string|max:255',
            'order_note' => 'nullable|string|max:255',
            'products' => ['required', new ProductValidationRule()],
            'products.*.id' => 'required',
            'products.*.qty' => 'required'
        ]);

        DB::beginTransaction();

        try {
            $this->createOrder($data);

            DB::commit();

            return redirect()->route('home')
                ->with([
                    'success' => 'Your order has been created successfully.'
                ]);
        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->route('checkout')
                ->with([
                    'error' => $e->getMessage()
                ]);
        }
    }

    public function posts()
    {
        $query = Post::query();

        if(request()->category_id) {
            $query = $query->where('category_id', request()->category_id);
        }

        if(request()->keyword) {
            $query = $query->where('name', 'like', '%'.request()->keyword.'%');
        }

        $posts = $query->latest()->paginate(2);

        return view('user.blogs')
            ->with([
                'categories' => Category::pluck('name', 'id')->toArray(),
                'posts' => $posts
            ]);
    }

    public function postDetail(Post $post)
    {
        return view('user.blog-detail')
            ->with([
                'post' => $post
            ]);
    }

    public function createOrder($data)
    {
        $order_items = collect($data['products']);

        $order_data = Arr::except($data, 'products');

        $order_data['status'] = config('global.order_status.pending');

        $order_data['payment_status'] = config('global.payment_status.pending');

        $order_data['shipping_status'] = config('global.shipping_status.pending');

        $product_data = [];

        foreach ($order_items as $order_item)
        {
            $product = Product::FindOrFail($order_item['id']);

            $qty_price = ($product->discounted_price) ? $order_item['qty'] * $product->discounted_price : $order_item['qty'] * $product->price;

            array_push($product_data, [
                'product_id' => $product->id,
                'quantity' => $order_item['qty'],
                'price' => $qty_price
            ]);
        }

        $order_data['total_price'] = array_sum(array_column($product_data, 'price'));

        $order = Order::create($order_data);

        foreach($product_data as $prod_data) {
            $prod_data['order_id'] = $order->id;

            OrderItem::create($prod_data);
        }

        return $order;
    }
}
