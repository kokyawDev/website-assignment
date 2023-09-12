<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3', 'max:255'],
            'price' => ['required', 'numeric'],
            'category_id' => ['required', 'exists:categories,id'],
            'thumbnail' => ['required', 'image'],
            'quantity' => ['required', 'numeric'],
            'product_images.*' => ['required', 'image']
        ]);

        DB::beginTransaction();

        try {
            if($request->hasFile('thumbnail')){
                $file = $request->file('thumbnail');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('uploads/products/', $filename);
                $data['thumbnail'] = $filename;
            }

            // store product with no product images
            $product = Product::create($data);


            if($request->hasFile('product_images')){
                $images = [];
                foreach($request->file('product_images') as $file){
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $file->move('uploads/products/', $filename);

                    $productImage = ProductImage::create([
                        'product_id' => $product->id,
                        'image' => $filename
                    ]);
                }
            }

            DB::commit();

            return redirect()->route('admin.products.index')->with('success', 'Product created successfully!');

        }  catch (\Exception $e) {

            DB::rollBack();
            return redirect()->back()->with('error', $e->getMessage());
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
