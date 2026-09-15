<x-fg-layout>
    <div class="space-y-8">
        
        <!-- Header Section -->
        <div>
            <div class="flex items-center gap-3 mb-2">
                <span class="text-[10px] font-bold tracking-widest text-gray-400 uppercase">Manajemen Karya</span>
            </div>
            <h1 class="text-3xl md:text-4xl font-black text-gray-900 mb-2 tracking-tight">
                Upload Foto Baru
            </h1>
            <p class="text-gray-500 font-medium text-sm">Unggah karya terbaik Anda. Sistem kami akan secara otomatis menerapkan watermark dan mendeteksi nomor BIB untuk memudahkan pembeli menemukan foto mereka.</p>
        </div>

        <!-- Form Section -->
        <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-sm max-w-3xl">
            <div class="p-8">
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-xl">
                        <div class="flex items-center gap-2 text-red-800 font-bold mb-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path></svg>
                            Terjadi Kesalahan
                        </div>
                        <ul class="list-disc list-inside text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('fotografer.photos.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    <!-- Event Selection / Folder Creation -->
                    <div class="space-y-4">
                        <div>
                            <label for="event_id" class="block text-sm font-bold text-gray-900 mb-2">Pilih Event/Folder (Opsional)</label>
                            <select name="event_id" id="event_id" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm font-medium focus:ring-0 focus:border-black transition-colors">
                                <option value="">-- Pilih Event yang Sudah Ada --</option>
                                @foreach($events as $event)
                                    <option value="{{ $event->id }}" {{ old('event_id') == $event->id ? 'selected' : '' }}>
                                        {{ $event->nama_event }} - {{ \Carbon\Carbon::parse($event->tanggal_event)->format('d M Y') }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="relative flex items-center py-2">
                            <div class="flex-grow border-t border-gray-200"></div>
                            <span class="flex-shrink-0 mx-4 text-gray-400 text-xs font-bold uppercase tracking-wider">ATAU BUAT FOLDER BARU</span>
                            <div class="flex-grow border-t border-gray-200"></div>
                        </div>
                        <div>
                            <label for="new_folder" class="block text-sm font-bold text-gray-900 mb-2">Nama Folder / Event Baru</label>
                            <input type="text" name="new_folder" id="new_folder" value="{{ old('new_folder') }}" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 text-sm font-medium focus:ring-0 focus:border-black transition-colors" placeholder="Contoh: Jakarta Marathon 2026">
                            <p class="text-[10px] text-gray-500 mt-2">Sistem akan membuatkan folder ini dan mengelompokkan foto Anda secara otomatis.</p>
                        </div>
                    </div>

                    <!-- File Upload -->
                    <div>
                        <label class="block text-sm font-bold text-gray-900 mb-2">File Foto (Master RAW/JPG)</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-xl hover:border-black transition-colors bg-gray-50 group relative">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400 group-hover:text-black transition-colors" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600 justify-center">
                                    <label for="photo" class="relative cursor-pointer rounded-md font-bold text-black hover:text-gray-700 focus-within:outline-none">
                                        <span>Upload file</span>
                                        <input id="photo" name="photo" type="file" class="sr-only" accept="image/jpeg,image/png,image/jpg" required>
                                    </label>
                                    <p class="pl-1">atau drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">
                                    PNG, JPG up to 10MB
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Price Input -->
                    <div>
                        <label for="harga" class="block text-sm font-bold text-gray-900 mb-2">Harga Jual Lisensi Personal (Rp)</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <span class="text-gray-500 font-bold sm:text-sm">Rp</span>
                            </div>
                            <input type="number" name="harga" id="harga" value="{{ old('harga', 20000) }}" class="w-full bg-gray-50 border border-gray-200 rounded-xl pl-12 pr-4 py-3 text-sm font-bold focus:ring-0 focus:border-black transition-colors" required min="0">
                        </div>
                        <p class="text-[10px] text-gray-500 mt-2">Biaya platform JEPRET sebesar 10% akan dipotong otomatis dari setiap penjualan.</p>
                    </div>

                    <!-- Actions -->
                    <div class="pt-6 border-t border-gray-100 flex items-center justify-end gap-3">
                        <a href="{{ route('fotografer.dashboard') }}" class="px-5 py-2.5 bg-white border border-gray-200 rounded-lg text-xs font-bold text-gray-700 hover:bg-gray-50 transition-colors">
                            Batal
                        </a>
                        <button type="submit" class="bg-black hover:bg-gray-800 text-white font-bold px-6 py-2.5 rounded-lg text-xs transition-colors shadow-sm flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            Unggah Sekarang
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
</x-fg-layout>
