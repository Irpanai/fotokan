<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TadapatSnap') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { background-color: #0A0C13; color: #FFFFFF; font-family: 'Inter', sans-serif; }
        .text-orange-theme { color: #FF6600; }
        .bg-orange-theme { background-color: #FF6600; }
        .hover\:bg-orange-theme-dark:hover { background-color: #E65C00; }
        .text-cyan-theme { color: #00D5FF; }
        .bg-cyan-theme { background-color: #00D5FF; }
        .border-orange-theme { border-color: #FF6600; }
    </style>
</head>
<body class="antialiased overflow-x-hidden flex flex-col min-h-screen relative">
    
    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 border-b border-gray-800/50 bg-[#0F111A]/90 backdrop-blur-md">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-2 cursor-pointer">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-orange-500 to-yellow-500 flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <span class="font-bold text-xl tracking-tight text-white">Tadapat<span class="text-orange-theme">Snap</span></span>
                </a>

                <!-- Center Links -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-sm font-semibold text-white">Jelajah Foto</a>
                    <a href="#" class="text-sm font-semibold text-gray-400 hover:text-white transition">Live Radar Spot</a>
                    <a href="#" class="text-sm font-semibold text-gray-400 hover:text-white transition">Event Populer</a>
                    <a href="#" class="text-sm font-semibold text-gray-400 hover:text-white transition">My Library</a>
                </div>

                <!-- Right Actions -->
                <div class="flex items-center space-x-5">
                    <a href="#" class="hidden lg:flex items-center gap-2 text-sm font-semibold text-gray-300 bg-gray-800/50 hover:bg-gray-800 px-4 py-2 rounded-full border border-gray-700/50 transition">
                        Mode Fotografer / Upload
                        <span class="bg-orange-theme text-white text-[10px] px-1.5 py-0.5 rounded-sm font-bold uppercase tracking-wider">PRO</span>
                    </a>
                    
                    <button class="text-gray-400 hover:text-white transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>
                    
                    <button class="text-gray-400 hover:text-white transition relative">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                        <span class="absolute -top-1 -right-1 w-2 h-2 bg-orange-theme rounded-full"></span>
                    </button>

                    <button class="text-gray-400 hover:text-white transition relative mr-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                        <span class="absolute -top-2 -right-2 bg-orange-theme text-white text-[10px] font-bold px-1.5 py-0.5 rounded-full border-2 border-[#0F111A]">2 Item</span>
                    </button>

                    @auth
                        <a href="{{ url('/dashboard') }}" class="w-9 h-9 rounded-full overflow-hidden border-2 border-gray-700 hover:border-orange-theme transition">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=2D3142&color=fff" alt="Avatar" class="w-full h-full object-cover">
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="w-9 h-9 rounded-full bg-gray-800 border-2 border-gray-700 flex items-center justify-center hover:border-orange-theme transition">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pt-32 pb-20 px-4 sm:px-6 flex items-center justify-center relative z-10">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-800 bg-[#0A0C13] pt-16 pb-8 relative z-10">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Col 1 -->
                <div class="lg:col-span-1">
                    <div class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-orange-500 to-yellow-500 flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <span class="font-bold text-xl tracking-tight text-white">Tadapat<span class="text-orange-theme">Snap</span></span>
                    </div>
                    <p class="text-gray-400 text-sm mb-6 leading-relaxed">
                        Temukan momen lari & street photographymu dalam hitungan detik dengan AI Vision telemetri pengenal nomor dada (BIB) & face recognition.
                    </p>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-green-500/10 border border-green-500/20">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                        <span class="text-[10px] font-bold text-green-400 tracking-wider">RADAR ACTIVE: JKT & SUBURBAN LOOP</span>
                    </div>
                </div>

                <!-- Col 2 -->
                <div>
                    <h4 class="text-white font-bold mb-6">Untuk Pelari & Pembeli</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-sm text-gray-400 hover:text-orange-theme transition">Cari Foto BIB</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-orange-theme transition">Live Radar Spot CFD</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-orange-theme transition">Cara Pembelian Cepat</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-orange-theme transition">Jaminan Bebas Watermark</a></li>
                    </ul>
                </div>

                <!-- Col 3 -->
                <div>
                    <h4 class="text-white font-bold mb-6">Untuk Fotografer</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-sm text-gray-400 hover:text-orange-theme transition">Gabung Kreator Snap</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-orange-theme transition">SaaS Pricing Pro</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-orange-theme transition">Panduan Bulk Upload</a></li>
                        <li><a href="#" class="text-sm text-gray-400 hover:text-orange-theme transition">AI Auto-Tagging API</a></li>
                    </ul>
                </div>

                <!-- Col 4 -->
                <div>
                    <h4 class="text-white font-bold mb-6">Keamanan & Lisensi</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-green-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                            <span class="text-sm text-gray-400">Resolusi Penuh Tanpa Kompresi</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-cyan-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            <span class="text-sm text-gray-400">Transaksi Terenkripsi 256-Bit</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-orange-theme shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            <span class="text-sm text-gray-400">Instan Download Google Drive / ZIP</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col lg:flex-row items-center justify-between pt-8 border-t border-gray-800 gap-6">
                <div class="flex items-center flex-wrap gap-3">
                    <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest mr-2">METODE PEMBAYARAN RESMI:</span>
                    <span class="px-2 py-1 bg-gray-900 border border-gray-800 rounded text-xs font-semibold text-gray-400">QRIS</span>
                    <span class="px-2 py-1 bg-gray-900 border border-gray-800 rounded text-xs font-semibold text-gray-400">GOPAY</span>
                    <span class="px-2 py-1 bg-gray-900 border border-gray-800 rounded text-xs font-semibold text-gray-400">DANA</span>
                    <span class="px-2 py-1 bg-gray-900 border border-gray-800 rounded text-xs font-semibold text-gray-400">BCA VIRTUAL ACCOUNT</span>
                    <span class="px-2 py-1 bg-gray-900 border border-gray-800 rounded text-xs font-semibold text-gray-400">MANDIRI LIVIN</span>
                </div>
                
                <p class="text-xs text-gray-500 text-center lg:text-right">
                    &copy; 2026 TadapatSnap Engine. Platform Fotografi Olahraga & Event Indonesia.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
