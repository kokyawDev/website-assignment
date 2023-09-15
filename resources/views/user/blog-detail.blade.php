@extends('user.layouts.app')

@section('content')
    <!-- Page header-->
    <section class="container py-5 mt-5 mb-md-2 mb-lg-3 mb-xl-4">
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('blogs') }}">Blog List</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($post->name) }}</li>
            </ol>
        </nav>
        <!-- Post title + post meta-->
        <h1 class="display-4 text-center pb-2 pb-lg-3">{{ $post->short_description }}</h1>
        <div class="d-flex flex-wrap align-items-center justify-content-center mt-n2">
            <span class="fs-sm text-muted mt-2">{{ date('F j, Y', strtotime($post->updated_at)) }}</span><span class="fs-xs opacity-20 mt-2 mx-3">
    </section>
    <!-- Post cover image (parallax)-->
    <section class="jarallax" data-jarallax data-speed=".65">
        <div class="jarallax-img bg-position-center-y" style="background-image: url({{ $post->cover }});"></div>
        <div class="d-none d-xxl-block" style="height: 760px;"></div>
        <div class="d-none d-xl-block d-xxl-none" style="height: 650px;"></div>
        <div class="d-none d-lg-block d-xl-none" style="height: 500px;"></div>
        <div class="d-none d-md-block d-lg-none" style="height: 400px;"></div>
        <div class="d-md-none" style="height: 300px;"></div>
    </section>
    <!-- Post content-->
    <section class="container py-5 mt-md-2 mt-lg-3 mt-xl-4">
        <div class="row justify-content-center pt-xxl-2">
            <div class="col-lg-9 col-xl-8">
                {!! $post->description !!}
            </div>
        </div>
    </section>
@endsection
