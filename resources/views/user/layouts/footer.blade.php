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
                    href="{{ route('home') }}"
                >home</a
                ><a
                    class="nav-link text-muted fs-sm fw-normal ps-0 pe-2 py-2 me-4"
                    href="{{ route('products') }}"
                >products</a
                ><a
                    class="nav-link text-muted fs-sm fw-normal ps-0 pe-2 py-2 me-sm-4"
                    href="{{ route('blogs') }}"
                >blog</a
                >
            </nav>
        </div>
        <!-- Logo + Socials + Cards-->
        <div class="d-sm-flex align-items-center pt-4">
            <div class="d-sm-flex align-items-center pe-sm-2">
                <a
                    class="navbar-brand d-inline-flex align-items-center me-sm-5 mb-4 mb-sm-0"
                    href="{{ route('home') }}"
                >
                <span class="text-nav">Beauty</span></a
                >
{{--                <div class="text-nowrap mb-4 mb-sm-0">--}}
{{--                    <a--}}
{{--                        class="btn btn-icon btn-sm btn-secondary btn-telegram rounded-circle mx-2 ms-sm-0 me-sm-3"--}}
{{--                        href="landing-shop.html#"--}}
{{--                    ><i class="ai-telegram"></i></a--}}
{{--                    ><a--}}
{{--                        class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle mx-2 ms-sm-0 me-sm-3"--}}
{{--                        href="landing-shop.html#"--}}
{{--                    ><i class="ai-instagram"></i></a--}}
{{--                    ><a--}}
{{--                        class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle mx-2 ms-sm-0 me-sm-3"--}}
{{--                        href="landing-shop.html#"--}}
{{--                    ><i class="ai-facebook"></i></a--}}
{{--                    ><a--}}
{{--                        class="btn btn-icon btn-sm btn-secondary btn-pinterest rounded-circle mx-2 ms-sm-0 me-sm-3"--}}
{{--                        href="landing-shop.html#"--}}
{{--                    ><i class="ai-pinterest"></i--}}
{{--                        ></a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
</footer>
<!-- Back to top button-->
<a
class="btn-scroll-top"
href="{{ request()->path() }}#top"
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
