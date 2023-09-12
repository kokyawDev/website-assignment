@extends('user.layouts.app')

@section('content')
    <!-- Page content-->
    <div class="container py-5 mt-5 mb-lg-4 mb-xl-5">
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                    Product list
                </li>
            </ol>
        </nav>
        <!-- Page title-->
        <div class="row align-items-center gy-2 mb-4 pb-1 pb-sm-2 pb-lg-3">
            <div class="col-lg-5">
                <h1 class="mb-lg-0">Product List</h1>
            </div>
            <div class="col-xl-2 offset-xl-1 col-lg-3 col-sm-5">
                <select class="form-select">
                    <option class="">All Categories</option>
{{--                    @foreach($tags as $key => $value)--}}
{{--                        <option class="{{ $key }}">{{ $value }}</option>--}}
{{--                    @endforeach--}}
                </select>
            </div>
            <div class="col-lg-4 col-sm-7">
                <div class="position-relative"><i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input class="form-control ps-5" type="search" placeholder="Enter keyword">
                </div>
            </div>
        </div>
        <div class="row pb-2 pb-sm-4">
            <!-- Sidebar (offcanvas on sreens < 992px)-->

            <!-- Product grid-->
            <div class="col-lg-12">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div
                            class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                  <span
                      class="badge bg-faded-danger text-danger position-absolute top-0 start-0 mt-3 ms-3"
                  >Sale</span
                  >
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button">
                                <i class="ai-heart fs-xl d-dark-mode-none"></i
                                ><i
                                    class="ai-heart text-nav fs-xl d-none d-dark-mode-block"></i>
                            </button>
                            <div
                                class="swiper swiper-nav-onhover"
                                data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img
                                            class="d-block mx-auto"
                                            src="{{ asset('assets/img/shop/products/01.png') }}"
                                            width="226"
                                            alt="Product" /></div
                                    ></a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button">
                                    <i class="ai-chevron-left fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button">
                                    <i class="ai-chevron-right fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="shop-single.html">Loft style lamp</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color1"
                                        value="Dark gray"
                                        checked
                                        id="color1-1" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color1-1"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #576071;
                          "></span
                                        ></label>
                                </div>
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color1"
                                        value="Light gray"
                                        id="color1-2" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color1-2"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #d5d4d3;
                          "></span
                                        ></label>
                                </div>
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color1"
                                        value="Blue"
                                        id="color1-3" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color1-3"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #a1b7d9;
                          "></span
                                        ></label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$21.00</span>
                            <del class="fs-sm text-muted">$35.00</del>
                            <div
                                class="nav ms-auto"
                                data-bs-toggle="tooltip"
                                data-bs-template='&lt;div class="tooltip fs-xs" role="tooltip"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;'
                                data-bs-placement="left"
                                title="Add to cart">
                                <a
                                    class="nav-link fs-lg py-2 px-1"
                                    href="shop-catalog.html#"
                                ><i class="ai-cart"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div
                            class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button">
                                <i class="ai-heart fs-xl d-dark-mode-none"></i
                                ><i
                                    class="ai-heart text-nav fs-xl d-none d-dark-mode-block"></i>
                            </button>
                            <div
                                class="swiper swiper-nav-onhover"
                                data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img
                                            class="d-block mx-auto"
                                            src="{{ asset('assets/img/shop/products/02.png') }}"
                                            width="226"
                                            alt="Product" /></div
                                    ></a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button">
                                    <i class="ai-chevron-left fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button">
                                    <i class="ai-chevron-right fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="shop-single.html">Dispenser for soap</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$16.00</span>
                            <div
                                class="nav ms-auto"
                                data-bs-toggle="tooltip"
                                data-bs-template='&lt;div class="tooltip fs-xs" role="tooltip"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;'
                                data-bs-placement="left"
                                title="Add to cart">
                                <a
                                    class="nav-link fs-lg py-2 px-1"
                                    href="shop-catalog.html#"
                                ><i class="ai-cart"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div
                            class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                  <span
                      class="badge bg-faded-danger text-danger position-absolute top-0 start-0 mt-3 ms-3"
                  >Sale</span
                  >
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button">
                                <i class="ai-heart fs-xl d-dark-mode-none"></i
                                ><i
                                    class="ai-heart text-nav fs-xl d-none d-dark-mode-block"></i>
                            </button>
                            <div
                                class="swiper swiper-nav-onhover"
                                data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img
                                            class="d-block mx-auto"
                                            src="{{ asset('assets/img/shop/products/03.png') }}"
                                            width="226"
                                            alt="Product" /></div
                                    ></a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button">
                                    <i class="ai-chevron-left fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button">
                                    <i class="ai-chevron-right fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="shop-single.html">Glossy round vase</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color2"
                                        value="Light gray"
                                        checked
                                        id="color2-1" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color2-1"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #d5d4d3;
                          "></span
                                        ></label>
                                </div>
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color2"
                                        value="Dark gray"
                                        id="color2-2" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color2-2"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #576071;
                          "></span
                                        ></label>
                                </div>
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color2"
                                        value="Blue"
                                        id="color2-3" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color2-3"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #a1b7d9;
                          "></span
                                        ></label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$11.00</span>
                            <del class="fs-sm text-muted">$15.00</del>
                            <div
                                class="nav ms-auto"
                                data-bs-toggle="tooltip"
                                data-bs-template='&lt;div class="tooltip fs-xs" role="tooltip"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;'
                                data-bs-placement="left"
                                title="Add to cart">
                                <a
                                    class="nav-link fs-lg py-2 px-1"
                                    href="shop-catalog.html#"
                                ><i class="ai-cart"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div
                            class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                  <span
                      class="badge bg-faded-primary text-primary position-absolute top-0 start-0 mt-3 ms-3"
                  >New</span
                  >
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button">
                                <i class="ai-heart fs-xl d-dark-mode-none"></i
                                ><i
                                    class="ai-heart text-nav fs-xl d-none d-dark-mode-block"></i>
                            </button>
                            <div
                                class="swiper swiper-nav-onhover"
                                data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img
                                            class="d-block mx-auto"
                                            src="{{ asset('assets/img/shop/products/04.png') }}"
                                            width="226"
                                            alt="Product" /></div
                                    ></a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button">
                                    <i class="ai-chevron-left fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button">
                                    <i class="ai-chevron-right fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="shop-single.html">Ceramic flower pot</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color3"
                                        value="Gray concrete"
                                        checked
                                        id="color3-1" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color3-1"
                                    ><span
                                            class="d-block bg-size-cover bg-position-center rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #c0c0c0;
                            background-image: url({{ asset('assets/img/shop/pattern/marble.jpg') }});
                          "></span
                                        ></label>
                                </div>
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color3"
                                        value="Beige"
                                        id="color3-2" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color3-2"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #d9c9a1;
                          "></span
                                        ></label>
                                </div>
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color3"
                                        value="Blue"
                                        id="color3-3" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color3-3"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #a1b7d9;
                          "></span
                                        ></label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$19.00</span>
                            <div
                                class="nav ms-auto"
                                data-bs-toggle="tooltip"
                                data-bs-template='&lt;div class="tooltip fs-xs" role="tooltip"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;'
                                data-bs-placement="left"
                                title="Add to cart">
                                <a
                                    class="nav-link fs-lg py-2 px-1"
                                    href="shop-catalog.html#"
                                ><i class="ai-cart"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div
                            class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button">
                                <i class="ai-heart fs-xl d-dark-mode-none"></i
                                ><i
                                    class="ai-heart text-nav fs-xl d-none d-dark-mode-block"></i>
                            </button>
                            <div
                                class="swiper swiper-nav-onhover"
                                data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img
                                            class="d-block mx-auto"
                                            src="{{ asset('assets/img/shop/products/05.png') }}"
                                            width="226"
                                            alt="Product" /></div
                                    ></a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button">
                                    <i class="ai-chevron-left fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button">
                                    <i class="ai-chevron-right fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="shop-single.html">Pendant lamp</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color4"
                                        value="Gray"
                                        checked
                                        id="color4-1" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color4-1"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #bab8b7;
                          "></span
                                        ></label>
                                </div>
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color4"
                                        value="Woody brown"
                                        id="color4-2" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color4-2"
                                    ><span
                                            class="d-block bg-size-cover bg-position-center rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #c0c0c0;
                            background-image: url({{ asset('assets/img/shop/pattern/wood.jpg')}});
                          "></span
                                        ></label>
                                </div>
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color4"
                                        value="Gray marble"
                                        id="color4-3" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color4-3"
                                    ><span
                                            class="d-block bg-size-cover bg-position-center rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #c0c0c0;
                            background-image: url({{ asset('assets/img/shop/pattern/marble.jpg') }});
                          "></span
                                        ></label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$22.00</span>
                            <div
                                class="nav ms-auto"
                                data-bs-toggle="tooltip"
                                data-bs-template='&lt;div class="tooltip fs-xs" role="tooltip"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;'
                                data-bs-placement="left"
                                title="Add to cart">
                                <a
                                    class="nav-link fs-lg py-2 px-1"
                                    href="shop-catalog.html#"
                                ><i class="ai-cart"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div
                            class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button">
                                <i class="ai-heart fs-xl d-dark-mode-none"></i
                                ><i
                                    class="ai-heart text-nav fs-xl d-none d-dark-mode-block"></i>
                            </button>
                            <div
                                class="swiper swiper-nav-onhover"
                                data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img
                                            class="d-block mx-auto"
                                            src="{{ asset('assets/img/shop/products/06.png') }}"
                                            width="226"
                                            alt="Product" /></div
                                    ></a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button">
                                    <i class="ai-chevron-left fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button">
                                    <i class="ai-chevron-right fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="shop-single.html">Living room table</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$46.00</span>
                            <div
                                class="nav ms-auto"
                                data-bs-toggle="tooltip"
                                data-bs-template='&lt;div class="tooltip fs-xs" role="tooltip"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;'
                                data-bs-placement="left"
                                title="Add to cart">
                                <a
                                    class="nav-link fs-lg py-2 px-1"
                                    href="shop-catalog.html#"
                                ><i class="ai-cart"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div
                            class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button">
                                <i class="ai-heart fs-xl d-dark-mode-none"></i
                                ><i
                                    class="ai-heart text-nav fs-xl d-none d-dark-mode-block"></i>
                            </button>
                            <div
                                class="swiper swiper-nav-onhover"
                                data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img
                                            class="d-block mx-auto"
                                            src="{{ asset('assets/img/shop/products/07.png') }}"
                                            width="226"
                                            alt="Product" /></div
                                    ></a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button">
                                    <i class="ai-chevron-left fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button">
                                    <i class="ai-chevron-right fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="shop-single.html">Teapot for hot drinks</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$17.00</span>
                            <div
                                class="nav ms-auto"
                                data-bs-toggle="tooltip"
                                data-bs-template='&lt;div class="tooltip fs-xs" role="tooltip"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;'
                                data-bs-placement="left"
                                title="Add to cart">
                                <a
                                    class="nav-link fs-lg py-2 px-1"
                                    href="shop-catalog.html#"
                                ><i class="ai-cart"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div
                            class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                  <span
                      class="badge bg-faded-primary text-primary position-absolute top-0 start-0 mt-3 ms-3"
                  >New</span
                  >
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button">
                                <i class="ai-heart fs-xl d-dark-mode-none"></i
                                ><i
                                    class="ai-heart text-nav fs-xl d-none d-dark-mode-block"></i>
                            </button>
                            <div
                                class="swiper swiper-nav-onhover"
                                data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img
                                            class="d-block mx-auto"
                                            src="{{ asset('assets/img/shop/products/08.png') }}"
                                            width="226"
                                            alt="Product" /></div
                                    ></a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button">
                                    <i class="ai-chevron-left fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button">
                                    <i class="ai-chevron-right fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="shop-single.html">Analogue wall clock</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color5"
                                        value="Turquoise"
                                        checked
                                        id="color5-1" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color5-1"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #a8c2c0;
                          "></span
                                        ></label>
                                </div>
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color5"
                                        value="Lilac"
                                        id="color5-2" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color5-2"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #b4a9c3;
                          "></span
                                        ></label>
                                </div>
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color5"
                                        value="Blue"
                                        id="color5-3" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color5-3"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #a1b7d9;
                          "></span
                                        ></label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$25.00</span>
                            <div
                                class="nav ms-auto"
                                data-bs-toggle="tooltip"
                                data-bs-template='&lt;div class="tooltip fs-xs" role="tooltip"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;'
                                data-bs-placement="left"
                                title="Add to cart">
                                <a
                                    class="nav-link fs-lg py-2 px-1"
                                    href="shop-catalog.html#"
                                ><i class="ai-cart"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div
                            class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button">
                                <i class="ai-heart fs-xl d-dark-mode-none"></i
                                ><i
                                    class="ai-heart text-nav fs-xl d-none d-dark-mode-block"></i>
                            </button>
                            <div
                                class="swiper swiper-nav-onhover"
                                data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img
                                            class="d-block mx-auto"
                                            src="{{ asset('assets/img/shop/products/09.png') }}"
                                            width="226"
                                            alt="Product" /></div
                                    ></a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button">
                                    <i class="ai-chevron-left fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button">
                                    <i class="ai-chevron-right fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="shop-single.html">Scented candle</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$13.00</span>
                            <div
                                class="nav ms-auto"
                                data-bs-toggle="tooltip"
                                data-bs-template='&lt;div class="tooltip fs-xs" role="tooltip"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;'
                                data-bs-placement="left"
                                title="Add to cart">
                                <a
                                    class="nav-link fs-lg py-2 px-1"
                                    href="shop-catalog.html#"
                                ><i class="ai-cart"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div
                            class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                  <span
                      class="badge bg-faded-danger text-danger position-absolute top-0 start-0 mt-3 ms-3"
                  >Sale</span
                  >
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button">
                                <i class="ai-heart fs-xl d-dark-mode-none"></i
                                ><i
                                    class="ai-heart text-nav fs-xl d-none d-dark-mode-block"></i>
                            </button>
                            <div
                                class="swiper swiper-nav-onhover"
                                data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img
                                            class="d-block mx-auto"
                                            src="{{ asset('assets/img/shop/products/10.png') }}"
                                            width="226"
                                            alt="Product" /></div
                                    ></a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button">
                                    <i class="ai-chevron-left fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button">
                                    <i class="ai-chevron-right fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="shop-single.html">Matte color pitcher</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color6"
                                        value="Light brown"
                                        checked
                                        id="color6-1" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color6-1"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #aea6a6;
                          "></span
                                        ></label>
                                </div>
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color6"
                                        value="Beige"
                                        id="color6-2" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color6-2"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #d9c9a1;
                          "></span
                                        ></label>
                                </div>
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color6"
                                        value="Blue"
                                        id="color6-3" />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color6-3"
                                    ><span
                                            class="d-block rounded-circle"
                                            style="
                            width: 0.625rem;
                            height: 0.625rem;
                            background-color: #a1b7d9;
                          "></span
                                        ></label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$11.00</span>
                            <del class="fs-sm text-muted">$15.00</del>
                            <div
                                class="nav ms-auto"
                                data-bs-toggle="tooltip"
                                data-bs-template='&lt;div class="tooltip fs-xs" role="tooltip"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;'
                                data-bs-placement="left"
                                title="Add to cart">
                                <a
                                    class="nav-link fs-lg py-2 px-1"
                                    href="shop-catalog.html#"
                                ><i class="ai-cart"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div
                            class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button">
                                <i class="ai-heart fs-xl d-dark-mode-none"></i
                                ><i
                                    class="ai-heart text-nav fs-xl d-none d-dark-mode-block"></i>
                            </button>
                            <div
                                class="swiper swiper-nav-onhover"
                                data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img
                                            class="d-block mx-auto"
                                            src="{{ asset('assets/img/shop/products/11.png') }}"
                                            width="226"
                                            alt="Product" /></div
                                    ></a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button">
                                    <i class="ai-chevron-left fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button">
                                    <i class="ai-chevron-right fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="shop-single.html">Plate with granite print</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$9.00</span>
                            <div
                                class="nav ms-auto"
                                data-bs-toggle="tooltip"
                                data-bs-template='&lt;div class="tooltip fs-xs" role="tooltip"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;'
                                data-bs-placement="left"
                                title="Add to cart">
                                <a
                                    class="nav-link fs-lg py-2 px-1"
                                    href="shop-catalog.html#"
                                ><i class="ai-cart"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                    <!-- Item-->
                    <div class="col pb-2 pb-sm-3">
                        <div
                            class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button">
                                <i class="ai-heart fs-xl d-dark-mode-none"></i
                                ><i
                                    class="ai-heart text-nav fs-xl d-none d-dark-mode-block"></i>
                            </button>
                            <div
                                class="swiper swiper-nav-onhover"
                                data-swiper-options='{"loop": true, "navigation": {"prevEl": ".btn-prev", "nextEl": ".btn-next"}}'>
                                <a class="swiper-wrapper" href="shop-single.html">
                                    <div class="swiper-slide p-2 p-xl-4">
                                        <img
                                            class="d-block mx-auto"
                                            src="{{ asset('assets/img/shop/products/12.png') }}"
                                            width="226"
                                            alt="Product" /></div
                                    ></a>
                                <button
                                    class="btn btn-prev btn-icon btn-sm btn-light bg-light border-0 rounded-circle start-0"
                                    type="button">
                                    <i class="ai-chevron-left fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-left text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                                <button
                                    class="btn btn-next btn-icon btn-sm btn-light bg-light border-0 rounded-circle end-0"
                                    type="button">
                                    <i class="ai-chevron-right fs-xl d-dark-mode-none"></i
                                    ><i
                                        class="ai-chevron-right text-nav fs-xl d-none d-dark-mode-block"></i>
                                </button>
                            </div>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="shop-single.html">Exquisite glass vase</a>
                            </h3>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">$23.00</span>
                            <div
                                class="nav ms-auto"
                                data-bs-toggle="tooltip"
                                data-bs-template='&lt;div class="tooltip fs-xs" role="tooltip"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;'
                                data-bs-placement="left"
                                title="Add to cart">
                                <a
                                    class="nav-link fs-lg py-2 px-1"
                                    href="shop-catalog.html#"
                                ><i class="ai-cart"></i
                                    ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination-->
                <div class="row gy-3 align-items-center pt-3 pt-sm-4 mt-md-2">
                    <div class="col col-md-4 col-6 order-md-1 order-1">
                        <div class="d-flex align-items-center">
                            <span class="text-muted fs-sm">Show</span>
                            <select class="form-select form-select-flush w-auto">
                                <option value="12">12</option>
                                <option value="18">18</option>
                                <option value="24">24</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                    </div>
                    <div class="col col-md-4 col-12 order-md-2 order-3 text-center">
                        <button class="btn btn-primary w-md-auto w-100" type="button">
                            Load more products
                        </button>
                    </div>
                    <div class="col col-md-4 col-6 order-md-3 order-2">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-sm justify-content-end">
                                <li class="page-item active" aria-current="page">
                      <span class="page-link"
                      >1<span class="visually-hidden">(current)</span></span
                      >
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="shop-catalog.html#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="shop-catalog.html#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="shop-catalog.html#">4</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="shop-catalog.html#">5</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
