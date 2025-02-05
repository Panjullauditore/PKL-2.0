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
    <body class="font-sans text-gray-900 antialiased">
        <div style="background-image: url('{{asset('img/kota-semarang.png')}}');" 
             class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-cover bg-center">
            <!-- Overlay gelap untuk membuat teks lebih mudah dibaca -->
            <div class="absolute inset-0 bg-black/50"></div>
            
            <!-- Logo -->
            <div class="relative z-10">
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-white" />
                </a>
            </div>

            <!-- Form Container -->
            <div class="relative z-10 w-full sm:max-w-md mt-6 px-6 py-4 bg-white/80 dark:bg-gray-800/80 shadow-md overflow-hidden sm:rounded-lg backdrop-blur-sm">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>