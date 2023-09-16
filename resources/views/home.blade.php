@extends('layouts.main')
@section('content')
    <!-- Start block -->
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5 antialiased grid grid-cols-2 md:grid-cols-3 gap-4">
        <div class="flex items-center max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="rounded-xl p-5 me-5 text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700"
            >
                <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 dark:text-white group-hover:text-gray-900 dark:group-hover:text-white"
                     aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                </svg>
            </div>
            <div>
                <a href="{{ route('admin.orders.index') }}">
                    <h5 class="text-xl font-bold tracking-tight text-gray-500 dark:text-white hover:text-gray-700">Orders</h5>
                </a>
                <p class=" font-normal text-gray-500 dark:text-gray-400">{{ \App\Models\Order::count() }}</p>
            </div>
        </div>

        <div class="flex items-center max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="rounded-xl p-5 me-5 text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700"
            >
                <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 dark:text-white group-hover:text-gray-900 dark:group-hover:text-white"
                     aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                    <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2ZM7 2h4v2H7V2ZM5 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm0-4a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm8 4H8a1 1 0 0 1 0-2h5a1 1 0 0 1 0 2Zm0-4H8a1 1 0 0 1 0-2h5a1 1 0 1 1 0 2Z"/>
                </svg>
            </div>
            <div>
                <a href="{{ route('admin.categories.index') }}">
                    <h5 class="text-xl font-bold tracking-tight text-gray-500 dark:text-white hover:text-gray-700">Categories</h5>
                </a>
                <p class=" font-normal text-gray-500 dark:text-gray-400">{{ \App\Models\Category::count() }}</p>
            </div>
        </div>

        <div class="flex items-center max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="rounded-xl p-5 me-5 text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700"
            >
                <svg class="flex-shrink-0 w-6 h-6 ml-0.5 text-white transition duration-75 dark:text-white group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2Zm-3 15H4.828a1 1 0 0 1 0-2h6.238a1 1 0 0 1 0 2Zm0-4H4.828a1 1 0 0 1 0-2h6.238a1 1 0 1 1 0 2Z"/>
                    <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.98 2.98 0 0 0 .13 5H5Z"/>
                </svg>
            </div>
            <div>
                <a href="{{ route('admin.posts.index') }}">
                    <h5 class="text-xl font-bold tracking-tight text-gray-500 dark:text-white hover:text-gray-700">Posts</h5>
                </a>
                <p class=" font-normal text-gray-500 dark:text-gray-400">{{ \App\Models\Post::count() }}</p>
            </div>
        </div>

        <div class="flex items-center max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="rounded-xl p-5 me-5 text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700"
            >
                <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 dark:text-white group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M18 5h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C8.4.842 6.949 0 5.5 0A3.5 3.5 0 0 0 2 3.5c.003.52.123 1.033.351 1.5H2a2 2 0 0 0-2 2v3a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V7a2 2 0 0 0-2-2ZM8.058 5H5.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM11 13H9v7h2v-7Zm-4 0H2v5a2 2 0 0 0 2 2h3v-7Zm6 0v7h3a2 2 0 0 0 2-2v-5h-5Z"/>
                </svg>
            </div>
            <div>
                <a href="{{ route('admin.products.index') }}">
                    <h5 class="text-xl font-bold tracking-tight text-gray-500 dark:text-white hover:text-gray-700">Products</h5>
                </a>
                <p class=" font-normal text-gray-500 dark:text-gray-400">{{ \App\Models\Product::count() }}</p>
            </div>
        </div>

        <div class="flex items-center max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="rounded-xl p-5 me-5 text-white bg-gradient-to-r from-purple-500 via-purple-600 to-purple-700"
            >
                <svg class="flex-shrink-0 w-6 h-6 text-white transition duration-75 dark:text-white group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                    <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                    <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
                </svg>
            </div>
            <div>
                <a href="{{ route('admin.users.index') }}">
                    <h5 class="text-xl font-bold tracking-tight text-gray-500 dark:text-white hover:text-gray-700">Users</h5>
                </a>
                <p class=" font-normal text-gray-500 dark:text-gray-400">{{ \App\Models\User::count() }}</p>
            </div>
        </div>

    </section>
@endsection
