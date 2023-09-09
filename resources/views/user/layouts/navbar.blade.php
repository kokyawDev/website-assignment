<!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
<header class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand pe-sm-3" href="{{ route('home') }}">
            <span class="text-primary flex-shrink-0 me-2">
                <img src="{{ asset('img/peach.png') }}" width="40px" alt="">
            </span>
            <span class="d-none d-sm-inline">Beauty</span>
        </a>
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
{{--            <a--}}
{{--                class="nav-link fs-4 p-2 mx-sm-1"--}}
{{--                href="shop-single.html#searchModal"--}}
{{--                data-bs-toggle="modal"--}}
{{--            >--}}
{{--                <i class="ai-search"></i>--}}
{{--            </a>--}}
{{--            <a--}}
{{--                class="nav-link fs-4 p-2 mx-sm-1 d-none d-sm-flex"--}}
{{--                href="{{ route('sign-in') }}"--}}
{{--            >--}}
{{--                <i class="ai-user"></i>--}}
{{--            </a>--}}
            <a
                class="nav-link position-relative fs-4 p-2"
                href="shop-single.html#cartOffcanvas"
                data-bs-toggle="offcanvas"
            >
                <i class="ai-cart"></i>
                <span
                    id="cartQtyBadge"
                    class="badge bg-primary fs-xs position-absolute end-0 top-0 me-n1"
                    style="padding: 0.25rem 0.375rem"
                >0</span>
            </a>
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

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle active"
                        href="shop-single.html#"
                        data-bs-toggle="dropdown"
                        data-bs-auto-close="outside"
                        aria-expanded="false"
                    >
                        Products
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown">
                            <a
                                class="dropdown-item dropdown-toggle"
                                href="shop-single.html#"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >Portfolio</a>
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
                                href="{{ route('blogs') }}"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >Blogs</a
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

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('blogs') }}">Blog</a>
                </li>

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="components/typography.html">About</a>--}}
{{--                </li>--}}

{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="components/typography.html">Contact</a>--}}
{{--                </li>--}}
            </ul>
            <div class="d-sm-none p-3 mt-n3">
                <a
                    class="btn btn-primary w-100 mb-1"
                    href="https://themes.getbootstrap.com/product/around-multipurpose-template-ui-kit/"
                    target="_blank"
                    rel="noopener"
                >
                    <i class="ai-cart fs-xl me-2 ms-n1"></i>
                    Buy now
                </a>
            </div>
        </nav>
    </div>
</header>
