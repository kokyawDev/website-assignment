<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $trending_products = [
            [
                'id' => '1',
                'name' => 'Loft style lamp',
                'status' => 'Sale',
                'price' => 21,
                'discounted_price' => 35,
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
                'price' => 11,
                'discounted_price' => 15,
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

        return view('index')
            ->with([
                'trending_products' => $trending_products
            ]);
    }
}