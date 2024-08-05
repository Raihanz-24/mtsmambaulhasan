<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="..\css\style.css">

    <script src="https://cdn.jsdelivr.net/npm/smoothscroll-polyfill/dist/smoothscroll.min.js"></script>
    <script>
        // Menginisialisasi polyfill
        smoothscroll.polyfill();
    </script>
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Overlay -->
    <div id="overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-20 transition-opacity duration-300"></div>

    <header class="bg-gradient-to-r from-green-700 to-green-600 shadow fixed w-full z-30">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-3">
            <div class="flex items-center justify-between">
                <!-- Logo Lembaga -->
                <div class="flex items-center">
                    <img src="image/logo-mts.png" alt="Logo Lembaga" class="w-12 h-12 mr-3 transition-transform duration-300 hover:scale-110">
                    <div class="text-xl sm:text-2xl md:text-3xl font-bold text-white">MTs Mambaul Hasan</div>
                </div>
                <nav class="hidden md:flex space-x-4 text-white">
                    <a href="/" class="hover:text-yellow-400 transition-colors duration-300">Beranda</a>
                    <a href="/about" class="hover:text-yellow-400 transition-colors duration-300">Tentang Kami</a>
                    <a href="/program" class="hover:text-yellow-400 transition-colors duration-300">Program</a>
                    <a href="#" class="hover:text-yellow-400 transition-colors duration-300">Fasilitas</a>
                    <a href="#" class="hover:text-yellow-400 transition-colors duration-300">Kontak</a>
                </nav>
                <div class="md:hidden">
                    <button id="menu-toggle" class="text-white focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="mobile-menu" class="md:hidden hidden mt-2 max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                <nav class="space-y-1 p-4">
                    <a href="/" class="block py-2 text-white hover:text-yellow-400 transition-colors duration-300">Beranda</a>
                    <a href="/about" class="block py-2 text-white hover:text-yellow-400 transition-colors duration-300">Tentang Kami</a>
                    <a href="/program" class="block py-2 text-white hover:text-yellow-400 transition-colors duration-300">Program</a>
                    <a href="#" class="block py-2 text-white hover:text-yellow-400 transition-colors duration-300">Fasilitas</a>
                    <a href="#" class="block py-2 text-white hover:text-yellow-400 transition-colors duration-300">Kontak</a>
                </nav>
            </div>
        </div>
    </header>