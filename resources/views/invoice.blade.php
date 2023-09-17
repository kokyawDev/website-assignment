<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice | {{ $order->order_number }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/html2pdf.min.js') }}"></script>
</head>
<body>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased my-auto">
        <div class="flex items-center" style="height: 60vh;">
            <div class="w-full mx-auto max-w-screen-xl px-4 lg:px-12 mt-5 pt-5" id="invoice">
                <div class="header">
                    <div>
                        <h3 class="uppercase">Beauty Shop</h3>
                        <p class="address">Hotline - 0994394343</p>
                    </div>
                    <div class="w-32 rounded-lg">
                    </div>
                </div>

                <div class="info mt-5">
                    <div>
                        <small class="w-40 flex flex-nowrap justify-between">
                            <span>Name</span> <span>{{$order->customer_name}}</span>
                        </small>
                        <small class="w-40 flex flex-nowrap justify-between">
                            <span>Phone</span> <span>{{$order->customer_phone}}</span>
                        </small>
                    </div>
                    <div class="">
                        @if($order->voucher_no)
                            <small class="w-40 flex flex-nowrap justify-between">
                                No <span class="text-2xl">{{$order->voucher_no}}</span>
                            </small>
                        @endif
                        <small class="w-40 flex flex-nowrap justify-between">
                            <span>Date</span> {{$order->created_at->format('d.m.Y')}}
                        </small>
                    </div>
                </div>

                <div class="relative rounded-xl overflow-auto mt-5"><div class="border overflow-hidden my-8">
                        <table class="border-collapse table-auto w-full text-sm">
                            <thead>
                            <tr>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">ပစ္စည်းများ</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">အရေအတွက်</th>
                                <th class="border-b dark:border-slate-600 font-medium p-4 pt-0 pb-3 text-slate-400 dark:text-slate-200 text-left">ဈေးနှုန်း</th>
                            </tr>
                            </thead>
                            <tbody class="bg-slate-800">
                            @foreach($order->order_items as $order_item)
                                <tr>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $order_item->product->name }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $order_item->quantity }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{ (int) $order_item->product->discounted_price ? $order_item->product->discounted_price * $order_item->quantity : $order_item->product->price * $order_item->quantity }} Ks</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">စုစုပေါင်း</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $order->order_items->sum('quantity') }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-slate-500 dark:text-slate-400">{{ $order->total_price }} Ks</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full mx-auto max-w-screen-xl px-4 lg:px-12 text-right">
            <button class="shadow-md border border-gray-600 hover:bg-gray-100 hover:text-gray-800 text-gray-600 font-bold py-2 px-4 rounded" id="print">
                Print
            </button>
        </div>
    </section>

    <script>
        document.getElementById('print')
            .addEventListener('click', function() {
                html2pdf().from(document.getElementById('invoice')).save();
            })
    </script>
</body>
</html>
