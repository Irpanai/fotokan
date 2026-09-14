<x-pembeli-layout>
    <div class="space-y-8">
        
        <!-- Header Section -->
        <div>
            <div class="flex items-center gap-3 mb-2">
                <span class="text-[10px] font-bold tracking-widest text-gray-400 uppercase">Wishlist & Keranjang</span>
            </div>
            <h1 class="text-3xl md:text-4xl font-black text-gray-900 mb-2 tracking-tight">
                Foto Favorit (Terpantau)
            </h1>
            <p class="text-gray-500 font-medium text-sm max-w-2xl">
                Daftar foto incaran Anda yang siap untuk di-checkout. Foto-foto ini masih menggunakan watermark perlindungan sistem.
            </p>
        </div>

        <!-- Toolbar -->
        <div class="flex flex-col sm:flex-row items-center justify-between border-b border-gray-200 pb-4 gap-4" x-data>
            <div class="text-sm font-bold text-gray-900">
                Total {{ $favorites->count() }} Foto Tersimpan
            </div>
            <div class="flex items-center gap-3 w-full sm:w-auto">
                <div class="text-right mr-2 hidden sm:block">
                    <div class="text-[10px] text-gray-500 font-bold uppercase tracking-wider mb-0.5">Total Estimasi</div>
                    <div class="font-black text-lg text-gray-900">Rp{{ number_format($totalEstimasi, 0, ',', '.') }}</div>
                </div>
                <button @click="alert('Fitur Checkout Semua akan segera hadir!')" class="bg-black hover:bg-gray-800 text-white font-bold px-5 py-2.5 rounded-lg text-xs flex items-center justify-center gap-2 transition-colors shadow-sm w-full sm:w-auto">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    Checkout Semua
                </button>
            </div>
        </div>

        <!-- Favorites List -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @forelse($favorites as $photo)
            <!-- Favorit Item -->
            <div x-data="{ removed: false }" x-show="!removed" class="bg-white rounded-xl border border-gray-200 p-4 flex gap-4 items-center group shadow-sm hover:shadow-md transition">
                <div class="w-32 h-24 bg-gray-200 rounded-lg overflow-hidden relative shrink-0">
                    <img src="{{ Storage::url($photo->watermarked_path) }}" alt="Preview" class="w-full h-full object-cover grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all duration-300">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="bg-black/90 text-white text-[8px] font-black uppercase px-2 py-0.5 rotate-12 tracking-widest shadow-md border border-white/10">
                            JEPRET<br>PREVIEW
                        </div>
                    </div>
                </div>
                <div class="flex-1 min-w-0 flex flex-col h-full justify-between py-1">
                    <div>
                        <div class="flex justify-between items-start mb-1">
                            <div class="text-[9px] text-gray-500 font-mono tracking-wide">{{ $photo->event->nama_event ?? 'Event' }}</div>
                            <div class="font-black text-sm text-gray-900 tracking-tight">Rp{{ number_format($photo->harga, 0, ',', '.') }}</div>
                        </div>
                        <h4 class="font-bold text-sm text-gray-900 truncate mb-1">BIB: {{ $photo->nomor_bib }}</h4>
                        <p class="text-[10px] text-gray-500 truncate">Fotografer: {{ $photo->fotografer->user->name ?? 'Unknown' }} • ID: #{{ $photo->id }}</p>
                    </div>
                    <div class="flex items-center justify-between mt-3">
                        <span class="text-[9px] font-bold text-yellow-600 flex items-center gap-1 uppercase tracking-wide bg-yellow-50 px-2 py-0.5 rounded border border-yellow-200/50">
                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            Belum Dibeli
                        </span>
                        <div class="flex items-center gap-2">
                            <button @click="Swal.fire({title: 'Hapus foto ini?', text: 'Foto akan dihapus dari daftar favorit Anda', icon: 'warning', showCancelButton: true, confirmButtonColor: '#d33', cancelButtonColor: '#000', confirmButtonText: 'Ya, hapus!'}).then((result) => { if (result.isConfirmed) { removed = true; } })" class="text-gray-400 hover:text-red-500 transition-colors p-1" title="Hapus dari Favorit">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                            </button>
                            <form action="{{ route('pembeli.checkout') }}" method="POST" class="inline">
                                @csrf
                                <input type="hidden" name="photo_id" value="{{ $photo->id }}">
                                <button type="submit" class="bg-black hover:bg-gray-800 text-white text-[10px] font-bold px-3 py-1.5 rounded flex items-center gap-1 transition-colors">
                                    Checkout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-1 md:col-span-2 py-10 text-center text-gray-500 font-medium">
                Belum ada foto yang difavoritkan.
            </div>
            @endforelse
        </div>
        
    </div>
</x-pembeli-layout>