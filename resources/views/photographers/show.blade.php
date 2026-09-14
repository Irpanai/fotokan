<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dwi Visual - Photographer - JEPRET</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { background-color: #FFFFFF; color: #111827; font-family: 'Inter', sans-serif; }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
</head>
<body class="antialiased flex flex-col min-h-screen relative text-gray-900 bg-white">
    
    <!-- Navbar -->
    <x-navbar />

    <!-- Main Content -->
    <main class="flex-grow pb-24">
        
        <!-- Hero Section -->
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mt-8 mb-16">
            <div class="flex flex-col lg:flex-row gap-12">
                
                <!-- Left: Info -->
                <div class="w-full lg:w-5/12 pt-4">
                    <!-- Breadcrumb -->
                    <div class="flex items-center gap-1.5 mb-8">
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Photographers / Dwi Visual</span>
                    </div>

                    <!-- Header -->
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-16 h-16 rounded-full bg-black text-white flex items-center justify-center font-bold text-xl shrink-0 shadow-md">DV</div>
                        <div>
                            <div class="flex items-center gap-2 mb-1.5">
                                <span class="bg-gray-100 text-gray-600 text-[9px] font-bold px-2 py-1 rounded-md uppercase tracking-wider flex items-center gap-1">
                                    <svg class="w-3 h-3 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                                    Photographer Terverifikasi
                                </span>
                                <span class="text-[10px] text-gray-400 font-medium">ID: #DV3492 / JABAR</span>
                            </div>
                            <h1 class="text-4xl md:text-5xl font-black text-black leading-tight tracking-tight">Dwi Visual</h1>
                        </div>
                    </div>

                    <div class="mb-6 space-y-1.5">
                        <p class="text-sm text-gray-600"><span class="font-bold text-gray-400 mr-1">Studio:</span> Dwi Saputra Visuals</p>
                        <p class="text-sm text-gray-600 flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            Banjarbaru, Kalimantan Selatan, Indonesia
                        </p>
                    </div>

                    <!-- Specializations -->
                    <div class="flex flex-wrap items-center gap-2 mb-8">
                        <span class="px-3 py-1.5 bg-gray-50 border border-gray-200 text-gray-600 rounded-lg text-[10px] font-semibold">Street Photography</span>
                        <span class="px-3 py-1.5 bg-gray-50 border border-gray-200 text-gray-600 rounded-lg text-[10px] font-semibold">Running & CFD</span>
                        <span class="px-3 py-1.5 bg-gray-50 border border-gray-200 text-gray-600 rounded-lg text-[10px] font-semibold">Community Sport</span>
                        <span class="px-3 py-1.5 bg-gray-50 border border-gray-200 text-gray-600 rounded-lg text-[10px] font-semibold">Lifestyle</span>
                    </div>

                    <!-- Description -->
                    <p class="text-sm text-gray-700 font-medium leading-relaxed mb-8 border-l-2 border-gray-200 pl-4 py-1">
                        Mengabadikan momen autentik melalui pendekatan visual yang natural, dinamis, dan berorientasi pada detail ekspresi para pegiat olahraga akhir pekan.
                    </p>

                    <!-- Stats Grid -->
                    <div class="grid grid-cols-4 gap-4 mb-10 border-y border-gray-100 py-6">
                        <div>
                            <p class="text-xl font-black text-black">1.248</p>
                            <p class="text-[10px] text-gray-500 font-medium">Foto Terpasang</p>
                        </div>
                        <div>
                            <p class="text-xl font-black text-black">186</p>
                            <p class="text-[10px] text-gray-500 font-medium">Foto Terjual</p>
                        </div>
                        <div>
                            <p class="text-xl font-black text-black">34</p>
                            <p class="text-[10px] text-gray-500 font-medium">Event Terdokumentasi</p>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-black pt-1">Mei 2024</p>
                            <p class="text-[10px] text-gray-500 font-medium">Member Sejak</p>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div class="flex items-center gap-3">
                        <a href="#marketplace" class="bg-black text-white text-xs font-bold py-3.5 px-6 rounded-xl hover:bg-gray-800 transition shadow-sm text-center">
                            Lihat Galeri Foto Jual
                        </a>
                        <button class="bg-white border border-gray-200 text-gray-700 text-xs font-bold py-3.5 px-6 rounded-xl hover:bg-gray-50 hover:border-gray-300 transition text-center">
                            Hubungi Photographer
                        </button>
                    </div>
                </div>

                <!-- Right: Image -->
                <div class="w-full lg:w-7/12">
                    <div class="relative w-full aspect-[4/3] rounded-3xl overflow-hidden bg-gray-100 group">
                        <img src="https://images.unsplash.com/photo-1552674605-15c2145e9ca4?q=80&w=1200&auto=format&fit=crop" class="w-full h-full object-cover grayscale transition duration-700 group-hover:scale-105" alt="Featured Photo">
                        
                        <!-- Top left tag -->
                        <div class="absolute top-4 left-4 flex items-center gap-2 bg-white/90 backdrop-blur-sm text-black text-[10px] font-bold px-3 py-1.5 rounded-lg shadow-sm">
                            <span class="w-2 h-2 rounded-full bg-black"></span>
                            URBAN STREET PORTFOLIO
                        </div>

                        <!-- Top right logos (Mockup shows some logos/badges) -->
                        <div class="absolute top-4 right-4 flex items-center gap-2">
                             <div class="bg-white/90 backdrop-blur-sm text-black text-[10px] font-bold px-2 py-1.5 rounded shadow-sm">HQ</div>
                             <div class="bg-white/90 backdrop-blur-sm text-black text-[10px] font-bold px-2 py-1.5 rounded shadow-sm">PRO</div>
                        </div>

                        <!-- Bottom Location Overlay -->
                        <div class="absolute bottom-4 left-4 right-4 bg-black/70 backdrop-blur-md rounded-xl p-3 flex justify-between items-center text-white">
                            <div class="flex items-center gap-2 text-xs font-semibold">
                                <svg class="w-4 h-4 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Lapangan Murjani CFD • Sekitar Jam 06.45 AM
                            </div>
                            <div class="text-[10px] font-bold text-gray-300 uppercase tracking-widest">
                                Sony A7 III • 70-200 GM
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Section 1: Karya Pilihan (Showcase) -->
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mb-20 border-t border-gray-100 pt-16">
            <div class="flex justify-between items-end mb-8">
                <div>
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1 block">• PORTFOLIO CREATIVE SHOWCASE</span>
                    <h2 class="text-2xl font-black text-black mb-2">Karya Pilihan</h2>
                    <p class="text-sm text-gray-500 font-medium max-w-2xl">
                        Beberapa hasil terbaik yang dipilih langsung dari portofolio photographer sebagai representasi standar visual dan keahlian komposisi.
                    </p>
                </div>
                <span class="text-[9px] font-bold text-gray-400 hidden sm:block">5 FOTO KURASI SANG FOTOGRAFER</span>
            </div>

            <!-- Masonry Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Large Left -->
                <div class="md:col-span-2 relative aspect-[16/9] md:aspect-auto md:h-[400px] bg-gray-100 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover grayscale transition duration-500 group-hover:scale-105" alt="Showcase">
                </div>
                <!-- Top Right -->
                <div class="relative aspect-square md:aspect-auto md:h-[400px] bg-gray-100 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1571008887538-b36bb32f4571?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover grayscale transition duration-500 group-hover:scale-105" alt="Showcase">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
                <!-- Bottom 3 -->
                <div class="relative aspect-video md:h-[240px] bg-gray-100 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1552674605-15c2145e9ca4?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover grayscale transition duration-500 group-hover:scale-105" alt="Showcase">
                </div>
                <div class="relative aspect-video md:h-[240px] bg-gray-100 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1522163182402-834f871fd851?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover grayscale transition duration-500 group-hover:scale-105" alt="Showcase">
                </div>
                <div class="relative aspect-video md:h-[240px] bg-gray-100 rounded-2xl overflow-hidden group">
                    <img src="https://images.unsplash.com/photo-1505315984631-016335a72061?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover grayscale transition duration-500 group-hover:scale-105" alt="Showcase">
                </div>
            </div>
        </div>

        <!-- Section 2: Koleksi Event -->
        <div class="bg-gray-50/50 border-y border-gray-100 py-16 mb-16">
            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-end mb-8">
                    <div>
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1 block">• DOKUMENTASI TERAKHIR</span>
                        <h2 class="text-2xl font-black text-black">Koleksi Event</h2>
                    </div>
                    <a href="#" class="text-xs font-bold text-gray-600 hover:text-black flex items-center gap-1">
                        Semua Event Terdokumentasi <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Event Card 1 -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-lg transition cursor-pointer flex flex-col h-full">
                        <div class="flex justify-between items-start mb-4">
                            <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest">CFD BANJARBARU</span>
                            <span class="bg-gray-100 text-gray-600 text-[9px] font-bold px-2 py-1 rounded">124 FOTO</span>
                        </div>
                        <h3 class="text-base font-bold text-black mb-1">CFD Murjani Banjarbaru 2026</h3>
                        <p class="text-[10px] text-gray-500 font-medium flex items-center gap-1.5 mb-4">
                            12 September 2026 • Area Lapangan Murjani & Sekitarnya
                        </p>
                        <p class="text-xs text-gray-600 leading-relaxed mb-6 flex-grow">
                            Dokumentasi komprehensif pelari pagi, pesepeda, dan aktivitas warga sekitar di sepanjang rute utama.
                        </p>
                        <div class="flex justify-between items-center mt-auto border-t border-gray-100 pt-4">
                            <span class="text-[10px] text-gray-400 font-medium">Baru Diupdate</span>
                            <span class="text-[10px] font-bold text-black flex items-center gap-1 uppercase tracking-wider hover:underline">
                                Lihat Koleksi <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </div>

                    <!-- Event Card 2 -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-lg transition cursor-pointer flex flex-col h-full">
                        <div class="flex justify-between items-start mb-4">
                            <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest">EVENT REGIONAL</span>
                            <span class="bg-gray-100 text-gray-600 text-[9px] font-bold px-2 py-1 rounded">420 FOTO</span>
                        </div>
                        <h3 class="text-base font-bold text-black mb-1">Banjarbaru 10K Fun Run</h3>
                        <p class="text-[10px] text-gray-500 font-medium flex items-center gap-1.5 mb-4">
                            9 September 2026 • GOR Rudy Resnawan
                        </p>
                        <p class="text-xs text-gray-600 leading-relaxed mb-6 flex-grow">
                            Momen kelelahan di garis finish, selebrasi bersama teman, dan semangat peserta di kategori umum dan master.
                        </p>
                        <div class="flex justify-between items-center mt-auto border-t border-gray-100 pt-4">
                            <span class="text-[10px] text-gray-400 font-medium">Selesai Diunggah</span>
                            <span class="text-[10px] font-bold text-black flex items-center gap-1 uppercase tracking-wider hover:underline">
                                Lihat Koleksi <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </div>

                    <!-- Event Card 3 -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-6 hover:shadow-lg transition cursor-pointer flex flex-col h-full">
                        <div class="flex justify-between items-start mb-4">
                            <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest">CFD BANJARBARU</span>
                            <span class="bg-gray-100 text-gray-600 text-[9px] font-bold px-2 py-1 rounded">214 FOTO</span>
                        </div>
                        <h3 class="text-base font-bold text-black mb-1">Sunday Morning Community Ride</h3>
                        <p class="text-[10px] text-gray-500 font-medium flex items-center gap-1.5 mb-4">
                            28 Agustus 2026 • Rute Lingkar Luar Banjarbaru
                        </p>
                        <p class="text-xs text-gray-600 leading-relaxed mb-6 flex-grow">
                            Liputan dinamik pergerakan dan peloton sepeda dengan formasi line pada kecepatan tinggi di lintasan aspal.
                        </p>
                        <div class="flex justify-between items-center mt-auto border-t border-gray-100 pt-4">
                            <span class="text-[10px] text-gray-400 font-medium">Tersedia</span>
                            <span class="text-[10px] font-bold text-black flex items-center gap-1 uppercase tracking-wider hover:underline">
                                Lihat Koleksi <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Marketplace -->
        <div id="marketplace" class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="mb-8">
                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1 block">• KATALOG MARKETPLACE AKTIF</span>
                <h2 class="text-2xl font-black text-black mb-2">Foto yang Tersedia untuk Dibeli</h2>
                <p class="text-sm text-gray-500 font-medium max-w-2xl">
                    Jelajahi foto yang tersedia untuk dibeli dari photographer ini. Setiap foto original beresolusi penuh tanpa watermark siap diunduh instan setelah verifikasi pembayaran (QRIS).
                </p>
            </div>

            <!-- Filters -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6 pb-4 border-b border-gray-100">
                <div class="flex flex-wrap items-center gap-2">
                    <button class="px-3 py-1.5 bg-black text-white rounded-lg text-[10px] font-bold">Semua (1.248)</button>
                    <button class="px-3 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-lg text-[10px] font-semibold hover:border-black hover:text-black transition">CFD Murjani</button>
                    <button class="px-3 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-lg text-[10px] font-semibold hover:border-black hover:text-black transition">Running 10K</button>
                    <button class="px-3 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-lg text-[10px] font-semibold hover:border-black hover:text-black transition">Community Ride</button>
                    <button class="px-3 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-lg text-[10px] font-semibold hover:border-black hover:text-black transition">Street Moments</button>
                </div>
                <div class="flex items-center gap-2 shrink-0">
                    <span class="text-[10px] font-bold text-gray-400 uppercase">Urutkan:</span>
                    <select class="bg-transparent text-xs font-bold text-black border-none focus:ring-0 cursor-pointer pr-8 py-0">
                        <option>Terbaru</option>
                        <option>Terpopuler</option>
                        <option>Termurah</option>
                    </select>
                </div>
            </div>

            <!-- Photos Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Photo 1 -->
                <div class="bg-white group cursor-pointer border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition flex flex-col">
                    <div class="relative w-full aspect-[4/3] bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552674605-15c2145e9ca4?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Runner">
                        
                        <!-- Badges -->
                        <div class="absolute top-2 left-2 bg-black/80 backdrop-blur-sm text-white text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            PROTECTED PREVIEW
                        </div>
                        <div class="absolute bottom-2 right-2 bg-white/90 backdrop-blur-sm text-black text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            ID: #DV-5034-0012
                        </div>
                        
                        <!-- Watermark -->
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
                            <span class="text-2xl font-black text-white tracking-widest uppercase transform -rotate-45 select-none" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">JEPRET</span>
                        </div>
                    </div>
                    
                    <div class="p-4 flex-grow flex flex-col">
                        <span class="text-[8px] font-bold text-gray-400 uppercase tracking-widest mb-1">CFD BANJARBARU</span>
                        <h3 class="text-xs font-bold text-black mb-1 line-clamp-1">Pelari 5K Selebrasi Finish Murjani</h3>
                        <p class="text-[10px] text-gray-500 font-medium mb-3">Lapangan Murjani CFD • 12 Sep 2026</p>
                        <p class="text-[9px] text-gray-400 mb-4 flex-grow">Sony A7 III • 70-200 GM</p>
                        
                        <div class="flex items-center justify-between border-t border-gray-100 pt-3">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 uppercase mb-0.5">Harga Standard</p>
                                <p class="text-sm font-black text-black">Rp 20.000</p>
                            </div>
                            <button class="bg-black text-white text-[10px] font-bold px-3 py-1.5 rounded-lg hover:bg-gray-800 transition">
                                Beli Foto
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Photo 2 -->
                <div class="bg-white group cursor-pointer border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition flex flex-col">
                    <div class="relative w-full aspect-[4/3] bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Cyclist">
                        
                        <div class="absolute top-2 left-2 bg-black/80 backdrop-blur-sm text-white text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            PROTECTED PREVIEW
                        </div>
                        <div class="absolute bottom-2 right-2 bg-white/90 backdrop-blur-sm text-black text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            ID: #DV-5034-0013
                        </div>
                        
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
                            <span class="text-2xl font-black text-white tracking-widest uppercase transform -rotate-45 select-none" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">JEPRET</span>
                        </div>
                    </div>
                    
                    <div class="p-4 flex-grow flex flex-col">
                        <span class="text-[8px] font-bold text-gray-400 uppercase tracking-widest mb-1">CYCLING RIDE</span>
                        <h3 class="text-xs font-bold text-black mb-1 line-clamp-1">Pesepeda Roadbike Sprint Pagi</h3>
                        <p class="text-[10px] text-gray-500 font-medium mb-3">Boulevard Timur Murjani • 11 Sep 2026</p>
                        <p class="text-[9px] text-gray-400 mb-4 flex-grow">Sony A7 III • 24-70 GM II</p>
                        
                        <div class="flex items-center justify-between border-t border-gray-100 pt-3">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 uppercase mb-0.5">Harga Standard</p>
                                <p class="text-sm font-black text-black">Rp 20.000</p>
                            </div>
                            <button class="bg-black text-white text-[10px] font-bold px-3 py-1.5 rounded-lg hover:bg-gray-800 transition">
                                Beli Foto
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Photo 3 -->
                <div class="bg-white group cursor-pointer border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition flex flex-col">
                    <div class="relative w-full aspect-[4/3] bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1522163182402-834f871fd851?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Family">
                        
                        <div class="absolute top-2 left-2 bg-black/80 backdrop-blur-sm text-white text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            PROTECTED PREVIEW
                        </div>
                        <div class="absolute bottom-2 right-2 bg-white/90 backdrop-blur-sm text-black text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            ID: #DV-5034-0014
                        </div>
                        
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
                            <span class="text-2xl font-black text-white tracking-widest uppercase transform -rotate-45 select-none" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">JEPRET</span>
                        </div>
                    </div>
                    
                    <div class="p-4 flex-grow flex flex-col">
                        <span class="text-[8px] font-bold text-gray-400 uppercase tracking-widest mb-1">CFD MURJANI</span>
                        <h3 class="text-xs font-bold text-black mb-1 line-clamp-1">Jalan Santai Keluarga Murjani</h3>
                        <p class="text-[10px] text-gray-500 font-medium mb-3">Taman Van Der Pijl • 10 Sep 2026</p>
                        <p class="text-[9px] text-gray-400 mb-4 flex-grow">Sony A7 III • 85mm F1.8</p>
                        
                        <div class="flex items-center justify-between border-t border-gray-100 pt-3">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 uppercase mb-0.5">Harga Standard</p>
                                <p class="text-sm font-black text-black">Rp 20.000</p>
                            </div>
                            <button class="bg-black text-white text-[10px] font-bold px-3 py-1.5 rounded-lg hover:bg-gray-800 transition">
                                Beli Foto
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Photo 4 -->
                <div class="bg-white group cursor-pointer border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition flex flex-col">
                    <div class="relative w-full aspect-[4/3] bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1571008887538-b36bb32f4571?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Run">
                        
                        <div class="absolute top-2 left-2 bg-black/80 backdrop-blur-sm text-white text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            PROTECTED PREVIEW
                        </div>
                        <div class="absolute bottom-2 right-2 bg-white/90 backdrop-blur-sm text-black text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            ID: #DV-5034-0015
                        </div>
                        
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
                            <span class="text-2xl font-black text-white tracking-widest uppercase transform -rotate-45 select-none" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">JEPRET</span>
                        </div>
                    </div>
                    
                    <div class="p-4 flex-grow flex flex-col">
                        <span class="text-[8px] font-bold text-gray-400 uppercase tracking-widest mb-1">FUN RUN EVENT</span>
                        <h3 class="text-xs font-bold text-black mb-1 line-clamp-1">Duo Pelari Half Marathon</h3>
                        <p class="text-[10px] text-gray-500 font-medium mb-3">Jl. Panglima Batur • 9 Sep 2026</p>
                        <p class="text-[9px] text-gray-400 mb-4 flex-grow">Sony A7 III • 70-200 GM</p>
                        
                        <div class="flex items-center justify-between border-t border-gray-100 pt-3">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 uppercase mb-0.5">Harga Standard</p>
                                <p class="text-sm font-black text-black">Rp 20.000</p>
                            </div>
                            <button class="bg-black text-white text-[10px] font-bold px-3 py-1.5 rounded-lg hover:bg-gray-800 transition">
                                Beli Foto
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Photo 5 -->
                <div class="bg-white group cursor-pointer border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition flex flex-col">
                    <div class="relative w-full aspect-[4/3] bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552674605-15c2145e9ca4?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Run">
                        
                        <div class="absolute top-2 left-2 bg-black/80 backdrop-blur-sm text-white text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            PROTECTED PREVIEW
                        </div>
                        <div class="absolute bottom-2 right-2 bg-white/90 backdrop-blur-sm text-black text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            ID: #DV-5034-0016
                        </div>
                        
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
                            <span class="text-2xl font-black text-white tracking-widest uppercase transform -rotate-45 select-none" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">JEPRET</span>
                        </div>
                    </div>
                    
                    <div class="p-4 flex-grow flex flex-col">
                        <span class="text-[8px] font-bold text-gray-400 uppercase tracking-widest mb-1">FUN RUN EVENT</span>
                        <h3 class="text-xs font-bold text-black mb-1 line-clamp-1">Senyum Pasca Finis 10K</h3>
                        <p class="text-[10px] text-gray-500 font-medium mb-3">Lapangan Murjani CFD • 9 Sep 2026</p>
                        <p class="text-[9px] text-gray-400 mb-4 flex-grow">Sony A7 III • 70-200 GM</p>
                        
                        <div class="flex items-center justify-between border-t border-gray-100 pt-3">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 uppercase mb-0.5">Harga Standard</p>
                                <p class="text-sm font-black text-black">Rp 20.000</p>
                            </div>
                            <button class="bg-black text-white text-[10px] font-bold px-3 py-1.5 rounded-lg hover:bg-gray-800 transition">
                                Beli Foto
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Photo 6 -->
                <div class="bg-white group cursor-pointer border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition flex flex-col">
                    <div class="relative w-full aspect-[4/3] bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1505315984631-016335a72061?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Run">
                        
                        <div class="absolute top-2 left-2 bg-black/80 backdrop-blur-sm text-white text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            PROTECTED PREVIEW
                        </div>
                        <div class="absolute bottom-2 right-2 bg-white/90 backdrop-blur-sm text-black text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            ID: #DV-5034-0017
                        </div>
                        
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
                            <span class="text-2xl font-black text-white tracking-widest uppercase transform -rotate-45 select-none" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">JEPRET</span>
                        </div>
                    </div>
                    
                    <div class="p-4 flex-grow flex flex-col">
                        <span class="text-[8px] font-bold text-gray-400 uppercase tracking-widest mb-1">COMMUNITY RIDE</span>
                        <h3 class="text-xs font-bold text-black mb-1 line-clamp-1">Komunitas Sepatu Roda Pagi</h3>
                        <p class="text-[10px] text-gray-500 font-medium mb-3">Area Parkir Timur Murjani • 11 Sep 2026</p>
                        <p class="text-[9px] text-gray-400 mb-4 flex-grow">Sony A7 III • 24-70 GM II</p>
                        
                        <div class="flex items-center justify-between border-t border-gray-100 pt-3">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 uppercase mb-0.5">Harga Standard</p>
                                <p class="text-sm font-black text-black">Rp 20.000</p>
                            </div>
                            <button class="bg-black text-white text-[10px] font-bold px-3 py-1.5 rounded-lg hover:bg-gray-800 transition">
                                Beli Foto
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Photo 7 -->
                <div class="bg-white group cursor-pointer border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition flex flex-col">
                    <div class="relative w-full aspect-[4/3] bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Run">
                        
                        <div class="absolute top-2 left-2 bg-black/80 backdrop-blur-sm text-white text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            PROTECTED PREVIEW
                        </div>
                        <div class="absolute bottom-2 right-2 bg-white/90 backdrop-blur-sm text-black text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            ID: #DV-5034-0018
                        </div>
                        
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
                            <span class="text-2xl font-black text-white tracking-widest uppercase transform -rotate-45 select-none" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">JEPRET</span>
                        </div>
                    </div>
                    
                    <div class="p-4 flex-grow flex flex-col">
                        <span class="text-[8px] font-bold text-gray-400 uppercase tracking-widest mb-1">CYCLING RIDE</span>
                        <h3 class="text-xs font-bold text-black mb-1 line-clamp-1">Kinerja Drivetrain Roadbike</h3>
                        <p class="text-[10px] text-gray-500 font-medium mb-3">Rute Lingkar Luar • 28 Ags 2026</p>
                        <p class="text-[9px] text-gray-400 mb-4 flex-grow">Sony A7 III • 70-200 GM</p>
                        
                        <div class="flex items-center justify-between border-t border-gray-100 pt-3">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 uppercase mb-0.5">Harga Standard</p>
                                <p class="text-sm font-black text-black">Rp 20.000</p>
                            </div>
                            <button class="bg-black text-white text-[10px] font-bold px-3 py-1.5 rounded-lg hover:bg-gray-800 transition">
                                Beli Foto
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Photo 8 -->
                <div class="bg-white group cursor-pointer border border-gray-200 rounded-2xl overflow-hidden hover:shadow-lg transition flex flex-col">
                    <div class="relative w-full aspect-[4/3] bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1571008887538-b36bb32f4571?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover group-hover:scale-105 transition duration-500" alt="Run">
                        
                        <div class="absolute top-2 left-2 bg-black/80 backdrop-blur-sm text-white text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            PROTECTED PREVIEW
                        </div>
                        <div class="absolute bottom-2 right-2 bg-white/90 backdrop-blur-sm text-black text-[8px] font-bold px-2 py-1 rounded shadow-sm">
                            ID: #DV-5034-0019
                        </div>
                        
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-20">
                            <span class="text-2xl font-black text-white tracking-widest uppercase transform -rotate-45 select-none" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">JEPRET</span>
                        </div>
                    </div>
                    
                    <div class="p-4 flex-grow flex flex-col">
                        <span class="text-[8px] font-bold text-gray-400 uppercase tracking-widest mb-1">CFD BANJARBARU</span>
                        <h3 class="text-xs font-bold text-black mb-1 line-clamp-1">Potret Pelari Santai CFD</h3>
                        <p class="text-[10px] text-gray-500 font-medium mb-3">Lapangan Murjani CFD • 5 Sep 2026</p>
                        <p class="text-[9px] text-gray-400 mb-4 flex-grow">Sony A7 III • 85mm F1.8</p>
                        
                        <div class="flex items-center justify-between border-t border-gray-100 pt-3">
                            <div>
                                <p class="text-[8px] font-bold text-gray-400 uppercase mb-0.5">Harga Standard</p>
                                <p class="text-sm font-black text-black">Rp 20.000</p>
                            </div>
                            <button class="bg-black text-white text-[10px] font-bold px-3 py-1.5 rounded-lg hover:bg-gray-800 transition">
                                Beli Foto
                            </button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Pagination -->
            <div class="flex justify-between items-center mt-10">
                <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest hidden sm:block">Menampilkan 1-8 dari 1.248 Foto Active</span>
                
                <div class="flex items-center gap-1.5 ml-auto">
                    <button class="w-8 h-8 rounded-md bg-white border border-gray-200 flex items-center justify-center text-gray-400 hover:bg-gray-50 transition" disabled>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button class="w-8 h-8 rounded-md bg-black text-white font-bold text-xs flex items-center justify-center shadow-sm">1</button>
                    <button class="w-8 h-8 rounded-md bg-white border border-gray-200 text-gray-700 font-semibold text-xs flex items-center justify-center hover:border-black transition">2</button>
                    <button class="w-8 h-8 rounded-md bg-white border border-gray-200 text-gray-700 font-semibold text-xs flex items-center justify-center hover:border-black transition">3</button>
                    <span class="w-6 text-center text-gray-400 text-xs">...</span>
                    <button class="w-8 h-8 rounded-md bg-white border border-gray-200 text-gray-700 font-semibold text-xs flex items-center justify-center hover:border-black transition">156</button>
                    <button class="w-8 h-8 rounded-md bg-white border border-gray-200 flex items-center justify-center text-gray-700 hover:border-black transition">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Section 4: Tentang Photographer -->
        <div class="bg-gray-50 border-t border-gray-100 py-16">
            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8">
                <div class="mb-8">
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest mb-1 block">• SERTIFIKASI & IDENTITAS</span>
                    <h2 class="text-2xl font-black text-black mb-2">Tentang Photographer</h2>
                    <p class="text-sm text-gray-500 font-medium max-w-2xl">
                        Informasi akreditasi, landasan profesional, lisensi legal, dan jaminan integritas arsip digital di platform JEPRET.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <!-- Info Box 1 -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-6">
                        <div class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 flex items-center justify-center mb-4">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-1">IDENTITAS STUDIO</p>
                        <h4 class="text-sm font-bold text-black mb-2">Dwi Visual</h4>
                        <p class="text-[10px] text-gray-500 font-medium leading-relaxed">
                            Dwi Saputra Studio - Fokus pada dokumentasi olahraga lari, sepeda, dan festival jalanan sejak 2019.
                        </p>
                    </div>

                    <!-- Info Box 2 -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-6">
                        <div class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 flex items-center justify-center mb-4">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-1">AREA OPERASIONAL</p>
                        <h4 class="text-sm font-bold text-black mb-2">Banjarbaru CFD</h4>
                        <p class="text-[10px] text-gray-500 font-medium leading-relaxed">
                            Kawasan Lapangan Murjani, Jl. Panglima Batur, dan rute lingkar luar Kota Banjarbaru setiap Minggu pagi.
                        </p>
                    </div>

                    <!-- Info Box 3 -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-6">
                        <div class="w-8 h-8 rounded-full bg-gray-100 text-gray-600 flex items-center justify-center mb-4">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-1">PERANGKAT KAMERA</p>
                        <h4 class="text-sm font-bold text-black mb-2">Sony Full Frame</h4>
                        <p class="text-[10px] text-gray-500 font-medium leading-relaxed">
                            Sony Alpha 7 III, Lensa FE 70-200mm f/2.8 GM OSS II, FE 24-70mm f/2.8 GM II, dan FE 85mm f/1.8 (prime).
                        </p>
                    </div>

                    <!-- Info Box 4 -->
                    <div class="bg-white border border-gray-200 rounded-2xl p-6">
                        <div class="w-8 h-8 rounded-full bg-green-50 text-green-600 flex items-center justify-center mb-4">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <p class="text-[9px] font-bold text-gray-400 uppercase tracking-widest mb-1">KEASLIAN & KEAMANAN</p>
                        <h4 class="text-sm font-bold text-black mb-2">Verified ID #8521</h4>
                        <p class="text-[10px] text-gray-500 font-medium leading-relaxed">
                            Fotografer ini telah lolos verifikasi file RAW (metadata kamera asli) dan identitas resmi sesuai E-KTP Nasional.
                        </p>
                    </div>
                </div>

                <!-- Copyright Banner -->
                <div class="bg-white border border-gray-200 rounded-xl p-4 flex flex-col md:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        <p class="text-[10px] text-gray-600 font-medium">Hak cipta dilindungi oleh <span class="font-bold text-black">JEPRET Digital Protection</span>. Lisensi personal untuk penggunaan media sosial non-komersial.</p>
                    </div>
                    <div class="flex items-center gap-2 shrink-0">
                        <span class="bg-green-50 text-green-700 text-[9px] font-bold px-2 py-1 rounded">QRIS TERSEDIA</span>
                        <span class="bg-gray-100 text-gray-600 text-[9px] font-bold px-2 py-1 rounded">INSTANT DOWNLOAD</span>
                    </div>
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
                        JEPRET
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
                <p>&copy; 2026 JEPRET Editorial Photography Archive. All rights reserved.</p>
                <p>Built for exclusive and & editorial photographic curation.</p>
            </div>
        </div>
    </footer>
</body>
</html>
