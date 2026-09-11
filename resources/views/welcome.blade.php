<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TadapatSnap - Find Your Best Moments</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { background-color: #0F111A; color: #FFFFFF; font-family: 'Inter', sans-serif; }
        .text-orange-theme { color: #FF6600; }
        .bg-orange-theme { background-color: #FF6600; }
        .hover\:bg-orange-theme-dark:hover { background-color: #E65C00; }
        .text-cyan-theme { color: #00D5FF; }
        .bg-cyan-theme { background-color: #00D5FF; }
        .border-orange-theme { border-color: #FF6600; }
        .card-bg { background-color: #1A1D27; }
        .card-hover:hover { border-color: #2D3142; transform: translateY(-2px); }
        .input-bg { background-color: #141722; }
    </style>
</head>
<body class="antialiased overflow-x-hidden relative pb-32 md:pb-40">

    <!-- Navbar -->
    <nav class="fixed w-full z-50 border-b border-gray-800/50 bg-[#0F111A]/90 backdrop-blur-md">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center gap-2 cursor-pointer">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-orange-500 to-yellow-500 flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <span class="font-bold text-xl tracking-tight text-white">Tadapat<span class="text-orange-theme">Snap</span></span>
                </div>

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

    <!-- Hero Section -->
    <div class="relative pt-36 pb-20 px-4 sm:px-6 lg:px-8 text-center flex flex-col items-center">
        <!-- Glows -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[600px] bg-blue-500/10 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute top-20 left-1/2 -translate-x-1/2 w-[400px] h-[400px] bg-orange-500/10 rounded-full blur-[100px] pointer-events-none"></div>

        <!-- AI Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-green-500/10 border border-green-500/20 mb-8 relative z-10">
            <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
            <span class="text-xs font-bold text-green-400 tracking-wider">AI VISION ENGINE V2.4 ACTIVE / Latency Recognition <100ms</span>
        </div>
        
        <!-- Headline -->
        <h1 class="text-5xl md:text-7xl font-black text-white mb-6 tracking-tight leading-tight max-w-5xl relative z-10">
            Temukan Momen Terbaikmu di <br/>
            <span class="text-orange-theme">Jalanan</span> & <span class="text-cyan-theme">Lintasan Lari</span>
        </h1>
        
        <p class="text-lg md:text-xl text-gray-400 mb-12 max-w-3xl mx-auto font-medium leading-relaxed relative z-10">
            Didukung AI Vision pintar: cari otomatis berdasarkan nomor BIB dada, warna baju lari, jenis sepeda, atau aksesoris tanpa bongkar ribuan album manual.
        </p>

        <!-- Search Box -->
        <div class="w-full max-w-4xl mx-auto bg-gray-800/60 backdrop-blur-xl p-2 sm:p-3 rounded-2xl border border-gray-700/50 shadow-2xl flex flex-col md:flex-row items-center gap-2 sm:gap-3 relative z-10">
            <!-- Event Select -->
            <div class="flex items-center justify-between gap-2 px-4 py-3 sm:py-4 bg-gray-900/80 rounded-xl w-full md:w-auto md:min-w-[260px] border border-gray-700 cursor-pointer hover:border-gray-600 transition">
                <div class="flex items-center gap-2 overflow-hidden">
                    <svg class="w-5 h-5 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span class="text-white font-medium whitespace-nowrap overflow-hidden text-ellipsis">Banjarmasin Half Marathon 2024</span>
                </div>
                <svg class="w-4 h-4 text-gray-500 shrink-0 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </div>
            
            <!-- Input -->
            <div class="relative flex-grow w-full flex items-center bg-gray-900/80 rounded-xl border border-gray-700 hover:border-gray-600 transition focus-within:border-orange-theme focus-within:ring-1 focus-within:ring-orange-theme">
                <div class="pl-4">
                    <svg class="w-5 h-5 text-orange-theme" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <input type="text" placeholder="Baju merah BIB 1045" class="w-full bg-transparent border-none text-white pl-3 pr-12 py-3.5 focus:ring-0 placeholder-gray-500 text-base">
                <button class="absolute right-3 text-gray-400 hover:text-white transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </button>
            </div>
            
            <!-- Submit Button -->
            <button class="w-full md:w-auto bg-orange-theme hover:bg-orange-theme-dark text-white font-bold px-8 py-3.5 rounded-xl transition duration-200 shadow-[0_0_20px_rgba(255,102,0,0.3)] whitespace-nowrap flex items-center justify-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                Cari Foto AI
            </button>
        </div>

        <!-- Quick Filters -->
        <div class="mt-8 flex flex-wrap items-center justify-center gap-3 relative z-10">
            <span class="text-xs font-bold text-gray-500 uppercase tracking-widest mr-2">FILTER CEPAT:</span>
            <button class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-gray-800/80 border border-gray-700 text-xs font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">
                <svg class="w-3.5 h-3.5 text-orange-theme" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path></svg> BIB Number
            </button>
            <button class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-gray-800/80 border border-gray-700 text-xs font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">
                <svg class="w-3.5 h-3.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg> Warna Pakaian
            </button>
            <button class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-gray-800/80 border border-gray-700 text-xs font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">
                <svg class="w-3.5 h-3.5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Sepeda / Wheels
            </button>
            <button class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-gray-800/80 border border-gray-700 text-xs font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">
                <svg class="w-3.5 h-3.5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg> Spot Lokasi
            </button>
            <button class="flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-gray-800/80 border border-gray-700 text-xs font-medium text-gray-300 hover:bg-gray-700 hover:text-white transition">
                <svg class="w-3.5 h-3.5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg> Fotografer Terverifikasi
            </button>
        </div>
        
        <div class="mt-6 flex items-center gap-2 text-xs font-semibold text-gray-400 bg-gray-900/50 px-4 py-2 rounded-lg border border-gray-800 relative z-10">
            <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            Index <span class="text-white">24.828 Foto Terverifikasi</span>
        </div>
    </div>

    <!-- Live Radar Spot Hunting -->
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <div class="flex justify-between items-end mb-6">
            <div class="flex items-center gap-3">
                <span class="w-3 h-3 rounded-full bg-green-500 animate-pulse"></span>
                <h2 class="text-xl font-bold text-white flex items-center gap-2">
                    Live Radar Spot Hunting 
                    <span class="text-xs font-bold text-green-400 bg-green-500/10 px-2 py-0.5 rounded-full border border-green-500/20">38 Fotografer Aktif Real-Time</span>
                </h2>
            </div>
            <a href="#" class="text-xs font-semibold text-gray-400 hover:text-white transition flex items-center gap-1">
                Buka Peta Telemetri Lengkap <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
            </a>
        </div>

        <div class="flex overflow-x-auto gap-4 pb-4 hide-scrollbar">
            <!-- Radar Card 1 -->
            <div class="min-w-[280px] bg-gray-800/40 border border-gray-700/50 rounded-xl p-4 flex flex-col justify-between hover:border-gray-600 transition group cursor-pointer relative overflow-hidden backdrop-blur-sm">
                <div class="flex justify-between items-start mb-2">
                    <div class="flex items-center gap-1.5 bg-green-500/20 px-2 py-0.5 rounded-md border border-green-500/30">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                        <span class="text-[10px] font-bold text-green-400">Live</span>
                    </div>
                    <span class="text-xs font-medium text-gray-500 flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-gray-500"></span> 5m Lalu</span>
                </div>
                <h3 class="text-white font-bold text-base mb-3 truncate">Tikungan CFD Bekantan</h3>
                <div class="flex items-center justify-between mt-auto">
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded-full bg-gray-700 flex items-center justify-center text-xs font-bold text-white">R</div>
                        <div class="flex flex-col">
                            <span class="text-xs font-semibold text-gray-300 flex items-center gap-1">RianLesmana <svg class="w-3 h-3 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></span>
                            <span class="text-[10px] text-gray-500">Sony A7IV</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between mt-4 border-t border-gray-700/50 pt-3">
                    <span class="text-[10px] font-bold text-gray-400 tracking-wider">142 FOTO BARU</span>
                    <button class="text-xs font-bold text-cyan-400 bg-cyan-500/10 px-3 py-1.5 rounded-lg border border-cyan-500/20 hover:bg-cyan-500/20 transition">Lihat Spot</button>
                </div>
            </div>

            <!-- Radar Card 2 -->
            <div class="min-w-[280px] bg-gray-800/40 border border-gray-700/50 rounded-xl p-4 flex flex-col justify-between hover:border-gray-600 transition group cursor-pointer relative overflow-hidden backdrop-blur-sm">
                <div class="flex justify-between items-start mb-2">
                    <div class="flex items-center gap-1.5 bg-red-500/20 px-2 py-0.5 rounded-md border border-red-500/30">
                        <svg class="w-2.5 h-2.5 text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"></path></svg>
                        <span class="text-[10px] font-bold text-red-400">FINISH GATE</span>
                    </div>
                    <span class="text-xs font-medium text-gray-500 flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> 2m Lalu</span>
                </div>
                <h3 class="text-white font-bold text-base mb-3 truncate">Finish Line Gate Marathon</h3>
                <div class="flex items-center justify-between mt-auto">
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded-full bg-gray-700 flex items-center justify-center text-xs font-bold text-white">D</div>
                        <div class="flex flex-col">
                            <span class="text-xs font-semibold text-gray-300 flex items-center gap-1">Dika StreetSnap <svg class="w-3 h-3 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></span>
                            <span class="text-[10px] text-gray-500">Canon EOS R</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between mt-4 border-t border-gray-700/50 pt-3">
                    <span class="text-[10px] font-bold text-gray-400 tracking-wider">320 FOTO BARU</span>
                    <button class="text-xs font-bold text-cyan-400 bg-cyan-500/10 px-3 py-1.5 rounded-lg border border-cyan-500/20 hover:bg-cyan-500/20 transition">Lihat Spot</button>
                </div>
            </div>

            <!-- Radar Card 3 -->
            <div class="min-w-[280px] bg-gray-800/40 border border-gray-700/50 rounded-xl p-4 flex flex-col justify-between hover:border-gray-600 transition group cursor-pointer relative overflow-hidden backdrop-blur-sm">
                <div class="flex justify-between items-start mb-2">
                    <div class="flex items-center gap-1.5 bg-orange-500/20 px-2 py-0.5 rounded-md border border-orange-500/30">
                        <svg class="w-2.5 h-2.5 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        <span class="text-[10px] font-bold text-orange-400">KM 12.4</span>
                    </div>
                    <span class="text-xs font-medium text-gray-500 flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> 8m Lalu</span>
                </div>
                <h3 class="text-white font-bold text-base mb-3 truncate">Underpass Flyover Merah</h3>
                <div class="flex items-center justify-between mt-auto">
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded-full bg-orange-theme flex items-center justify-center text-[10px] font-bold text-white uppercase">PRO</div>
                        <div class="flex flex-col">
                            <span class="text-xs font-semibold text-gray-300 flex items-center gap-1">SarahSportShots <svg class="w-3 h-3 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></span>
                            <span class="text-[10px] text-gray-500">Nikon Z8</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between mt-4 border-t border-gray-700/50 pt-3">
                    <span class="text-[10px] font-bold text-gray-400 tracking-wider">87 FOTO BARU</span>
                    <button class="text-xs font-bold text-cyan-400 bg-cyan-500/10 px-3 py-1.5 rounded-lg border border-cyan-500/20 hover:bg-cyan-500/20 transition">Lihat Spot</button>
                </div>
            </div>

            <!-- Radar Card 4 -->
            <div class="min-w-[280px] bg-gray-800/40 border border-gray-700/50 rounded-xl p-4 flex flex-col justify-between hover:border-gray-600 transition group cursor-pointer relative overflow-hidden backdrop-blur-sm">
                <div class="flex justify-between items-start mb-2">
                    <div class="flex items-center gap-1.5 bg-blue-500/20 px-2 py-0.5 rounded-md border border-blue-500/30">
                        <svg class="w-2.5 h-2.5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        <span class="text-[10px] font-bold text-blue-400">WS 3 TAMAN</span>
                    </div>
                    <span class="text-xs font-medium text-gray-500 flex items-center gap-1"><span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> 11m Lalu</span>
                </div>
                <h3 class="text-white font-bold text-base mb-3 truncate">Water Station 3 Taman Kota</h3>
                <div class="flex items-center justify-between mt-auto">
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded-full bg-gray-700 flex items-center justify-center text-xs font-bold text-white">B</div>
                        <div class="flex flex-col">
                            <span class="text-xs font-semibold text-gray-300 flex items-center gap-1">BayuKinetic <svg class="w-3 h-3 text-blue-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></span>
                            <span class="text-[10px] text-gray-500">FujiFilm X-T4</span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between mt-4 border-t border-gray-700/50 pt-3">
                    <span class="text-[10px] font-bold text-gray-400 tracking-wider">210 FOTO BARU</span>
                    <button class="text-xs font-bold text-cyan-400 bg-cyan-500/10 px-3 py-1.5 rounded-lg border border-cyan-500/20 hover:bg-cyan-500/20 transition">Lihat Spot</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Gallery Section -->
    <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mb-24">
        <!-- Gallery Filters -->
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 mb-8">
            <div class="flex items-center gap-2 overflow-x-auto hide-scrollbar pb-2 lg:pb-0">
                <button class="px-5 py-2 rounded-full bg-orange-theme text-white text-sm font-bold whitespace-nowrap shadow-[0_0_15px_rgba(255,102,0,0.3)]">Semua Event</button>
                <button class="px-5 py-2 rounded-full bg-gray-800 border border-gray-700 text-gray-300 text-sm font-semibold whitespace-nowrap hover:bg-gray-700 hover:text-white transition">Banjarmasin Marathon 2024</button>
                <button class="px-5 py-2 rounded-full bg-gray-800 border border-gray-700 text-gray-300 text-sm font-semibold whitespace-nowrap hover:bg-gray-700 hover:text-white transition">CFD Sudirman</button>
                <button class="px-5 py-2 rounded-full bg-gray-800 border border-gray-700 text-gray-300 text-sm font-semibold whitespace-nowrap hover:bg-gray-700 hover:text-white transition">Pocari Sweat Run</button>
                <button class="px-5 py-2 rounded-full bg-gray-800 border border-gray-700 text-gray-300 text-sm font-semibold whitespace-nowrap hover:bg-gray-700 hover:text-white transition">Gravel Cycling Challenge</button>
            </div>
            
            <div class="flex items-center gap-3 shrink-0">
                <button class="flex items-center gap-2 px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-sm font-semibold text-gray-300 hover:bg-gray-700 hover:text-white transition">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    Pagi 06:00 - 09:00
                    <svg class="w-4 h-4 text-gray-500 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                <button class="flex items-center gap-2 px-4 py-2 bg-gray-800 border border-gray-700 rounded-lg text-sm font-semibold text-gray-300 hover:bg-gray-700 hover:text-white transition">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12"></path></svg>
                    Paling Cocok AI
                    <svg class="w-4 h-4 text-gray-500 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>

        <!-- Grid Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Photo Card 1 -->
            <div class="card-bg border border-gray-800 rounded-2xl overflow-hidden card-hover transition duration-300 group">
                <div class="relative aspect-[4/3] bg-gray-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1552674605-15c2145e9ca4?q=80&w=600&auto=format&fit=crop" alt="Runner" class="w-full h-full object-cover">
                    <!-- Watermark -->
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-40">
                        <span class="text-3xl font-black text-white/50 tracking-widest uppercase transform -rotate-12 select-none" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">TADAPATSNAP PREVIEW</span>
                    </div>
                    <!-- Overlays -->
                    <div class="absolute top-3 left-3 bg-gray-900/80 backdrop-blur-md px-2.5 py-1 rounded-md border border-gray-700/50">
                        <span class="text-xs font-bold text-white">BIB #1045</span>
                    </div>
                    <div class="absolute top-3 right-3 bg-green-500/20 backdrop-blur-md px-2 py-1 rounded-md border border-green-500/30 flex items-center gap-1">
                        <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-[10px] font-bold text-green-400">98% AI Match</span>
                    </div>
                    <div class="absolute bottom-3 right-3">
                        <button class="w-8 h-8 rounded-full bg-gray-900/60 backdrop-blur-md flex items-center justify-center border border-gray-700/50 text-gray-400 hover:text-red-500 hover:bg-gray-800 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </button>
                    </div>
                </div>
                
                <div class="p-4">
                    <div class="flex flex-wrap gap-1.5 mb-3">
                        <span class="text-[10px] font-medium text-gray-400 bg-gray-800 px-2 py-1 rounded-md">Baju: Navy Biru</span>
                        <span class="text-[10px] font-medium text-gray-400 bg-gray-800 px-2 py-1 rounded-md">Headband Hitam</span>
                        <span class="text-[10px] font-medium text-gray-500 bg-transparent border border-gray-700 px-2 py-1 rounded-md">1/400s - f/2.8</span>
                    </div>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-gray-700 flex items-center justify-center text-xs font-bold text-white shrink-0">RL</div>
                            <div class="flex flex-col overflow-hidden">
                                <span class="text-xs font-semibold text-gray-200 flex items-center gap-1 truncate">RianLesmana <svg class="w-3 h-3 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></span>
                                <span class="text-[10px] text-gray-500 truncate">Banjarmasin Marathon</span>
                            </div>
                        </div>
                        <div class="text-right shrink-0">
                            <p class="text-base font-bold text-white">Rp 15.000</p>
                            <p class="text-[9px] font-bold text-cyan-theme uppercase">Bebas Watermark</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-2">
                        <button class="bg-gray-800 hover:bg-gray-700 text-gray-300 font-semibold text-xs py-2.5 rounded-lg transition border border-gray-700">Preview Detail</button>
                        <button class="bg-orange-theme hover:bg-orange-theme-dark text-white font-semibold text-xs py-2.5 rounded-lg transition flex items-center justify-center gap-1 shadow-[0_0_10px_rgba(255,102,0,0.2)]">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg> Keranjang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Photo Card 2 -->
            <div class="card-bg border border-gray-800 rounded-2xl overflow-hidden card-hover transition duration-300 group">
                <div class="relative aspect-[4/3] bg-gray-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?q=80&w=600&auto=format&fit=crop" alt="Runner" class="w-full h-full object-cover">
                    <!-- Watermark -->
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-40">
                        <span class="text-3xl font-black text-white/50 tracking-widest uppercase transform -rotate-12 select-none" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">TADAPATSNAP PREVIEW</span>
                    </div>
                    <!-- Overlays -->
                    <div class="absolute top-3 left-3 bg-gray-900/80 backdrop-blur-md px-2.5 py-1 rounded-md border border-gray-700/50">
                        <span class="text-xs font-bold text-white">BIB #2388</span>
                    </div>
                    <div class="absolute top-3 right-3 bg-green-500/20 backdrop-blur-md px-2 py-1 rounded-md border border-green-500/30 flex items-center gap-1">
                        <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-[10px] font-bold text-green-400">96% AI Match</span>
                    </div>
                    <div class="absolute bottom-3 right-3">
                        <button class="w-8 h-8 rounded-full bg-gray-900/60 backdrop-blur-md flex items-center justify-center border border-gray-700/50 text-gray-400 hover:text-red-500 hover:bg-gray-800 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </button>
                    </div>
                </div>
                
                <div class="p-4">
                    <div class="flex flex-wrap gap-1.5 mb-3">
                        <span class="text-[10px] font-medium text-gray-400 bg-gray-800 px-2 py-1 rounded-md">Baju: Cerah Pink</span>
                        <span class="text-[10px] font-medium text-gray-400 bg-gray-800 px-2 py-1 rounded-md">Topi Putih</span>
                        <span class="text-[10px] font-medium text-gray-500 bg-transparent border border-gray-700 px-2 py-1 rounded-md">Nike Alphafly</span>
                    </div>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-orange-theme flex items-center justify-center text-[10px] font-bold text-white uppercase shrink-0">SS</div>
                            <div class="flex flex-col overflow-hidden">
                                <span class="text-xs font-semibold text-gray-200 flex items-center gap-1 truncate">SarahSportShots <span class="bg-orange-theme text-[8px] px-1 rounded-sm text-white">PRO</span></span>
                                <span class="text-[10px] text-gray-500 truncate">Banjarmasin Marathon</span>
                            </div>
                        </div>
                        <div class="text-right shrink-0">
                            <p class="text-base font-bold text-white">Rp 18.000</p>
                            <p class="text-[9px] font-bold text-cyan-theme uppercase">Bebas Watermark</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-2">
                        <button class="bg-gray-800 hover:bg-gray-700 text-gray-300 font-semibold text-xs py-2.5 rounded-lg transition border border-gray-700">Preview Detail</button>
                        <button class="bg-orange-theme hover:bg-orange-theme-dark text-white font-semibold text-xs py-2.5 rounded-lg transition flex items-center justify-center gap-1 shadow-[0_0_10px_rgba(255,102,0,0.2)]">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg> Keranjang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Photo Card 3 -->
            <div class="card-bg border border-gray-800 rounded-2xl overflow-hidden card-hover transition duration-300 group">
                <div class="relative aspect-[4/3] bg-gray-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=600&auto=format&fit=crop" alt="Cyclist" class="w-full h-full object-cover">
                    <!-- Watermark -->
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-40">
                        <span class="text-3xl font-black text-white/50 tracking-widest uppercase transform -rotate-12 select-none" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">TADAPATSNAP PREVIEW</span>
                    </div>
                    <!-- Overlays -->
                    <div class="absolute top-3 left-3 bg-gray-900/80 backdrop-blur-md px-2.5 py-1 rounded-md border border-gray-700/50">
                        <span class="text-xs font-bold text-white">PELOTON #32</span>
                    </div>
                    <div class="absolute top-3 right-3 bg-green-500/20 backdrop-blur-md px-2 py-1 rounded-md border border-green-500/30 flex items-center gap-1">
                        <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-[10px] font-bold text-green-400">94% AI Match</span>
                    </div>
                    <div class="absolute bottom-3 right-3">
                        <button class="w-8 h-8 rounded-full bg-gray-900/60 backdrop-blur-md flex items-center justify-center border border-gray-700/50 text-gray-400 hover:text-red-500 hover:bg-gray-800 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </button>
                    </div>
                </div>
                
                <div class="p-4">
                    <div class="flex flex-wrap gap-1.5 mb-3">
                        <span class="text-[10px] font-medium text-gray-400 bg-gray-800 px-2 py-1 rounded-md">Roadbike Hitam-Kuning</span>
                        <span class="text-[10px] font-medium text-gray-400 bg-gray-800 px-2 py-1 rounded-md">Jersey Neon</span>
                        <span class="text-[10px] font-medium text-gray-500 bg-transparent border border-gray-700 px-2 py-1 rounded-md">Kota Baru</span>
                    </div>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-gray-700 flex items-center justify-center text-xs font-bold text-white shrink-0">DG</div>
                            <div class="flex flex-col overflow-hidden">
                                <span class="text-xs font-semibold text-gray-200 flex items-center gap-1 truncate">Dika StreetSnap <svg class="w-3 h-3 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></span>
                                <span class="text-[10px] text-gray-500 truncate">CFD Sudirman Jakarta</span>
                            </div>
                        </div>
                        <div class="text-right shrink-0">
                            <p class="text-base font-bold text-white">Rp 20.000</p>
                            <p class="text-[9px] font-bold text-cyan-theme uppercase">Bebas Watermark</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-2">
                        <button class="bg-gray-800 hover:bg-gray-700 text-gray-300 font-semibold text-xs py-2.5 rounded-lg transition border border-gray-700">Preview Detail</button>
                        <button class="bg-orange-theme hover:bg-orange-theme-dark text-white font-semibold text-xs py-2.5 rounded-lg transition flex items-center justify-center gap-1 shadow-[0_0_10px_rgba(255,102,0,0.2)]">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg> Keranjang
                        </button>
                    </div>
                </div>
            </div>

            <!-- Photo Card 4 -->
            <div class="card-bg border border-gray-800 rounded-2xl overflow-hidden card-hover transition duration-300 group">
                <div class="relative aspect-[4/3] bg-gray-800 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1571008887538-b36bb32f4571?q=80&w=600&auto=format&fit=crop" alt="Runner" class="w-full h-full object-cover">
                    <!-- Watermark -->
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-40">
                        <span class="text-3xl font-black text-white/50 tracking-widest uppercase transform -rotate-12 select-none" style="text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">TADAPATSNAP PREVIEW</span>
                    </div>
                    <!-- Overlays -->
                    <div class="absolute top-3 left-3 bg-gray-900/80 backdrop-blur-md px-2.5 py-1 rounded-md border border-gray-700/50">
                        <span class="text-xs font-bold text-white">BIB #0412</span>
                    </div>
                    <div class="absolute top-3 right-3 bg-green-500/20 backdrop-blur-md px-2 py-1 rounded-md border border-green-500/30 flex items-center gap-1">
                        <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span class="text-[10px] font-bold text-green-400">98% AI Match</span>
                    </div>
                    <div class="absolute bottom-3 right-3">
                        <button class="w-8 h-8 rounded-full bg-gray-900/60 backdrop-blur-md flex items-center justify-center border border-gray-700/50 text-red-500 hover:bg-gray-800 transition">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                </div>
                
                <div class="p-4">
                    <div class="flex flex-wrap gap-1.5 mb-3">
                        <span class="text-[10px] font-medium text-gray-400 bg-gray-800 px-2 py-1 rounded-md">Singlet Merah-Putih</span>
                        <span class="text-[10px] font-medium text-gray-400 bg-gray-800 px-2 py-1 rounded-md">Medali Finisher</span>
                        <span class="text-[10px] font-medium text-gray-500 bg-transparent border border-gray-700 px-2 py-1 rounded-md">50mm - f/1.4</span>
                    </div>
                    
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-gray-700 flex items-center justify-center text-xs font-bold text-white shrink-0">RL</div>
                            <div class="flex flex-col overflow-hidden">
                                <span class="text-xs font-semibold text-gray-200 flex items-center gap-1 truncate">RianLesmana <svg class="w-3 h-3 text-blue-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg></span>
                                <span class="text-[10px] text-gray-500 truncate">Banjarmasin Marathon</span>
                            </div>
                        </div>
                        <div class="text-right shrink-0">
                            <p class="text-base font-bold text-white">Rp 15.000</p>
                            <p class="text-[9px] font-bold text-cyan-theme uppercase">Bebas Watermark</p>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-2">
                        <button class="bg-gray-800 hover:bg-gray-700 text-gray-300 font-semibold text-xs py-2.5 rounded-lg transition border border-gray-700">Preview Detail</button>
                        <button class="bg-orange-theme hover:bg-orange-theme-dark text-white font-semibold text-xs py-2.5 rounded-lg transition flex items-center justify-center gap-1 shadow-[0_0_10px_rgba(255,102,0,0.2)]">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg> Keranjang
                        </button>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- Load More -->
        <div class="mt-12 text-center flex flex-col items-center">
            <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-4">Menampilkan 8 dari 14.828 Foto Terindeks</p>
            <button class="flex items-center gap-2 text-sm font-semibold text-white bg-gray-800 border border-gray-700 px-6 py-3 rounded-xl hover:bg-gray-700 hover:border-gray-600 transition shadow-lg">
                Muat 24 Foto Berikutnya
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </button>
        </div>
    </div>

    <!-- Value Proposition Section -->
    <div class="max-w-[1200px] mx-auto px-4 sm:px-6 lg:px-8 mb-24 relative">
        <div class="absolute inset-0 bg-gray-800/30 rounded-3xl border border-gray-800 -z-10"></div>
        
        <div class="py-16 px-8 lg:px-12 text-center">
            <p class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-3">KENAPA TADAPATSNAP?</p>
            <h2 class="text-3xl md:text-4xl font-black text-white mb-12">Dirancang Khusus untuk Pelari & Komunitas Olahraga</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-left">
                <!-- Feature 1 -->
                <div class="bg-gray-900/50 p-6 rounded-2xl border border-gray-800">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3">1. AI Vision Auto-Search</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Tak perlu scroll puluhan album Google Drive atau ribuan foto tanpa nama. Cukup ketik nomor dada (BIB) atau warna pakaian, foto Anda langsung muncul dalam hitungan detik.
                    </p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-gray-900/50 p-6 rounded-2xl border border-gray-800">
                    <div class="w-12 h-12 rounded-xl bg-orange-500/10 border border-orange-500/20 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-orange-theme" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3">2. Bayar Bebas Ribet & Instan</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Scan cepat via QRIS, GoPay, OVO, atau ShopeePay. Seketika status lunas, file resolusi penuh (High-Res 24MP+) langsung terunduh otomatis tanpa watermark.
                    </p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-gray-900/50 p-6 rounded-2xl border border-gray-800">
                    <div class="w-12 h-12 rounded-xl bg-green-500/10 border border-green-500/20 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-3">3. Apresiasi Kreator Lokal</h3>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        Setiap pembelian foto langsung mengalir ke dompet digital fotografer jalanan. Anda juga bisa menambahkan tip 'Traktir Kopi' untuk menyemangati mereka hunting pagi.
                    </p>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Floating Checkout Bottom Bar -->
    <div class="fixed bottom-4 sm:bottom-6 left-1/2 -translate-x-1/2 z-50 flex flex-wrap sm:flex-nowrap justify-between items-center gap-3 sm:gap-4 bg-gray-800/95 backdrop-blur-xl px-4 sm:px-6 py-3 sm:py-4 rounded-2xl border border-gray-700 shadow-[0_10px_40px_rgba(0,0,0,0.5)] w-[calc(100%-2rem)] max-w-3xl">
        <div class="flex items-center gap-3 w-full sm:w-auto sm:pr-4 sm:border-r border-gray-700">
            <div class="relative w-10 h-10 rounded-xl bg-orange-500/20 border border-orange-500/30 flex items-center justify-center">
                <svg class="w-5 h-5 text-orange-theme" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                <span class="absolute -top-2 -right-2 bg-orange-theme text-white text-[10px] font-bold w-5 h-5 flex items-center justify-center rounded-full border-2 border-gray-800">2</span>
            </div>
            <div>
                <p class="text-[10px] font-bold text-gray-400 uppercase tracking-wider mb-0.5">KERANJANG AKTIF</p>
                <p class="text-white font-bold text-sm leading-none">Rp 33.000</p>
            </div>
        </div>
        <div class="flex items-center gap-2 w-full sm:w-auto justify-between sm:justify-end">
            <button class="flex-grow sm:flex-grow-0 bg-orange-theme hover:bg-orange-theme-dark text-white font-bold text-sm px-6 py-2.5 rounded-xl transition shadow-[0_0_15px_rgba(255,102,0,0.3)] flex items-center justify-center gap-2">
                Bayar / Traktir <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
            <button class="shrink-0 w-10 h-10 sm:w-8 sm:h-8 rounded-full bg-gray-700/50 hover:bg-gray-600 flex items-center justify-center text-gray-400 hover:text-white transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>
    </div>

</body>
</html>
