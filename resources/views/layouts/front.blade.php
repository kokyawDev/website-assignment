<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Around | Shop Homepage</title>
    <!-- SEO Meta Tags-->
    <meta
        name="description"
        content="Around - Multipurpose Bootstrap HTML Template" />
    <meta
        name="keywords"
        content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, dark mode, html5, css3, javascript, gallery, slider, touch, creative" />
    <meta name="author" content="Createx Studio" />
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon and Touch Icons-->
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="{{ asset('assets/favicon/favicon-32x32.png') }}" />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{ asset('assets/favicon/favicon-16x16.png') }}" />
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}" />
    <link
        rel="mask-icon"
        color="#6366f1"
        href="{{ asset('assets/favicon/safari-pinned-tab.svg') }}" />
    <meta name="msapplication-TileColor" content="#080032" />
    <meta
        name="msapplication-config"
        content="{{ asset('assets/favicon/browserconfig.xml') }}" />
    <meta name="theme-color" content="white" />
    <!-- Import Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet"
        id="google-font" />
    <!-- Vendor styles-->
    <link
        rel="stylesheet"
        media="screen"
        href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" />
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/css/theme.min.css') }}" />
</head>
<!-- Body-->

<body>
<!-- Google Tag Manager (noscript)-->
<noscript>
    <iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5"
        height="0"
        width="0"
        style="display: none; visibility: hidden"></iframe>
</noscript>

<!-- Page wrapper-->
<main class="page-wrapper">
    <!-- Cart offcanvas-->
    <div
        class="offcanvas offcanvas-end py-2 p-sm-4 p-md-5"
        id="cartOffcanvas"
        style="width: 680px">
        <!-- Title-->
        <div class="px-4 pt-3">
            <div
                class="d-flex justify-content-between align-items-center border-bottom pb-3 pb-sm-4">
                <h2 class="offcanvas-title d-flex align-items-center mb-1">
                    Your cart
                    <span class="fs-base fw-normal text-muted ms-3">(3 items)</span>
                </h2>
                <button
                    class="btn-close mb-1 me-n1"
                    type="button"
                    data-bs-dismiss="offcanvas"
                    data-bs-target="#cartOffcanvas"></button>
            </div>
        </div>
        <div class="offcanvas-body">
            <!-- Item-->
            <div class="d-sm-flex align-items-center pb-4">
                <a
                    class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0"
                    href="shop-single.html"
                ><img src="{{ asset('assets/img/shop/cart/01.png') }}" width="110" alt="Product"
                    /></a>
                <div class="w-100 pt-1 ps-sm-4">
                    <div class="d-flex">
                        <div class="me-3">
                            <h3 class="h5 mb-2">
                                <a href="shop-single.html">Candle in concrete bowl</a>
                            </h3>
                            <div class="d-flex flex-wrap">
                                <div class="text-muted fs-sm me-3">
                                    Color: <span class="text-dark fw-medium">Gray night</span>
                                </div>
                                <div class="text-muted fs-sm me-3">
                                    Weight: <span class="text-dark fw-medium">140g</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-end ms-auto">
                            <div class="fs-5 mb-2">$11.00</div>
                            <del class="text-muted ms-auto">$15.00</del>
                        </div>
                    </div>
                    <div class="count-input ms-n3">
                        <button class="btn btn-icon fs-xl" type="button" data-decrement>
                            -
                        </button>
                        <input class="form-control" type="number" value="2" readonly />
                        <button class="btn btn-icon fs-xl" type="button" data-increment>
                            +
                        </button>
                    </div>
                    <div class="nav justify-content-end mt-n5 mt-sm-n3">
                        <a
                            class="nav-link fs-xl p-2"
                            href="landing-shop.html#"
                            data-bs-toggle="tooltip"
                            title="Remove"
                        ><i class="ai-trash"></i
                            ></a>
                    </div>
                </div>
            </div>
            <!-- Item-->
            <div class="d-sm-flex align-items-center border-top py-4">
                <a
                    class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0"
                    href="shop-single.html"
                ><img src="{{ asset('assets/img/shop/cart/02.png') }}" width="110" alt="Product"
                    /></a>
                <div class="w-100 pt-1 ps-sm-4">
                    <div class="d-flex">
                        <div class="me-3">
                            <h3 class="h5 mb-2">
                                <a href="shop-single.html">Exquisite glass vase</a>
                            </h3>
                        </div>
                        <div class="text-end ms-auto">
                            <div class="fs-5 mb-2">$23.00</div>
                        </div>
                    </div>
                    <div class="count-input ms-n3">
                        <button class="btn btn-icon fs-xl" type="button" data-decrement>
                            -
                        </button>
                        <input class="form-control" type="number" value="1" readonly />
                        <button class="btn btn-icon fs-xl" type="button" data-increment>
                            +
                        </button>
                    </div>
                    <div class="nav justify-content-end mt-n5 mt-sm-n3">
                        <a
                            class="nav-link fs-xl p-2"
                            href="landing-shop.html#"
                            data-bs-toggle="tooltip"
                            title="Remove"
                        ><i class="ai-trash"></i
                            ></a>
                    </div>
                </div>
            </div>
            <!-- Item-->
            <div class="d-sm-flex align-items-center border-top pt-4">
                <a
                    class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0"
                    href="shop-single.html"
                ><img src="{{ asset('assets/img/shop/cart/03.png') }}" width="110" alt="Product"
                    /></a>
                <div class="w-100 pt-1 ps-sm-4">
                    <div class="d-flex">
                        <div class="me-3">
                            <h3 class="h5 mb-2">
                                <a href="shop-single.html"
                                >Set for a dinner party of 7 items</a
                                >
                            </h3>
                        </div>
                        <div class="text-end ms-auto">
                            <div class="fs-5 mb-2">$47.00</div>
                        </div>
                    </div>
                    <div class="count-input ms-n3">
                        <button class="btn btn-icon fs-xl" type="button" data-decrement>
                            -
                        </button>
                        <input class="form-control" type="number" value="1" readonly />
                        <button class="btn btn-icon fs-xl" type="button" data-increment>
                            +
                        </button>
                    </div>
                    <div class="nav justify-content-end mt-n5 mt-sm-n3">
                        <a
                            class="nav-link fs-xl p-2"
                            href="landing-shop.html#"
                            data-bs-toggle="tooltip"
                            title="Remove"
                        ><i class="ai-trash"></i
                            ></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Coupon input + total-->
        <div class="px-4 pb-3 pb-sm-4 pb-sm-5">
            <div class="d-sm-flex align-items-center border-top pt-4">
                <div
                    class="input-group input-group-sm border-dashed mb-3 mb-sm-0 me-sm-4 me-md-5">
                    <input
                        class="form-control text-uppercase"
                        type="text"
                        placeholder="Your coupon code" />
                    <button class="btn btn-secondary" type="button">
                        Apply coupon
                    </button>
                </div>
                <div class="d-flex align-items-center justify-content-center">
              <span class="fs-xl me-3">Total:</span
              ><span class="h3 mb-0">$92.00</span>
                </div>
            </div>
        </div>
        <!-- Action buttons-->
        <div
            class="d-flex align-items-center justify-content-between px-4 pb-3">
            <div class="nav d-none d-sm-block">
                <a
                    class="nav-link fw-semibold px-0"
                    href="landing-shop.html#cartOffcanvas"
                    data-bs-dismiss="offcanvas"
                ><i class="ai-chevron-left fs-xl me-2"></i>Back to shop</a
                >
            </div>
            <a
                class="btn btn-lg btn-primary w-100 w-sm-auto"
                href="shop-checkout.html"
            >Proceed to checkout<i class="ai-chevron-right ms-2 me-n1"></i
                ></a>
        </div>
    </div>
    <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
    <header class="navbar navbar-expand-lg fixed-top bg-light">
        <div class="container">
            <a class="navbar-brand pe-sm-3" href="index.html">
            <span class="text-primary flex-shrink-0 me-2">
              <svg
                  version="1.1"
                  width="35"
                  height="32"
                  viewBox="0 0 36 33"
                  xmlns="http://www.w3.org/2000/svg">
                <path
                    fill="currentColor"
                    d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
              </svg>
            </span>
                <span class="d-none d-sm-inline">Around</span>
            </a>
            <div class="nav align-items-center order-lg-3 ms-n1 me-3 me-sm-0">
                <a
                    class="nav-link fs-4 p-2 mx-sm-1 d-none d-sm-flex"
                    href="account-signin.html"
                ><i class="ai-user"></i></a
                ><a
                    class="nav-link position-relative fs-4 p-2"
                    href="landing-shop.html#cartOffcanvas"
                    data-bs-toggle="offcanvas"
                ><i class="ai-cart"></i
                    ><span
                        class="badge bg-primary fs-xs position-absolute end-0 top-0 me-n1"
                        style="padding: 0.25rem 0.375rem"
                    >3</span
                    ></a
                >
            </div>
            <button
                class="navbar-toggler ms-sm-3"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="collapse navbar-collapse" id="navbarNav">
                <ul
                    class="navbar-nav navbar-nav-scroll me-auto"
                    style="--ar-scroll-height: 520px">
                    <li class="nav-item border-top mt-2 py-2 d-sm-none">
                        <a class="nav-link" href="account-signin.html"
                        ><i class="ai-user fs-lg me-2"></i>Sign In</a
                        >
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Page content-->
    @yield('content')
</main>
<!-- Footer-->
<footer
    class="footer bg-dark position-relative pb-4 pt-md-3 py-lg-4 py-xl-5">
    <div
        class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100"
        style="background-color: rgba(255, 255, 255, 0.02)"></div>
    <div class="dark-mode container position-relative zindex-2 pt-5 pb-2">
        <!-- Nav + Switcher-->
        <div
            class="d-sm-flex align-items-end justify-content-between border-bottom mt-2 mt-sm-1 pt-4 pt-sm-5">
            <!-- Nav-->
            <nav class="d-flex mb-3 mb-sm-4">
                <a
                    class="nav-link text-muted fs-sm fw-normal ps-0 pe-2 py-2 me-4"
                    href="landing-shop.html#"
                >Support</a
                ><a
                    class="nav-link text-muted fs-sm fw-normal ps-0 pe-2 py-2 me-4"
                    href="landing-shop.html#"
                >Privacy</a
                ><a
                    class="nav-link text-muted fs-sm fw-normal ps-0 pe-2 py-2 me-sm-4"
                    href="landing-shop.html#"
                >Terms of use</a
                >
            </nav>
        </div>
        <!-- Logo + Socials + Cards-->
        <div class="d-sm-flex align-items-center pt-4">
            <div class="d-sm-flex align-items-center pe-sm-2">
                <a
                    class="navbar-brand d-inline-flex align-items-center me-sm-5 mb-4 mb-sm-0"
                    href="index.html"
                ><span class="text-primary flex-shrink-0 me-2">
                <svg
                    version="1.1"
                    width="35"
                    height="32"
                    viewBox="0 0 36 33"
                    xmlns="http://www.w3.org/2000/svg">
                  <path
                      fill="currentColor"
                      d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path></svg></span
                    ><span class="text-nav">Around</span></a
                >
                <div class="text-nowrap mb-4 mb-sm-0">
                    <a
                        class="btn btn-icon btn-sm btn-secondary btn-telegram rounded-circle mx-2 ms-sm-0 me-sm-3"
                        href="landing-shop.html#"
                    ><i class="ai-telegram"></i></a
                    ><a
                        class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle mx-2 ms-sm-0 me-sm-3"
                        href="landing-shop.html#"
                    ><i class="ai-instagram"></i></a
                    ><a
                        class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle mx-2 ms-sm-0 me-sm-3"
                        href="landing-shop.html#"
                    ><i class="ai-facebook"></i></a
                    ><a
                        class="btn btn-icon btn-sm btn-secondary btn-pinterest rounded-circle mx-2 ms-sm-0 me-sm-3"
                        href="landing-shop.html#"
                    ><i class="ai-pinterest"></i
                        ></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Back to top button--><a
    class="btn-scroll-top"
    href="landing-shop.html#top"
    data-scroll>
    <svg
        viewBox="0 0 40 40"
        fill="currentColor"
        xmlns="http://www.w3.org/2000/svg">
        <circle
            cx="20"
            cy="20"
            r="19"
            fill="none"
            stroke="currentColor"
            stroke-width="1.5"
            stroke-miterlimit="10"></circle></svg
    ><i class="ai-arrow-up"></i
    ></a>
<!-- Vendor scripts: js libraries and plugins-->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/timezz/dist/timezz.js') }}"></script>
<!-- Main theme script-->
<script src="{{ asset('assets/js/theme.min.js') }}"></script>
</body>
</html>
