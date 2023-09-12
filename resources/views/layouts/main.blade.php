<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="antialiased bg-gray-50 dark:bg-gray-900">
    <!-- navbar -->
    @include('layouts.navbar')

    <!-- Sidebar -->
    @include('layouts.sidebar')

    <main class="p-4 md:ml-64 h-full pt-20 min-h-[100vh]">
        @yield('content')
    </main>
</div>
</body>

</html>
