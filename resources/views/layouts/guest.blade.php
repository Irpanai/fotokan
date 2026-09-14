<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'JEPRET') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { background-color: #FAFAFA; color: #111827; font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="antialiased flex flex-col min-h-screen relative text-gray-900 bg-[#FAFAFA]">
    
    <!-- Navbar -->
    <nav class="bg-white sticky top-0 z-50">
        <!-- Main Navbar -->
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 border-b border-gray-100">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-2 cursor-pointer shrink-0">
                    <span class="font-black text-xl tracking-tighter text-black flex items-center gap-1">
                        JEPRET
                    </span>
                </a>

                <!-- Center Links -->
                <div class="hidden md:flex items-center space-x-6 ml-10">
                    <a href="#" class="text-sm font-medium text-gray-600 hover:text-black transition">Explore</a>
                    <a href="{{ route('photographers.index') }}" class="text-sm font-medium text-gray-600 hover:text-black transition">Photographers</a>
                    <a href="#" class="text-sm font-medium text-gray-600 hover:text-black transition">Categories</a>
                    <a href="#" class="text-sm font-medium text-gray-600 hover:text-black transition">How It Works</a>
                </div>

                <!-- Right Actions -->
                <div class="flex items-center space-x-4 ml-auto">
                    <a href="/" class="hidden md:flex items-center gap-2 text-sm font-semibold text-gray-700 bg-white hover:bg-gray-50 px-4 py-2 rounded-lg border border-gray-200 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                        Back to Marketplace
                    </a>
                    
                    <a href="{{ route('login') }}" class="w-9 h-9 rounded-full bg-black flex items-center justify-center hover:bg-gray-800 transition">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Sub Navbar -->
        <div class="border-b border-gray-100 bg-white">
            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 py-2.5 flex justify-between items-center text-[10px] font-medium text-gray-500 uppercase tracking-widest">
                <div>SYS.AUTH // VER. 2.4 / <span class="text-gray-800 font-semibold">Pintu Masuk Terpadu</span></div>
                <div class="flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                    JARINGAN AKTIF: 100% SECURE
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow py-8 px-4 sm:px-6 flex items-center justify-center relative z-10 w-full">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-200 bg-white py-8 mt-auto relative z-10">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-medium text-gray-500">
                <div class="flex items-center gap-2">
                    <span class="font-bold text-gray-800">JEPRET &copy; 2025</span>
                    <span class="text-gray-300">&middot;</span>
                    <span>Museum-grade architectural photography repository</span>
                </div>
                
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="#" class="hover:text-gray-900 transition">Licensing Terms</a>
                    <a href="#" class="hover:text-gray-900 transition">Privacy Policy</a>
                    <a href="#" class="hover:text-gray-900 transition">Terms of Service</a>
                    <a href="#" class="hover:text-gray-900 transition">Curation Standards</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
