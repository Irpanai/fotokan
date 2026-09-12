<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fotografer - JEPRETCFD</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { background-color: #FAFAFA; color: #111827; font-family: 'Inter', sans-serif; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="antialiased flex flex-col min-h-screen relative text-gray-900 bg-[#FAFAFA]">
    
    <!-- Navbar -->
    <nav class="bg-white sticky top-0 z-50 border-b border-gray-100">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-2 cursor-pointer shrink-0">
                    <span class="font-black text-xl tracking-tighter text-black flex items-center gap-1">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"></path><circle cx="12" cy="13" r="3"></circle></svg>
                        JEPRETCFD
                    </span>
                </a>

                <!-- Center Links -->
                <div class="hidden md:flex items-center space-x-6 ml-10">
                    <a href="#" class="text-sm font-semibold text-black">Explore</a>
                    <a href="{{ route('photographers.index') }}" class="text-sm font-medium text-gray-500 hover:text-black transition">Photographers</a>
                    <a href="#" class="text-sm font-medium text-gray-500 hover:text-black transition">Categories</a>
                    <a href="#" class="text-sm font-medium text-gray-500 hover:text-black transition">How It Works</a>
                </div>

                <!-- Right Actions -->
                <div class="flex items-center space-x-4 ml-auto">
                    <!-- Search Icon -->
                    <button class="text-gray-400 hover:text-black transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </button>

                    <a href="#" class="hidden lg:block text-xs font-semibold text-gray-500 hover:text-black transition">For Photographers</a>
                    
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hidden sm:block text-xs font-semibold text-gray-700 hover:text-black transition">Dashboard</a>
                        <a href="{{ url('/dashboard') }}" class="w-8 h-8 rounded-full overflow-hidden border border-gray-200">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=000&color=fff" alt="Avatar" class="w-full h-full object-cover">
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="hidden sm:block text-xs font-semibold text-gray-700 hover:text-black transition">Photographer Login</a>
                        <a href="{{ route('register') }}" class="bg-black text-white text-xs font-bold px-4 py-2 rounded-lg hover:bg-gray-800 transition shadow-sm">
                            Mulai Menjual
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pb-24">
        <!-- Header Section -->
        <div class="bg-white border-b border-gray-100 pt-10 pb-8">
            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Breadcrumb -->
                <div class="flex items-center gap-1.5 mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-gray-300"></span>
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">DIRECTORY • PHOTOGRAPHERS</span>
                </div>

                <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-8">
                    <div class="max-w-3xl">
                        <h1 class="text-3xl md:text-5xl font-black text-black leading-tight mb-4 tracking-tight">
                            Temukan fotografer yang sesuai dengan momen Anda.
                        </h1>
                        <p class="text-sm md:text-base text-gray-500 font-medium leading-relaxed max-w-2xl">
                            Jelajahi fotografer dari berbagai kategori, lokasi, dan gaya fotografi. Lihat karya terbaik mereka dan temukan arsip foto yang Anda cari.
                        </p>
                    </div>
                    <div class="text-right shrink-0 hidden lg:block">
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">INDEX: 382 CREATORS / VERIFIED EDITORIAL</span>
                    </div>
                </div>

                <!-- Search & Filters -->
                <div class="flex flex-col md:flex-row gap-3 mb-6">
                    <!-- Search Input -->
                    <div class="relative flex-grow">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="text" placeholder="Cari nama fotografer, studio, lokasi, atau kategori..." class="w-full bg-white border border-gray-200 text-gray-900 text-sm rounded-lg pl-9 pr-4 py-2.5 focus:ring-1 focus:ring-black focus:border-black transition placeholder-gray-400 font-medium">
                    </div>
                    
                    <!-- Filters -->
                    <div class="flex flex-wrap md:flex-nowrap gap-3">
                        <select class="bg-white border border-gray-200 text-gray-700 text-xs font-semibold rounded-lg px-3 py-2.5 focus:ring-1 focus:ring-black focus:border-black transition cursor-pointer appearance-none min-w-[120px]">
                            <option>Lokasi: Semua Kota</option>
                            <option>Jakarta</option>
                            <option>Bandung</option>
                            <option>Surabaya</option>
                        </select>
                        <select class="bg-white border border-gray-200 text-gray-700 text-xs font-semibold rounded-lg px-3 py-2.5 focus:ring-1 focus:ring-black focus:border-black transition cursor-pointer appearance-none min-w-[120px]">
                            <option>Kategori: Semua</option>
                            <option>Running</option>
                            <option>Cycling</option>
                            <option>Events</option>
                        </select>
                        <select class="bg-white border border-gray-200 text-gray-700 text-xs font-semibold rounded-lg px-3 py-2.5 focus:ring-1 focus:ring-black focus:border-black transition cursor-pointer appearance-none min-w-[120px]">
                            <option>Spesialisasi: Semua</option>
                            <option>Action</option>
                            <option>Portrait</option>
                        </select>
                        <select class="bg-white border border-gray-200 text-gray-700 text-xs font-semibold rounded-lg px-3 py-2.5 focus:ring-1 focus:ring-black focus:border-black transition cursor-pointer appearance-none min-w-[120px]">
                            <option>Urutkan: Terpopuler</option>
                            <option>Terbaru</option>
                            <option>Rating Tertinggi</option>
                        </select>
                    </div>
                </div>

                <!-- Tags -->
                <div class="flex flex-wrap items-center gap-2 pb-2">
                    <button class="px-4 py-1.5 bg-black text-white rounded-full text-xs font-bold shadow-sm">Semua (382)</button>
                    <button class="px-4 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-full text-xs font-semibold hover:border-black hover:text-black transition">Car Free Day</button>
                    <button class="px-4 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-full text-xs font-semibold hover:border-black hover:text-black transition">Running</button>
                    <button class="px-4 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-full text-xs font-semibold hover:border-black hover:text-black transition">Sport & Action</button>
                    <button class="px-4 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-full text-xs font-semibold hover:border-black hover:text-black transition">Urban Street</button>
                    <button class="px-4 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-full text-xs font-semibold hover:border-black hover:text-black transition">Street</button>
                    <button class="px-4 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-full text-xs font-semibold hover:border-black hover:text-black transition">Lifestyle</button>
                    <button class="px-4 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-full text-xs font-semibold hover:border-black hover:text-black transition">Community</button>
                    <button class="px-4 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-full text-xs font-semibold hover:border-black hover:text-black transition">Marathon</button>
                    
                    <div class="ml-auto hidden md:flex items-center gap-1.5 text-[9px] font-bold text-gray-400 uppercase tracking-widest mt-2 lg:mt-0">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                        LIVE ARCHIVE UPDATE
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 1: Featured Archive -->
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mt-12 mb-16">
            <div class="flex justify-between items-end border-b border-gray-200 pb-3 mb-6">
                <div class="flex items-baseline gap-2">
                    <span class="text-[10px] font-bold text-gray-400">01 / FEATURED ARCHIVE</span>
                    <h2 class="text-xl font-bold text-black">Photographer Pilihan</h2>
                </div>
                <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest hidden sm:block">KURASI RESMI JEPRETCFD</span>
            </div>

            <!-- Featured Cards Horizontal Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Featured Card 1 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-4 hover:shadow-lg transition cursor-pointer group flex flex-col">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center font-bold text-xs shrink-0">DV</div>
                            <div>
                                <h3 class="text-sm font-bold text-black flex items-center gap-1">
                                    Dwi Visual 
                                    <svg class="w-3.5 h-3.5 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                </h3>
                                <p class="text-[10px] text-gray-500 font-medium">Banjarmasin, Indonesia</p>
                            </div>
                        </div>
                        <span class="bg-green-100 text-green-700 text-[9px] font-bold px-2 py-1 rounded-md uppercase tracking-wider">TOP CREATOR</span>
                    </div>
                    
                    <div class="relative w-full aspect-video rounded-xl overflow-hidden mb-4 bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1552674605-15c2145e9ca4?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-700 grayscale" alt="Portfolio">
                        <div class="absolute inset-0 bg-black/10"></div>
                    </div>
                    
                    <div class="mt-auto flex justify-between items-center pt-3 border-t border-gray-100">
                        <div class="text-[10px] font-medium text-gray-500">
                            <span class="font-bold text-black">1.248</span> Foto • <span class="font-bold text-black">186</span> Terjual
                        </div>
                        <a href="{{ route('photographers.show', 1) }}" class="text-[10px] font-bold text-black flex items-center gap-1 hover:underline">
                            Lihat Profil <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Featured Card 2 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-4 hover:shadow-lg transition cursor-pointer group flex flex-col">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gray-100 text-black flex items-center justify-center font-bold text-xs shrink-0 border border-gray-200">AL</div>
                            <div>
                                <h3 class="text-sm font-bold text-black flex items-center gap-1">
                                    Aris Lens Jakarta 
                                    <svg class="w-3.5 h-3.5 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                </h3>
                                <p class="text-[10px] text-gray-500 font-medium">Jakarta Selatan, Indonesia</p>
                            </div>
                        </div>
                        <span class="bg-blue-50 text-blue-600 text-[9px] font-bold px-2 py-1 rounded-md uppercase tracking-wider border border-blue-100">EDITOR PICK</span>
                    </div>
                    
                    <div class="relative w-full aspect-video rounded-xl overflow-hidden mb-4 bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-700 grayscale" alt="Portfolio">
                        <div class="absolute inset-0 bg-black/10"></div>
                    </div>
                    
                    <div class="mt-auto flex justify-between items-center pt-3 border-t border-gray-100">
                        <div class="text-[10px] font-medium text-gray-500">
                            <span class="font-bold text-black">2.140</span> Foto • <span class="font-bold text-black">310</span> Terjual
                        </div>
                        <a href="{{ route('photographers.show', 1) }}" class="text-[10px] font-bold text-black flex items-center gap-1 hover:underline">
                            Lihat Profil <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Featured Card 3 -->
                <div class="bg-white border border-gray-200 rounded-2xl p-4 hover:shadow-lg transition cursor-pointer group flex flex-col hidden lg:flex">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-gray-50 text-black flex items-center justify-center font-bold text-xs shrink-0 border border-gray-200">BS</div>
                            <div>
                                <h3 class="text-sm font-bold text-black flex items-center gap-1">
                                    Bagas Street BDG 
                                    <svg class="w-3.5 h-3.5 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                </h3>
                                <p class="text-[10px] text-gray-500 font-medium">Bandung, Indonesia</p>
                            </div>
                        </div>
                        <span class="bg-gray-100 text-gray-600 text-[9px] font-bold px-2 py-1 rounded-md uppercase tracking-wider">URBAN STYLE</span>
                    </div>
                    
                    <div class="relative w-full aspect-video rounded-xl overflow-hidden mb-4 bg-gray-100">
                        <img src="https://images.unsplash.com/photo-1571008887538-b36bb32f4571?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-700 grayscale" alt="Portfolio">
                        <div class="absolute inset-0 bg-black/10"></div>
                    </div>
                    
                    <div class="mt-auto flex justify-between items-center pt-3 border-t border-gray-100">
                        <div class="text-[10px] font-medium text-gray-500">
                            <span class="font-bold text-black">890</span> Foto • <span class="font-bold text-black">94</span> Terjual
                        </div>
                        <a href="{{ route('photographers.show', 1) }}" class="text-[10px] font-bold text-black flex items-center gap-1 hover:underline">
                            Lihat Profil <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Section 2: All Photographers -->
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mb-12">
            <div class="flex justify-between items-end border-b border-gray-200 pb-3 mb-6">
                <div class="flex items-baseline gap-2">
                    <span class="text-[10px] font-bold text-gray-400">02 / ROSTER</span>
                    <h2 class="text-xl font-bold text-black">Semua Fotografer</h2>
                </div>
                <span class="text-[9px] font-bold text-gray-400 hidden sm:block">Menampilkan 1 - 6 dari 382 fotografer terdaftar</span>
            </div>

            <!-- Photographers Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Roster Card 1 -->
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition cursor-pointer group flex flex-col">
                    <div class="relative w-full aspect-[4/3] bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552674605-15c2145e9ca4?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-700 grayscale" alt="Portfolio">
                        
                        <!-- Top left tag -->
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-black text-[9px] font-bold px-2 py-1 rounded shadow-sm">
                            CFD BANJARBARU
                        </div>
                        
                        <!-- Bottom right tag -->
                        <div class="absolute bottom-3 right-3 bg-black/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-1 rounded shadow-sm">
                            1.248 ASSETS
                        </div>
                    </div>
                    
                    <div class="p-5 flex-grow flex flex-col">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-sm font-bold text-black flex items-center gap-1 mb-0.5">
                                    Dwi Visual 
                                    <svg class="w-3.5 h-3.5 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                </h3>
                                <p class="text-[10px] text-gray-400 font-medium">Dwi Saputra Visuals</p>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-black text-white flex items-center justify-center font-bold text-[10px] shrink-0 shadow-sm">D</div>
                        </div>

                        <div class="mb-4 space-y-1.5">
                            <div class="flex items-center gap-1.5 text-[10px] text-gray-500">
                                <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Banjarbaru, Indonesia
                            </div>
                            <div class="flex items-center gap-1.5 text-[10px] text-gray-500 uppercase">
                                <span class="font-semibold text-gray-400">Spesialisasi:</span> Street • Running • Event
                            </div>
                        </div>
                        
                        <div class="mt-auto pt-4 border-t border-gray-100 flex justify-between items-center">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 tracking-widest uppercase mb-0.5">Statistik</p>
                                <p class="text-[10px] font-medium text-gray-600">
                                    <span class="font-bold text-black">186</span> Terjual • <span class="font-bold text-black">4.9</span> Rating
                                </p>
                            </div>
                            <a href="{{ route('photographers.show', 1) }}" class="bg-gray-50 hover:bg-gray-100 border border-gray-200 text-black text-[10px] font-bold px-3 py-1.5 rounded-lg transition flex items-center gap-1">
                                Lihat Profil <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Roster Card 2 -->
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition cursor-pointer group flex flex-col">
                    <div class="relative w-full aspect-[4/3] bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-700 grayscale" alt="Portfolio">
                        
                        <!-- Top left tag -->
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-black text-[9px] font-bold px-2 py-1 rounded shadow-sm">
                            CFD SUDIRMAN
                        </div>
                        
                        <!-- Bottom right tag -->
                        <div class="absolute bottom-3 right-3 bg-black/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-1 rounded shadow-sm">
                            2.140 ASSETS
                        </div>
                    </div>
                    
                    <div class="p-5 flex-grow flex flex-col">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-sm font-bold text-black flex items-center gap-1 mb-0.5">
                                    Aris Lens Jakarta 
                                    <svg class="w-3.5 h-3.5 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                </h3>
                                <p class="text-[10px] text-gray-400 font-medium">Aris Setiawan Studio</p>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-gray-100 text-black border border-gray-200 flex items-center justify-center font-bold text-[10px] shrink-0 shadow-sm">A</div>
                        </div>

                        <div class="mb-4 space-y-1.5">
                            <div class="flex items-center gap-1.5 text-[10px] text-gray-500">
                                <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Jakarta Selatan, Indonesia
                            </div>
                            <div class="flex items-center gap-1.5 text-[10px] text-gray-500 uppercase">
                                <span class="font-semibold text-gray-400">Spesialisasi:</span> Cycling • Marathon • Urban Sport
                            </div>
                        </div>
                        
                        <div class="mt-auto pt-4 border-t border-gray-100 flex justify-between items-center">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 tracking-widest uppercase mb-0.5">Statistik</p>
                                <p class="text-[10px] font-medium text-gray-600">
                                    <span class="font-bold text-black">310</span> Terjual • <span class="font-bold text-black">5.0</span> Rating
                                </p>
                            </div>
                            <a href="{{ route('photographers.show', 1) }}" class="bg-gray-50 hover:bg-gray-100 border border-gray-200 text-black text-[10px] font-bold px-3 py-1.5 rounded-lg transition flex items-center gap-1">
                                Lihat Profil <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Roster Card 3 -->
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition cursor-pointer group flex flex-col">
                    <div class="relative w-full aspect-[4/3] bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1571008887538-b36bb32f4571?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-700 grayscale" alt="Portfolio">
                        
                        <!-- Top left tag -->
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-black text-[9px] font-bold px-2 py-1 rounded shadow-sm">
                            URBAN BANDUNG
                        </div>
                        
                        <!-- Bottom right tag -->
                        <div class="absolute bottom-3 right-3 bg-black/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-1 rounded shadow-sm">
                            890 ASSETS
                        </div>
                    </div>
                    
                    <div class="p-5 flex-grow flex flex-col">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-sm font-bold text-black flex items-center gap-1 mb-0.5">
                                    Bagas Street BDG 
                                    <svg class="w-3.5 h-3.5 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                </h3>
                                <p class="text-[10px] text-gray-400 font-medium">Bagas Pratama Visual</p>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-gray-100 text-black border border-gray-200 flex items-center justify-center font-bold text-[10px] shrink-0 shadow-sm">B</div>
                        </div>

                        <div class="mb-4 space-y-1.5">
                            <div class="flex items-center gap-1.5 text-[10px] text-gray-500">
                                <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Bandung, Indonesia
                            </div>
                            <div class="flex items-center gap-1.5 text-[10px] text-gray-500 uppercase">
                                <span class="font-semibold text-gray-400">Spesialisasi:</span> Streetstyle • Action • Community
                            </div>
                        </div>
                        
                        <div class="mt-auto pt-4 border-t border-gray-100 flex justify-between items-center">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 tracking-widest uppercase mb-0.5">Statistik</p>
                                <p class="text-[10px] font-medium text-gray-600">
                                    <span class="font-bold text-black">94</span> Terjual • <span class="font-bold text-black">4.8</span> Rating
                                </p>
                            </div>
                            <a href="{{ route('photographers.show', 1) }}" class="bg-gray-50 hover:bg-gray-100 border border-gray-200 text-black text-[10px] font-bold px-3 py-1.5 rounded-lg transition flex items-center gap-1">
                                Lihat Profil <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Roster Card 4 -->
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition cursor-pointer group flex flex-col">
                    <div class="relative w-full aspect-[4/3] bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-700 grayscale" alt="Portfolio">
                        
                        <!-- Top left tag -->
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-black text-[9px] font-bold px-2 py-1 rounded shadow-sm">
                            CFD DARMO SBY
                        </div>
                        
                        <!-- Bottom right tag -->
                        <div class="absolute bottom-3 right-3 bg-black/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-1 rounded shadow-sm">
                            1.420 ASSETS
                        </div>
                    </div>
                    
                    <div class="p-5 flex-grow flex flex-col">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-sm font-bold text-black flex items-center gap-1 mb-0.5">
                                    Siti Photo & Co. 
                                    <svg class="w-3.5 h-3.5 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                </h3>
                                <p class="text-[10px] text-gray-400 font-medium">Siti Rahma Kreatindo</p>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-gray-100 text-black border border-gray-200 flex items-center justify-center font-bold text-[10px] shrink-0 shadow-sm">S</div>
                        </div>

                        <div class="mb-4 space-y-1.5">
                            <div class="flex items-center gap-1.5 text-[10px] text-gray-500">
                                <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Surabaya, Indonesia
                            </div>
                            <div class="flex items-center gap-1.5 text-[10px] text-gray-500 uppercase">
                                <span class="font-semibold text-gray-400">Spesialisasi:</span> Lifestyle • Family Walk • Car Free Day
                            </div>
                        </div>
                        
                        <div class="mt-auto pt-4 border-t border-gray-100 flex justify-between items-center">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 tracking-widest uppercase mb-0.5">Statistik</p>
                                <p class="text-[10px] font-medium text-gray-600">
                                    <span class="font-bold text-black">215</span> Terjual • <span class="font-bold text-black">4.9</span> Rating
                                </p>
                            </div>
                            <a href="{{ route('photographers.show', 1) }}" class="bg-gray-50 hover:bg-gray-100 border border-gray-200 text-black text-[10px] font-bold px-3 py-1.5 rounded-lg transition flex items-center gap-1">
                                Lihat Profil <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Roster Card 5 -->
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition cursor-pointer group flex flex-col">
                    <div class="relative w-full aspect-[4/3] bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552674605-15c2145e9ca4?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-700 grayscale" alt="Portfolio">
                        
                        <!-- Top left tag -->
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-black text-[9px] font-bold px-2 py-1 rounded shadow-sm">
                            TRACK & TRAIL
                        </div>
                        
                        <!-- Bottom right tag -->
                        <div class="absolute bottom-3 right-3 bg-black/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-1 rounded shadow-sm">
                            670 ASSETS
                        </div>
                    </div>
                    
                    <div class="p-5 flex-grow flex flex-col">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-sm font-bold text-black flex items-center gap-1 mb-0.5">
                                    Lensa Borneo 
                                    <svg class="w-3.5 h-3.5 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                </h3>
                                <p class="text-[10px] text-gray-400 font-medium">Borneo Athletics Doc</p>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-gray-100 text-black border border-gray-200 flex items-center justify-center font-bold text-[10px] shrink-0 shadow-sm">L</div>
                        </div>

                        <div class="mb-4 space-y-1.5">
                            <div class="flex items-center gap-1.5 text-[10px] text-gray-500">
                                <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Banjarmasin, Indonesia
                            </div>
                            <div class="flex items-center gap-1.5 text-[10px] text-gray-500 uppercase">
                                <span class="font-semibold text-gray-400">Spesialisasi:</span> Track Athletics • Trail Run
                            </div>
                        </div>
                        
                        <div class="mt-auto pt-4 border-t border-gray-100 flex justify-between items-center">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 tracking-widest uppercase mb-0.5">Statistik</p>
                                <p class="text-[10px] font-medium text-gray-600">
                                    <span class="font-bold text-black">88</span> Terjual • <span class="font-bold text-black">4.7</span> Rating
                                </p>
                            </div>
                            <a href="{{ route('photographers.show', 1) }}" class="bg-gray-50 hover:bg-gray-100 border border-gray-200 text-black text-[10px] font-bold px-3 py-1.5 rounded-lg transition flex items-center gap-1">
                                Lihat Profil <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Roster Card 6 -->
                <div class="bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition cursor-pointer group flex flex-col">
                    <div class="relative w-full aspect-[4/3] bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1571008887538-b36bb32f4571?q=80&w=800&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-700 grayscale" alt="Portfolio">
                        
                        <!-- Top left tag -->
                        <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-black text-[9px] font-bold px-2 py-1 rounded shadow-sm">
                            CFD MALIOBORO
                        </div>
                        
                        <!-- Bottom right tag -->
                        <div class="absolute bottom-3 right-3 bg-black/80 backdrop-blur-sm text-white text-[9px] font-bold px-2 py-1 rounded shadow-sm">
                            1.105 ASSETS
                        </div>
                    </div>
                    
                    <div class="p-5 flex-grow flex flex-col">
                        <div class="flex justify-between items-start mb-3">
                            <div>
                                <h3 class="text-sm font-bold text-black flex items-center gap-1 mb-0.5">
                                    Arah Visual 
                                    <svg class="w-3.5 h-3.5 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                </h3>
                                <p class="text-[10px] text-gray-400 font-medium">Arah Kolektif Media</p>
                            </div>
                            <div class="w-8 h-8 rounded-full bg-gray-100 text-black border border-gray-200 flex items-center justify-center font-bold text-[10px] shrink-0 shadow-sm">V</div>
                        </div>

                        <div class="mb-4 space-y-1.5">
                            <div class="flex items-center gap-1.5 text-[10px] text-gray-500">
                                <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Yogyakarta, Indonesia
                            </div>
                            <div class="flex items-center gap-1.5 text-[10px] text-gray-500 uppercase">
                                <span class="font-semibold text-gray-400">Spesialisasi:</span> Roller Sports • Urban Culture
                            </div>
                        </div>
                        
                        <div class="mt-auto pt-4 border-t border-gray-100 flex justify-between items-center">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 tracking-widest uppercase mb-0.5">Statistik</p>
                                <p class="text-[10px] font-medium text-gray-600">
                                    <span class="font-bold text-black">142</span> Terjual • <span class="font-bold text-black">4.9</span> Rating
                                </p>
                            </div>
                            <a href="{{ route('photographers.show', 1) }}" class="bg-gray-50 hover:bg-gray-100 border border-gray-200 text-black text-[10px] font-bold px-3 py-1.5 rounded-lg transition flex items-center gap-1">
                                Lihat Profil <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Bottom Not-Found Info -->
            <div class="bg-white border border-gray-200 rounded-xl p-4 mt-8 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 rounded-full bg-gray-50 border border-gray-200 flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-black mb-0.5">Fotografer atau studio yang Anda cari belum terlihat?</p>
                        <p class="text-[10px] text-gray-500">Coba perluas kata pencarian, hapus filter kota, atau telusuri berdasarkan tag event Car Free Day terdekat.</p>
                    </div>
                </div>
                <div class="flex items-center gap-3 shrink-0 w-full md:w-auto">
                    <button class="flex-1 md:flex-none text-xs font-bold text-gray-600 hover:text-black py-2 px-4 transition text-center">Reset Semua Filter</button>
                    <button class="flex-1 md:flex-none bg-black text-white text-xs font-bold py-2 px-4 rounded-lg hover:bg-gray-800 transition text-center shadow-sm">Gabung Sebagai Fotografer</button>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-between items-center mt-10">
                <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest hidden sm:block">PAGINATION: 01 — 64 PAGES</span>
                
                <div class="flex items-center gap-1.5 ml-auto">
                    <button class="w-8 h-8 rounded-md bg-white border border-gray-200 flex items-center justify-center text-gray-400 hover:bg-gray-50 transition" disabled>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button class="w-8 h-8 rounded-md bg-black text-white font-bold text-xs flex items-center justify-center shadow-sm">1</button>
                    <button class="w-8 h-8 rounded-md bg-white border border-gray-200 text-gray-700 font-semibold text-xs flex items-center justify-center hover:border-black transition">2</button>
                    <button class="w-8 h-8 rounded-md bg-white border border-gray-200 text-gray-700 font-semibold text-xs flex items-center justify-center hover:border-black transition">3</button>
                    <span class="w-6 text-center text-gray-400 text-xs">...</span>
                    <button class="w-8 h-8 rounded-md bg-white border border-gray-200 text-gray-700 font-semibold text-xs flex items-center justify-center hover:border-black transition">64</button>
                    <button class="h-8 px-3 rounded-md bg-white border border-gray-200 flex items-center justify-center text-gray-700 font-semibold text-xs hover:border-black transition gap-1">
                        Berikutnya <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-200 bg-white py-8 mt-auto relative z-10">
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                <!-- Logo & Copyright -->
                <div class="flex items-center gap-2">
                    <span class="font-black text-sm tracking-tighter text-black flex items-center gap-1">
                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"></path><circle cx="12" cy="13" r="3"></circle></svg>
                        JEPRETCFD
                    </span>
                </div>

                <!-- Links -->
                <div class="flex flex-wrap justify-center gap-4 md:gap-6 text-xs font-medium text-gray-500">
                    <a href="#" class="hover:text-gray-900 transition">Explore</a>
                    <a href="#" class="hover:text-gray-900 transition">Community Guidelines</a>
                    <a href="#" class="hover:text-gray-900 transition">Licensing Terms</a>
                    <a href="#" class="hover:text-gray-900 transition">Privacy Policy</a>
                    <a href="#" class="hover:text-gray-900 transition">Terms of Service</a>
                </div>
            </div>
            
            <div class="mt-6 pt-6 border-t border-gray-100 flex flex-col md:flex-row justify-between items-center gap-4 text-[10px] text-gray-400">
                <p>&copy; 2026 JEPRETCFD Editorial Photography Archive. All rights reserved.</p>
                <p>Built for exclusive and & editorial photographic curation.</p>
            </div>
        </div>
    </footer>
</body>
</html>
