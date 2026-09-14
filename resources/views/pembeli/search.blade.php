<x-pembeli-layout>
    <div class="space-y-8">
        
        <!-- Header Section -->
        <div>
            <div class="flex items-center gap-3 mb-2">
                <span class="text-[10px] font-bold tracking-widest text-gray-400 uppercase">AI Search Results</span>
            </div>
            <h1 class="text-3xl md:text-4xl font-black text-gray-900 mb-2 tracking-tight">
                Hasil Pencarian
            </h1>
            <p class="text-gray-500 font-medium text-sm">
                Menampilkan hasil untuk: <span class="font-bold text-black">"{{ $query }}"</span>
            </p>
        </div>

        <!-- Search Form -->
        <div class="bg-black rounded-2xl p-6 md:p-8 flex flex-col md:flex-row items-center justify-between gap-6 shadow-lg border border-gray-800 relative overflow-hidden">
            <div class="absolute -top-24 -left-24 w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
            
            <div class="relative z-10 w-full md:w-1/2">
                <h3 class="text-white font-bold text-xl mb-2">Cari Foto Lainnya</h3>
                <p class="text-gray-400 text-xs mb-4">Gunakan nomor bib, warna baju, atau lokasi.</p>
            </div>
            
            <div class="relative z-10 w-full md:w-1/2">
                <form action="{{ route('pembeli.search') }}" method="GET" class="relative">
                    <div class="flex items-center bg-white rounded-xl overflow-hidden p-1">
                        <div class="pl-4">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="text" name="q" placeholder="Cari..." value="{{ $query }}" class="w-full bg-transparent text-gray-900 rounded-none pl-3 pr-2 py-3 focus:ring-0 border-0 font-bold outline-none placeholder-gray-400">
                        <button type="submit" class="bg-black hover:bg-gray-800 text-white font-bold px-6 py-3 rounded-lg text-sm transition-colors">
                            Cari
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Photos Grid -->
        <div class="mt-8">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-lg font-black text-gray-900">Ditemukan {{ $photos->count() }} foto</h2>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse($photos as $photo)
                <div class="bg-white rounded-xl overflow-hidden border border-gray-200 shadow-sm group cursor-pointer hover:shadow-md transition">
                    <div class="relative aspect-[3/4] bg-gray-100 overflow-hidden">
                        <img src="{{ Storage::url($photo->file_watermark) }}" alt="Result" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        
                        <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center backdrop-blur-[2px]">
                            <a href="{{ route('marketplace.show', $photo->id) }}" class="bg-white text-black text-xs font-bold px-4 py-2 rounded-lg shadow-lg transform translate-y-4 group-hover:translate-y-0 transition-all">Lihat Detail</a>
                        </div>

                        <!-- Watermark Overlay -->
                        <div class="absolute inset-0 flex items-center justify-center pointer-events-none opacity-30">
                            <span class="text-xl font-black text-white tracking-widest uppercase transform -rotate-45" style="text-shadow: 1px 1px 2px rgba(0,0,0,0.8);">JEPRET</span>
                        </div>
                    </div>
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-1">
                            <span class="text-[10px] font-bold text-gray-400">#CFD-{{ str_pad($photo->id, 4, '0', STR_PAD_LEFT) }}</span>
                            <span class="text-[10px] font-medium text-gray-400">{{ $photo->event->nama_event ?? 'Event' }}</span>
                        </div>
                        <h4 class="text-sm font-bold text-gray-900 truncate mb-3">Foto Momen CFD</h4>
                        <div class="flex items-center justify-between">
                            <span class="text-base font-black text-gray-900">Rp{{ number_format($photo->harga, 0, ',', '.') }}</span>
                            <a href="{{ route('marketplace.show', $photo->id) }}" class="text-gray-400 hover:text-black transition">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full py-16 flex flex-col items-center justify-center bg-gray-50 rounded-2xl border border-dashed border-gray-200">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-sm mb-4">
                        <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <h3 class="text-lg font-bold text-gray-900 mb-1">Tidak Ditemukan</h3>
                    <p class="text-sm text-gray-500 mb-4">Maaf, kami tidak menemukan foto dengan kata kunci "{{ $query }}".</p>
                    <a href="{{ url('/') }}" class="bg-black text-white text-xs font-bold px-6 py-2.5 rounded-lg hover:bg-gray-800 transition">Kembali ke Beranda</a>
                </div>
                @endforelse
            </div>
        </div>
        
    </div>
</x-pembeli-layout>
