<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JEPRET CFD - Temukan fotomu. Miliki momennya.</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body { background-color: #FFFFFF; color: #111827; font-family: 'Inter', sans-serif; }
        .text-brand { color: #000000; }
        .bg-brand { background-color: #000000; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="antialiased overflow-x-hidden relative text-gray-900">

    <!-- Navbar -->
    <x-navbar />

    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24 flex flex-col lg:flex-row gap-12 items-center">
        <!-- Left Content -->
        <div class="flex-1 text-center lg:text-left">
            <h1 class="text-5xl md:text-[4rem] font-black text-black leading-[1.1] mb-6 tracking-tight">
                Temukan fotomu.<br/>
                <span class="text-gray-400 italic font-light">Miliki momennya.</span>
            </h1>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-medium">
                Jepret CFD adalah platform bagi para fotografer event dan lintasan. Temukan gambar terbaikmu, unduh file beresolusi tinggi, atau jadilah pahlawan tanpa compress.
            </p>

            <!-- Search Box -->
            <div class="bg-white border border-gray-200 p-2 rounded-2xl shadow-sm flex flex-col md:flex-row items-center gap-2 max-w-2xl mx-auto lg:mx-0 relative z-10">
                <div class="relative flex-grow w-full flex items-center">
                    <div class="pl-4">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" placeholder="Cari berdasarkan lokasi, kategori, atau nomor dada..." class="w-full bg-transparent border-none text-gray-900 pl-3 pr-4 py-3.5 focus:ring-0 placeholder-gray-400 text-sm font-medium">
                </div>
                
                <button class="w-full md:w-auto bg-black hover:bg-gray-800 text-white font-semibold px-8 py-3.5 rounded-xl transition flex items-center justify-center gap-2 text-sm whitespace-nowrap">
                    Cari <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>

            <!-- Suggestion Pills -->
            <div class="mt-6 flex flex-wrap items-center justify-center lg:justify-start gap-2">
                <span class="text-xs font-semibold text-gray-400 mr-2">Paling dicari:</span>
                <a href="#" class="px-3 py-1.5 rounded-full border border-gray-200 text-xs font-semibold text-gray-600 hover:border-black hover:text-black transition">Lari</a>
                <a href="#" class="px-3 py-1.5 rounded-full border border-gray-200 text-xs font-semibold text-gray-600 hover:border-black hover:text-black transition">CFD Sudirman</a>
                <a href="#" class="px-3 py-1.5 rounded-full border border-gray-200 text-xs font-semibold text-gray-600 hover:border-black hover:text-black transition">Gravel Bike</a>
                <a href="#" class="px-3 py-1.5 rounded-full border border-gray-200 text-xs font-semibold text-gray-600 hover:border-black hover:text-black transition">Pocari Sweat</a>
                <a href="#" class="px-3 py-1.5 rounded-full border border-gray-200 text-xs font-semibold text-gray-600 hover:border-black hover:text-black transition">Half Marathon</a>
            </div>
        </div>

        <!-- Right Stats Card -->
        <div class="w-full lg:w-[400px] shrink-0">
            <div class="bg-white border border-gray-200 rounded-2xl shadow-xl shadow-gray-200/50 p-6 relative overflow-hidden">
                <!-- Header -->
                <div class="flex justify-between items-center mb-6 border-b border-gray-100 pb-4">
                    <div>
                        <h3 class="font-black text-lg text-black">JEPRET</h3>
                        <p class="text-xs font-medium text-gray-500 uppercase tracking-widest mt-1">Live Stats</p>
                    </div>
                    <div class="bg-green-50 text-green-700 px-3 py-1 rounded-full text-xs font-bold flex items-center gap-1.5 border border-green-200">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span> ONLINE
                    </div>
                </div>

                <!-- Stats -->
                <div class="space-y-4 mb-8">
                    <div class="flex justify-between items-end">
                        <div>
                            <p class="text-xs font-medium text-gray-500 mb-1">Fotografer Aktif</p>
                            <p class="text-xl font-bold text-black">128</p>
                        </div>
                        <div class="text-right">
                            <p class="text-xs font-medium text-gray-500 mb-1">Total Klien</p>
                            <p class="text-xl font-bold text-black">23.4K+</p>
                        </div>
                    </div>
                    
                    <div class="pt-3 border-t border-gray-100">
                        <p class="text-xs font-medium text-gray-500 mb-1">Total Transaksi Selesai</p>
                        <p class="text-2xl font-black text-black">450.290<span class="text-sm font-medium text-gray-400 ml-1">foto</span></p>
                    </div>
                </div>

                <!-- CTA -->
                <a href="{{ route('register') }}" class="block w-full bg-gray-50 hover:bg-gray-100 border border-gray-200 text-black text-center font-bold py-3 rounded-xl transition text-sm flex items-center justify-center gap-2">
                    Menjadi Klien Jepret
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>

                <!-- Decoration -->
                <div class="absolute -right-12 -bottom-12 w-32 h-32 bg-gray-50 rounded-full blur-2xl -z-10"></div>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-24">
        
        <!-- Tabs -->
        <div class="flex items-center gap-2 overflow-x-auto hide-scrollbar border-b border-gray-200 pb-px mb-8">
            <button class="px-5 py-3 border-b-2 border-black text-black text-sm font-bold whitespace-nowrap">Semua</button>
            <button class="px-5 py-3 border-b-2 border-transparent text-gray-500 hover:text-black text-sm font-semibold whitespace-nowrap transition">Lari</button>
            <button class="px-5 py-3 border-b-2 border-transparent text-gray-500 hover:text-black text-sm font-semibold whitespace-nowrap transition">Sepeda</button>
            <button class="px-5 py-3 border-b-2 border-transparent text-gray-500 hover:text-black text-sm font-semibold whitespace-nowrap transition">Event</button>
            <button class="px-5 py-3 border-b-2 border-transparent text-gray-500 hover:text-black text-sm font-semibold whitespace-nowrap transition">Komunitas</button>
            <button class="px-5 py-3 border-b-2 border-transparent text-gray-500 hover:text-black text-sm font-semibold whitespace-nowrap transition">Lintas Alam</button>
            <button class="px-5 py-3 border-b-2 border-transparent text-gray-500 hover:text-black text-sm font-semibold whitespace-nowrap transition">Gravel</button>
            <div class="ml-auto hidden md:flex items-center gap-2">
                <button class="flex items-center gap-1.5 px-3 py-1.5 border border-gray-200 rounded-md text-xs font-semibold text-gray-600 hover:bg-gray-50 transition">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg> Filter Lanjutan
                </button>
            </div>
        </div>

        <div class="flex justify-between items-center mb-6">
             <p class="text-sm font-semibold text-gray-500">Menampilkan 1-12 dari 450.290 foto</p>
             <div class="flex items-center gap-2">
                 <span class="text-xs font-medium text-gray-400">Urutkan:</span>
                 <select class="text-sm font-semibold text-black border-none bg-transparent focus:ring-0 cursor-pointer">
                     <option>Terbaru</option>
                     <option>Terpopuler</option>
                     <option>Harga Terendah</option>
                 </select>
             </div>
        </div>

        <!-- Grid Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Photo Card 1 -->
            <div class="bg-white group cursor-pointer">
                <div class="relative aspect-[4/5] bg-gray-100 overflow-hidden rounded-xl mb-3">
                    <img src="https://images.unsplash.com/photo-1552674605-15c2145e9ca4?q=80&w=600&auto=format&fit=crop" alt="Runner" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    
                    <!-- Top Badges -->
                    <div class="absolute top-3 left-3 bg-black/60 backdrop-blur-md px-2 py-1 rounded-md text-[10px] font-bold text-white uppercase tracking-wider">
                        Banjarmasin Marathon
                    </div>
                    <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/90 backdrop-blur-md flex items-center justify-center text-gray-400 hover:text-red-500 transition shadow-sm opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </button>
                    
                    <!-- Watermark -->
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
                        <span class="text-2xl font-black text-white tracking-widest uppercase transform -rotate-45 select-none" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">JEPRET</span>
                    </div>

                    <!-- Bottom Overlay (Hover) -->
                    <div class="absolute bottom-0 inset-x-0 p-3 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                         <a href="/p/1" class="w-full bg-white text-black font-bold text-xs py-2 rounded-lg flex justify-center items-center">Lihat Detail</a>
                    </div>
                </div>
                
                <div class="px-1">
                    <h3 class="text-sm font-bold text-black mb-1 line-clamp-1">Runner Wanita, Baju Biru Dongker - KM 21</h3>
                    
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-1.5">
                            <div class="w-5 h-5 rounded-full bg-gray-200 overflow-hidden shrink-0">
                                <img src="https://ui-avatars.com/api/?name=Rian+Lesmana&background=eee&color=333" class="w-full h-full object-cover">
                            </div>
                            <span class="text-xs font-medium text-gray-500">Rian Lesmana</span>
                        </div>
                        <span class="text-xs text-gray-400">12 Sep</span>
                    </div>
                    
                    <div class="flex items-center justify-between mt-2 pt-2 border-t border-gray-100">
                        <p class="text-sm font-black text-black">Rp 15.000</p>
                        <button class="text-xs font-bold text-blue-600 hover:text-blue-800 transition flex items-center gap-1">
                            Beli <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Photo Card 2 -->
            <div class="bg-white group cursor-pointer">
                <div class="relative aspect-[4/5] bg-gray-100 overflow-hidden rounded-xl mb-3">
                    <img src="https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?q=80&w=600&auto=format&fit=crop" alt="Runner" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    
                    <!-- Top Badges -->
                    <div class="absolute top-3 left-3 bg-black/60 backdrop-blur-md px-2 py-1 rounded-md text-[10px] font-bold text-white uppercase tracking-wider">
                        CFD Sudirman
                    </div>
                    <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/90 backdrop-blur-md flex items-center justify-center text-gray-400 hover:text-red-500 transition shadow-sm opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </button>
                    
                    <!-- Watermark -->
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
                        <span class="text-2xl font-black text-white tracking-widest uppercase transform -rotate-45 select-none" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">JEPRET</span>
                    </div>

                    <div class="absolute bottom-0 inset-x-0 p-3 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                         <button class="w-full bg-white text-black font-bold text-xs py-2 rounded-lg">Lihat Detail</button>
                    </div>
                </div>
                
                <div class="px-1">
                    <h3 class="text-sm font-bold text-black mb-1 line-clamp-1">Runner Pink, Topi Putih</h3>
                    
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-1.5">
                            <div class="w-5 h-5 rounded-full bg-gray-200 overflow-hidden shrink-0">
                                <img src="https://ui-avatars.com/api/?name=Sarah+Sport&background=eee&color=333" class="w-full h-full object-cover">
                            </div>
                            <span class="text-xs font-medium text-gray-500">Sarah Sport</span>
                        </div>
                        <span class="text-xs text-gray-400">11 Sep</span>
                    </div>
                    
                    <div class="flex items-center justify-between mt-2 pt-2 border-t border-gray-100">
                        <p class="text-sm font-black text-black">Rp 20.000</p>
                        <button class="text-xs font-bold text-blue-600 hover:text-blue-800 transition flex items-center gap-1">
                            Beli <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Photo Card 3 -->
            <div class="bg-white group cursor-pointer">
                <div class="relative aspect-[4/5] bg-gray-100 overflow-hidden rounded-xl mb-3">
                    <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=600&auto=format&fit=crop" alt="Cyclist" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    
                    <!-- Top Badges -->
                    <div class="absolute top-3 left-3 bg-black/60 backdrop-blur-md px-2 py-1 rounded-md text-[10px] font-bold text-white uppercase tracking-wider">
                        Pocari Sweat Run
                    </div>
                    <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/90 backdrop-blur-md flex items-center justify-center text-gray-400 hover:text-red-500 transition shadow-sm opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </button>
                    
                    <!-- Watermark -->
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
                        <span class="text-2xl font-black text-white tracking-widest uppercase transform -rotate-45 select-none" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">JEPRET</span>
                    </div>

                    <div class="absolute bottom-0 inset-x-0 p-3 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                         <button class="w-full bg-white text-black font-bold text-xs py-2 rounded-lg">Lihat Detail</button>
                    </div>
                </div>
                
                <div class="px-1">
                    <h3 class="text-sm font-bold text-black mb-1 line-clamp-1">Peloton Sepeda Balap di Jalur Sudirman</h3>
                    
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-1.5">
                            <div class="w-5 h-5 rounded-full bg-gray-200 overflow-hidden shrink-0">
                                <img src="https://ui-avatars.com/api/?name=Dika+Street&background=eee&color=333" class="w-full h-full object-cover">
                            </div>
                            <span class="text-xs font-medium text-gray-500">Dika StreetSnap</span>
                        </div>
                        <span class="text-xs text-gray-400">10 Sep</span>
                    </div>
                    
                    <div class="flex items-center justify-between mt-2 pt-2 border-t border-gray-100">
                        <p class="text-sm font-black text-black">Rp 25.000</p>
                        <button class="text-xs font-bold text-blue-600 hover:text-blue-800 transition flex items-center gap-1">
                            Beli <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Photo Card 4 -->
            <div class="bg-white group cursor-pointer">
                <div class="relative aspect-[4/5] bg-gray-100 overflow-hidden rounded-xl mb-3">
                    <img src="https://images.unsplash.com/photo-1571008887538-b36bb32f4571?q=80&w=600&auto=format&fit=crop" alt="Runner" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                    
                    <!-- Top Badges -->
                    <div class="absolute top-3 left-3 bg-black/60 backdrop-blur-md px-2 py-1 rounded-md text-[10px] font-bold text-white uppercase tracking-wider">
                        Banjarmasin Marathon
                    </div>
                    <button class="absolute top-3 right-3 w-8 h-8 rounded-full bg-white/90 backdrop-blur-md flex items-center justify-center text-gray-400 hover:text-red-500 transition shadow-sm opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </button>
                    
                    <!-- Watermark -->
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
                        <span class="text-2xl font-black text-white tracking-widest uppercase transform -rotate-45 select-none" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">JEPRET</span>
                    </div>

                    <div class="absolute bottom-0 inset-x-0 p-3 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                         <button class="w-full bg-white text-black font-bold text-xs py-2 rounded-lg">Lihat Detail</button>
                    </div>
                </div>
                
                <div class="px-1">
                    <h3 class="text-sm font-bold text-black mb-1 line-clamp-1">Pelari Pria Baju Merah Garis Finis</h3>
                    
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center gap-1.5">
                            <div class="w-5 h-5 rounded-full bg-gray-200 overflow-hidden shrink-0">
                                <img src="https://ui-avatars.com/api/?name=Rian+Lesmana&background=eee&color=333" class="w-full h-full object-cover">
                            </div>
                            <span class="text-xs font-medium text-gray-500">Rian Lesmana</span>
                        </div>
                        <span class="text-xs text-gray-400">9 Sep</span>
                    </div>
                    
                    <div class="flex items-center justify-between mt-2 pt-2 border-t border-gray-100">
                        <p class="text-sm font-black text-black">Rp 15.000</p>
                        <button class="text-xs font-bold text-blue-600 hover:text-blue-800 transition flex items-center gap-1">
                            Beli <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-12 text-center">
            <button class="bg-white border border-gray-300 text-black font-semibold px-8 py-3 rounded-full hover:bg-gray-50 transition text-sm">
                Tampilkan Lebih Banyak
            </button>
        </div>
    </div>

    <!-- How it works -->
    <div class="border-t border-gray-100 bg-gray-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center mb-16">
                <p class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-2">TUTORIAL SINGKAT</p>
                <h2 class="text-3xl md:text-4xl font-black text-black">Bagaimana JEPRET CFD<br/>bekerja untukmu.</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                <div class="text-center md:text-left">
                    <div class="w-12 h-12 bg-black text-white rounded-xl flex items-center justify-center text-xl font-bold mb-6 mx-auto md:mx-0 shadow-lg shadow-gray-200">1</div>
                    <h3 class="text-xl font-bold text-black mb-3">Cari Berdasarkan BIB atau Lokasi</h3>
                    <p class="text-gray-600 font-medium text-sm leading-relaxed">Masukkan nomor dada atau BIB lari Anda di kolom pencarian. Sistem kami akan mencari wajah atau nomor BIB Anda secara otomatis di ribuan foto.</p>
                </div>
                
                <div class="text-center md:text-left">
                    <div class="w-12 h-12 bg-black text-white rounded-xl flex items-center justify-center text-xl font-bold mb-6 mx-auto md:mx-0 shadow-lg shadow-gray-200">2</div>
                    <h3 class="text-xl font-bold text-black mb-3">Pembayaran Otomatis QRIS</h3>
                    <p class="text-gray-600 font-medium text-sm leading-relaxed">Dapatkan kemudahan dengan pembayaran scan QRIS. Checkout kilat, bayar aman dengan dompet digital kesukaan Anda secara instan.</p>
                </div>
                
                <div class="text-center md:text-left">
                    <div class="w-12 h-12 bg-black text-white rounded-xl flex items-center justify-center text-xl font-bold mb-6 mx-auto md:mx-0 shadow-lg shadow-gray-200">3</div>
                    <h3 class="text-xl font-bold text-black mb-3">Unduh File Asli Tanpa Watermark</h3>
                    <p class="text-gray-600 font-medium text-sm leading-relaxed">Dapatkan foto Anda dengan resolusi tertinggi asli jepretan fotografer (RAW to JPEG). Cocok untuk dicetak poster atau diunggah ke media sosial.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <p class="text-sm font-bold text-gray-500 uppercase tracking-widest mb-2">PILIHAN HARGA KLIEN</p>
                <h2 class="text-3xl md:text-4xl font-black text-black">Pilih paket yang sesuai dengan kebutuhan Anda.</h2>
                <p class="mt-4 text-gray-500 max-w-2xl mx-auto text-sm font-medium">Mulai dari mendapatkan satu foto hingga memborong seluruh momen di setiap event, temukan paket yang pas untuk Anda dengan harga jujur dari fotografer.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 items-end">
                
                <!-- Gratis -->
                <div class="bg-white border border-gray-200 rounded-3xl p-8 h-full flex flex-col hover:border-gray-300 transition shadow-sm">
                    <h3 class="text-xl font-bold text-black mb-2">Gratis</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-black">Rp0</span><span class="text-gray-500 text-sm font-medium"> / selamanya</span>
                    </div>
                    <p class="text-gray-500 text-xs font-medium mb-8 leading-relaxed h-12">Hanya mencari foto, tidak perlu membayar jika foto mengandung watermark penuh.</p>
                    
                    <ul class="space-y-4 mb-8 flex-1">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-xs font-semibold text-gray-600">Pencarian berbasis teks</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-xs font-semibold text-gray-600">Download dengan watermark (SD)</span>
                        </li>
                    </ul>
                    <button class="w-full bg-white border border-gray-300 text-black font-bold py-3 rounded-xl hover:bg-gray-50 transition text-sm">Mulai Gratis</button>
                </div>

                <!-- Basic -->
                <div class="bg-white border border-gray-200 rounded-3xl p-8 h-full flex flex-col hover:border-gray-300 transition shadow-sm relative">
                    <h3 class="text-xl font-bold text-black mb-2">Basic</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-black">Rp29.000</span><span class="text-gray-500 text-sm font-medium"> / paket</span>
                    </div>
                    <p class="text-gray-500 text-xs font-medium mb-8 leading-relaxed h-12">Akses dasar untuk menghapus watermark & mendapatkan 5 foto pilihan.</p>
                    
                    <ul class="space-y-4 mb-8 flex-1">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-black shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-xs font-semibold text-gray-900">5 kredit foto HD</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-black shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-xs font-semibold text-gray-900">Download tanpa watermark</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-black shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-xs font-semibold text-gray-900">Resolusi up to 2K</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-black shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-xs font-semibold text-gray-900">Lisensi personal</span>
                        </li>
                    </ul>
                    <button class="w-full bg-white border border-black text-black font-bold py-3 rounded-xl hover:bg-gray-50 transition text-sm">Pilih Paket</button>
                </div>

                <!-- Pro -->
                <div class="bg-black border border-black rounded-3xl p-8 h-full flex flex-col relative shadow-xl transform lg:-translate-y-4">
                    <div class="absolute -top-4 inset-x-0 flex justify-center">
                        <span class="bg-white text-black text-[10px] font-black uppercase tracking-widest px-3 py-1 rounded-full shadow-sm">Paling Populer</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-2">Pro</h3>
                    <div class="mb-6">
                        <span class="text-4xl font-black text-white">Rp59.000</span><span class="text-gray-400 text-sm font-medium"> / paket</span>
                    </div>
                    <p class="text-gray-400 text-xs font-medium mb-8 leading-relaxed h-12">Cocok untuk pelari aktif. 15 foto resolusi maksimal tanpa batasan event.</p>
                    
                    <ul class="space-y-4 mb-8 flex-1">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-xs font-semibold text-gray-300">15 kredit foto Original RAW/JPEG</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-xs font-semibold text-gray-300">Pencarian prioritas Face AI</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-xs font-semibold text-gray-300">Akses foto event exclusive</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-white shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-xs font-semibold text-gray-300">Lisensi komersial ringan (Sosmed)</span>
                        </li>
                    </ul>
                    <button class="w-full bg-white text-black font-bold py-3 rounded-xl hover:bg-gray-100 transition text-sm shadow-[0_0_15px_rgba(255,255,255,0.2)]">Pilih Paket Pro</button>
                </div>

                <!-- Custom -->
                <div class="bg-white border border-gray-200 rounded-3xl p-8 h-full flex flex-col hover:border-gray-300 transition shadow-sm">
                    <h3 class="text-xl font-bold text-black mb-2">Custom</h3>
                    <div class="mb-6">
                        <span class="text-2xl font-black text-black">Hubungi Kami</span>
                    </div>
                    <p class="text-gray-500 text-xs font-medium mb-8 leading-relaxed h-12">Untuk brand, panitia event, atau agensi yang membutuhkan foto massal.</p>
                    
                    <ul class="space-y-4 mb-8 flex-1">
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-xs font-semibold text-gray-600">Akses semua foto di 1 event</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-xs font-semibold text-gray-600">Custom watermark brand</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-xs font-semibold text-gray-600">API Akses (Khusus)</span>
                        </li>
                    </ul>
                    <button class="w-full bg-white border border-gray-300 text-black font-bold py-3 rounded-xl hover:bg-gray-50 transition text-sm">Hubungi Sales</button>
                </div>

            </div>
        </div>
    </div>

    <!-- Features Grid -->
    <div class="border-t border-gray-100 bg-white py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-black mb-10">Yang Anda Dapatkan di Jepret CFD</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Feature 1 -->
                <div class="border border-gray-200 rounded-2xl p-6 hover:shadow-md transition">
                    <div class="w-10 h-10 rounded-lg bg-gray-50 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <h3 class="text-sm font-bold text-black mb-2">Keamanan Data Terjamin</h3>
                    <p class="text-xs text-gray-500 font-medium leading-relaxed">Platform kami dilengkapi standar keamanan tertinggi. Data pembayaran, foto pribadi, dan transaksi Anda dijamin aman tanpa bocor.</p>
                </div>

                <!-- Feature 2 -->
                <div class="border border-gray-200 rounded-2xl p-6 hover:shadow-md transition">
                    <div class="w-10 h-10 rounded-lg bg-gray-50 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h3 class="text-sm font-bold text-black mb-2">Pembayaran dengan QRIS/Transfer</h3>
                    <p class="text-xs text-gray-500 font-medium leading-relaxed">Foto langsung dikirim otomatis ke email Anda seketika setelah pembayaran sukses. Tersedia e-wallet hingga m-banking bank lokal.</p>
                </div>

                <!-- Feature 3 -->
                <div class="border border-gray-200 rounded-2xl p-6 hover:shadow-md transition">
                    <div class="w-10 h-10 rounded-lg bg-gray-50 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <h3 class="text-sm font-bold text-black mb-2">Fitur Face & BIB AI</h3>
                    <p class="text-xs text-gray-500 font-medium leading-relaxed">Mencari wajah Anda diantara ratusan ribu foto akan memakan waktu. AI kami memastikan hal tersebut menjadi instan.</p>
                </div>

                <!-- Feature 4 -->
                <div class="border border-gray-200 rounded-2xl p-6 hover:shadow-md transition">
                    <div class="w-10 h-10 rounded-lg bg-gray-50 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h3 class="text-sm font-bold text-black mb-2">Dashboard Fotografer</h3>
                    <p class="text-xs text-gray-500 font-medium leading-relaxed">Kelola penjualan, pantau statistik foto terlaris, pendapatan realtime, dan pencairan dana langsung ke rekening.</p>
                </div>

                <!-- Feature 5 -->
                <div class="border border-gray-200 rounded-2xl p-6 hover:shadow-md transition">
                    <div class="w-10 h-10 rounded-lg bg-gray-50 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="text-sm font-bold text-black mb-2">Harga Mulai 10 Ribu</h3>
                    <p class="text-xs text-gray-500 font-medium leading-relaxed">Mendukung harga ekonomis yang sangat murah bagi runner lokal yang hanya butuh update status sosmed.</p>
                </div>

                <!-- Feature 6 -->
                <div class="border border-gray-200 rounded-2xl p-6 hover:shadow-md transition">
                    <div class="w-10 h-10 rounded-lg bg-gray-50 flex items-center justify-center mb-4">
                        <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-sm font-bold text-black mb-2">File Original Tanpa Kompres</h3>
                    <p class="text-xs text-gray-500 font-medium leading-relaxed">Berbeda dari platform sosmed biasa yang mengkompres foto Anda, file kami 100% utuh & jernih HD resolution.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="border-t border-gray-200 bg-gray-50 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8 gap-4">
                <div class="flex items-center gap-2">
                    <span class="font-black text-xl tracking-tighter text-black flex items-center gap-1">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"></path><circle cx="12" cy="13" r="3"></circle></svg>
                        JEPRET
                    </span>
                </div>
                
                <div class="flex flex-wrap justify-center gap-6">
                    <a href="#" class="text-xs font-semibold text-gray-500 hover:text-black transition">Explore</a>
                    <a href="#" class="text-xs font-semibold text-gray-500 hover:text-black transition">Community Guidelines</a>
                    <a href="#" class="text-xs font-semibold text-gray-500 hover:text-black transition">Licensing</a>
                    <a href="#" class="text-xs font-semibold text-gray-500 hover:text-black transition">Privacy Policy</a>
                    <a href="#" class="text-xs font-semibold text-gray-500 hover:text-black transition">Terms of Service</a>
                </div>
            </div>
            
            <div class="border-t border-gray-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-medium text-gray-400">
                <p>&copy; 2024 JEPRET. Platform Fotografi Jalanan. All rights reserved.</p>
                <p>Build from ground up dengan ❤ untuk Fotografer Indonesia.</p>
            </div>
        </div>
    </footer>

</body>
</html>
