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
                href="#cartOffcanvas"
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

                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>

                <li class="nav-item {{ request()->routeIs('products') || request()->routeIs('products.*')  ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('products') }}">Products</a>
                </li>

                <li class="nav-item {{ request()->routeIs('blogs') || request()->routeIs('blogs.*') ? 'active' : '' }}">
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
