<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class ClientSiteController extends Controller
{
    public function index()
    {
        $trending_products = [
            [
                'id' => '1',
                'name' => 'Loft style lamp',
                'status' => 'Sale',
                'price' => 1100,
                'discounted_price' => 9999,
                'thumbnail' => asset('assets/img/shop/products/01.png')
            ],
            [
                'id' => '2',
                'name' => 'Dispenser for soap',
                'status' => 'Sale',
                'price' => 16,
                'discounted_price' => 0,
                'thumbnail' => asset('assets/img/shop/products/02.png')
            ],
            [
                'id' => '3',
                'name' => 'Glossy round vase',
                'status' => 'Sale',
                'price' => 15,
                'discounted_price' => 11,
                'thumbnail' => asset('assets/img/shop/products/03.png')
            ],
            [
                'id' => '4',
                'name' => 'Scented candle',
                'status' => 'New',
                'price' => 13,
                'discounted_price' => 0,
                'thumbnail' => asset('assets/img/shop/products/09.png')
            ]
        ];

        $posts = Post::latest()->get();

        return view('user.index')
            ->with([
                'trending_products' => $trending_products,
                'posts' => $posts
            ]);
    }

    public function products()
    {
        return view('user.products');
    }
    public function productDetail()
    {
        $posts = Post::latest()->get();

        return view('user.product-detail')
            ->with([
                'posts' => $posts
            ]);
    }

    public function checkout()
    {
        return view('user.checkout');
    }

    public function posts()
    {
        $posts = Post::latest()->paginate(2);

        return view('user.blogs')
            ->with([
                'tags' => Tag::pluck('name', 'id')->toArray(),
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
}
