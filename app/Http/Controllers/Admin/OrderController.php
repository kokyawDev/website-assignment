<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Rules\ProductValidationRule;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $query = Order::query();

        if(request()->has('keyword')) {
            $query = $query->where('customer_name', 'like', '%'.request()->keyword.'%');
        }

        $orders = $query->latest()->paginate(5);

        return view('admin.orders.index')
            ->with([
                'orders' => $orders,
                'keyword' => request()->keyword ?? null
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        abort(404);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        return view('admin.orders.edit')
            ->with([
                'order' => $order
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',
            'shipping_method' => 'required|string|max:255',
            'payment_status' => 'required|string|max:255',
            'shipping_status' => 'required|string|max:255',
            'shipping_address' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'order_note' => 'nullable|string|max:255',
            'products' => ['required', new ProductValidationRule()],
            'products.*.id' => 'required',
            'products.*.qty' => 'required'
        ]);

        $this->updateOrder($data, $order);

        return redirect()
            ->route('admin.orders.index')
            ->with('success', 'Order has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->order_items()->delete();

        $order->delete();

        return redirect()->route('admin.orders.index')
            ->with([
                'success' => 'Your order has been deleted successfully.'
            ]);
    }

    public function updateOrder($data, $order)
    {
        $order_items = collect($data['products']);

        $order_data = Arr::except($data, 'products');

        $sub_total = 0;

        $order->order_items()->delete();

        foreach ($order_items as $order_item) {
            $product = Product::FindOrFail($order_item['id']);

            $qty_price = ((int) $product->discounted_price) ? $order_item['qty'] * $product->discounted_price : $order_item['qty'] * $product->price;

            $sub_total += $qty_price;

            OrderItem::create([
                'product_id' => $product->id,
                'quantity' => $order_item['qty'],
                'price' => $qty_price,
                'order_id' => $order->id
            ]);
        }

        $order_data['total_price'] = $sub_total;

        $order->update($order_data);

        return $order->refresh();
    }

    public function invoice(Order $order)
    {
        try {
            return response()->stream(function () use ($order) {
                echo $order->invoice();
            }, 200, ['Content-Type' => 'application/pdf']);
        } catch (Exception $exception) {
            dd($exception);
            return $exception->getMessage();
        }
    }
}
