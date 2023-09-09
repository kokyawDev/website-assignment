@extends('user.layouts.front')

@section('content')
    <div class="d-none d-lg-block bg-secondary position-fixed top-0 start-0 h-100" style="width: 52.5%;"></div>
    <form class="needs-validation container position-relative zindex-2 pt-5 pb-lg-5 pb-md-4 pb-2" novalidate>
        <div class="row">
            <div class="col-lg-6">
                <!-- Breadcrumb-->
                <nav aria-label="breadcrumb">
                    <ol class="mt-5 pt-lg-3 pb-md-1 pb-lg-3 breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="shop-catalog.html">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
                <h1 class="h2 pb-3">Checkout</h1>
                <!-- Checkout form fields-->
                <h3 class="fs-base fw-normal text-body text-uppercase pb-2 pb-sm-3">1.<span class="text-decoration-underline ms-1">Shipping details</span></h3>
                <div class="row g-4 pb-4 pb-md-5 mb-3 mb-md-1">
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="c-fn">First name</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Your first name" required id="c-fn">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="c-ln">Last name</label>
                        <input class="form-control form-control-lg" type="text" placeholder="Your last name" required id="c-ln">
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="c-email">Email</label>
                        <div class="position-relative"><i class="ai-mail fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input class="form-control form-control-lg ps-5" type="email" placeholder="Email address" required id="c-email">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="c-phone">Phone</label>
                        <div class="position-relative"><i class="ai-phone fs-lg position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                            <input class="form-control form-control-lg ps-5" type="tel" data-format="{&quot;numericOnly&quot;: true, &quot;delimiters&quot;: [&quot;+1 &quot;, &quot; &quot;, &quot; &quot;], &quot;blocks&quot;: [0, 3, 3, 2]}" placeholder="+1 ___ ___ __" required id="c-phone">
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label fs-base" for="c-country">Country</label>
                        <select class="form-select form-select-lg" required id="c-country">
                            <option value="" selected disabled>Select a country</option>
                            <option value="Australia">Australia</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Canada">Canada</option>
                            <option value="Denmark">Denmark</option>
                            <option value="USA">USA</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="c-city">City</label>
                        <select class="form-select form-select-lg" required id="c-city">
                            <option value="" selected disabled>Select a city</option>
                            <option value="Sydney">Sydney</option>
                            <option value="Brussels">Brussels</option>
                            <option value="Toronto">Toronto</option>
                            <option value="Copenhagen">Copenhagen</option>
                            <option value="New York">New York</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label fs-base" for="c-zip">Zip code</label>
                        <input class="form-control form-control-lg" type="text" data-format="{&quot;delimiter&quot;: &quot;-&quot;, &quot;blocks&quot;: [3, 4], &quot;uppercase&quot;: true}" placeholder="XXX-XXXX" required id="c-zip">
                    </div>
                    <div class="col-12">
                        <label class="form-label fs-base" for="c-address">Address line</label>
                        <input class="form-control form-control-lg" type="text" required id="c-address">
                    </div>
                    <div class="col-12">
                        <label class="form-label fs-base" for="c-notes">Order notes <span class='text-muted'>(optional)</span></label>
                        <textarea class="form-control form-control-lg" rows="5" id="c-notes"></textarea>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="same-address">
                            <label class="form-check-label text-dark fw-medium" for="same-address">Billing address same as delivery</label>
                        </div>
                    </div>
                </div>
                <h3 class="fs-base fw-normal text-body text-uppercase pb-2 pb-sm-3">2.<span class="text-decoration-underline ms-1">Shipping method</span></h3>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="shipping" id="standard">
                    <label class="form-check-label d-flex justify-content-between" for="standard"><span><span class="d-block fs-base text-dark fw-medium mb-1">Standard Delivery</span><span class="text-body">Delivery in 5 - 8 working days</span></span><span class="fs-base text-dark fw-semibold">$8.00</span></label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="shipping" checked id="express">
                    <label class="form-check-label d-flex justify-content-between" for="express"><span><span class="d-block fs-base text-dark fw-medium mb-1">Express Shipping</span><span class="text-body">Delivery in 3 - 5 working days</span></span><span class="fs-base text-dark fw-semibold">$15.00</span></label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="shipping" id="local">
                    <label class="form-check-label d-flex justify-content-between" for="local"><span><span class="d-block fs-base text-dark fw-medium mb-1">Local Pickup</span><span class="text-body">Delivery in 1 - 2 working days</span></span><span class="fs-base text-dark fw-semibold">Free</span></label>
                </div>
                <h3 class="fs-base fw-normal text-body text-uppercase mt-n4 mt-md-n3 pt-5 pb-2 pb-sm-3">3.<span class="text-decoration-underline ms-1">Payment method</span></h3>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="payment" checked id="card">
                    <label class="form-check-label" for="card"><span><span class="d-block fs-base text-dark fw-medium mb-1">Credit Card</span><span class="text-body">Mastercard, Maestro, American Express, Visa are accepted</span></span></label>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="payment" id="cash">
                    <label class="form-check-label" for="cash"><span><span class="d-block fs-base text-dark fw-medium mb-1">Cash on Delivery</span><span class="text-body">Pay with cash upon the delivery</span></span></label>
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
            <button class="btn btn-lg btn-primary w-100 w-sm-auto" type="submit">Place an order</button>
        </div>
    </form>
@endsection
