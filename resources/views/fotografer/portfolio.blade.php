<x-fg-layout>
    <div class="space-y-8">
        <!-- Header -->
        <div class="flex justify-between items-start">
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">PROFIL & PORTOFOLIO</span>
                </div>
                <h1 class="text-3xl font-black text-black tracking-tight mb-2">Halaman Publik Anda</h1>
                <p class="text-sm text-gray-500 font-medium">Ini adalah tampilan yang akan dilihat oleh klien atau pembeli saat mengunjungi profil Anda.</p>
            </div>
            <div class="flex gap-2">
                <button class="bg-black text-white text-xs font-bold px-6 py-3.5 rounded-lg shadow-sm hover:bg-gray-800 flex items-center gap-2 transition">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                    Edit Profil
                </button>
            </div>
        </div>

        <!-- Preview Profil -->
        <div class="bg-white border border-gray-200 rounded-2xl shadow-sm overflow-hidden mb-8 w-full" x-data="{ copied: false }">
            <!-- Cover Image -->
            <div class="h-48 bg-gray-200 w-full relative">
                <img src="https://images.unsplash.com/photo-1542038784456-1ea8e935640e?q=80&w=1000&auto=format&fit=crop" class="w-full h-full object-cover grayscale opacity-80" alt="Cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
            </div>
            
            <div class="p-8 relative">
                <!-- Avatar -->
                <div class="absolute -top-16 left-8">
                    <div class="w-32 h-32 bg-white rounded-full p-2 shadow-lg">
                        <div class="w-full h-full bg-black rounded-full flex items-center justify-center text-white text-5xl font-black">
                            {{ substr(Auth::user()->name ?? 'D', 0, 1) }}
                        </div>
                    </div>
                </div>

                <div class="mt-16 pt-4">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-2xl font-black text-black">{{ Auth::user()->name ?? 'Dwi Visual' }}</h2>
                            <p class="text-sm font-bold text-gray-500 mt-1 flex items-center gap-2">
                                <svg class="w-4 h-4 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                Verified Sports Photographer
                            </p>
                        </div>
                        <div class="flex gap-4 text-center">
                            <div>
                                <span class="block text-xl font-black text-black">1.2K</span>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">FOTO TERJUAL</span>
                            </div>
                            <div>
                                <span class="block text-xl font-black text-black">48</span>
                                <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">EVENTS</span>
                            </div>
                        </div>
                    </div>

                    <p class="text-sm text-gray-600 mt-6 max-w-2xl leading-relaxed">
                        Spesialis fotografi olahraga dan lari jalanan. Berbasis di Kalimantan Selatan. 
                        Tersedia untuk disewa pada acara lari marathon, trail run, atau event korporat.
                    </p>

                    <div class="mt-8 pt-6 border-t border-gray-100 flex gap-4">
                        <div class="bg-gray-50 border border-gray-200 px-4 py-2 rounded-lg flex items-center gap-3 w-fit">
                            <span class="text-[10px] font-bold text-gray-500 uppercase tracking-widest">TAUTAN PUBLIK:</span>
                            <span class="text-sm font-bold text-black">jepret.com/p/dwivisual</span>
                            <button @click="navigator.clipboard.writeText('jepret.com/p/dwivisual'); copied = true; setTimeout(() => copied = false, 2000)" 
                                    class="text-gray-400 hover:text-black transition relative" 
                                    :class="copied ? 'text-green-500 hover:text-green-600' : ''"
                                    title="Salin Tautan">
                                <svg x-show="!copied" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                <svg x-show="copied" x-cloak class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Karya Terbaru (Mockup) -->
        <div class="bg-gray-50/50 p-6 rounded-2xl border border-gray-100">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-sm font-black text-black uppercase tracking-widest">Karya Terbaru</h3>
                <a href="#" class="text-[10px] font-bold text-gray-400 hover:text-black uppercase tracking-widest transition">Lihat Semua</a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @for($i = 1; $i <= 4; $i++)
                <div class="bg-white border border-gray-200 rounded-xl overflow-hidden group hover:border-black transition shadow-sm relative">
                    <div class="aspect-[4/3] bg-gray-100 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1552674605-15c2145e9ca4?q=80&w=400&auto=format&fit=crop&sig={{ $i }}" class="w-full h-full object-cover grayscale opacity-80 group-hover:opacity-100 group-hover:scale-105 transition duration-300">
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-black text-xs truncate">Event Olahraga {{ $i }}</h4>
                        <p class="text-[9px] font-medium text-gray-400 mt-1">{{ rand(500, 2000) }} Foto</p>
                    </div>
                </div>
                @endfor
            </div>
        </div>
    </div>
</x-fg-layout>