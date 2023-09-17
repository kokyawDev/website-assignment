<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Product::query();

        if(request()->has('keyword')) {
            $query = $query->where('name', 'like', '%'.request()->keyword.'%');
        }

        $products = $query->latest()->paginate(5);

        return view('admin.products.index')
            ->with([
                'products' => $products,
                'keyword' => request()->keyword ?? null
            ]);
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
            'description' => ['required', 'min:3', 'max:10000'],
            'short_description' => ['required', 'min:3', 'max:255'],
            'price' => ['required', 'numeric'],
            'discounted_price' => ['nullable', 'numeric'],
            'category_id' => ['required', 'exists:categories,id'],
            'thumbnail' => ['required', 'image'],
            'quantity' => ['nullable', 'numeric'],
            'product_images' => ['required'],
            'product_images.*' => ['required', 'image']
        ]);

        DB::beginTransaction();

        try {
            if($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $extension = $file->getClientOriginalExtension();
                $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).time() . '.' . $extension;
//                $filename = time() . '.' . $extension;
                $file->move('uploads/products/', $filename);
                $data['thumbnail'] = '/uploads/products/'.$filename;
            }

            $data['status'] = 'New';

            $product = Product::create($data);

            if($request->hasFile('product_images')){
                foreach($request->file('product_images') as $file){
                    $extension = $file->getClientOriginalExtension();
                    $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).time() . '.' . $extension;
//                    $filename = time() . '.' . $extension;
                    $file->move('uploads/products/', $filename);

                    ProductImage::create([
                        'product_id' => $product->id,
                        'image' => '/uploads/products/'.$filename
                    ]);
                }
            }

            DB::commit();

            return redirect()->route('admin.products.index')->with('success', 'Product has been created successfully!');

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
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('admin.products.edit')
            ->with([
                'categories' => $categories,
                'product' => $product
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:3', 'max:10000'],
            'short_description' => ['required', 'min:3', 'max:255'],
            'price' => ['required', 'numeric'],
            'discounted_price' => ['nullable', 'numeric'],
            'category_id' => ['required', 'exists:categories,id'],
            'thumbnail' => ['nullable', 'image'],
            'quantity' => ['nullable', 'numeric'],
            'product_images' => ['nullable'],
            'product_images.*' => ['nullable', 'image']
        ]);

        $product_data = Arr::except($data, 'product_images');

        DB::beginTransaction();

        try {
            if($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $extension = $file->getClientOriginalExtension();
//                $filename = time() . '.' . $extension;
                $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).time() . '.' . $extension;
                $file->move('uploads/products/', $filename);
                $product_data['thumbnail'] = '/uploads/products/'.$filename;
            }

            if($request->hasFile('product_images')){
                $product->images()->delete();

                foreach($request->file('product_images') as $file){
                    $extension = $file->getClientOriginalExtension();
                    $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME).time() . '.' . $extension;
                    $file->move('uploads/products/', $filename);

                    ProductImage::create([
                        'product_id' => $product->id,
                        'image' => '/uploads/products/'.$filename
                    ]);
                }
            }

            $product->update($product_data);

            DB::commit();

            return redirect()->route('admin.products.index')->with('success', 'Product has been updated successfully!');

        }  catch (\Exception $e) {

            DB::rollBack();

            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->images()->delete();

        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product has been deleted successfully!');

    }
}
