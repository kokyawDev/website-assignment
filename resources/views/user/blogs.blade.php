@extends('user.layouts.app')

@section('content')
    <div class="container pt-5 pb-lg-5 pb-md-4 pb-2 my-5">
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog list</li>
            </ol>
        </nav>
        <!-- Page title + filters-->
        <div class="row align-items-center gy-2 mb-4 pb-1 pb-sm-2 pb-lg-3">
            <div class="col-lg-5">
                <h1 class="mb-lg-0">Blog list</h1>
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
                                    {{ route('blogs', [
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
                                {{ route('blogs', [
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
        <!-- Post-->
        @foreach($posts as $post)
        <article class="row g-0 border-0 mb-4"><a class="col-sm-5 col-lg-4 bg-repeat-0 bg-size-cover bg-position-center rounded-5" href="{{ route('blogs.detail', $post) }}" style="background-image: url({{ $post->thumbnail }}); min-height: 16rem"></a>
            <div class="col-sm-7 col-lg-8">
                <div class="pt-4 pb-sm-4 ps-sm-4 pe-lg-4">
                    <h3><a href="{{ route('blogs.detail', $post) }}">{{ $post->name }}</a></h3>
                    <p class="d-sm-none d-md-block">
                        {{ $post->short_description }}
                    </p>
                    <div class="d-flex flex-wrap align-items-center mt-n2">
                        <span class="fs-sm text-muted mt-2">{{ date('F j, Y', strtotime($post->updated_at)) }}</span>
                        <span class="fs-xs opacity-20 mt-2 mx-3">|</span><a class="badge text-nav fs-xs border mt-2" href="{{ route('blogs') }}">{{ $post->category->name }}</a>
                    </div>
                </div>
            </div>
        </article>
        @endforeach
        <!-- Pagination-->
        <div class="row gy-3 align-items-center mt-lg-5 pt-2 pt-md-3 pt-lg-0 mb-md-2 mb-xl-4">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
