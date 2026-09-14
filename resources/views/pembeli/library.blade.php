<x-pembeli-layout>
    <div class="space-y-8">
        
        <!-- Header Section -->
        <div>
            <div class="flex flex-col md:flex-row md:items-start justify-between gap-6">
                <div>
                    <div class="flex items-center gap-3 mb-2">
                        <span class="text-[10px] font-bold tracking-widest text-gray-400 uppercase">Master Asset Repository</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-black text-gray-900 mb-2 tracking-tight">
                        Library Foto Saya
                    </h1>
                    <p class="text-gray-500 font-medium text-sm max-w-2xl">
                        Semua aset foto resolusi tinggi (Master RAW/JPEG) yang telah Anda beli tersedia di sini. Tautan unduhan aktif permanen selamanya berkat integrasi Cloud Sync JEPRET.
                    </p>
                </div>
                
                <div class="flex items-center gap-3">
                    <button class="inline-flex items-center gap-2 px-4 py-2.5 bg-black text-white rounded-lg text-xs font-bold hover:bg-gray-800 transition-colors shadow-md">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        Unduh Semua (ZIP)
                    </button>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="flex items-center justify-between border-b border-gray-200 pb-4">
            <div class="flex gap-2">
                <button class="px-3 py-1.5 bg-black text-white rounded-lg text-xs font-bold">Semua Aset ({{ $transactions->count() }})</button>
                <button class="px-3 py-1.5 bg-white border border-gray-200 text-gray-600 rounded-lg text-xs font-semibold hover:border-black hover:text-black transition">Tahun 2026</button>
            </div>
            <select class="bg-transparent text-xs font-bold text-black border-none focus:ring-0 cursor-pointer pr-8 py-0">
                <option>Terbaru Dibeli</option>
                <option>Terlama</option>
                <option>Event Terbaru</option>
            </select>
        </div>

        <!-- Photos Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($transactions as $transaction)
            <div class="bg-white rounded-xl overflow-hidden border border-gray-100 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.05)] group">
                <div class="relative aspect-[4/3] bg-gray-100 overflow-hidden">
                    <img src="{{ Storage::url($transaction->photo->original_path ?? '') }}" alt="Purchased Photo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end justify-center pb-4">
                        <a href="{{ Storage::url($transaction->photo->original_path ?? '') }}" download class="bg-white text-black text-[10px] font-bold px-4 py-2 rounded-full flex items-center gap-2 transform translate-y-4 group-hover:translate-y-0 transition-all">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            Download Master
                        </a>
                    </div>

                    <!-- Badges -->
                    <div class="absolute top-2 left-2 flex gap-1.5">
                        <div class="bg-green-50/90 backdrop-blur-sm text-green-700 border border-green-200 text-[9px] font-bold px-1.5 py-0.5 rounded flex items-center gap-1">
                            LUNAS
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex justify-between items-center text-[10px] text-gray-400 font-mono mb-2">
                        <span>{{ $transaction->photo->event->nama_event ?? 'Event Fotografi' }}</span>
                        <span>{{ $transaction->created_at->format('d M Y') }}</span>
                    </div>
                    <h3 class="font-bold text-sm text-gray-900 mb-1 line-clamp-1">Dokumentasi {{ $transaction->photo->event->nama_event ?? 'Event' }}</h3>
                    <p class="text-[10px] text-gray-500 mb-4">Fotografer: {{ $transaction->photo->fotografer->name ?? 'Fotografer' }}</p>
                    
                    <div class="flex justify-between items-center border-t border-gray-100 pt-3">
                        <div class="text-[10px] text-gray-400 font-medium">Resolusi Penuh (Master)</div>
                        <span class="text-xs font-bold text-green-600 flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Tersedia
                        </span>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full py-16 flex flex-col items-center justify-center bg-gray-50 rounded-2xl border border-dashed border-gray-200">
                <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center shadow-sm mb-4">
                    <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-1">Library Anda Kosong</h3>
                <p class="text-sm text-gray-500 mb-4">Anda belum membeli aset foto apapun.</p>
                <a href="{{ url('/') }}" class="bg-black text-white text-xs font-bold px-6 py-2.5 rounded-lg hover:bg-gray-800 transition">Mulai Cari Foto</a>
            </div>
            @endforelse
        </div>
    </div>
</x-pembeli-layout>
