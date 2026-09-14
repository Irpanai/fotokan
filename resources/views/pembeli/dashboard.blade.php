<x-pembeli-layout>
    <div class="space-y-8">
        
        <!-- Header Section -->
        <div>
            <div class="flex flex-col md:flex-row md:items-start justify-between gap-6">
                <!-- Left: Welcome & Info -->
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-[10px] font-bold tracking-widest text-gray-400 uppercase">Member Portal - ID: #CFD-USER-{{ str_pad(Auth::id(), 4, '0', STR_PAD_LEFT) }}</span>
                    </div>
                    <div class="flex items-center gap-2 mb-4">
                        <div class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-green-50 text-green-700 border border-green-200/60 text-[10px] font-bold">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Verified Runner
                        </div>
                        <div class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded-md bg-gray-50 text-gray-600 border border-gray-200 text-[10px] font-bold">
                            <div class="w-1.5 h-1.5 rounded-full bg-teal-500"></div>
                            Cloud Sync Active
                        </div>
                    </div>
                    
                    <h1 class="text-3xl md:text-4xl font-black text-gray-900 mb-2 tracking-tight">
                        Selamat datang, {{ explode(' ', Auth::user()->name)[0] }}
                    </h1>
                    <p class="text-gray-500 font-medium text-sm">Kelola lisensi personal, unduh master resolusi tinggi (24-45MP), dan telusuri dokumentasi CFD Anda.</p>
                </div>

                <!-- Right: Actions -->
                <div class="flex flex-wrap items-center gap-3 mt-4 md:mt-0">
                    <button class="inline-flex items-center gap-2 px-4 py-2.5 bg-white border border-gray-200 rounded-lg text-xs font-bold text-gray-700 hover:bg-gray-50 transition-colors shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        Jelajahi Foto
                    </button>
                    <button class="inline-flex items-center gap-2 px-4 py-2.5 bg-white border border-gray-200 rounded-lg text-xs font-bold text-gray-700 hover:bg-gray-50 transition-colors shadow-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        Cari Nomor Dada
                    </button>
                    <button class="inline-flex items-center gap-2 px-4 py-2.5 bg-black text-white rounded-lg text-xs font-bold hover:bg-gray-800 transition-colors shadow-md">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        Unduh Semua Master (ZIP)
                    </button>
                </div>
            </div>
        </div>

        <!-- 4 Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Card 1 -->
            <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.05)] flex flex-col justify-between h-full min-h-[160px]">
                <div>
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Koleksi Terverifikasi</span>
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    @php $purchasedCount = \App\Models\Transaction::where('pembeli_id', Auth::id())->where('status', 'paid')->count(); @endphp
                    <div class="flex items-baseline gap-2 mb-2">
                        <h3 class="text-3xl font-black text-gray-900 tracking-tighter">{{ $purchasedCount ?: 14 }}</h3>
                        <span class="text-[10px] font-bold text-gray-500 uppercase tracking-wide">Foto Master</span>
                    </div>
                    <p class="text-[10px] text-gray-500 leading-relaxed font-medium">Resolusi penuh 24-45MP, siap cetak offset & digital A2.</p>
                </div>
                <div class="mt-4 pt-3 border-t border-gray-100 flex justify-between items-center text-[10px] font-bold text-gray-400 uppercase">
                    Bebas Watermark
                    <svg class="w-3.5 h-3.5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.05)] flex flex-col justify-between h-full min-h-[160px]">
                <div>
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Event Diikuti</span>
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="flex items-baseline gap-2 mb-2">
                        <h3 class="text-3xl font-black text-gray-900 tracking-tighter">5</h3>
                        <span class="text-[10px] font-bold text-gray-500 uppercase tracking-wide">Titik Lintasan</span>
                    </div>
                    <p class="text-[10px] text-gray-500 leading-relaxed font-medium">Sudirman, Murjani, Banjarbaru 10K, dll.</p>
                </div>
                <div class="mt-4 pt-3 border-t border-gray-100 flex justify-between items-center text-[10px] font-semibold text-gray-400">
                    <span>Terakhir: Sudirman Loop</span>
                    <span class="font-mono font-bold text-gray-900">18 Mei 2026</span>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.05)] flex flex-col justify-between h-full min-h-[160px]">
                <div>
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Total Belanja Foto</span>
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
                    </div>
                    <h3 class="text-3xl font-black text-gray-900 tracking-tighter mb-2">Rp280.000</h3>
                    <p class="text-[10px] text-gray-500 leading-relaxed font-medium">7 Transaksi sukses via QRIS Real-time Settlement.</p>
                </div>
                <div class="mt-4 pt-3 border-t border-gray-100 flex justify-between items-center text-[10px] font-bold text-gray-400 uppercase">
                    Semua Invoice Lunas
                    <svg class="w-3.5 h-3.5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path></svg>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-xl p-5 border border-gray-100 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.05)] flex flex-col justify-between h-full min-h-[160px]">
                <div>
                    <div class="flex justify-between items-start mb-2">
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Menunggu Checkout</span>
                        <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    </div>
                    <div class="flex items-baseline gap-2 mb-2">
                        <h3 class="text-3xl font-black text-gray-900 tracking-tighter">8</h3>
                        <span class="text-[10px] font-bold text-gray-500 uppercase tracking-wide">Item Wishlist</span>
                    </div>
                    <p class="text-[10px] text-gray-500 leading-relaxed font-medium">Estimasi total Rp160.000 (diskon bundle siap pakai).</p>
                </div>
                <div class="mt-4 pt-3 border-t border-gray-100 flex justify-between items-center text-[10px] font-bold text-gray-900 cursor-pointer hover:text-red-600 transition-colors group">
                    Lihat Antrean
                    <span class="text-red-500 uppercase flex items-center gap-1 group-hover:translate-x-1 transition-transform">
                        Segera Kedaluwarsa <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </span>
                </div>
            </div>
        </div>

        <!-- AI Banner Enhanced (Monochrome Minimalist) -->
        <div class="relative rounded-3xl p-6 md:p-8 overflow-hidden flex flex-col md:flex-row items-center justify-between gap-8 shadow-[0_8px_30px_rgb(0,0,0,0.12)] bg-black border border-gray-800 group">
            
            <!-- Minimalist Glow -->
            <div class="absolute -top-24 -left-24 w-64 h-64 bg-white/5 rounded-full blur-3xl group-hover:bg-white/10 transition-all duration-700"></div>
            <div class="absolute -bottom-24 -right-24 w-64 h-64 bg-white/5 rounded-full blur-3xl group-hover:bg-white/10 transition-all duration-700"></div>
            
            <!-- Decorative dots -->
            <div class="absolute right-12 top-1/2 -translate-y-1/2 hidden md:grid grid-cols-4 gap-3 opacity-20">
                @for($i=0; $i<16; $i++)
                <div class="w-2 h-2 rounded-full bg-white/40"></div>
                @endfor
            </div>

            <div class="relative z-10 max-w-xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/5 text-white border border-white/10 text-[10px] font-bold uppercase tracking-widest mb-5 backdrop-blur-md">
                    <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                    AI Vision Engine V2.4
                </div>
                <h2 class="text-3xl md:text-4xl font-black text-white mb-4 tracking-tight leading-tight">Pencarian Instan Foto Saya <br><span class="text-gray-400">(AI Bib & Face Match)</span></h2>
                <p class="text-gray-400 text-sm leading-relaxed mb-6 font-medium">Sistem secara otomatis mendeteksi kecocokan nomor dada dan profil pelari dari ribuan foto unggahan fotografer CFD terakreditasi.</p>
                
                <div class="flex items-center gap-2 text-white text-xs font-bold bg-white/5 inline-flex px-3 py-2 rounded-lg border border-white/10 backdrop-blur-sm">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                    6 kecocokan baru ditemukan di CFD Sudirman kemarin pagi!
                </div>
            </div>
            
            <div class="relative z-10 w-full md:w-auto md:min-w-[340px]">
                <form action="#" method="GET" class="relative group/form">
                    <div class="absolute -inset-1 bg-white rounded-xl blur opacity-10 group-hover/form:opacity-20 transition duration-500"></div>
                    <div class="relative flex items-center bg-white rounded-xl overflow-hidden p-1 shadow-lg">
                        <div class="pl-4 flex items-center">
                            <span class="text-gray-400 text-xs font-mono font-bold tracking-widest">#BIB</span>
                        </div>
                        <input type="text" name="q" placeholder="Contoh: 338" value="338" class="w-full bg-transparent text-gray-900 rounded-none pl-3 pr-2 py-3 focus:ring-0 border-0 font-black text-xl outline-none placeholder-gray-300">
                        <button type="submit" class="bg-black hover:bg-gray-800 text-white font-bold px-6 py-3.5 rounded-lg text-sm flex items-center gap-2 transition-colors shrink-0">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                            Cari Momen
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Master Asset Repository -->
        <div>
            <div class="flex items-center justify-between mb-4 mt-2">
                <div class="flex items-center gap-2">
                    <div class="w-1.5 h-1.5 rounded-full bg-green-500"></div>
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Master Asset Repository</span>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row justify-between items-end gap-4 mb-6">
                <h2 class="text-xl font-black text-gray-900 tracking-tight">Foto Terbaru yang Anda Beli (Siap Unduh Resolusi Asli)</h2>
                <a href="{{ route('pembeli.library') }}" class="text-[11px] font-bold text-gray-500 hover:text-black flex items-center gap-1 transition-colors">
                    Menampilkan 3 dari 14 foto master <span class="text-gray-900 ml-1">Lihat Semua</span> <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </a>
            </div>

            <!-- Photos Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                @php
                    $recentPurchases = \App\Models\Transaction::where('pembeli_id', Auth::id())
                        ->where('status', 'paid')
                        ->with('photo.event')
                        ->latest()
                        ->take(3)
                        ->get();
                @endphp

                @if($recentPurchases->isEmpty())
                    <!-- Mock Data for Display (since it might be empty on fresh seed) -->
                    @for($i=1; $i<=3; $i++)
                    <div class="bg-white rounded-xl overflow-hidden border border-gray-100 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.05)] group">
                        <div class="relative aspect-[4/3] bg-gray-100 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1552674605-15c2145eba11?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Running" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <!-- Badges -->
                            <div class="absolute top-2 left-2 flex gap-1.5">
                                <div class="bg-green-50/90 backdrop-blur-sm text-green-700 border border-green-200 text-[9px] font-bold px-1.5 py-0.5 rounded flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    LUNAS (QRIS)
                                </div>
                                <div class="bg-gray-900/90 backdrop-blur-sm text-white border border-gray-700 text-[9px] font-bold px-1.5 py-0.5 rounded">
                                    MASTER RAW
                                </div>
                            </div>
                            <div class="absolute bottom-2 right-2 bg-white/90 backdrop-blur-sm text-gray-800 text-[9px] font-mono font-bold px-1.5 py-0.5 rounded shadow-sm">
                                45.2 MP • 8192 × 5464
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-center text-[10px] text-gray-400 font-mono mb-2">
                                <span>CFD Jakarta • Sudirman Loop</span>
                                <span>18 Mei 2026</span>
                            </div>
                            <h3 class="font-bold text-sm text-gray-900 mb-4 line-clamp-1">Pacing Sprint Menjelang Bundaran HI</h3>
                            
                            <div class="grid grid-cols-[70px_1fr] gap-y-2 text-[10px] mb-5">
                                <div class="text-gray-400 font-medium">Fotografer:</div>
                                <div class="font-mono font-semibold text-gray-800">Dwi Visual<br><span class="text-gray-400 font-normal">(@dwisportshot)</span></div>
                                <div class="text-gray-400 font-medium mt-1.5">Kamera & Lensa:</div>
                                <div class="font-mono font-semibold text-gray-800 mt-1.5">Sony A7 IV • FE 70-200mm<br>f/2.8 GM</div>
                                <div class="text-gray-400 font-medium mt-1.5">Exposure:</div>
                                <div class="font-mono font-semibold text-gray-800 mt-1.5">1/1000s • f/2.8 • ISO 160</div>
                            </div>

                            <div class="flex gap-2">
                                <button class="flex-1 bg-black hover:bg-gray-800 text-white font-bold py-2 rounded-lg text-xs flex items-center justify-center gap-1.5 transition-colors">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    Unduh Master (34MB)
                                </button>
                                <button class="w-8 h-8 border border-gray-200 rounded-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </button>
                                <button class="w-8 h-8 border border-gray-200 rounded-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endfor
                @else
                    <!-- Actual Data Loop -->
                    @foreach($recentPurchases as $transaction)
                    <div class="bg-white rounded-xl overflow-hidden border border-gray-100 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.05)] group">
                        <div class="relative aspect-[4/3] bg-gray-100 overflow-hidden">
                            <img src="{{ Storage::url($transaction->photo->original_path ?? '') }}" alt="Purchased Photo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <!-- Badges -->
                            <div class="absolute top-2 left-2 flex gap-1.5">
                                <div class="bg-green-50/90 backdrop-blur-sm text-green-700 border border-green-200 text-[9px] font-bold px-1.5 py-0.5 rounded flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    LUNAS (QRIS)
                                </div>
                                <div class="bg-gray-900/90 backdrop-blur-sm text-white border border-gray-700 text-[9px] font-bold px-1.5 py-0.5 rounded">
                                    MASTER RAW
                                </div>
                            </div>
                            <div class="absolute bottom-2 right-2 bg-white/90 backdrop-blur-sm text-gray-800 text-[9px] font-mono font-bold px-1.5 py-0.5 rounded shadow-sm">
                                45.2 MP • 8192 × 5464
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex justify-between items-center text-[10px] text-gray-400 font-mono mb-2">
                                <span>{{ $transaction->photo->event->nama_event ?? 'CFD Jakarta' }}</span>
                                <span>{{ $transaction->created_at->format('d M Y') }}</span>
                            </div>
                            <h3 class="font-bold text-sm text-gray-900 mb-4 line-clamp-1">Moment Lari {{ $transaction->photo->event->nama_event ?? 'CFD' }}</h3>
                            
                            <div class="grid grid-cols-[70px_1fr] gap-y-2 text-[10px] mb-5">
                                <div class="text-gray-400 font-medium">Fotografer:</div>
                                <div class="font-mono font-semibold text-gray-800">Fotografer<br><span class="text-gray-400 font-normal">(@fotografer)</span></div>
                                <div class="text-gray-400 font-medium mt-1.5">Kamera & Lensa:</div>
                                <div class="font-mono font-semibold text-gray-800 mt-1.5">-<br>-</div>
                                <div class="text-gray-400 font-medium mt-1.5">Exposure:</div>
                                <div class="font-mono font-semibold text-gray-800 mt-1.5">-</div>
                            </div>

                            <div class="flex gap-2">
                                <a href="{{ Storage::url($transaction->photo->original_path ?? '') }}" download class="flex-1 bg-black hover:bg-gray-800 text-white font-bold py-2 rounded-lg text-xs flex items-center justify-center gap-1.5 transition-colors">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    Unduh Master
                                </a>
                                <button class="w-8 h-8 border border-gray-200 rounded-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </button>
                                <button class="w-8 h-8 border border-gray-200 rounded-lg flex items-center justify-center text-gray-600 hover:bg-gray-50 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>

        <!-- Bottom Grid Section -->
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_360px] gap-6 pt-4 border-t border-gray-200/50">
            
            <!-- Left: Keranjang & Wishlist (Foto Terpantau) -->
            <div>
                <div class="flex items-center gap-2 mb-3">
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-400"></div>
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Keranjang & Wishlist</span>
                </div>
                
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-black text-gray-900 tracking-tight">Foto Terpantau (Siap Dibeli)</h2>
                    <button class="bg-black hover:bg-gray-800 text-white font-bold px-3 py-1.5 rounded text-[11px] flex items-center gap-1.5 transition-colors shadow-sm">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        Checkout Semua (Rp60.000)
                    </button>
                </div>

                <div class="space-y-3">
                    <!-- Wishlist Items -->
                    @for($i=1; $i<=3; $i++)
                    <div class="bg-white rounded-lg border border-gray-200 p-2.5 flex gap-3 items-center group shadow-sm">
                        <div class="w-28 h-16 bg-gray-200 rounded overflow-hidden relative shrink-0">
                            <img src="https://images.unsplash.com/photo-1552674605-15c2145eba11?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" alt="Preview" class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="bg-black/90 text-white text-[7px] font-black uppercase px-2 py-0.5 rotate-12 tracking-widest shadow-md border border-white/10">
                                    JEPRET<br>PREVIEW
                                </div>
                            </div>
                            <div class="absolute bottom-1 left-1 bg-black/70 text-white text-[7px] px-1 py-0.5 rounded backdrop-blur-sm font-semibold tracking-wide">Watermarked</div>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex justify-between items-start mb-0.5">
                                <div class="text-[9px] text-gray-500 font-mono tracking-wide">CFD Sudirman - Gelora Bung Karno</div>
                                <div class="font-black text-sm text-gray-900 tracking-tight">Rp20.000</div>
                            </div>
                            <h4 class="font-bold text-xs text-gray-900 truncate mb-0.5">Langkah Panjang Menuju Gate 5 Senayan</h4>
                            <p class="text-[10px] text-gray-500 truncate mb-1.5">Karya: Fajar Lensa Runners • Resolusi: 36MP...</p>
                            <div class="flex items-center gap-3">
                                <span class="text-[9px] font-bold text-teal-600 flex items-center gap-1 uppercase tracking-wide">
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    Siap Unduh Langsung
                                </span>
                                <button class="text-gray-400 hover:text-red-500 transition-colors ml-auto p-1">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                </button>
                                <button class="bg-black hover:bg-gray-800 text-white text-[10px] font-bold px-3 py-1.5 rounded flex items-center gap-1 transition-colors shadow-sm">
                                    Bayar QRIS
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>

            <!-- Right: Settlement History & Licenses -->
            <div class="space-y-6">
                <!-- Settlement History -->
                <div>
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Settlement History</span>
                        <a href="#" class="text-[10px] font-bold text-gray-500 hover:text-black flex items-center gap-1 transition-colors">
                            Semua <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                    
                    <h2 class="text-lg font-black text-gray-900 mb-3 tracking-tight">Riwayat Transaksi Terakhir</h2>
                    
                    <div class="bg-white rounded-xl border border-gray-100 divide-y divide-gray-50 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.05)]">
                        @for($i=1; $i<=3; $i++)
                        <div class="p-3">
                            <div class="flex justify-between items-start mb-1.5">
                                <div class="text-[10px] font-mono font-bold text-gray-500">#TR-CFD-9912{{ $i }}</div>
                                <div class="bg-green-50 text-green-700 text-[8px] font-black px-1.5 py-0.5 rounded uppercase tracking-widest border border-green-200/50">Lunas</div>
                            </div>
                            <div class="flex justify-between items-center mb-1">
                                <div class="text-[10px] font-medium text-gray-500">18 Mei 2026 • 09:42 WIB</div>
                                <div class="font-black text-xs text-gray-900">Rp40.000 <span class="text-gray-400 font-semibold text-[10px] ml-1">(2 Master)</span></div>
                            </div>
                            <div class="flex justify-between items-center mt-2">
                                <div class="text-[10px] font-medium text-gray-600 truncate mr-2">CFD Jakarta (Sudirman Loop)</div>
                                <a href="#" class="text-[10px] font-bold text-gray-600 hover:text-black flex items-center gap-1 shrink-0 transition-colors">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                    Invoice PDF
                                </a>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>

                <!-- License -->
                <div class="bg-gray-50 rounded-xl p-4 border border-gray-200">
                    <div class="flex gap-3 items-start mb-3">
                        <div class="w-7 h-7 rounded-full bg-white border border-gray-200 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                        </div>
                        <div>
                            <h4 class="font-bold text-xs text-gray-900">Hak Lisensi Personal JEPRET</h4>
                            <p class="text-[9px] text-gray-500 font-mono tracking-wide mt-0.5">Personal Non-Commercial Rights</p>
                        </div>
                    </div>
                    <p class="text-[10px] text-gray-600 mb-3 leading-relaxed">Setiap file master foto yang Anda beli menyertakan hak penggunaan penuh non-komersial seumur hidup:</p>
                    <ul class="text-[10px] text-gray-600 space-y-2 mb-4">
                        <li class="flex gap-2 items-start leading-relaxed">
                            <svg class="w-3.5 h-3.5 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Posting bebas di Instagram, Strava, TikTok & media sosial pribadi tanpa batas waktu.
                        </li>
                        <li class="flex gap-2 items-start leading-relaxed">
                            <svg class="w-3.5 h-3.5 text-green-500 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Cetak fisik resolusi tinggi (Art Paper, Kanvas, Akrilik) hingga ukuran poster <strong>A2 (42x59.4 cm)</strong>.
                        </li>
                        <li class="flex gap-2 items-start leading-relaxed">
                            <svg class="w-3.5 h-3.5 text-red-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            Tidak diizinkan untuk promosi brand komersial/sponsor tanpa add-on lisensi komersial fotografer.
                        </li>
                    </ul>
                    <a href="#" class="text-[10px] font-bold text-gray-900 border-b border-gray-900 pb-0.5 hover:text-gray-500 hover:border-gray-500 transition-colors inline-flex items-center gap-1">
                        Baca Petunjuk Lisensi Standar JEPRET
                        <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>

            </div>
        </div>
        
    </div>
</x-pembeli-layout>
