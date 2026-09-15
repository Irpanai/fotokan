<x-superadmin-layout>
    <!-- Header Area -->
    <div class="mb-6 flex flex-col xl:flex-row xl:items-start justify-between gap-4">
        <div>
            <div class="text-[10px] font-mono text-gray-500 uppercase tracking-widest mb-3 flex items-center gap-2">
                CONSOLE / SUPER ADMIN / <span class="text-black font-bold">SYSTEM ROOT</span>
            </div>
            
            <div class="flex items-center gap-3 mb-2">
                <div class="bg-green-50 border border-green-200 text-green-700 text-[9px] font-mono font-bold px-2 py-1 rounded uppercase tracking-wider flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                    MODUL OTORISASI IDENTITAS
                </div>
                <div class="bg-gray-100 text-gray-600 text-[9px] font-mono font-bold px-2 py-1 rounded uppercase tracking-wider">
                    BI-FAST SYNCED
                </div>
            </div>

            <h1 class="text-2xl sm:text-3xl font-black text-black tracking-tight mb-2">Antrean Kepatuhan & Verifikasi KYC Fotografer</h1>
            <p class="text-xs sm:text-sm text-gray-600 font-medium max-w-2xl leading-relaxed">
                Tinjau legalitas identitas, KTP, kesesuaian nomor rekening bank, dan kurasi portofolio kreator sebelum diizinkan menerbitkan album komersial di CFD.
            </p>
        </div>
        
        <div class="flex flex-wrap items-center gap-2 shrink-0 pt-2 xl:pt-0">
            <button class="bg-white border border-gray-200 text-black text-xs font-bold px-4 py-2.5 rounded hover:bg-gray-50 transition shadow-sm flex items-center gap-2">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                Filter Kategori
            </button>
            <button class="bg-white border border-gray-200 text-black text-xs font-bold px-4 py-2.5 rounded hover:bg-gray-50 transition shadow-sm flex items-center gap-2">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                Unduh Berkas Batch (ZIP)
            </button>
            <button class="bg-white border border-gray-200 text-black text-xs font-bold px-4 py-2.5 rounded hover:bg-gray-50 transition shadow-sm flex items-center gap-2">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                Audit Log KYC
            </button>
        </div>
    </div>

    <!-- Top Metrics (4 Cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <!-- Card 1 -->
        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm flex flex-col justify-between">
            <div class="flex justify-between items-start mb-2">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest">ANTREAN TERTUNDA</span>
                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center shrink-0">
                    <svg class="w-3.5 h-3.5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
            <div class="flex items-baseline gap-2 mb-3">
                <h3 class="text-3xl font-black text-black leading-none">3</h3>
                <span class="text-[10px] font-mono text-gray-400">Berkas</span>
            </div>
            <div class="mt-auto border-t border-gray-100 pt-3">
                <span class="text-[9px] font-mono font-bold text-green-600 flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 shrink-0"></span>
                    SLA Target < 24 Jam (Rata-rata 4.2 Jam)
                </span>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm flex flex-col justify-between">
            <div class="flex justify-between items-start mb-2">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest">KREATOR TERVERIFIKASI</span>
                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center shrink-0">
                    <svg class="w-3.5 h-3.5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
            <div class="flex items-baseline gap-2 mb-3">
                <h3 class="text-3xl font-black text-black leading-none">342</h3>
                <span class="text-[10px] font-mono font-bold text-green-600">+18 mgg ini</span>
            </div>
            <div class="mt-auto border-t border-gray-100 pt-3 flex justify-between items-center">
                <span class="text-[9px] font-mono text-gray-400">Kreator Aktif<br>CFD</span>
                <span class="text-[10px] font-mono font-bold text-black text-right">328<br>Beroperasi</span>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm flex flex-col justify-between">
            <div class="flex justify-between items-start mb-2">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest">REVISI & DITOLAK</span>
                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center shrink-0">
                    <svg class="w-3.5 h-3.5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </div>
            </div>
            <div class="flex items-baseline gap-2 mb-3">
                <h3 class="text-3xl font-black text-black leading-none">12</h3>
                <span class="text-[10px] font-mono font-bold text-red-500">3.4% anomaly</span>
            </div>
            <div class="mt-auto border-t border-gray-100 pt-3 flex justify-between items-center">
                <span class="text-[9px] font-mono text-gray-400">Mayoritas<br>Alasan</span>
                <span class="text-[10px] font-mono font-bold text-black text-right">Foto KTP Silau /<br>Blur</span>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm flex flex-col justify-between">
            <div class="flex justify-between items-start mb-2">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest">BI-FAST MATCH RATE</span>
                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center shrink-0">
                    <svg class="w-3.5 h-3.5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z"></path></svg>
                </div>
            </div>
            <div class="flex items-baseline gap-2 mb-3">
                <h3 class="text-3xl font-black text-black leading-none">98.4%</h3>
                <span class="text-[10px] font-mono font-bold text-green-600">Tinggi</span>
            </div>
            <div class="mt-auto pt-3">
                <div class="w-full h-1 bg-gray-100 rounded-full overflow-hidden">
                    <div class="h-full bg-black rounded-full" style="width: 98.4%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs & Search -->
    <div class="bg-white border border-gray-200 rounded-xl p-1.5 mb-6 flex flex-col xl:flex-row xl:items-center justify-between gap-3 shadow-sm">
        <div class="flex flex-wrap items-center gap-1">
            <button class="bg-black text-white px-4 py-2 rounded-lg text-[11px] font-bold shadow-sm transition">Semua Permohonan (3)</button>
            <button class="text-gray-600 hover:text-black hover:bg-gray-100 px-4 py-2 rounded-lg text-[11px] font-bold transition">Pendaftar Baru (2)</button>
            <button class="text-gray-600 hover:text-black hover:bg-gray-100 px-4 py-2 rounded-lg text-[11px] font-bold transition">Perubahan Rekening Bank (1)</button>
            <button class="text-gray-600 hover:text-black hover:bg-gray-100 px-4 py-2 rounded-lg text-[11px] font-bold transition">Riwayat Disetujui (142)</button>
            <button class="text-gray-600 hover:text-black hover:bg-gray-100 px-4 py-2 rounded-lg text-[11px] font-bold transition">Ditolak (12)</button>
        </div>
        <div class="relative w-full xl:w-72 shrink-0 px-1.5 pb-1.5 xl:p-0">
            <div class="absolute inset-y-0 left-0 xl:left-0 flex items-center pl-4 xl:pl-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="text" class="w-full bg-gray-50 border-none rounded-lg pl-10 pr-4 py-2 text-xs focus:ring-1 focus:ring-black transition" placeholder="Cari nama, NIK, studio, WA...">
        </div>
    </div>

    <!-- Main Layout (2 Columns) -->
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mb-10">
        
        <!-- Left Column: List (xl:col-span-2) -->
        <div class="xl:col-span-2 space-y-4">
            
            @forelse ($pendingUsers as $user)
            <div class="bg-white border {{ $loop->first ? 'border-2 border-black' : 'border-gray-200 opacity-60 hover:opacity-100 transition-opacity' }} rounded-xl p-5 shadow-sm relative overflow-hidden mb-4">
                @if($loop->first)
                <div class="absolute top-0 right-0 bg-black text-white text-[9px] font-mono font-bold px-3 py-1.5 rounded-bl-lg tracking-widest flex items-center gap-2">
                    FOKUS VERIFIKASI AKTIF
                    <span class="text-gray-400">#KYC-{{ $user->id }}</span>
                </div>
                @else
                <div class="absolute top-4 right-4 bg-gray-100 text-gray-500 text-[9px] font-mono font-bold px-2 py-1 rounded">
                    #KYC-{{ $user->id }}
                </div>
                @endif
                
                <div class="flex items-start gap-4 mb-5 {{ $loop->first ? 'pt-2' : '' }}">
                    <div class="relative shrink-0">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=f3f4f6&color=000" alt="Avatar" class="w-12 h-12 rounded-full border border-gray-200 object-cover {{ !$loop->first ? 'grayscale' : '' }}">
                        @if($loop->first)
                        <div class="absolute -bottom-1 -right-1 bg-green-500 rounded-full border-2 border-white p-0.5">
                            <svg class="w-2.5 h-2.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </div>
                        @endif
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center gap-2 mb-1">
                            <h2 class="text-lg font-black text-black">{{ $user->name }}</h2>
                            <span class="text-[10px] font-mono text-gray-400">{{ $user->email }}</span>
                            <span class="bg-gray-100 text-gray-600 border border-gray-200 text-[9px] font-bold px-2 py-0.5 rounded">Pendaftar Baru</span>
                        </div>
                        <div class="flex items-center gap-4 text-[10px] font-mono text-gray-500">
                            <div class="flex items-center gap-1.5">
                                <svg class="w-3.5 h-3.5 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                Diajukan: {{ $user->created_at->format('d M Y, H:i') }} WIB
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-5">
                    <!-- Legalitas Dokumen -->
                    <div class="bg-gray-50/50 border border-gray-100 rounded-lg p-4">
                        <h3 class="text-[9px] font-mono text-gray-400 uppercase tracking-widest mb-3">LEGALITAS DOKUMEN</h3>
                        <p class="text-[10px] font-mono text-gray-500 mb-1">Nama terdaftar: {{ $user->name }}</p>
                        <div class="bg-white border border-gray-100 rounded flex justify-between items-center px-3 py-2">
                            <span class="text-[10px] font-mono text-gray-400">Berkas Pengajuan<br>Terlampir</span>
                            <span class="bg-yellow-50 text-yellow-700 font-mono font-bold text-[9px] px-2 py-1 rounded">Pending<br>Review</span>
                        </div>
                    </div>

                    <!-- Rekening Bank -->
                    <div class="bg-gray-50/50 border border-gray-100 rounded-lg p-4">
                        <h3 class="text-[9px] font-mono text-gray-400 uppercase tracking-widest mb-3">INFORMASI DASAR</h3>
                        <p class="text-[10px] font-mono text-gray-500">Status Akun: Belum Terverifikasi</p>
                        <p class="text-[10px] font-mono text-gray-500">Role: {{ ucfirst($user->role) }}</p>
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex flex-wrap items-center gap-2">
                    <button class="bg-white border border-red-200 text-red-600 text-[11px] font-bold px-4 py-2 rounded-lg hover:bg-red-50 transition shadow-sm flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        Tolak Pengajuan
                    </button>
                    <form action="{{ route('superadmin.fotografer.verify', $user->id) }}" method="POST" class="ml-auto">
                        @csrf
                        <button type="submit" class="bg-black text-white text-[11px] font-bold px-5 py-2 rounded-lg hover:bg-gray-800 transition shadow-sm flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Setujui Akun Kreator
                        </button>
                    </form>
                </div>
            </div>
            @empty
            <div class="bg-white border border-gray-200 rounded-xl p-10 text-center shadow-sm">
                <svg class="w-12 h-12 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <h3 class="text-sm font-bold text-black mb-1">Tidak Ada Antrean</h3>
                <p class="text-xs text-gray-500 font-mono">Semua pendaftar telah diverifikasi.</p>
            </div>
            @endforelse

            <div class="mt-6">
                {{ $pendingUsers->links() }}
            </div>

        </div>

        <!-- Right Column: Audit Panel (xl:col-span-1) -->
        <div class="xl:col-span-1">
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden sticky top-24">
                <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50/50">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        <h3 class="text-sm font-black text-black">Berkas KTP & Biometrik</h3>
                    </div>
                    <span class="text-[9px] font-mono text-gray-500 text-right">Target: Arya<br>Pratama</span>
                </div>
                
                <div class="p-5">
                    <!-- KTP Image Mockup -->
                    <div class="w-full aspect-[1.6/1] bg-[#B0C4DE] rounded-lg mb-2 relative overflow-hidden flex items-center justify-center p-2 shadow-inner">
                        <div class="absolute inset-0 opacity-20 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
                        <div class="w-full h-full border border-blue-200/50 rounded flex flex-col justify-between p-2 relative z-10 bg-white/40 backdrop-blur-[1px]">
                            <div class="text-center w-full mb-1">
                                <div class="text-[6px] font-bold uppercase text-black leading-tight">Provinsi Daerah Khusus Ibukota Jakarta<br>Jakarta Pusat</div>
                            </div>
                            <div class="flex gap-2 h-full">
                                <div class="flex-1 flex flex-col justify-between pt-1">
                                    <div class="text-[5px] font-mono text-black leading-tight space-y-0.5">
                                        <div class="flex"><span class="w-12">NIK</span>: <strong class="text-[7px]">3171052904980004</strong></div>
                                        <div class="flex"><span class="w-12">Nama</span>: ARYA PRATAMA</div>
                                        <div class="flex"><span class="w-12">Tempat/Tgl Lahir</span>: JAKARTA, 29-04-1998</div>
                                        <div class="flex"><span class="w-12">Jenis Kelamin</span>: LAKI-LAKI</div>
                                        <div class="flex"><span class="w-12">Alamat</span>: JL. SUDIRMAN KAV 12</div>
                                        <div class="flex"><span class="w-12">Agama</span>: ISLAM</div>
                                        <div class="flex"><span class="w-12">Status</span>: BELUM KAWIN</div>
                                        <div class="flex"><span class="w-12">Pekerjaan</span>: FOTOGRAFER</div>
                                    </div>
                                </div>
                                <div class="w-[30%] shrink-0 flex flex-col justify-between items-end">
                                    <div class="w-full aspect-[3/4] bg-red-800 rounded-sm mb-1 overflow-hidden">
                                        <img src="https://ui-avatars.com/api/?name=Arya+Pratama&background=7f1d1d&color=fff&size=100" class="w-full h-full object-cover">
                                    </div>
                                    <div class="text-[4px] text-center w-full">JAKARTA PUSAT<br>12-05-2022</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Badges -->
                        <div class="absolute top-2 left-2 bg-black text-white text-[8px] font-mono font-bold px-2 py-0.5 rounded shadow-sm">
                            DUKCAPIL VERIFIED
                        </div>
                        <div class="absolute top-2 right-2 bg-green-100 text-green-700 text-[8px] font-mono font-bold px-2 py-0.5 rounded shadow-sm">
                            MATCH 100%
                        </div>
                        <div class="absolute bottom-2 left-2 bg-black/80 text-white text-[8px] font-mono px-2 py-0.5 rounded backdrop-blur-sm">
                            HASH: a9f81...d682
                        </div>
                        <!-- Selfie Bubble overlay -->
                        <div class="absolute bottom-2 right-2 w-10 h-10 rounded-full border-2 border-white shadow-lg overflow-hidden z-20">
                            <img src="https://ui-avatars.com/api/?name=Arya+Pratama&background=f3f4f6&color=000" class="w-full h-full object-cover">
                        </div>
                    </div>
                    
                    <div class="flex justify-between items-center text-[9px] font-mono font-bold px-1 mb-6">
                        <span class="text-gray-400">SIMULASI FACE MATCH AI</span>
                        <span class="text-green-600">96.2%</span>
                    </div>

                    <!-- Kurasi Foto -->
                    <div class="mb-6">
                        <div class="flex justify-between items-end mb-2">
                            <h4 class="text-[10px] font-mono text-gray-500 uppercase tracking-widest leading-tight">KURASI FOTO SAMPEL CFD (EXIF<br>AUDIT)</h4>
                            <span class="text-[9px] font-mono font-bold text-black text-right">3 dari 85<br>Sampel</span>
                        </div>
                        <div class="grid grid-cols-3 gap-2">
                            <div class="aspect-[3/4] bg-gray-200 rounded overflow-hidden relative group">
                                <img src="https://images.unsplash.com/photo-1552674605-171ff7ea90e7?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-1.5">
                                    <div class="text-[7px] font-mono text-white leading-tight">
                                        1/1000s • f/2.8<br>ISO 100
                                    </div>
                                </div>
                            </div>
                            <div class="aspect-[3/4] bg-gray-200 rounded overflow-hidden relative group">
                                <img src="https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-1.5">
                                    <div class="text-[7px] font-mono text-white leading-tight">
                                        1/1600s • f/2.8<br>ISO 100
                                    </div>
                                </div>
                            </div>
                            <div class="aspect-[3/4] bg-gray-200 rounded overflow-hidden relative group">
                                <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-1.5">
                                    <div class="text-[7px] font-mono text-white leading-tight">
                                        1/800s • f/4.0<br>ISO 125
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Perangkat -->
                    <div class="mb-6">
                        <h4 class="text-[10px] font-mono text-gray-500 uppercase tracking-widest mb-2">PERANGKAT & RIG KAMERA</h4>
                        <div class="bg-gray-50 border border-gray-100 rounded p-2.5 space-y-2">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-1.5 text-[10px] font-bold text-black">
                                    <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path></svg>
                                    Sony Alpha 7 IV (ILCE-7M4)
                                </div>
                                <span class="bg-green-50 text-green-700 text-[8px] font-mono px-1.5 py-0.5 rounded">Verified RAW</span>
                            </div>
                            <div class="flex items-start gap-1.5 text-[10px] font-mono text-gray-600">
                                <svg class="w-3 h-3 text-gray-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>FE 70-200mm f/2.8 GM OSS <span class="text-gray-400">Telephoto Prime Class</span></span>
                            </div>
                        </div>
                    </div>

                    <!-- Checklist -->
                    <div class="mb-6">
                        <h4 class="text-[10px] font-mono text-gray-500 uppercase tracking-widest mb-3">CHECKLIST KELAYAKAN AKUN</h4>
                        <div class="space-y-3">
                            <label class="flex items-start gap-2 cursor-pointer group">
                                <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center bg-blue-500 border-blue-500 shrink-0 mt-0.5 transition">
                                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-[10px] text-gray-700 leading-tight">Foto KTP tajam, NIK terbaca jelas tanpa rekayasa digital</span>
                            </label>
                            <label class="flex items-start gap-2 cursor-pointer group">
                                <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center bg-blue-500 border-blue-500 shrink-0 mt-0.5 transition">
                                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-[10px] text-gray-700 leading-tight">Nama pemilik buku tabungan persis identitas KTP</span>
                            </label>
                            <label class="flex items-start gap-2 cursor-pointer group">
                                <div class="w-4 h-4 rounded border border-gray-300 flex items-center justify-center bg-blue-500 border-blue-500 shrink-0 mt-0.5 transition">
                                    <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <span class="text-[10px] text-gray-700 leading-tight">Portofolio memenuhi standar etika fotografi publik & resolusi 24MP+</span>
                            </label>
                        </div>
                    </div>

                    <button class="w-full bg-black text-white text-xs font-bold py-3 rounded-lg shadow-sm hover:bg-gray-800 transition flex items-center justify-center gap-2 mb-3">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        Konfirmasi Otorisasi Akun (Terbitkan ID Kreator)
                    </button>
                    
                    <div class="flex justify-between items-center text-[8px] font-mono text-gray-400">
                        <span>Operator: Super Admin #001</span>
                        <span>Audit Signature: SHA-256 Validated</span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

</x-superadmin-layout>
