@extends('user.layouts.app')

@section('content')
    <div class="d-none d-lg-block bg-secondary position-fixed top-0 start-0 h-100" style="width: 52.5%;"></div>
    <form action="{{ route('checkout') }}" method="POST" id="checkoutForm" class="needs-validation container position-relative zindex-2 pt-5 pb-lg-5 pb-md-4 pb-2" novalidate>
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <!-- Breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="mt-5 pt-lg-3 pb-md-1 pb-lg-3 breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
                <h1 class="h2 pb-3">Checkout</h1>
                <!-- Checkout form fields-->
{{--                <h3 class="fs-base fw-normal text-body text-uppercase pb-2 pb-sm-3">1.<span class="text-decoration-underline ms-1">Shipping details</span></h3>--}}
                <div class="row g-4 pb-4 pb-md-5 mb-3 mb-md-1">
                    <div class="col-sm-12">
                        <label class="form-label fs-base" for="c-fn">Name</label><span class="text-danger"> *</span>
                        <input class="form-control form-control-lg" value="{{ old('customer_name') }}" name="customer_name" type="text" placeholder="Your first name" required id="c-fn">
                        @if($errors->has('customer_name'))
                            <small class="text-danger">* {{ $errors->first('customer_name') }} *</small>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="c-email">Email</label><span class="text-danger"> *</span>
                        <div class="position-relative"><i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input class="form-control form-control-lg ps-5" value="{{ old('customer_email') }}" type="email" name="customer_email" placeholder="Email address" required id="c-email">
                        </div>
                        @if($errors->has('customer_email'))
                            <small class="text-danger">* {{ $errors->first('customer_email') }} *</small>
                        @endif
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="c-phone">Phone</label><span class="text-danger"> *</span>
                        <div class="position-relative"><i class="ai-phone fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input class="form-control form-control-lg ps-5" value="{{ old('customer_phone') }}" type="tel" name="customer_phone" placeholder="+95 ___ ___ __" required id="c-phone">
                        </div>
                        @if($errors->has('customer_phone'))
                            <small class="text-danger">* {{ $errors->first('customer_phone') }} *</small>
                        @endif
                    </div>
                    <div class="col-12">
                        <label class="form-label fs-base" for="c-address">Address</label><span class="text-danger"> *</span>
                        <textarea class="form-control form-control-lg" name="shipping_address" rows="5" id="c-address">{{ old('shipping_address') }}</textarea>
                        @if($errors->has('shipping_address'))
                            <small class="text-danger">* {{ $errors->first('shipping_address') }} *</small>
                        @endif
                    </div>
                    <div class="col-12">
                        <label class="form-label fs-base" for="c-notes">Order notes <span class='text-muted'>(optional)</span></label>
                        <textarea class="form-control form-control-lg" name="order_note" rows="5" id="c-notes">{{ old('order_note') }}</textarea>
                        @if($errors->has('order_note'))
                            <small class="text-danger">* {{ $errors->first('order_note') }} *</small>
                        @endif
                    </div>
{{--                    <div class="col-12">--}}
{{--                        <div class="form-check">--}}
{{--                            <input class="form-check-input" type="checkbox" id="same-address">--}}
{{--                            <label class="form-check-label text-dark fw-medium" for="same-address">Billing address same as delivery</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
{{--                <h3 class="fs-base fw-normal text-body text-uppercase pb-2 pb-sm-3">2.<span class="text-decoration-underline ms-1">Shipping method</span></h3>--}}
                <div class="mb-4">
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="shipping_method" value="Standard Delivery" id="standard">
                        <label class="form-check-label d-flex justify-content-between" for="standard"><span><span class="d-block fs-base text-dark fw-medium mb-1">Standard Delivery</span><span class="text-body">Delivery in 5 - 8 working days</span></span><span class="fs-base text-dark fw-semibold">$8.00</span></label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="shipping_method" value="Express Shipping" checked id="express">
                        <label class="form-check-label d-flex justify-content-between" for="express"><span><span class="d-block fs-base text-dark fw-medium mb-1">Express Shipping</span><span class="text-body">Delivery in 3 - 5 working days</span></span><span class="fs-base text-dark fw-semibold">$15.00</span></label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="shipping_method" value="Local Pickup" id="local">
                        <label class="form-check-label d-flex justify-content-between" for="local"><span><span class="d-block fs-base text-dark fw-medium mb-1">Local Pickup</span><span class="text-body">Delivery in 1 - 2 working days</span></span><span class="fs-base text-dark fw-semibold">Free</span></label>
                    </div>
                    @if($errors->has('shipping_method'))
                        <small class="text-danger">* {{ $errors->first('shipping_method') }} *</small>
                    @endif
                </div>
{{--                <h3 class="fs-base fw-normal text-body text-uppercase mt-n4 mt-md-n3 pt-5 pb-2 pb-sm-3">3.<span class="text-decoration-underline ms-1">Payment method</span></h3>--}}
                <hr>
                <div>
                    <div class="form-check mb-4 mt-4">
                        <input class="form-check-input" type="radio" name="payment_method" value="Online Payment" checked id="card">
                        <label class="form-check-label" for="card"><span><span class="d-block fs-base text-dark fw-medium mb-1">Online Payment </span><span class="text-body">Mastercard, Maestro, American Express, Visa are accepted</span></span></label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment_method" value="Cash on Delivery" id="cash">
                        <label class="form-check-label" for="cash"><span><span class="d-block fs-base text-dark fw-medium mb-1">Cash on Delivery</span><span class="text-body">Pay with cash upon the delivery</span></span></label>
                    </div>

                    @if($errors->has('payment_method'))
                        <small class="text-danger">* {{ $errors->first('payment_method') }} *</small>
                    @endif

                </div>
                <!-- Place an order button visible on screens > 991px-->
                <div class="d-none d-lg-block pt-5 mt-n3">
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" checked id="save-info">
                        <label class="form-check-label" for="save-info"><span class="text-muted">Your personal information will be used to process your order, to support your experience on this site and for other purposes described in the </span><a class="fw-medium" href="shop-checkout.html#">privacy policy</a></label>
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">Place an order</button>
                </div>
            </div>
            <!-- Order summary-->
            <div class="col-lg-5 offset-lg-1 pt-1">
                <h2 class="pb-2 pt-md-2 my-4 mt-lg-5">Order summary <span class="fs-base fw-normal text-muted ms-3">(<span class="yourCartQty">0 item</span>)</span></h2>
                <div class="cartContainer"></div>
                <div class="d-flex align-items-center justify-content-between border-top fs-xl pt-4">Total:<span class="fs-3 fw-semibold text-dark ms-2 totalAmount">0</span></div>
            </div>
        </div>
        <!-- Place an order button visible on screens < 992px-->
        <div class="d-lg-none pb-2 mt-2 mt-lg-0 pt-4 pt-lg-5">
            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" checked id="save-info2">
                <label class="form-check-label" for="save-info2"><span class="text-muted">Your personal information will be used to process your order, to support your experience on this site and for other purposes described in the </span><a class="fw-medium" href="shop-checkout.html#">privacy policy</a></label>
            </div>
            <button class="btn btn-lg btn-primary w-100 w-sm-auto" id="checkoutBtn" type="button">Place an order</button>
        </div>
    </form>
@endsection

@section('js')
    <script>
        let checkoutBtn = document.getElementById('checkoutBtn')

        let form = document.getElementById('checkoutForm');

        document.addEventListener('DOMContentLoaded', function() {
            @if(session()->has('error'))
                notify(@json(session()->get('error')), notiBg.danger)
            @endif

            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission
                let cart = store.get('cart');

                cart.forEach(function(product, index) {
                    let productId_input = document.createElement('input')
                    let productQty_input = document.createElement('input')

                    productId_input.type = 'hidden'
                    productQty_input.type = 'hidden'
                    productId_input.classList.add('checkout-product')
                    productQty_input.classList.add('checkout-product')
                    productId_input.name = `products[${index}][id]`
                    productQty_input.name = `products[${index}][qty]`
                    productId_input.value = product.id
                    productQty_input.value = product.qty

                    form.appendChild(productId_input)
                    form.appendChild(productQty_input)
                })

                form.submit()
            });
        });
    </script>
@endsection
