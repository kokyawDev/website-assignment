@extends('layouts.front')
@section('content')
    <!-- Hero-->
    <section>
        <div
            class="jarallax bg-dark min-vh-100 py-5"
            data-jarallax
            data-type="scroll-opacity"
            data-speed="0.7">
            <div
                class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-40"></div>
            <div
                class="jarallax-img"
                style="
              background-image: url('{{ asset('assets/img/landing/shop/hero/bg.jpg') }}');
            "></div>
            <div
                class="container position-relative zindex-5 py-sm-4 py-lg-5 mt-4">
                <!-- Text + button-->
                <div class="row pt-lg-2 py-xl-4 py-xxl-5 mb-md-4 mb-lg-5">
                    <div class="col-md-10 col-lg-9 col-xl-8 col-xxl-7 pt-5 mb-5">
                        <h1 class="display-2 text-light text-uppercase pb-sm-2 pb-md-3">
                            Decor to create comfort at home
                        </h1>
                        <p
                            class="text-light opacity-70 pb-3 pb-md-4 mb-3"
                            style="max-width: 520px">
                            On the site you will find all the wonderful decor items from
                            photo frames to tablecloths for the dining table
                        </p>
                        <a class="btn btn-outline-light" href="shop-catalog.html"
                        >Explore the catalog</a
                        >
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="fw-medium text-light text-uppercase">
                        Most Popular
                    </div>
                    <!-- Slider prev/next buttons-->
                    <div class="d-flex">
                        <button
                            class="btn btn-prev btn-icon btn-sm btn-outline-light rounded-circle ms-3"
                            type="button"
                            id="popular-prev">
                            <i class="ai-arrow-left"></i>
                        </button>
                        <button
                            class="btn btn-next btn-icon btn-sm btn-outline-light rounded-circle ms-3"
                            type="button"
                            id="popular-next">
                            <i class="ai-arrow-right"></i>
                        </button>
                    </div>
                </div>
                <!-- Slider (popular items)-->
                <div
                    class="swiper"
                    data-swiper-options='{
                      "slidesPerView": 1,
                      "spaceBetween": 24,
                      "loop": true,
                      "navigation": {
                        "prevEl": "#popular-prev",
                        "nextEl": "#popular-next"
                      },
                      "breakpoints": {
                        "500": {
                          "slidesPerView": 2
                        },
                        "860": {
                          "slidesPerView": 3
                        },
                        "1200": {
                          "slidesPerView": 4
                        }
                      }
                    }'>
                    <div class="swiper-wrapper">
                        <!-- Item-->
                        <div class="swiper-slide h-auto">
                            <a
                                class="card h-100 border-0 rounded-1 text-decoration-none px-xxl-1"
                                href="shop-single.html">
                                <div class="card-body p-4 px-sm-3 px-md-4">
                                    <div class="d-flex align-items-center">
                                        <img
                                            src="assets/img/landing/shop/hero/01.png"
                                            width="97"
                                            alt="Product" />
                                        <div class="ps-3 ps-md-4">
                                            <h3 class="fs-sm mb-2">Exquisite glass vase</h3>
                                            <p class="fs-sm mb-0">$19.00</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Item-->
                        <div class="swiper-slide h-auto">
                            <a
                                class="card h-100 border-0 rounded-1 text-decoration-none px-xxl-1"
                                href="shop-single.html">
                                <div class="card-body p-4 px-sm-3 px-md-4">
                                    <div class="d-flex align-items-center">
                                        <img
                                            src="assets/img/landing/shop/hero/02.png"
                                            width="97"
                                            alt="Product" />
                                        <div class="ps-3 ps-md-4">
                                            <h3 class="fs-sm mb-2">Pot for home flowers</h3>
                                            <p class="fs-sm mb-0">
                                                $11.00 <del class="text-muted fs-xs">$15.00</del>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Item-->
                        <div class="swiper-slide h-auto">
                            <a
                                class="card h-100 border-0 rounded-1 text-decoration-none px-xxl-1"
                                href="shop-single.html">
                                <div class="card-body p-4 px-sm-3 px-md-4">
                                    <div class="d-flex align-items-center">
                                        <img
                                            src="assets/img/landing/shop/hero/03.png"
                                            width="97"
                                            alt="Product" />
                                        <div class="ps-4">
                                            <h3 class="fs-sm mb-2">Ceramic soap dispenser</h3>
                                            <p class="fs-sm mb-0">$16.00</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Item-->
                        <div class="swiper-slide h-auto">
                            <a
                                class="card h-100 border-0 rounded-1 text-decoration-none px-xxl-1"
                                href="shop-single.html">
                                <div class="card-body p-4 px-sm-3 px-md-4">
                                    <div class="d-flex align-items-center">
                                        <img
                                            src="assets/img/landing/shop/hero/04.png"
                                            width="97"
                                            alt="Product" />
                                        <div class="ps-3 ps-md-4">
                                            <h3 class="fs-sm mb-2">
                                                Wooden clock with metal hands
                                            </h3>
                                            <p class="fs-sm mb-0">$24.00</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Item-->
                        <div class="swiper-slide h-auto">
                            <a
                                class="card h-100 border-0 rounded-1 text-decoration-none px-xxl-1"
                                href="shop-single.html">
                                <div class="card-body p-4 px-sm-3 px-md-4">
                                    <div class="d-flex align-items-center">
                                        <img
                                            src="assets/img/landing/shop/hero/05.png"
                                            width="97"
                                            alt="Product" />
                                        <div class="ps-3 ps-md-4">
                                            <h3 class="fs-sm mb-2">
                                                Scented candle in ceramic shell
                                            </h3>
                                            <p class="fs-sm mb-0">$13.00</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="container py-5 my-lg-3 my-xl-4 my-xxl-5">
        <div class="row pt-2 py-md-4">
            <div class="col-lg-10 col-xl-9">
                <p class="lead text-dark pb-md-2 pb-lg-3 mb-2">
                    We do not believe that one style suits everyone. That is why we
                    choose three design directions for the new season. Get inspired by
                    new trends and create an atmosphere of coziness and comfort in
                    your own home. On the site you will find all the wonderful decor
                    items from photo frames to tablecloths for the dining table.
                </p>
                <a class="btn btn-lg btn-link px-0" href="landing-shop.html#"
                >About us<i class="ai-arrow-right ms-2"></i
                    ></a>
            </div>
        </div>
    </section>
    <!-- Trending products (carousel)-->
    <section class="container pb-5 mb-lg-3 mb-xl-4 mb-xxl-5">
        <div
            class="d-flex align-items-center justify-content-between pb-4 mb-2 mb-md-3">
            <h2 class="h1 pt-1 mb-0">Trending products</h2>
            <!-- Slider prev/next buttons-->
            <div class="d-flex">
                <button
                    class="btn btn-prev btn-icon btn-sm btn-outline-primary rounded-circle ms-3"
                    type="button"
                    id="trending-prev">
                    <i class="ai-arrow-left"></i>
                </button>
                <button
                    class="btn btn-next btn-icon btn-sm btn-outline-primary rounded-circle ms-3"
                    type="button"
                    id="trending-next">
                    <i class="ai-arrow-right"></i>
                </button>
            </div>
        </div>
        <!-- Slider (popular items)-->
        <div>
            <div
                class="swiper"
                data-swiper-options='{
              "slidesPerView": 1,
              "spaceBetween": 24,
              "loop": true,
              "navigation": {
                "prevEl": "#trending-prev",
                "nextEl": "#trending-next"
              },
              "breakpoints": {
                "500": {
                  "slidesPerView": 2
                },
                "768": {
                  "slidesPerView": 3
                },
                "1000": {
                  "slidesPerView": 4
                }
              }
            }'>
                <div class="swiper-wrapper">
                    <!-- Item-->
                    @foreach($trending_products as $trending_product)
                        <div class="swiper-slide" x-data='@json($trending_product)'>
                        <div
                            class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                            <span class="badge bg-faded-danger text-danger position-absolute top-0 start-0 mt-3 ms-3">{{ $trending_product['status'] }}</span>
                            <button
                                class="btn btn-icon btn-sm btn-light bg-light border-0 rounded-circle position-absolute top-0 end-0 mt-3 me-3 zindex-5 opacity-0"
                                type="button">
                                <i class="ai-heart fs-xl d-dark-mode-none"></i>
                                <i class="ai-heart text-nav fs-xl d-none d-dark-mode-block"></i>
                            </button>
                            <a class="d-block p-2 p-xl-4" href="shop-single.html">
                                <img
                                    class="d-block mx-auto"
                                    src="{{ $trending_product['thumbnail'] }}"
                                    width="226"
                                    alt="Product"
                                />
                            </a>
                        </div>
                        <div class="d-flex mb-1">
                            <h3 class="h6 mb-0">
                                <a href="shop-single.html">{{ $trending_product['name'] }}</a>
                            </h3>
                            <div class="d-flex ps-2 mt-n1 ms-auto">
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color1"
                                        value="Dark gray"
                                        checked
                                        id="color1-1"
                                    />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color1-1"
                                    >
                                        <span
                                            class="d-block rounded-circle"
                                            style="
                                                width: 0.625rem;
                                                height: 0.625rem;
                                                background-color: #576071;
                                            "
                                        >
                                        </span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color1"
                                        value="Light gray"
                                        id="color1-2"
                                    />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color1-2"
                                    >
                                        <span
                                        class="d-block rounded-circle"
                                        style="
                                            width: 0.625rem;
                                            height: 0.625rem;
                                            background-color: #d5d4d3;
                                        "
                                        ></span>
                                    </label>
                                </div>
                                <div class="ms-1">
                                    <input
                                        class="btn-check"
                                        type="radio"
                                        name="color1"
                                        value="Blue"
                                        id="color1-3"
                                    />
                                    <label
                                        class="btn btn-icon btn-xs btn-outline-secondary rounded-circle"
                                        for="color1-3"
                                    >
                                        <span
                                            class="d-block rounded-circle"
                                            style="
                                                width: 0.625rem;
                                                height: 0.625rem;
                                                background-color: #a1b7d9;
                                            "
                                        >

                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="me-2">${{ $trending_product['discounted_price'] ? number_format($trending_product['discounted_price'], 2) : number_format($trending_product['price'], 2) }}</span>
                            @if($trending_product['discounted_price'])
                                <del class="fs-sm text-muted">${{ number_format($trending_product['price'], 2) }}</del>
                            @endif
                            <div
                                class="nav ms-auto text-decoration-none cursor-pointer"
                                data-bs-toggle="tooltip"
                                data-bs-template='&lt;div class="tooltip fs-xs" role="tooltip"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;'
                                data-bs-placement="left"
                                title="Add to cart"
                                onClick='setProductToStore(@json($trending_product))'
                            >
                                <span class="nav-link fs-lg py-2 px-1">
                                    <i class="ai-cart"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- View all button-->
        <div
            class="text-center mt-2 mt-md-0 mb-xxl-2 pt-4 pt-md-5 pb-2 pb-sm-3 pb-md-4">
            <a
                class="btn btn-outline-primary w-100 w-sm-auto"
                href="shop-catalog.html"
            >View all products</a
            >
        </div>
    </section>

    <!-- Features (carousel on screens < 992px)-->
    <section class="container py-5 mt-2 mb-3 mt-sm-3 mb-sm-4 my-md-4 my-lg-5">
        <div
            class="swiper pb-xxl-4 mb-xl-2"
            data-swiper-options='{
              "slidesPerView": 1,
              "spaceBetween": 24,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "breakpoints": {
                "400": {
                  "slidesPerView": 2,
                  "spaceBetween": 24
                },
                "700": {
                  "slidesPerView": 3,
                  "spaceBetween": 30
                },
                "991": {
                  "slidesPerView": 4,
                  "spaceBetween": 40
                }
              }
            }'>

            <div class="swiper-wrapper">
                <!-- Item-->
                <div class="swiper-slide text-center text-sm-start">
                    <div class="text-primary mb-3 mb-sm-4">
                        <svg
                            width="40"
                            height="40"
                            viewBox="0 0 40 40"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M37.7794 10.6909L20.2794 1.94092C20.1926 1.89757 20.097 1.875 20 1.875C19.903 1.875 19.8074 1.89757 19.7206 1.94092L2.22063 10.6909C2.11674 10.7428 2.02936 10.8227 1.96832 10.9215C1.90727 11.0203 1.87496 11.1341 1.87501 11.2503V28.7503C1.87437 28.867 1.90641 28.9815 1.96749 29.0809C2.02857 29.1803 2.11626 29.2606 2.22063 29.3128L19.7206 38.0628C19.8074 38.1061 19.903 38.1287 20 38.1287C20.097 38.1287 20.1926 38.1061 20.2794 38.0628L37.7794 29.3128C37.8838 29.2606 37.9714 29.1803 38.0325 29.0809C38.0936 28.9815 38.1256 28.867 38.125 28.7503V11.2503C38.1251 11.1341 38.0928 11.0203 38.0317 10.9215C37.9706 10.8227 37.8833 10.7428 37.7794 10.6909ZM20 19.3015L15.1144 16.8584L30.7306 8.56279L36.1056 11.2503L20 19.3015ZM10.1144 14.3584L25.7306 6.06279L29.3556 7.87529L13.7413 16.1722L10.1144 14.3584ZM9.37501 15.3865L13.125 17.2615V22.2415L11.6919 20.8084C11.5747 20.6912 11.4158 20.6253 11.25 20.6253H9.37501V15.3865ZM20 3.19904L24.3575 5.37529L8.74126 13.6722L3.89751 11.2503L20 3.19904ZM3.12501 12.2615L8.12501 14.7615V21.2503C8.12501 21.416 8.19086 21.575 8.30807 21.6922C8.42528 21.8094 8.58425 21.8753 8.75001 21.8753H10.9913L13.3081 24.1922C13.3955 24.2795 13.5069 24.339 13.6281 24.3632C13.7493 24.3873 13.875 24.3749 13.9892 24.3276C14.1034 24.2803 14.201 24.2002 14.2696 24.0974C14.3383 23.9947 14.375 23.8739 14.375 23.7503V17.8865L19.375 20.3865V36.489L3.12501 28.364V12.2615ZM20.625 36.489V20.3865L36.875 12.2615V28.364L20.625 36.489Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <h3 class="h5 mb-2 mb-sm-3">Fast and free delivery</h3>
                    <p class="fs-sm mb-0">
                        Free delivery for all orders over $200 honcus egestas lorem
                        honcus egestas
                    </p>
                </div>
                <!-- Item-->
                <div class="swiper-slide text-center text-sm-start">
                    <div class="text-primary mb-3 mb-sm-4">
                        <svg
                            width="40"
                            height="40"
                            viewBox="0 0 40 40"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M38 27.4c-1.5 3.5-4 6.6-7.2 8.7s-6.9 3.3-10.8 3.3c-3.3 0-6.5-.8-9.4-2.4-2.4-1.3-4.4-3.1-6-5.2v3.1c0 .2-.1.3-.2.4a.76.76 0 0 1-.4.2.76.76 0 0 1-.4-.2c-.1-.1-.2-.2-.2-.4V30c0-.2.1-.3.2-.4 0 0 .1 0 .1-.1h0s.1 0 .1-.1h.1 4.8c.2 0 .3.1.4.2a.76.76 0 0 1 .2.4.76.76 0 0 1-.2.4.76.76 0 0 1-.4.2H5.1c2.3 3.3 5.7 5.7 9.6 6.9 4.2 1.3 8.8 1 12.8-.8s7.3-5 9.1-9c1.9-4 2.2-8.5 1-12.8C36.4 10.7 33.7 7 30 4.6s-8.1-3.4-12.5-2.8C13.1 2.5 9.1 4.7 6.2 8s-4.5 7.6-4.5 12c0 .2-.1.3-.2.4a.76.76 0 0 1-.4.2c-.2 0-.3-.1-.4-.2s-.2-.2-.2-.4c0-3.8 1.1-7.6 3.3-10.8S9 3.5 12.6 2C16.1.6 20 .2 23.8 1s7.2 2.6 10 5.3c2.7 2.7 4.6 6.2 5.3 10 .7 3.7.3 7.6-1.1 11.1zm-14.1-3.8c0 1-.4 2-1.1 2.8-.6.5-1.3.9-2 1.1v.7c0 .2-.1.4-.2.5s-.3.2-.5.2-.4-.1-.5-.2-.2-.3-.2-.5v-.7a3.09 3.09 0 0 1-2-1.1c-.7-.7-1.1-1.7-1.1-2.8 0-.2.1-.4.2-.5s.3-.2.5-.2.4.1.5.2.2.3.2.5c0 .7.3 1.3.7 1.8.5.5 1.1.7 1.8.7s1.3-.3 1.8-.7c.5-.5.7-1.1.7-1.8s-.3-1.8-2.7-2.5c-3-.9-3.7-2.6-3.7-3.8 0-1 .4-2 1.1-2.8.6-.6 1.3-.9 2-1.1v-.7c0-.2.1-.4.2-.5s.3-.2.5-.2.4.1.5.2.2.3.2.5v.7a3.09 3.09 0 0 1 2 1.1c.7.7 1.1 1.7 1.1 2.8 0 .2-.1.4-.2.5s-.3.2-.5.2-.4-.1-.5-.2-.2-.3-.2-.5c0-.7-.3-1.3-.7-1.8-.5-.5-1.1-.7-1.8-.7s-1.3.3-1.8.7c-.5.5-.7 1.1-.7 1.8 0 .4 0 1.7 2.7 2.5 2.4.7 3.7 2 3.7 3.8z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <h3 class="h5 mb-2 mb-sm-3">Money back guarantee</h3>
                    <p class="fs-sm mb-0">
                        We return money within 30 days honcus egestas lorem honcus
                        egestas
                    </p>
                </div>
                <!-- Item-->
                <div class="swiper-slide text-center text-sm-start">
                    <div class="text-primary mb-3 mb-sm-4">
                        <svg
                            width="40"
                            height="40"
                            viewBox="0 0 40 40"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M33.6825 13.683C33.6825 6.12609 27.5564 0 19.9995 0C12.4426 0 6.31646 6.12609 6.31646 13.683C4.36283 13.9263 2.51562 15.2033 2.51562 18.168V25.3136C2.51562 28.6583 4.85694 29.8746 7.07663 29.8746H9.28111C9.70091 29.8746 10.0413 29.5342 10.0413 29.1144V14.3976C10.0413 13.9778 9.70091 13.6374 9.28111 13.6374H7.83679C7.83679 6.92018 13.2823 1.47472 19.9995 1.47472C26.7167 1.47472 32.1621 6.92018 32.1621 13.6374H30.7178C30.298 13.6374 29.9577 13.9778 29.9577 14.3976V29.0916C29.9577 29.5114 30.298 29.8518 30.7178 29.8518H32.1621C31.9493 35.0741 29.4407 36.298 24.4312 36.5184V36.0091C24.4312 35.1694 23.7506 34.4888 22.9109 34.4888H18.1295C17.2898 34.4888 16.6091 35.1694 16.6091 36.0091V38.4797C16.6091 39.3194 17.2898 40 18.1295 40H22.9261C23.7658 40 24.4464 39.3194 24.4464 38.4797V38.0388C29.2659 37.8183 33.4316 36.8225 33.6825 29.8062C35.6361 29.5629 37.4833 28.2858 37.4833 25.3212V18.1756C37.4833 15.1957 35.6437 13.9263 33.6825 13.683ZM8.52094 15.1045V28.3314H7.03862C5.91357 28.3314 3.99795 27.9361 3.99795 25.2908V18.1452C3.99795 15.5226 5.89077 15.1045 7.03862 15.1045H8.52094ZM22.9261 37.3318V38.4873H18.1295V36.0167H22.9261V37.3318ZM35.963 25.3136C35.963 27.9361 34.0702 28.3542 32.9223 28.3542H31.478V15.1577H32.9603C34.0854 15.1577 36.001 15.553 36.001 18.1984L35.963 25.3136Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <h3 class="h5 mb-2 mb-sm-3">24/7 customer support</h3>
                    <p class="fs-sm mb-0">
                        Friendly 24/7 customer support honcus egestas lorem honcus
                        egestas
                    </p>
                </div>
                <!-- Item-->
                <div class="swiper-slide text-center text-sm-start">
                    <div class="text-primary mb-3 mb-sm-4">
                        <svg
                            width="40"
                            height="40"
                            viewBox="0 0 40 40"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M35.1422 8.0989L20.1085 0.0881401C19.8855 -0.0308936 19.6182 -0.0292231 19.3968 0.0923166L4.77905 8.10308C4.53931 8.23464 4.39062 8.48607 4.39062 8.75964V19.2237C4.3994 27.8255 9.49571 35.6074 17.377 39.0535L19.406 39.9377C19.5956 40.0204 19.8115 40.0208 20.0016 39.9385L22.2879 38.9512C30.3153 35.5798 35.5378 27.7228 35.5386 19.0162V8.75964C35.5386 8.48315 35.3862 8.22879 35.1422 8.0989ZM34.0417 19.0162C34.04 27.1226 29.1764 34.4371 21.7019 37.5742L21.6969 37.5767L19.7059 38.4362L17.9759 37.6815C10.6397 34.4738 5.89546 27.2307 5.88711 19.2237V9.20278L19.7614 1.59882L34.0417 9.20821V19.0162Z"
                                fill="currentColor"></path>
                            <path
                                d="M14.2398 18.7389C13.9713 18.4244 13.4989 18.3873 13.1844 18.6558C12.8699 18.924 12.8327 19.3967 13.1013 19.7108L17.0549 24.3406C17.3188 24.6497 17.7812 24.6919 18.0961 24.4354L27.3039 16.9442C27.6247 16.6836 27.6731 16.2121 27.4121 15.8913C27.1514 15.571 26.6799 15.5221 26.3591 15.7831L17.7185 22.8124L14.2398 18.7389Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <h3 class="h5 mb-2 mb-sm-3">Secure online payment</h3>
                    <p class="fs-sm mb-0">
                        We possess SSL / Secure сertificate honcus egestas lorem honcus
                        egestas
                    </p>
                </div>
            </div>

            <!-- Pagination (Bullets)-->
            <div
                class="swiper-pagination position-relative bottom-0 pt-1 mt-4 d-lg-none"></div>
        </div>
    </section>
    <!-- Blog-->

    <section class="container pb-5 mb-lg-3 mb-xl-4 mb-xxl-5">
        <h2 class="h1 pb-3 pb-md-4">Our blog</h2>
        <div
            class="swiper"
            data-swiper-options='{
              "slidesPerView": 1,
              "spaceBetween": 24,
              "pagination": {
                "el": ".swiper-pagination",
                "clickable": true
              },
              "breakpoints": {
                "500": {
                  "slidesPerView": 2
                },
                "991": {
                  "slidesPerView": 3
                }
              }
            }'>
            <div class="swiper-wrapper">
                <!-- Item-->
                <div class="swiper-slide">
                    <div class="position-relative">
                        <img
                            class="rounded-1"
                            src="{{ asset('assets/img/landing/shop/blog/01.jpg') }}"
                            alt="Post image" />
                        <div class="pt-3 mt-3">
                            <h3 class="h4 mb-3">
                                <a class="stretched-link" href="landing-shop.html#"
                                >Paintings for home decor</a
                                >
                            </h3>
                            <p class="mb-0">
                                Morbi et massa fames ac scelerisque sit commodo dignissim
                                faucibus vel quisque proin lectus laoreet sem adipiscing
                                sollicitudin erat massa tellus lorem
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Item-->
                <div class="swiper-slide">
                    <div class="position-relative">
                        <img
                            class="rounded-1"
                            src="{{ asset('assets/img/landing/shop/blog/02.jpg') }}"
                            alt="Post image" />
                        <div class="pt-3 mt-3">
                            <h3 class="h4 mb-3">
                                <a class="stretched-link" href="landing-shop.html#"
                                >How to keep flowers fresh longer</a
                                >
                            </h3>
                            <p class="mb-0">
                                Morbi et massa fames ac scelerisque sit commodo dignissim
                                faucibus vel quisque proin lectus laoreet sem adipiscing
                                sollicitudin erat massa tellus lorem
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Item-->
                <div class="swiper-slide">
                    <div class="position-relative">
                        <img
                            class="rounded-1"
                            src="{{ asset('assets/img/landing/shop/blog/03.jpg') }}"
                            alt="Post image" />
                        <div class="pt-3 mt-3">
                            <h3 class="h4 mb-3">
                                <a class="stretched-link" href="landing-shop.html#"
                                >Bedroom decoration explained</a
                                >
                            </h3>
                            <p class="mb-0">
                                Morbi et massa fames ac scelerisque sit commodo dignissim
                                faucibus vel quisque proin lectus laoreet sem adipiscing
                                sollicitudin erat massa tellus lorem
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination (Bullets)-->
            <div
                class="swiper-pagination position-relative bottom-0 pt-1 mt-4 d-lg-none"></div>
        </div>
        <!-- View all button-->
        <div class="text-center mt-2 mb-sm-1 mt-lg-0 pt-4 pt-lg-5 pb-2 pb-md-4">
            <a
                class="btn btn-outline-primary w-100 w-sm-auto"
                href="landing-shop.html#"
            >More articles</a
            >
        </div>
    </section>
@endsection
