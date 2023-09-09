@extends('user.layouts.app')

@section('content')
    <div class="container pt-5 pb-lg-5 pb-md-4 pb-2 my-5">
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog list no sidebar</li>
            </ol>
        </nav>
        <!-- Page title + filters-->
        <div class="row align-items-center gy-2 mb-4 pb-1 pb-sm-2 pb-lg-3">
            <div class="col-lg-5">
                <h1 class="mb-lg-0">Blog list</h1>
            </div>
{{--            <div class="col-xl-2 offset-xl-1 col-lg-3 col-sm-5">--}}
{{--                <select class="form-select">--}}
{{--                    <option>All categories</option>--}}
{{--                    <option>Inspiration</option>--}}
{{--                    <option>Brand strategy</option>--}}
{{--                    <option>Advertisement</option>--}}
{{--                    <option>Ecommerce</option>--}}
{{--                    <option>Travel &amp; Vacation</option>--}}
{{--                </select>--}}
{{--            </div>--}}
            <div class="col-lg-4 col-sm-7 ms-auto">
                <div class="position-relative"><i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                    <input class="form-control ps-5" type="search" placeholder="Enter keyword">
                </div>
            </div>
        </div>
        <!-- Post-->
        <article class="row g-0 border-0 mb-4"><a class="col-sm-5 col-lg-4 bg-repeat-0 bg-size-cover bg-position-center rounded-5" href="blog-single-v1.html" style="background-image: url(assets/img/blog/list/01.jpg); min-height: 16rem"></a>
            <div class="col-sm-7 col-lg-8">
                <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
                    <h3><a href="blog-single-v1.html">Business strategy for a brand of vintage bags</a></h3>
                    <p class="d-sm-none d-md-block">Morbi et massa fames ac scelerisque sit commodo dignissim faucibus vel quisque proin lectus et massa fames ac scelerisque sit commodo dignissim. Tellus sagittis dolor pellentesque vel porttitor magna aliquet arcu. Interdum risus mauris pulvinar et vel morbi tellus, scelerisque vel metus ...</p>
                    <div class="d-flex flex-wrap align-items-center mt-n2">
                        <span class="fs-sm text-muted mt-2">April 25, 2022</span>
                    </div>
                </div>
            </div>
        </article>
        <!-- Post-->
        <article class="row g-0 border-0 pt-3 pt-sm-0 mb-4"><a class="col-sm-5 col-lg-4 bg-repeat-0 bg-size-cover bg-position-center rounded-5" href="blog-single-v2.html" style="background-image: url(assets/img/blog/list/02.jpg); min-height: 16rem"></a>
            <div class="col-sm-7 col-lg-8">
                <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
                    <h3><a href="blog-single-v2.html">Top books for inspiration</a></h3>
                    <p class="d-sm-none d-md-block">Sapien ultrices egestas at faucibus eu diam velit diam id amet nibh quam rutrum fermentum diam natoque scelerisque viverra molestie fames. Nulla fringilla arcu justo augue fringilla in nunc volutpat sit. Dui diam, faucibus vitae ultricies vitae mollis nunc elementum. Habitasse porta neque tempor tellus ut ...</p>
                    <div class="d-flex flex-wrap align-items-center mt-n2">
                        <span class="fs-sm text-muted mt-2">April 25, 2022</span>
                    </div>
                </div>
            </div>
        </article>
        <!-- Post-->
        <article class="row g-0 border-0 pt-3 pt-sm-0 mb-4"><a class="col-sm-5 col-lg-4 bg-repeat-0 bg-size-cover bg-position-center rounded-5" href="blog-single-v3.html" style="background-image: url(assets/img/blog/list/03.jpg); min-height: 16rem"></a>
            <div class="col-sm-7 col-lg-8">
                <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
                    <h3><a href="blog-single-v3.html">Destinations to inspire and restore resources</a></h3>
                    <p class="d-sm-none d-md-block">Sapien ultrices egestas at faucibus eu diam velit diam id amet nibh quam rutrum diam fermentum diam natoque scelerisque viverra molestie fames. Aliquet donec cras amet orci in in neque ut sed diam quis consectetur purus lorem eu, sit. Aliquam eget arcu sed urna feugiat. In integer nisl at dui malesuada ...</p>
                    <div class="d-flex flex-wrap align-items-center mt-n2">
                        <span class="fs-sm text-muted mt-2">April 25, 2022</span>
                    </div>
                </div>
            </div>
        </article>
        <!-- Post-->
        <article class="row g-0 border-0 pt-3 pt-sm-0 mb-4"><a class="col-sm-5 col-lg-4 bg-repeat-0 bg-size-cover bg-position-center rounded-5" href="blog-single-v1.html" style="background-image: url(assets/img/blog/list/04.jpg); min-height: 16rem"></a>
            <div class="col-sm-7 col-lg-8">
                <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
                    <h3><a href="blog-single-v1.html">Promotion of an online store from scratch, first sales</a></h3>
                    <p class="d-sm-none d-md-block">Pharetra in morbi quis is massa maecenas arcu vulputate pulvinar elit non nullage a, duis tortor mi massa ipsum in eu eu eget libero pulvinar elit vulputate. Nunc aliquet scelerisque pellentesque imperdiet tortor elit, dictum. Tristique odio at dignissim viverra aliquet eleifend erat tellus, at arcu, egestas praesent...</p>
                    <div class="d-flex flex-wrap align-items-center mt-n2">
                        <span class="fs-sm text-muted mt-2">April 25, 2022</span>
                    </div>
                </div>
            </div>
        </article>
        <!-- Post-->
        <article class="row g-0 border-0 pt-3 pt-sm-0 mb-4"><a class="col-sm-5 col-lg-4 bg-repeat-0 bg-size-cover bg-position-center rounded-5" href="blog-single-v2.html" style="background-image: url(assets/img/blog/list/05.jpg); min-height: 16rem"></a>
            <div class="col-sm-7 col-lg-8">
                <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
                    <h3><a href="blog-single-v2.html">New series from Netflix</a></h3>
                    <p class="d-sm-none d-md-block">Egestas in neque scelerisque semper sit at eu cursus faucibus velit cras at aliquam sed dictum at at orci curabitur dictumst viverra non pharetra etiam non, vitae tristique eu in morbi felis nulla. Tellus sagittis dolor pellentesque vel porttitor magna aliquet arcu. Interdum risus mauris pulvinar et vel morbi ...</p>
                    <div class="d-flex flex-wrap align-items-center mt-n2">
                        <span class="fs-sm text-muted mt-2">April 25, 2022</span>
                    </div>
                </div>
            </div>
        </article>
        <!-- Pagination-->
        <div class="row gy-3 align-items-center mt-lg-5 pt-2 pt-md-3 pt-lg-0 mb-md-2 mb-xl-4">
            <div class="col col-md-4 col-6 order-md-1 order-1">
{{--                <div class="d-flex align-items-center"><span class="text-muted fs-sm">Show</span>--}}
{{--                    <select class="form-select form-select-flush w-auto">--}}
{{--                        <option value="6">6</option>--}}
{{--                        <option value="9" selected>9</option>--}}
{{--                        <option value="12">12</option>--}}
{{--                        <option value="24">24</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
            </div>
{{--            <div class="col col-md-4 col-12 order-md-2 order-3 text-center">--}}
{{--                <button class="btn btn-primary w-md-auto w-100" type="button">Load more posts</button>--}}
{{--            </div>--}}
            <div class="col col-md-4 col-6 order-md-3 order-2">
                <nav aria-label="Page navigation">
                    <ul class="pagination pagination-sm justify-content-end">
                        <li class="page-item active" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
                        <li class="page-item"><a class="page-link" href="blog-list.html#">2</a></li>
                        <li class="page-item"><a class="page-link" href="blog-list.html#">3</a></li>
                        <li class="page-item"><a class="page-link" href="blog-list.html#">4</a></li>
                        <li class="page-item"><a class="page-link" href="blog-list.html#">5</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
