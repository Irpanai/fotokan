<x-fg-layout>
    <!-- Header Area -->
    <div class="flex justify-between items-start mb-8">
        <div>
            <div class="flex items-center gap-2 mb-2">
                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">STUDIO KURASI FOTOGRAFER • ID-CFD-8820</span>
            </div>
            <h1 class="text-3xl font-black text-black tracking-tight mb-2">Manajemen Foto & Cloud Upload</h1>
            <p class="text-sm text-gray-500 font-medium max-w-xl">
                Kelola kurasi galeri, hak cipta watermark, dan harga jual per foto. Komisi fotografer terdistribusi otomatis 70%.
            </p>
        </div>
        <div class="flex items-center gap-4 shrink-0">
            <div class="bg-gray-50 border border-gray-200 text-gray-500 text-[10px] font-bold px-4 py-3 rounded-lg shadow-sm flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                <div class="flex flex-col items-start leading-tight">
                    <span>S3-EDGE-JAKARTA:</span>
                    <span class="text-black">SYNCED</span>
                </div>
            </div>
            <button class="bg-black text-white text-xs font-bold px-6 py-3.5 rounded-lg shadow-sm hover:bg-gray-800 flex items-center gap-2 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                Publikasikan Semua Draf
            </button>
        </div>
    </div>

    <!-- Upload & Calculator Section -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        
        <!-- Upload Box -->
        <div class="lg:col-span-2 bg-white border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col">
            <div class="flex justify-between items-center mb-6">
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    <span class="text-xs font-bold text-black uppercase tracking-widest">UPLOAD STUDIO ENGINE</span>
                </div>
                <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest">RAW, JPEG, PNG • MAX 50MB</span>
            </div>

            <!-- Dropzone -->
            <div class="border-2 border-dashed border-gray-300 rounded-xl bg-gray-50/50 flex flex-col items-center justify-center py-12 mb-4 hover:bg-gray-50 transition cursor-pointer flex-grow">
                <div class="w-12 h-12 rounded-full bg-white border border-gray-200 shadow-sm flex items-center justify-center mb-4">
                    <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                </div>
                <h3 class="text-base font-bold text-black mb-1">Tarik & Lepas Foto Asli di Sini</h3>
                <p class="text-[10px] text-gray-500 font-medium mb-4">atau <span class="text-black font-bold underline">Pilih Berkas dari Komputer</span></p>
                <div class="flex gap-2">
                    <span class="px-2 py-1 bg-white border border-gray-200 rounded text-[9px] font-bold text-gray-400">Canon CR3</span>
                    <span class="px-2 py-1 bg-white border border-gray-200 rounded text-[9px] font-bold text-gray-400">Sony ARW</span>
                    <span class="px-2 py-1 bg-white border border-gray-200 rounded text-[9px] font-bold text-gray-400">Nikon NEF</span>
                    <span class="px-2 py-1 bg-white border border-gray-200 rounded text-[9px] font-bold text-gray-400">Lossless JPG</span>
                </div>
            </div>

            <!-- Upload Progress Mockup -->
            <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></div>
                    <div>
                        <h4 class="text-[10px] font-bold text-black">3 foto siap dipublikasikan ke event "Lapangan Murjani CFD 2026"</h4>
                        <p class="text-[9px] font-medium text-gray-400">Folder Target: /CFD-BANJARBARU-2026/SESSION-04</p>
                    </div>
                </div>
                <div class="flex gap-2 shrink-0">
                    <button class="px-4 py-2 bg-white border border-gray-200 text-gray-500 hover:text-black text-[10px] font-bold rounded-lg transition">Batal</button>
                    <button class="px-4 py-2 bg-black text-white text-[10px] font-bold rounded-lg hover:bg-gray-800 transition">Proses Metadata & Unggah</button>
                </div>
            </div>
        </div>

        <!-- Calculator Box -->
        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 shadow-sm flex flex-col justify-between">
            <div>
                <div class="flex justify-between items-start mb-6">
                    <div class="flex items-center gap-2 text-black">
                        <span class="font-bold text-lg">%</span>
                        <h3 class="text-xs font-bold uppercase tracking-widest">KALKULATOR BAGI HASIL (70 / 30)</h3>
                    </div>
                    <span class="bg-green-100 text-green-700 text-[9px] font-bold px-2 py-1 rounded">Skema Otomatis</span>
                </div>

                <div class="mb-4">
                    <label class="block text-[10px] font-bold text-gray-500 mb-2">Tentukan Harga Jual Foto (Rp)</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <span class="text-gray-400 text-xs font-bold">Rp</span>
                        </div>
                        <input type="text" value="20000" class="block w-full pl-8 pr-3 py-3 border border-gray-200 rounded-lg leading-5 bg-white text-black font-black text-lg focus:outline-none focus:ring-1 focus:ring-black focus:border-black transition">
                    </div>
                    <p class="text-[9px] font-medium text-gray-400 mt-2 leading-relaxed">Rekomendasi harga event CFD umum: Rp15.000 - Rp25.000</p>
                </div>

                <div class="border-t border-gray-200 pt-4 mb-4">
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-[10px] font-bold text-gray-500">Harga Jual Pembeli (100%)</span>
                        <span class="text-[10px] font-bold text-gray-400 line-through">Rp 20.000</span>
                    </div>
                    <div class="bg-white border border-gray-200 rounded-xl p-4 flex justify-between items-center shadow-sm">
                        <div class="flex items-center gap-2">
                            <div class="w-1.5 h-1.5 rounded-full bg-green-500"></div>
                            <span class="text-xs font-bold text-black">Pendapatan Bersih Anda (70%)</span>
                        </div>
                        <div class="text-right">
                            <span class="text-[10px] font-bold text-black block mb-0.5">Rp</span>
                            <span class="text-xl font-black text-black leading-none">14.000</span>
                        </div>
                    </div>
                    <div class="flex justify-between items-center mt-3">
                        <span class="text-[10px] font-bold text-gray-500">Biaya Platform & Server CDN (30%)</span>
                        <span class="text-[10px] font-bold text-gray-400">Rp 6.000</span>
                    </div>
                    <div class="h-1.5 w-full bg-gray-200 rounded-full overflow-hidden mt-2 flex">
                        <div class="h-full bg-black rounded-l-full" style="width: 70%;"></div>
                        <div class="h-full bg-gray-300 rounded-r-full" style="width: 30%;"></div>
                    </div>
                </div>
            </div>

            <div class="bg-white border border-gray-200 rounded-xl p-4 flex items-start gap-3">
                <svg class="w-4 h-4 text-gray-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                <p class="text-[9px] text-gray-500 leading-relaxed font-medium">
                    <span class="font-bold text-black">Watermark Proteksi Aktif:</span> Setiap foto yang diunggah akan otomatis disematkan watermark kriptis JEPRETCFD untuk proteksi pratinjau publik, resolusi penuh hanya dibuka setelah transaksi sukses.
                </p>
            </div>
        </div>
    </div>

    <!-- Catalog Section -->
    <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden mb-8">
        <div class="p-6 border-b border-gray-100 flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <div class="flex items-center gap-3">
                <h2 class="text-lg font-bold text-black">Katalog Foto Acara Aktif</h2>
                <span class="bg-gray-100 text-gray-500 text-[10px] font-bold px-2 py-1 rounded">142 Item</span>
            </div>
            
            <div class="flex items-center gap-2">
                <button class="bg-white border border-gray-200 text-gray-600 hover:text-black text-[10px] font-bold px-3 py-2 rounded-lg shadow-sm transition flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                    Ubah Harga Batch
                </button>
                <button class="bg-white border border-gray-200 text-gray-600 hover:text-black text-[10px] font-bold px-3 py-2 rounded-lg shadow-sm transition flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                    Arsipkan
                </button>
                <button class="bg-white border border-gray-200 text-gray-600 hover:text-black text-[10px] font-bold px-3 py-2 rounded-lg shadow-sm transition flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    Unduh Laporan
                </button>
                <button class="bg-red-50 border border-red-200 text-red-600 hover:bg-red-100 text-[10px] font-bold px-3 py-2 rounded-lg shadow-sm transition flex items-center gap-1.5 ml-2">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                    Hapus
                </button>
            </div>
        </div>
        
        <div class="px-6 pt-4 pb-2 border-b border-gray-100 flex justify-between items-center">
            <div class="flex gap-6">
                <button class="text-xs font-bold text-white bg-black px-4 py-1.5 rounded-full shadow-sm">Semua (142)</button>
                <button class="text-xs font-bold text-gray-500 hover:text-black py-1.5 transition">Dipublikasikan (128)</button>
                <button class="text-xs font-bold text-gray-500 hover:text-black py-1.5 transition">Terjual (86)</button>
                <button class="text-xs font-bold text-gray-500 hover:text-black py-1.5 transition">Draf (14)</button>
            </div>
            <div class="flex items-center gap-2">
                <input type="checkbox" class="rounded border-gray-300 text-black focus:ring-black">
                <label class="text-[10px] font-medium text-gray-500">Pilih Semua (142 Foto)</label>
            </div>
        </div>

        <!-- Photo Grid -->
        <div class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 bg-gray-50/50">
            
            <!-- Photo Card 1 (Aktif) -->
            <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm flex flex-col group relative">
                <div class="absolute top-3 left-3 z-10 bg-white rounded shadow-sm">
                    <input type="checkbox" class="m-2 rounded border-gray-300 text-black focus:ring-black cursor-pointer">
                </div>
                <div class="absolute top-3 right-3 z-10">
                    <span class="bg-green-100/90 backdrop-blur-sm text-green-700 text-[10px] font-bold px-2 py-1.5 rounded shadow-sm">Aktif di Marketplace</span>
                </div>
                
                <div class="relative w-full aspect-video bg-gray-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1552674605-15c2145e9ca4?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover grayscale" alt="Preview">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                        <span class="text-lg font-black text-white/50 tracking-widest uppercase transform -rotate-12 border border-white/30 px-3 py-1 rounded">© JEPRETCFD PREVIEW</span>
                    </div>
                </div>
                
                <div class="p-4 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xs font-black text-black uppercase tracking-wider">CFD_MURJANI_8821.JPG</h3>
                        <span class="text-[9px] font-bold text-gray-400">24.2 MB</span>
                    </div>
                    <p class="text-[9px] font-medium text-gray-500 mb-4 leading-relaxed">
                        Sony A7 IV • 24 MP • f/2.8 • 1/1250s • ISO 200
                    </p>
                    
                    <div class="bg-gray-50 rounded-lg p-3 grid grid-cols-2 gap-4 mb-4 mt-auto">
                        <div>
                            <span class="text-[9px] font-bold text-gray-400 block mb-0.5">Harga Satuan:</span>
                            <span class="text-xs font-bold text-black">Rp 20.000 <span class="text-[9px] font-medium text-gray-400">(Net Rp 14.000)</span></span>
                        </div>
                        <div>
                            <span class="text-[9px] font-bold text-gray-400 block mb-0.5">Statistik Penjualan:</span>
                            <span class="text-[9px] font-medium text-gray-500">42 tayangan • <span class="text-green-600 font-bold">6 terjual (Rp 84.000)</span></span>
                        </div>
                    </div>
                    
                    <div class="flex justify-between items-center pt-2">
                        <div class="flex gap-2 text-gray-400">
                            <button class="hover:text-black transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg></button>
                            <button class="hover:text-black transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></button>
                        </div>
                        <button class="text-[10px] font-bold text-gray-600 border border-gray-200 bg-white hover:bg-gray-50 px-3 py-1.5 rounded shadow-sm transition">
                            Ubah Harga
                        </button>
                    </div>
                </div>
            </div>

            <!-- Photo Card 2 (Draf) -->
            <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm flex flex-col group relative">
                <div class="absolute top-3 left-3 z-10 bg-white rounded shadow-sm">
                    <input type="checkbox" class="m-2 rounded border-gray-300 text-black focus:ring-black cursor-pointer" checked>
                </div>
                <div class="absolute top-3 right-3 z-10">
                    <span class="bg-gray-100/90 backdrop-blur-sm text-gray-600 text-[10px] font-bold px-2 py-1.5 rounded shadow-sm">Draf</span>
                </div>
                
                <div class="relative w-full aspect-video bg-gray-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1517649763962-0c623066013b?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover grayscale opacity-90" alt="Preview">
                    <div class="absolute inset-0 bg-black/50 flex items-center justify-center">
                        <span class="text-lg font-black text-white/50 tracking-widest uppercase transform -rotate-12 border border-white/30 px-3 py-1 rounded">© JEPRETCFD PREVIEW</span>
                    </div>
                </div>
                
                <div class="p-4 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xs font-black text-black uppercase tracking-wider">CFD_MURJANI_8822.JPG</h3>
                        <span class="text-[9px] font-bold text-gray-400">31.8 MB</span>
                    </div>
                    <p class="text-[9px] font-medium text-gray-500 mb-4 leading-relaxed">
                        Sony A7 IV • 24 MP • f/2.0 • 1/2000s • ISO 160
                    </p>
                    
                    <div class="bg-gray-50 rounded-lg p-3 grid grid-cols-2 gap-4 mb-4 mt-auto">
                        <div>
                            <span class="text-[9px] font-bold text-gray-400 block mb-0.5">Harga Satuan:</span>
                            <span class="text-xs font-bold text-black">Rp 20.000 <span class="text-[9px] font-medium text-gray-400">(Net Rp 14.000)</span></span>
                        </div>
                        <div>
                            <span class="text-[9px] font-bold text-gray-400 block mb-0.5">Statistik Penjualan:</span>
                            <span class="text-[9px] font-medium text-gray-400">0 tayangan • 0 terjual (Belum Tayang)</span>
                        </div>
                    </div>
                    
                    <div class="flex justify-between items-center pt-2">
                        <div class="flex gap-2 text-gray-400">
                            <button class="hover:text-black transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></button>
                            <button class="hover:text-black transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></button>
                        </div>
                        <button class="text-[10px] font-bold text-white bg-black hover:bg-gray-800 px-3 py-1.5 rounded shadow-sm transition">
                            Terbitkan Foto
                        </button>
                    </div>
                </div>
            </div>

            <!-- Photo Card 3 (Terjual Eksklusif) -->
            <div class="bg-white border border-gray-200 rounded-xl overflow-hidden shadow-sm flex flex-col group relative opacity-80">
                <div class="absolute top-3 left-3 z-10 bg-white rounded shadow-sm">
                    <input type="checkbox" class="m-2 rounded border-gray-300 text-black focus:ring-black cursor-pointer">
                </div>
                <div class="absolute top-3 right-3 z-10">
                    <span class="bg-black/90 backdrop-blur-sm text-white text-[10px] font-bold px-2 py-1.5 rounded shadow-sm">Terjual Habis (Eksklusif)</span>
                </div>
                
                <div class="relative w-full aspect-video bg-gray-100 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1571008887538-b36bb32f4571?q=80&w=600&auto=format&fit=crop" class="w-full h-full object-cover grayscale" alt="Preview">
                    <div class="absolute inset-0 bg-black/60 flex items-center justify-center">
                        <span class="text-lg font-black text-white/40 tracking-widest uppercase transform -rotate-12 border border-white/20 px-3 py-1 rounded">© JEPRETCFD PREVIEW</span>
                    </div>
                </div>
                
                <div class="p-4 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-2">
                        <h3 class="text-xs font-black text-gray-500 uppercase tracking-wider">CFD_MURJANI_8824.JPG</h3>
                        <span class="text-[9px] font-bold text-gray-400">28.4 MB</span>
                    </div>
                    <p class="text-[9px] font-medium text-gray-400 mb-4 leading-relaxed">
                        Sony A7 IV • 24 MP • f/4.0 • 1/800s • ISO 100
                    </p>
                    
                    <div class="bg-gray-50 rounded-lg p-3 grid grid-cols-2 gap-4 mb-4 mt-auto">
                        <div>
                            <span class="text-[9px] font-bold text-gray-400 block mb-0.5">Harga Lisensi Penuh:</span>
                            <span class="text-xs font-bold text-gray-500">Rp 75.000 <span class="text-[9px] font-medium text-gray-400">(Net Rp 52.500)</span></span>
                        </div>
                        <div>
                            <span class="text-[9px] font-bold text-gray-400 block mb-0.5">Statistik Penjualan:</span>
                            <span class="text-[9px] font-medium text-gray-500">118 tayangan • <span class="text-green-700 font-bold">1 Terjual Komersial</span></span>
                        </div>
                    </div>
                    
                    <div class="flex justify-between items-center pt-2">
                        <div class="flex gap-2 text-gray-300">
                            <button class="hover:text-gray-500 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg></button>
                            <button class="hover:text-gray-500 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg></button>
                        </div>
                        <button class="text-[10px] font-bold text-gray-400 border border-gray-200 bg-white hover:bg-gray-50 px-3 py-1.5 rounded shadow-sm transition">
                            Lihat Lisensi
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="p-6 border-t border-gray-100 flex justify-between items-center">
            <span class="text-[10px] font-medium text-gray-400">Menampilkan 1-3 dari 142 berkas foto digital</span>
            <div class="flex items-center gap-1">
                <button class="w-8 h-8 flex items-center justify-center border border-gray-200 rounded text-gray-400 hover:bg-gray-50 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg></button>
                <button class="w-8 h-8 flex items-center justify-center bg-black text-white font-bold text-xs rounded shadow-sm">1</button>
                <button class="w-8 h-8 flex items-center justify-center border border-gray-200 rounded text-gray-600 hover:bg-gray-50 transition text-xs font-bold">2</button>
                <button class="w-8 h-8 flex items-center justify-center border border-gray-200 rounded text-gray-600 hover:bg-gray-50 transition text-xs font-bold">3</button>
                <span class="w-6 text-center text-gray-400 text-xs">...</span>
                <button class="w-8 h-8 flex items-center justify-center border border-gray-200 rounded text-gray-600 hover:bg-gray-50 transition text-xs font-bold">48</button>
                <button class="w-8 h-8 flex items-center justify-center border border-gray-200 rounded text-gray-600 hover:bg-gray-50 transition"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg></button>
            </div>
        </div>

    </div>
</x-fg-layout>
