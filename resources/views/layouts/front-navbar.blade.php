<!-- Search modal-->
<div
    class="modal fade"
    id="searchModal"
    tabindex="-1"
    role="dialog"
    data-focus-input="#search">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header d-block position-relative border-0 pb-3">
                <form class="position-relative w-100 mt-2 mb-4">
                    <button
                        class="btn-close position-absolute top-50 end-0 translate-middle-y m-0 me-n1"
                        type="reset"
                        data-bs-dismiss="modal"></button
                    ><i
                        class="ai-search fs-xl position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input
                        class="form-control form-control-lg px-5"
                        type="search"
                        placeholder="Type to search"
                        data-focus-on-open='["modal", "#searchModal"]' />
                </form>
                <div class="fs-xs fw-medium text-muted text-uppercase">
                    Suggestions
                </div>
            </div>
            <div class="modal-body pt-3">
                <div class="d-flex align-items-center border-bottom pb-4 mb-4">
                    <a
                        class="position-relative d-inline-block flex-shrink-0 bg-secondary rounded-1"
                        href="shop-single.html"
                    ><span
                            class="badge bg-success position-absolute top-0 start-100 translate-middle ms-n1"
                        >Shop</span
                        ><img
                            src="assets/img/shop/cart/01.png"
                            width="90"
                            alt="Product"
                        /></a>
                    <div class="ps-3">
                        <h4 class="h6 mb-2">
                            <a href="shop-single.html">Candle in concrete bowl</a>
                        </h4>
                        <span class="mb-0 me-2">$11.00</span>
                        <del class="fs-sm text-muted ms-auto">$15.00</del>
                    </div>
                </div>
                <div class="d-flex align-items-center border-bottom pb-4 mb-4">
                    <a
                        class="position-relative d-inline-block flex-shrink-0"
                        href="shop-single.html#"
                    ><span
                            class="badge bg-info position-absolute top-0 start-100 translate-middle ms-n1"
                        >Blog</span
                        ><img
                            class="rounded-1"
                            src="assets/img/landing/shop/instagram/02.jpg"
                            width="90"
                            alt="Post"
                        /></a>
                    <div class="ps-3">
                        <h4 class="h6 mb-0">
                            <a href="shop-single.html#"
                            >Bedroom decoration explained. Tips &amp; tricks from the
                                field experts.</a
                            >
                        </h4>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a
                        class="position-relative d-inline-block flex-shrink-0 bg-secondary rounded-1"
                        href="shop-single.html"
                    ><span
                            class="badge bg-success position-absolute top-0 start-100 translate-middle ms-n1"
                        >Shop</span
                        ><img
                            src="assets/img/shop/cart/02.png"
                            width="90"
                            alt="Product"
                        /></a>
                    <div class="ps-3">
                        <h4 class="h6 mb-2">
                            <a href="shop-single.html">Exquisite glass vase</a>
                        </h4>
                        <span class="mb-0 me-2">$23.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                <span class="fs-base fw-normal text-muted ms-3">(<span id='yourCartQty'>3 items</span>)</span>
            </h2>
            <button
                class="btn-close mb-1 me-n1"
                type="button"
                data-bs-dismiss="offcanvas"
                data-bs-target="#cartOffcanvas"></button>
        </div>
    </div>
    <div class="offcanvas-body" id="cartContainer">
{{--        <!-- Item-->--}}
{{--        <div class="d-sm-flex align-items-center pb-4">--}}
{{--            <a--}}
{{--                class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0"--}}
{{--                href="shop-single.html"--}}
{{--            ><img src="assets/img/shop/cart/01.png" width="110" alt="Product"--}}
{{--                /></a>--}}
{{--            <div class="w-100 pt-1 ps-sm-4">--}}
{{--                <div class="d-flex">--}}
{{--                    <div class="me-3">--}}
{{--                        <h3 class="h5 mb-2">--}}
{{--                            <a href="shop-single.html">Candle in concrete bowl</a>--}}
{{--                        </h3>--}}
{{--                        <div class="d-flex flex-wrap">--}}
{{--                            <div class="text-muted fs-sm me-3">--}}
{{--                                Color: <span class="text-dark fw-medium">Gray night</span>--}}
{{--                            </div>--}}
{{--                            <div class="text-muted fs-sm me-3">--}}
{{--                                Weight: <span class="text-dark fw-medium">140g</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="text-end ms-auto">--}}
{{--                        <div class="fs-5 mb-2">$11.00</div>--}}
{{--                        <del class="text-muted ms-auto">$15.00</del>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="count-input ms-n3">--}}
{{--                    <button class="btn btn-icon fs-xl" type="button" data-decrement>--}}
{{--                        ---}}
{{--                    </button>--}}
{{--                    <input class="form-control" type="number" value="2" readonly />--}}
{{--                    <button class="btn btn-icon fs-xl" type="button" data-increment>--}}
{{--                        +--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="nav justify-content-end mt-n5 mt-sm-n3">--}}
{{--                    <a--}}
{{--                        class="nav-link fs-xl p-2"--}}
{{--                        href="shop-single.html#"--}}
{{--                        data-bs-toggle="tooltip"--}}
{{--                        title="Remove"--}}
{{--                    ><i class="ai-trash"></i--}}
{{--                        ></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Item-->--}}
{{--        <div class="d-sm-flex align-items-center border-top py-4">--}}
{{--            <a--}}
{{--                class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0"--}}
{{--                href="shop-single.html"--}}
{{--            ><img src="assets/img/shop/cart/02.png" width="110" alt="Product"--}}
{{--                /></a>--}}
{{--            <div class="w-100 pt-1 ps-sm-4">--}}
{{--                <div class="d-flex">--}}
{{--                    <div class="me-3">--}}
{{--                        <h3 class="h5 mb-2">--}}
{{--                            <a href="shop-single.html">Exquisite glass vase</a>--}}
{{--                        </h3>--}}
{{--                    </div>--}}
{{--                    <div class="text-end ms-auto">--}}
{{--                        <div class="fs-5 mb-2">$23.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="count-input ms-n3">--}}
{{--                    <button class="btn btn-icon fs-xl" type="button" data-decrement>--}}
{{--                        ---}}
{{--                    </button>--}}
{{--                    <input class="form-control" type="number" value="1" readonly />--}}
{{--                    <button class="btn btn-icon fs-xl" type="button" data-increment>--}}
{{--                        +--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="nav justify-content-end mt-n5 mt-sm-n3">--}}
{{--                    <a--}}
{{--                        class="nav-link fs-xl p-2"--}}
{{--                        href="shop-single.html#"--}}
{{--                        data-bs-toggle="tooltip"--}}
{{--                        title="Remove"--}}
{{--                    ><i class="ai-trash"></i--}}
{{--                        ></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Item-->--}}
{{--        <div class="d-sm-flex align-items-center border-top pt-4">--}}
{{--            <a--}}
{{--                class="d-inline-block flex-shrink-0 bg-secondary rounded-1 p-sm-2 p-md-3 mb-2 mb-sm-0"--}}
{{--                href="shop-single.html"--}}
{{--            ><img src="assets/img/shop/cart/03.png" width="110" alt="Product"--}}
{{--                /></a>--}}
{{--            <div class="w-100 pt-1 ps-sm-4">--}}
{{--                <div class="d-flex">--}}
{{--                    <div class="me-3">--}}
{{--                        <h3 class="h5 mb-2">--}}
{{--                            <a href="shop-single.html"--}}
{{--                            >Set for a dinner party of 7 items</a--}}
{{--                            >--}}
{{--                        </h3>--}}
{{--                    </div>--}}
{{--                    <div class="text-end ms-auto">--}}
{{--                        <div class="fs-5 mb-2">$47.00</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="count-input ms-n3">--}}
{{--                    <button class="btn btn-icon fs-xl" type="button" data-decrement>--}}
{{--                        ---}}
{{--                    </button>--}}
{{--                    <input class="form-control" type="number" value="1" readonly />--}}
{{--                    <button class="btn btn-icon fs-xl" type="button" data-increment>--}}
{{--                        +--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="nav justify-content-end mt-n5 mt-sm-n3">--}}
{{--                    <a--}}
{{--                        class="nav-link fs-xl p-2"--}}
{{--                        href="shop-single.html#"--}}
{{--                        data-bs-toggle="tooltip"--}}
{{--                        title="Remove"--}}
{{--                    ><i class="ai-trash"></i--}}
{{--                        ></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
    <!-- Coupon input + total-->
    <div class="px-4 pb-3 pb-sm-4 pb-sm-5">
        <div class="d-sm-flex align-items-center justify-content-end border-top pt-4">
{{--            <div--}}
{{--                class="input-group input-group-sm border-dashed mb-3 mb-sm-0 me-sm-4 me-md-5">--}}
{{--                <input--}}
{{--                    class="form-control text-uppercase"--}}
{{--                    type="text"--}}
{{--                    placeholder="Your coupon code" />--}}
{{--                <button class="btn btn-secondary" type="button">--}}
{{--                    Apply coupon--}}
{{--                </button>--}}
{{--            </div>--}}
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
                href="shop-single.html#cartOffcanvas"
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
<header class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand pe-sm-3" href="index.html"
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
            ><span class="d-none d-sm-inline">Around</span></a
        >
        <div
            class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto"
            data-bs-toggle="mode">
            <input class="form-check-input" type="checkbox" id="theme-mode" />
            <label class="form-check-label" for="theme-mode"
            ><i class="ai-sun fs-lg"></i
                ></label>
            <label class="form-check-label" for="theme-mode"
            ><i class="ai-moon fs-lg"></i
                ></label>
        </div>
        <div class="nav align-items-center order-lg-3 ms-n1 me-3 me-sm-0">
            <a
                class="nav-link fs-4 p-2 mx-sm-1"
                href="shop-single.html#searchModal"
                data-bs-toggle="modal"
            ><i class="ai-search"></i></a
            ><a
                class="nav-link fs-4 p-2 mx-sm-1 d-none d-sm-flex"
                href="account-signin.html"
            ><i class="ai-user"></i></a
            ><a
                class="nav-link position-relative fs-4 p-2"
                href="shop-single.html#cartOffcanvas"
                data-bs-toggle="offcanvas"
            ><i class="ai-cart"></i
                ><span
                    id="cartQtyBadge"
                    class="badge bg-primary fs-xs position-absolute end-0 top-0 me-n1"
                    style="padding: 0.25rem 0.375rem"
                >0</span
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
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="shop-single.html#"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >Landings</a
                    >
                    <div class="dropdown-menu overflow-hidden p-0">
                        <div class="d-lg-flex">
                            <div class="mega-dropdown-column pt-1 pt-lg-3 pb-lg-4">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a class="dropdown-item" href="index.html"
                                        >Template Intro Page</a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 rounded-3 rounded-start-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/landings.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="landing-mobile-app-showcase.html"
                                        >Mobile App Showcase</a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/mobile-app.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="landing-product.html"
                                        >Product Landing</a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/product-landing.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="landing-saas-v1.html"
                                        >SaaS v.1</a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/saas-1.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="landing-saas-v2.html"
                                        >SaaS v.2</a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/saas-2.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="landing-saas-v3.html"
                                        >SaaS v.3<span class="text-danger fs-xs ms-2"
                                            >New</span
                                            ></a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/saas-3.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="landing-shop.html"
                                        >Shop Homepage</a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/shop-homepage.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="landing-marketing-agency.html"
                                        >Marketing Agency</a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/marketing-agency.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="landing-creative-agency.html"
                                        >Creative Agency</a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/creative-agency.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="landing-conference.html"
                                        >Conference (Event)<span
                                                class="text-danger fs-xs ms-2"
                                            >New</span
                                            ></a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/conference.jpg') }});
                                                "></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-dropdown-column pb-2 pt-lg-3 pb-lg-4">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="landing-web-studio.html"
                                        >Web Studio</a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/web-studio.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="landing-corporate.html"
                                        >Corporate</a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/corporate.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="landing-business-consulting.html"
                                        >Business Consulting</a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/business-consulting.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="landing-coworking-space.html"
                                        >Coworking Space</a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/coworking.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="landing-yoga-studio.html"
                                        >Yoga Studio</a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/yoga-studio.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a
                                            class="dropdown-item"
                                            href="landing-influencer.html"
                                        >Influencer<span class="text-danger fs-xs ms-2"
                                            >New</span
                                            ></a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/influencer.jpg') }});
                                                "></span>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="landing-blog.html"
                                        >Blog Homepage</a
                                        ><span
                                            class="mega-dropdown-column position-absolute top-0 end-0 h-100 bg-size-cover bg-repeat-0 zindex-2 opacity-0"
                                            style="
                                                background-image: url({{ asset('assets/img/megamenu/blog-homepage.jpg') }});
                                                "></span>
                                    </li>
                                </ul>
                            </div>
                            <div
                                class="mega-dropdown-column position-relative border-start zindex-3"></div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle active"
                        href="shop-single.html#"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                        aria-expanded="false"
                    >Pages</a
                    >
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a
                                class="dropdown-item dropdown-toggle"
                                href="shop-single.html#"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >Portfolio</a
                            >
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="portfolio-list-v1.html"
                                    >List View v.1</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="portfolio-list-v2.html"
                                    >List View v.2</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="portfolio-grid-v1.html"
                                    >Grid View v.1</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="portfolio-grid-v2.html"
                                    >Grid View v.2</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="portfolio-slider.html"
                                    >Slider View</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="portfolio-single-v1.html"
                                    >Single Project v.1</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="portfolio-single-v2.html"
                                    >Single Project v.2</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a
                                class="dropdown-item dropdown-toggle"
                                href="shop-single.html#"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >Shop</a
                            >
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="shop-catalog.html"
                                    >Catalog (Listing)</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="shop-single.html"
                                    >Product Page</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="shop-checkout.html"
                                    >Checkout</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a
                                class="dropdown-item dropdown-toggle"
                                href="shop-single.html#"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >Blog</a
                            >
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="blog-grid-sidebar.html"
                                    >Grid View with Sidebar</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-grid.html"
                                    >Grid View no Sidebar</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-list-sidebar.html"
                                    >List View with Sidebar</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-list.html"
                                    >List View no Sidebar</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-single-v1.html"
                                    >Single post v.1</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-single-v2.html"
                                    >Single post v.2</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="blog-single-v3.html"
                                    >Single post v.3</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a
                                class="dropdown-item dropdown-toggle"
                                href="shop-single.html#"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >About</a
                            >
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="about-agency.html"
                                    >About - Agency</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="about-product.html"
                                    >About - Product</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a
                                class="dropdown-item dropdown-toggle"
                                href="shop-single.html#"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >Services</a
                            >
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="services-v1.html"
                                    >Services v.1</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="services-v2.html"
                                    >Services v.2</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="services-v3.html"
                                    >Services v.3</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="pricing.html">Pricing</a>
                        </li>
                        <li class="dropdown">
                            <a
                                class="dropdown-item dropdown-toggle"
                                href="shop-single.html#"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >Contacts</a
                            >
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="contacts-v1.html"
                                    >Contacts v.1</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="contacts-v2.html"
                                    >Contacts v.2</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="contacts-v3.html"
                                    >Contacts v.3</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a
                                class="dropdown-item dropdown-toggle"
                                href="shop-single.html#"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >Specialty Pages</a
                            >
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="404-v1.html"
                                    >404 Error v.1</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="404-v2.html"
                                    >404 Error v.2</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="404-v3.html"
                                    >404 Error v.3</a
                                    >
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="shop-single.html#"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                        aria-expanded="false"
                    >Account</a
                    >
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a
                                class="dropdown-item dropdown-toggle"
                                href="shop-single.html#"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >Auth pages</a
                            >
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="account-signin.html"
                                    >Sign In</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="account-signup.html"
                                    >Sign Up</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="account-signinup.html"
                                    >Sign In / Up</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="account-password-recovery.html"
                                    >Password Recovery</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a class="dropdown-item" href="account-overview.html"
                            >Overview</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="account-settings.html"
                            >Settings</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="account-billing.html"
                            >Billing</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="account-orders.html"
                            >Orders</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="account-earnings.html"
                            >Earnings</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="account-chat.html"
                            >Chat (Messages)</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="account-favorites.html"
                            >Favorites (Wishlist)</a
                            >
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="components/typography.html">UI Kit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="docs/getting-started.html">Docs</a>
                </li>
                <li class="nav-item border-top mt-2 py-2 d-sm-none">
                    <a class="nav-link" href="account-signin.html"
                    ><i class="ai-user fs-lg me-2"></i>Sign In</a
                    >
                </li>
            </ul>
            <div class="d-sm-none p-3 mt-n3">
                <a
                    class="btn btn-primary w-100 mb-1"
                    href="https://themes.getbootstrap.com/product/around-multipurpose-template-ui-kit/"
                    target="_blank"
                    rel="noopener"
                ><i class="ai-cart fs-xl me-2 ms-n1"></i>Buy now</a
                >
            </div>
        </nav>
    </div>
</header>
