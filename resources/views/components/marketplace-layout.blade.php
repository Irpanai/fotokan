<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Jepret') }} - Marketplace</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-[#F9FAFB] text-gray-900" x-data="{ mobileMenuOpen: false }">
        <!-- Top Navbar -->
        <x-navbar />

        <!-- Main Content Area -->
        <main class="w-full">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-[#F9FAFB] border-t border-gray-200 py-8 mt-12">
            <div class="max-w-[1440px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-4">
                <div class="flex items-center gap-2">
                    <span class="font-black text-sm tracking-tighter text-black uppercase">JEPRET</span>
                </div>
                <div class="flex items-center gap-4 text-xs font-medium text-gray-500">
                    <a href="#" class="hover:text-gray-900">Explore</a>
                    <a href="#" class="hover:text-gray-900">Community Guidelines</a>
                    <a href="#" class="hover:text-gray-900">Licensing Terms</a>
                    <a href="#" class="hover:text-gray-900">Privacy Policy</a>
                    <a href="#" class="hover:text-gray-900">Terms of Service</a>
                </div>
                <div class="text-[10px] text-gray-400 flex flex-col md:items-end">
                    <span>&copy; {{ date('Y') }} JEPRET Editorial Photography Archive. All rights reserved.</span>
                    <span>Built for architectural & editorial photographic curation.</span>
                </div>
            </div>
        </footer>
    </body>
</html>
