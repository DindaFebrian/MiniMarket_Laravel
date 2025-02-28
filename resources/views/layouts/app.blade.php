<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title', 'Welcome')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Custom Styles -->
    <style>
        body {
            background: linear-gradient(to bottom, #fde2e4, #f8bbd0);
            font-family: 'Figtree', sans-serif;
        }
    </style>
</head>
<body class="font-sans antialiased">
    <div class="min-h-screen flex flex-col">
        <!-- Navigation -->
        <div>
            @include('layouts.navigation')
        </div>

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-gradient-to-r from-pink-600 to-pink-800 shadow-md text-white py-6">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold">{{ $header }}</h1>
                </div>
            </header>
        @endisset

        <!-- Page Content -->
        <main class="flex-grow container mx-auto px-4 sm:px-6 lg:px-8 py-6">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-pink-100 text-center py-4 text-sm text-pink-800">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
