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
                <div class="dropdown" style="min-width: 185px;">
                    <button class="btn btn-secondary dropdown-toggle text-left w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ request()->category_id ? $categories[request()->category_id] : 'Select Category' }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        @if(isset(request()->category_id))
                            <li>
                                <a class="dropdown-item" href="
                                    {{ route('products', [
                                        'category_id' => "",
                                        'keyword' => request()->keyword ?? '',
                                        'page' => request()->page ?? ''
                                    ]) }}">
                                    Select Category
                                </a>
                            </li>
                        @endif
                        @foreach($categories as $key => $value)
                            <li>
                                <a class="dropdown-item" href="
                                {{ route('products', [
                                    'category_id' => $key,
                                    'keyword' => request()->keyword ?? '',
                                    'page' => request()->page ?? ''
                                ]) }}">
                                    {{ $value }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-7">
                <form id="searchForm" method="GET">
                    <div class="position-relative"><i class="ai-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
                        <input value="{{ request()->keyword ?? '' }}" name="keyword" class="form-control ps-5" type="text" id="keyword" placeholder="Enter keyword" />
                    </div>
                </form>
            </div>
        </div>
        <div class="row pb-2 pb-sm-4">
            <!-- Product grid-->
            <div class="col-lg-12">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                    @foreach($products as $product)
                        <!-- Item-->
                        <div class="col pb-2 pb-sm-3">
                            <div
                            class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
{{--                            <span--}}
{{--                                class="badge bg-faded-danger text-danger position-absolute top-0 start-0 mt-3 ms-3"--}}
{{--                            >--}}
{{--                                Sale--}}
{{--                            </span>--}}
                            <a class="d-block p-2 p-xl-4" href="{{ route('products.detail', $product->id) }}">
                                <img
                                    class="d-block mx-auto"
                                    src="{{ $product->thumbnail }}"
                                    width="226"
                                    alt="Product"
                                />
                            </a>
                            </div>
                            <div class="d-flex mb-1">
                                <h3 class="h6 mb-0">
                                    <a href="{{ route('products.detail', $product->id) }}">{{ $product->name }}</a>
                                </h3>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="me-2">${{ (int) $product->discounted_price ? number_format($product->discounted_price, 2) : number_format($product->price, 2) }}</span>
                                @if((int) $product->discounted_price)
                                    <del class="fs-sm text-muted">${{ number_format($product->price, 2) }}</del>
                                @endif
                                <div
                                    class="nav ms-auto"
                                    data-bs-toggle="tooltip"
                                    data-bs-template='&lt;div class="tooltip fs-xs" role="tooltip"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;'
                                    data-bs-placement="left"
                                    title="Add to cart">
                                    <div
                                        class="nav-link fs-lg py-2 px-1"
                                        onClick='setProductToStore(@json($product))'
                                    ><i class="ai-cart"></i
                                        ></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination-->
                <div class="row gy-3 align-items-center mt-lg-5 pt-2 pt-md-3 pt-lg-0 mb-md-2 mb-xl-4">
                    {{ $products->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection
