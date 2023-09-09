@extends('user.layouts.app')

@section('content')
    <!-- Page header-->
    <section class="container py-5 mt-5 mb-md-2 mb-lg-3 mb-xl-4">
        <!-- Breadcrumb-->
        <nav aria-label="breadcrumb">
            <ol class="pt-lg-3 pb-lg-4 pb-2 breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="blog-grid.html">Blog</a></li>
                <li class="breadcrumb-item active" aria-current="page">Single post v.2</li>
            </ol>
        </nav>
        <!-- Post title + post meta-->
        <h1 class="display-4 text-center pb-2 pb-lg-3">How to look for inspiration for new goals in life and remember to give yourself a break?</h1>
        <div class="d-flex flex-wrap align-items-center justify-content-center mt-n2">
            <span class="fs-sm text-muted mt-2">16 hours ago</span><span class="fs-xs opacity-20 mt-2 mx-3">
    </section>
    <!-- Post cover image (parallax)-->
    <section class="jarallax" data-jarallax data-speed=".65">
        <div class="jarallax-img bg-position-center-y" style="background-image: url({{ asset('assets/img/blog/single/cover.jpg') }});"></div>
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
                <p class="fs-lg">Dolor laoreet fermentum lectus praesent aenean molestie mollis integer. Sem ullamcorper montes, lorem ullamcorper orci, pellentesque ipsum malesuada gravida. Donec imperdiet nulla suscipit in. Dignissim ornare ac lorem consectetur massa a. Pellentesque urna pharetra, quis maecenas. Sit dolor amet nulla aenean eu, ac. Nisl mi tempus, iaculis viverra vestibulum scelerisque imperdiet montes. Mauris massa elit pretium elementum eget tortor quis. Semper interdum lectus odio diam.</p>
                <p class="fs-lg mb-3">Ut pellentesque bibendum dignissim a molestie. Ultrices diam ut vel neque tincidunt eget. Sed ut quis sit semper nunc at etiam lacinia. Quam laoreet eget id sapien a pharetra, ornare diam dignissim. Lorem amet nisl, enim mi aenean mauris. Porta nisl a ultrices ut libero id. Gravida a mi neque, tristique justo, et pharetra. Laoreet nulla est nulla cras ac arcu sed mattis tristique. Morbi convallis suspendisse enim blandit massa. Cursus augue dui mattis morbi velit.</p>
                <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">Dolor laoreet fermentum lectus praesent aenean</h2>
                <p class="fs-lg pb-4 pb-xl-5">Ut pellentesque bibendum dignissim a molestie. Ultrices diam ut vel neque tincidunt eget. Sed ut quis sit semper nunc at etiam lacinia. Quam laoreet eget id sapien a pharetra, ornare diam dignissim. Lorem amet nisl, enim mi aenean mauris. Porta nisl a ultrices ut libero id. Gravida a mi neque, tristique justo, et pharetra. Laoreet nulla est nulla cras ac arcu sed mattis tristique. Morbi convallis suspendisse enim blandit massa. Cursus augue dui mattis morbi velit.</p>
                <figure class="figure"><img class="figure-img rounded-5 mb-3" src="assets/img/blog/single/image.jpg" alt="Image">
                    <figcaption class="figure-caption">Image source tristique justo et pharetra</figcaption>
                </figure>
                <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">Cursus augue dui mattis morbi velit</h2>
                <p class="fs-lg pb-2 pb-lg-0 mb-4 mb-lg-5">Proin non congue sem, sed tristique ante. Donec et sollicitudin tellus. Duis maximus, dui eget egestas mattis, purus ex tempor nulla, quis tempor sapien neque at nisl. Aliquam eu nisi ut nisl ultrices posuere. Praesent dignissim efficitur nisi, a hendrerit ipsum elementum sit amet. Vivamus non ante nisl. Nunc faucibus velit at eros mollis semper. Curabitur aliquam eros tellus, nec facilisis nisl finibus sit amet. Ut et dolor nec lorem gravida elementum.</p>
                <h2 class="h4 mb-lg-4 pt-3 pt-md-4 pt-xl-5">Lorem ipsum dolor sit amet consectetur</h2>
                <p class="fs-lg">Ut pellentesque bibendum dignissim a molestie. Ultrices diam ut vel neque tincidunt eget. Sed ut quis sit semper nunc at etiam lacinia. Quam laoreet eget id sapien a pharetra, ornare diam dignissim.</p>
                <ul>
                    <li class="mb-1">Quam laoreet eget id sapien</li>
                    <li class="mb-1">Morbi convallis suspendisse</li>
                    <li class="mb-1">Vivamus non ante</li>
                    <li class="mb-1">Praesent dignissim efficitur</li>
                    <li class="mb-1">Gravida a mi neque</li>
                </ul>
                <p class="fs-lg">Donec diam neque, efficitur vitae ante a, eleifend placerat est. Phasellus dapibus scelerisque diam, eu rhoncus lorem vulputate lobortis. Praesent pulvinar venenatis mauris, eget fringilla sem.</p>
            </div>
        </div>
    </section>
@endsection
