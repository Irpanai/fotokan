<x-fg-layout>
    <div class="space-y-8">
        <!-- Header -->
        <div class="flex justify-between items-start">
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">PENGGUNAAN STORAGE</span>
                </div>
                <h1 class="text-3xl font-black text-black tracking-tight mb-2">Kapasitas Penyimpanan</h1>
                <p class="text-sm text-gray-500 font-medium">Pantau batas kuota file master foto Anda.</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-black text-white text-xs font-bold px-6 py-3.5 rounded-lg shadow-sm hover:bg-gray-800 flex items-center gap-2 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    Upgrade Kapasitas
                </button>
            </div>
        </div>

        <!-- Kapasitas Card -->
        <div class="bg-white border border-gray-200 rounded-2xl p-8 shadow-sm flex flex-col justify-between mb-8">
            <div class="w-full">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                        <span class="text-sm font-bold text-black">Paket PRO Aktif</span>
                    </div>
                    <span class="text-[12px] font-bold text-gray-500">64.8% Terpakai</span>
                </div>
                
                <div class="flex justify-between items-end mb-3">
                    <span class="text-xl font-bold text-black">32.4 GB</span>
                    <span class="text-sm font-bold text-gray-400">Dari Total 50 GB</span>
                </div>
                <div class="h-4 w-full bg-gray-100 rounded-full overflow-hidden mb-4">
                    <div class="h-full bg-black rounded-full" style="width: 64.8%;"></div>
                </div>
                
                <p class="text-sm text-gray-500 font-medium leading-relaxed mb-6">
                    Estimasi tersisa ~1.200 file RAW/Full JPEG resolusi tinggi. Kuota akan otomatis bertambah jika Anda menghapus foto lama yang tidak terjual.
                </p>

                <div class="flex gap-4">
                    <button class="bg-black text-white text-xs font-bold px-6 py-3 rounded-lg shadow-sm hover:bg-gray-800 transition">
                        Tambah 50GB (Rp99.000/bln)
                    </button>
                    <button class="bg-white border border-gray-200 text-black text-xs font-bold px-6 py-3 rounded-lg shadow-sm hover:bg-gray-50 transition">
                        Bersihkan File Sampah
                    </button>
                </div>
            </div>
        </div>

        <!-- File Manager -->
        <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden" 
             x-data="{ 
                 activeFolder: null, 
                 previewIndex: null,
                 folders: {{ Js::from($folders) }},
                 get photos() {
                     return this.activeFolder ? this.folders.find(f => f.id === this.activeFolder)?.photos || [] : [];
                 },
                 get activeFolderName() {
                     return this.activeFolder ? this.folders.find(f => f.id === this.activeFolder)?.name : '';
                 }
             }">
            
            <!-- Header -->
            <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                <div class="flex items-center gap-3">
                    <button x-show="activeFolder" @click="activeFolder = null" class="text-gray-500 hover:text-black transition flex items-center gap-1.5 text-[10px] font-bold uppercase tracking-widest bg-white border border-gray-200 px-3 py-1.5 rounded-lg shadow-sm" x-cloak>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        Kembali
                    </button>
                    <h3 class="text-sm font-bold text-black" x-text="activeFolder ? 'Folder: ' + activeFolderName : 'Manajemen Folder Master'">Manajemen Folder Master</h3>
                </div>
                <div class="relative max-w-sm w-full md:w-64" x-show="activeFolder" x-cloak>
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input type="text" class="block w-full pl-9 pr-4 py-2 border border-gray-200 rounded-lg text-sm focus:ring-black focus:border-black" placeholder="Cari foto...">
                </div>
            </div>

            <!-- View: Folder List -->
            <div x-show="!activeFolder">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-gray-600">
                        <thead class="bg-white border-b border-gray-100 text-[10px] uppercase tracking-widest text-gray-400 font-bold">
                            <tr>
                                <th class="px-6 py-4">NAMA FOLDER (EVENT)</th>
                                <th class="px-6 py-4">JUMLAH FOTO</th>
                                <th class="px-6 py-4">UKURAN TOTAL</th>
                                <th class="px-6 py-4 text-right">AKSI</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 bg-white text-xs font-medium">
                            <template x-for="folder in folders" :key="folder.id">
                                <tr class="hover:bg-gray-50/50 transition cursor-pointer group" @click="activeFolder = folder.id">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <svg class="w-8 h-8 text-gray-300 group-hover:text-black transition" fill="currentColor" viewBox="0 0 20 20"><path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path></svg>
                                            <span class="font-bold text-black text-sm" x-text="folder.name"></span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4" x-text="folder.count + ' Foto'"></td>
                                    <td class="px-6 py-4 font-bold text-black" x-text="folder.size"></td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-black bg-white border border-gray-200 shadow-sm hover:bg-gray-50 px-4 py-2 rounded-lg text-[10px] font-bold transition">Buka Folder</button>
                                    </td>
                                </tr>
                            </template>
                            
                            <tr x-show="folders.length === 0">
                                <td colspan="4" class="px-6 py-12 text-center text-gray-500 font-medium">Belum ada folder/event. Silakan unggah foto terlebih dahulu.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-4 border-t border-gray-100 flex justify-between items-center bg-white text-[10px] text-gray-500 font-medium">
                    <span>Menampilkan 2 dari 12 folder event</span>
                    <div class="flex gap-2">
                        <button class="px-3 py-1.5 border border-gray-200 rounded text-gray-400 cursor-not-allowed">Previous</button>
                        <button class="px-3 py-1.5 border border-gray-200 rounded hover:bg-gray-50 text-black">Next</button>
                    </div>
                </div>
            </div>

            <!-- View: Photo Gallery -->
            <div x-show="activeFolder" x-cloak class="p-6 bg-gray-50/50 min-h-[400px]">
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
                    <template x-for="(photo, index) in photos" :key="index">
                        <div class="bg-white border border-gray-200 rounded-xl overflow-hidden group hover:border-black transition shadow-sm relative cursor-pointer" @click="previewIndex = index">
                            <div class="aspect-square bg-gray-100 relative overflow-hidden">
                                <img :src="photo.url" class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
                                
                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                    <span class="text-white text-xs font-bold uppercase tracking-widest bg-black/50 px-3 py-1.5 rounded backdrop-blur-sm">Lihat Detail</span>
                                </div>
                            </div>
                            <div class="p-3 border-t border-gray-100">
                                <p class="text-[10px] font-bold text-black truncate" x-text="photo.name"></p>
                                <p class="text-[9px] font-medium text-gray-400 mt-0.5" x-text="photo.size"></p>
                            </div>
                        </div>
                    </template>
                    <div x-show="photos.length === 0" class="col-span-full py-12 text-center flex flex-col items-center justify-center">
                        <p class="text-sm font-bold text-gray-400">Folder ini kosong.</p>
                    </div>
                </div>
            </div>

            <!-- Preview Popup Modal (Lightbox) -->
            <div x-show="previewIndex !== null" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 backdrop-blur-sm p-4" @keydown.window.escape="previewIndex = null" @keydown.window.left="previewIndex = (previewIndex > 0) ? previewIndex - 1 : photos.length - 1" @keydown.window.right="previewIndex = (previewIndex < photos.length - 1) ? previewIndex + 1 : 0">
                <div @click.away="previewIndex = null" class="bg-white rounded-2xl overflow-hidden w-full max-w-5xl shadow-2xl flex flex-col md:flex-row relative">
                    <!-- Close Button -->
                    <button @click="previewIndex = null" class="absolute top-4 right-4 z-20 w-8 h-8 flex items-center justify-center bg-white/80 hover:bg-white rounded-full text-black transition backdrop-blur-md shadow-sm">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                    
                    <!-- Large Image Preview -->
                    <div class="w-full md:w-2/3 bg-gray-100 flex items-center justify-center min-h-[300px] relative group">
                        <img :src="photos[previewIndex]?.url" class="w-full h-full object-contain max-h-[75vh]">
                        
                        <!-- Prev/Next Controls -->
                        <button @click.stop="previewIndex = (previewIndex > 0) ? previewIndex - 1 : photos.length - 1" class="absolute left-4 w-10 h-10 flex items-center justify-center bg-white/50 hover:bg-white rounded-full text-black transition backdrop-blur-md shadow-sm opacity-0 group-hover:opacity-100">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </button>
                        <button @click.stop="previewIndex = (previewIndex < photos.length - 1) ? previewIndex + 1 : 0" class="absolute right-4 w-10 h-10 flex items-center justify-center bg-white/50 hover:bg-white rounded-full text-black transition backdrop-blur-md shadow-sm opacity-0 group-hover:opacity-100">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                    
                    <!-- Photo Details & Actions -->
                    <div class="w-full md:w-1/3 p-6 flex flex-col justify-between bg-white relative">
                        <!-- Navigation Info -->
                        <div class="absolute top-6 right-16 text-[10px] font-bold text-gray-400 tracking-widest bg-gray-50 px-2 py-1 rounded">
                            <span x-text="previewIndex + 1"></span> / <span x-text="photos.length"></span>
                        </div>

                        <div class="pt-2">
                            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest block mb-2" x-text="activeFolder"></span>
                            <h3 class="text-xl font-black text-black mb-1 truncate" x-text="photos[previewIndex]?.name"></h3>
                            <p class="text-sm font-bold text-gray-500 mb-6" x-text="photos[previewIndex]?.size"></p>
                            
                            <div class="space-y-4">
                                <div class="bg-gray-50 p-4 rounded-xl border border-gray-200">
                                    <h4 class="text-[10px] font-bold text-black uppercase tracking-widest mb-1">Informasi File</h4>
                                    <ul class="text-xs text-gray-600 space-y-2 font-medium">
                                        <li class="flex justify-between"><span>Resolusi</span> <span>6000 x 4000</span></li>
                                        <li class="flex justify-between"><span>Format</span> <span>RAW (CR3)</span></li>
                                        <li class="flex justify-between"><span>Status</span> <span class="text-green-600 font-bold">Terpublikasi</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8">
                            <button class="w-full bg-red-50 hover:bg-red-100 text-red-600 border border-red-200 text-sm font-bold py-3 rounded-lg flex items-center justify-center gap-2 transition" @click="if(confirm('Yakin ingin menghapus foto ' + photos[previewIndex].name + ' secara permanen?')){ photos.splice(previewIndex, 1); previewIndex = (previewIndex >= photos.length) ? Math.max(0, photos.length - 1) : previewIndex; if(photos.length === 0) previewIndex = null; }">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                Hapus Permanen
                            </button>
                            <p class="text-[9px] text-gray-400 font-medium text-center mt-3">
                                Gunakan tombol Panah Kiri / Kanan untuk geser.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-fg-layout>