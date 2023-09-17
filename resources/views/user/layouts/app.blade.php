<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>Beauty</title>
    <!-- SEO Meta Tags-->
    <meta
        name="description"
        content="Beauty"/>
    <meta
        name="keywords"
        content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, dark mode, html5, css3, javascript, gallery, slider, touch, creative"/>
    <meta name="author" content="Createx Studio"/>
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- Favicon and Touch Icons-->
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="{{ asset('assets/favicon/apple-touch-icon.png') }}"/>
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
{{--        href="{{ asset('assets/favicon/favicon-32x32.png') }}"--}}
        href="{{ asset('img/peach.png') }}"
    />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
{{--        href="{{ asset('assets/favicon/favicon-16x16.png') }}"--}}
        href="{{ asset('img/peach.png') }}"
    />
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}"/>
    <link
        rel="mask-icon"
        color="#6366f1"
{{--        href="{{ asset('assets/favicon/safari-pinned-tab.svg') }}"--}}
        href="{{ asset('img/peach.png') }}"
    />
    <meta name="msapplication-TileColor" content="#080032"/>
{{--    <meta--}}
{{--        name="msapplication-config"--}}
{{--        content="{{ asset('assets/favicon/browserconfig.xml') }}"/>--}}
    <meta name="theme-color" content="white"/>
    <!-- Import Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
        rel="stylesheet"
        id="google-font"/>
    <!-- Vendor styles-->
    <link
        rel="stylesheet"
        media="screen"
        href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}"/>

    @yield('css')

    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="{{ asset('assets/css/theme.min.css') }}"/>
{{--    <link rel="stylesheet" href="{{ asset('build/assets/frontend-a461d729.css') }}">--}}

    <!-- Theme mode-->
    <script>
        let mode = window.localStorage.getItem("mode"),
            root = document.getElementsByTagName("html")[0];
        if (mode !== undefined && mode === "dark") {
            root.classList.add("dark-mode");
        } else {
            root.classList.remove("dark-mode");
        }

        (function () {
            window.onload = function () {
                const preloader = document.querySelector(".page-loading");
                preloader.classList.remove("active");
                setTimeout(function () {
                    preloader.remove();
                }, 1500);
            };
        })();
    </script>
</head>
<!-- Body-->

<body>

@php
    $no_nav_pages = [
        'sign-in',
        'sign-up',
    ];
@endphp

<!-- Page loading spinner-->
<div class="page-loading active">
    <div class="page-loading-inner">
        <div class="page-spinner"></div><span>Loading...</span>
    </div>
</div>

<!-- Page wrapper-->
<main class="page-wrapper">
    @include('user.layouts.search')

    @include('user.layouts.cart-off-canvas')

    @if(!in_array(request()->segment(1), $no_nav_pages))
        @include('user.layouts.navbar')
    @endif

    <!-- Page content-->
    @yield('content')
</main>
<!-- Footer-->
@if(!in_array(request()->segment(1), $no_nav_pages))
    @include('user.layouts.footer')
@endif
<!-- Vendor scripts: js libraries and plugins-->

<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jarallax/dist/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/timezz/dist/timezz.js') }}"></script>
<script src="{{ asset('assets/vendor/cleave.js/dist/cleave.min.js') }}"></script>
@yield('js')
<!-- Main theme script-->
<script src="{{ asset('assets/js/theme.min.js') }}"></script>
<script src="{{ asset('js/frontend.js') }}"></script>
{{--<script src="{{ asset('build/assets/frontend-eb74e4a6.js') }}"></script>--}}
<!-- Customizer-->
{{--@vite(['resources/css/frontend.css', 'resources/js/frontend.js'])--}}
{{--<link rel="stylesheet" href="{{ mix('css/frontend.css') }}">--}}
{{--<script src="{{ mix('js/frontend.js') }}" defer></script>--}}

<script>
    document.addEventListener("DOMContentLoaded", () => {
        if (!store.has('cart')) {
            store.set('cart', [])
        }

        let cart = store.get('cart');

        setCartQtyCountBadge(cart)

        if (cart.length) {
            addProductsToCart(cart)
        }
    });
</script>
</body>
</html>
