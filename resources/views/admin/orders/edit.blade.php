@extends('layouts.main')
@section('content')
    <div class="relative p-4 w-full max-w-full max-h-full">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">

            <form action="{{ route('admin.orders.update', $order) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" name="customer_name" id="name"
                            value="{{ old('customer_name') ?? $order->customer_name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type Customer Name" required="">
                        @if ($errors->has('customer_name'))
                            <small class="text-red-500">* {{ $errors->first('customer_name') }} *</small>
                        @endif
                    </div>

                    <div>
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="customer_email" id="email"
                            value="{{ old('customer_email') ?? $order->customer_email }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type Customer Email" required="">
                        @if ($errors->has('customer_email'))
                            <small class="text-red-500">* {{ $errors->first('customer_email') }} *</small>
                        @endif
                    </div>
                </div>

                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="phone"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                        <input type="text" name="customer_phone" id="phone"
                            value="{{ old('customer_phone') ?? $order->customer_phone }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Type Customer Phone" required="">
                        @if ($errors->has('customer_phone'))
                            <small class="text-red-500">* {{ $errors->first('customer_phone') }} *</small>
                        @endif
                    </div>
                    <div>
                        <label for="order_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Order
                            Status</label>
                        <select name="status" id="order_status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="">Select Order Status</option>
                            @foreach (config('global.order_status') as $key => $value)
                                <option value="{{ $key }}" @if ($key === $order->status) selected @endif>
                                    {{ $value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('status'))
                            <small class="text-red-500">* {{ $errors->first('status') }} *</small>
                        @endif
                    </div>
                </div>

                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="payment_method"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Method</label>
                        <select name="payment_method" id="payment_method"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="">Select Payment Method</option>
                            @foreach (config('global.payment_method') as $key => $value)
                                <option value="{{ $key }}" @if ($key === $order->payment_method) selected @endif>
                                    {{ $value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('payment_method'))
                            <small class="text-red-500">* {{ $errors->first('payment_method') }} *</small>
                        @endif
                    </div>

                    <div>
                        <label for="payment_status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Payment Status</label>
                        <select name="payment_status" id="payment_status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="">Select Payment Status</option>
                            @foreach (config('global.payment_status') as $key => $value)
                                <option value="{{ $key }}" @if ($key === $order->payment_status) selected @endif>
                                    {{ $value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('payment_status'))
                            <small class="text-red-500">* {{ $errors->first('payment_status') }} *</small>
                        @endif
                    </div>
                </div>


                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="shipping_method"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shipping Method</label>
                        <select name="shipping_method" id="shipping_method"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="">Select Shipping Method</option>
                            @foreach (config('global.shipping_method') as $key => $value)
                                <option value="{{ $key }}" @if ($key === $order->shipping_method) selected @endif>
                                    {{ $value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('shipping_method'))
                            <small class="text-red-500">* {{ $errors->first('shipping_method') }} *</small>
                        @endif
                    </div>

                    <div>
                        <label for="shipping_status"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shipping Status</label>
                        <select name="shipping_status" id="shipping_status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="">Select Shipping Status</option>
                            @foreach (config('global.shipping_status') as $key => $value)
                                <option value="{{ $key }}" @if ($key === $order->shipping_status) selected @endif>
                                    {{ $value }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('shipping_status'))
                            <small class="text-red-500">* {{ $errors->first('shipping_status') }} *</small>
                        @endif
                    </div>
                </div>

                <div class="grid gap-4 mb-4 sm:grid-cols-1">
                    <div>
                        <label for="customer_address"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                        <textarea rows="5" name="shipping_address" id="customer_address"
                            class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Address" required="">
                            {{ old('customer_address') ?? $order->shipping_address }}
                        </textarea>
                        @if ($errors->has('shipping_address'))
                            <small class="text-red-500">* {{ $errors->first('shipping_address') }} *</small>
                        @endif
                    </div>
                </div>

                <div class="grid gap-4 mb-4 sm:grid-cols-1">
                    <div>
                        <label for="order_note" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Order
                            Note</label>
                        <textarea rows="5" name="order_note" id="order_note"
                            class=" block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Order Note" required="">
                            {{ old('order_note') ?? $order->order_note }}
                        </textarea>
                        @if ($errors->has('order_note'))
                            <small class="text-red-500">* {{ $errors->first('order_note') }} *</small>
                        @endif
                    </div>
                </div>


                <div class="relative overflow-x-auto my-5">
                    @if ($errors->has('products'))
                        <small class="text-red-500">* {{ $errors->first('products') }} *</small>
                    @endif
                    <label for="products"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Products</label>
                    <table id="ProductTbl" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Product name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Qty
                                </th>
                                <th scope="col" class="px-6 py-3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->order_items as $key => $order_item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700"
                                    id="orderItem{{ $order_item->id }}">
                                    <input type="hidden" name="products[{{ $key }}][id]"
                                        value="{{ old('products.[' . $key . '][id]') ?? $order_item->product_id }}">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $order_item->product->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        <input
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Type Qty" type="number"
                                            name="products[{{ $key }}][qty]"
                                            value="{{ old('products.[' . $key . '][qty]') ?? $order_item->quantity }}"
                                            required>
                                    </td>
                                    <td class="px-6 py-4">
                                        <button type="button" class="remove-btn-item"
                                            onClick="remove(this, 'orderItem{{ $order_item->id }}')">
                                            <svg class="w-5 h-5 text-red-500 dark:text-white" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 5h16M7 8v8m4-8v8M7 1h4a1 1 0 0 1 1 1v3H6V2a1 1 0 0 1 1-1ZM3 5h12v13a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V5Z" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <button type="submit"
                    class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">

                    Edit
                </button>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function remove(element, elId) {
            element.closest(`#${elId}`).remove()
        }
    </script>
@endsection
