<x-superadmin-layout>
    <!-- Header Area -->
    <div class="mb-6 flex flex-col xl:flex-row xl:items-start justify-between gap-4">
        <div class="flex-1">
            <div class="text-[10px] font-mono text-gray-500 uppercase tracking-widest mb-3 flex items-center gap-2">
                CONSOLE / SUPER ADMIN / <span class="text-black font-bold">SYSTEM ROOT</span>
            </div>
            
            <div class="flex items-center gap-3 mb-2">
                <div class="bg-gray-100 text-gray-600 text-[9px] font-mono font-bold px-2 py-1 rounded uppercase tracking-wider flex items-center gap-1.5">
                    CLUSTER: AWS ap-southeast-3
                </div>
                <div class="text-gray-400 text-[9px] font-mono font-bold uppercase tracking-wider flex items-center gap-1.5">
                    /
                    <span class="text-green-600 ml-1">EDGE: CLOUDFLARE TIER-1</span>
                </div>
            </div>

            <h1 class="text-2xl sm:text-3xl font-black text-black tracking-tight mb-2">Infrastruktur Cloud &<br>Manajemen Storage</h1>
            <p class="text-xs sm:text-sm text-gray-600 font-medium max-w-2xl leading-relaxed">
                Monitoring utilisasi penyimpanan cluster AWS S3 Jakarta, distribusi edge cache Cloudflare CDN, bandwidth mingguan, dan kebijakan lifecycle arsip master foto CFD.
            </p>
        </div>
        
        <div class="flex flex-col gap-2 shrink-0 w-full xl:w-auto pt-2 xl:pt-0">
            <button class="bg-gray-100 border border-gray-200 text-black text-[11px] font-bold px-4 py-2.5 rounded hover:bg-gray-200 transition shadow-sm flex items-center justify-center xl:justify-start gap-2">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                Purge Edge Cache
            </button>
            <button class="bg-white border border-gray-200 text-black text-[11px] font-bold px-4 py-2.5 rounded hover:bg-gray-50 transition shadow-sm flex items-center justify-center xl:justify-start gap-2">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                Uji Latensi Node
            </button>
            <button class="bg-black text-white text-[11px] font-bold px-4 py-2.5 rounded hover:bg-gray-800 transition shadow-sm flex items-center justify-center xl:justify-start gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                Unduh Laporan Telemetri
            </button>
        </div>
    </div>

    <!-- Top Metrics (4 Cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <!-- Card 1 -->
        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm flex flex-col justify-between">
            <div class="flex justify-between items-start mb-4">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest">ALOKASI TOTAL BUCKET</span>
                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center shrink-0">
                    <svg class="w-3.5 h-3.5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                </div>
            </div>
            <div class="mt-auto">
                <h3 class="text-2xl font-black text-black leading-none mb-3">{{ number_format($totalStorage / 1024, 2, ',', '.') }} GB</h3>
                <div class="w-full h-1.5 bg-gray-100 rounded-full overflow-hidden mb-2">
                    <div class="h-full bg-black rounded-full" style="width: {{ min(100, ($totalStorage / (10240 * 1024)) * 100) }}%"></div>
                </div>
                <div class="flex justify-between items-center text-[9px] font-mono">
                    <span class="text-gray-500">{{ number_format(($totalStorage / (10240 * 1024)) * 100, 1) }}% dari 10.0 TB</span>
                    <span class="text-green-600 font-bold flex items-center gap-1">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> Sehat
                    </span>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm flex flex-col justify-between">
            <div class="flex justify-between items-start mb-4">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest">MASTER FOTO RAW</span>
                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center shrink-0">
                    <svg class="w-3.5 h-3.5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                </div>
            </div>
            <div class="mt-auto">
                <h3 class="text-2xl font-black text-black leading-none mb-3">1.42 TB</h3>
                <div class="border-t border-gray-100 pt-2 flex flex-col gap-0.5">
                    <span class="text-[9px] font-mono text-gray-500">48.200 file master terenkripsi</span>
                    <span class="text-[9px] font-mono text-gray-400">ap-southeast-3 • AES-256</span>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm flex flex-col justify-between">
            <div class="flex justify-between items-start mb-4">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest">WEBP EDGE CACHE</span>
                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center shrink-0">
                    <svg class="w-3.5 h-3.5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
            </div>
            <div class="mt-auto">
                <h3 class="text-2xl font-black text-black leading-none mb-3">420 GB</h3>
                <div class="border-t border-gray-100 pt-2 flex flex-col gap-0.5">
                    <span class="text-[9px] font-mono text-gray-500 block truncate">1.2M varian kompresi WebP</span>
                    <span class="text-[9px] font-mono text-green-600 font-bold block truncate">Cloudflare Edge Warm: 89.1%</span>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm flex flex-col justify-between">
            <div class="flex justify-between items-start mb-4">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest leading-tight">BANDWIDTH EGRESS (30<br>HARI)</span>
                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center shrink-0">
                    <svg class="w-3.5 h-3.5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                </div>
            </div>
            <div class="mt-auto">
                <h3 class="text-2xl font-black text-black leading-none mb-3">8.9 TB</h3>
                <div class="border-t border-gray-100 pt-2 flex flex-col gap-0.5">
                    <div class="flex justify-between items-center text-[9px] font-mono">
                        <span class="text-gray-500">Hit Ratio CDN</span>
                        <span class="text-green-600 font-bold">94.2%</span>
                    </div>
                    <span class="text-[9px] font-mono text-gray-400 block truncate">Origin offload: 8.38 TB hemat</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Middle Section: Analytics & Health -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
        <!-- Left: Distribusi & Tiering -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 flex flex-col">
            <div class="flex justify-between items-start mb-5">
                <div>
                    <h3 class="text-sm font-black text-black">Distribusi Alokasi & Tingkatan Tiering</h3>
                    <p class="text-[9px] text-gray-500 mt-1 max-w-[200px]">Rasio S3 Hot Storage terhadap Edge CDN dan Arsip Glacier</p>
                </div>
                <div class="text-[9px] font-mono font-bold text-gray-500 bg-gray-100 px-2 py-1 rounded">
                    TOTAL TERDAFTAR: 6.89 TB
                </div>
            </div>
            
            <div class="w-full h-4 bg-gray-100 rounded-full overflow-hidden flex mb-5">
                <div class="h-full bg-black" style="width: 25%"></div>
                <div class="h-full bg-gray-500" style="width: 10%"></div>
                <div class="h-full bg-gray-200" style="width: 65%"></div>
            </div>

            <div class="grid grid-cols-3 gap-2 mb-6">
                <div class="bg-gray-50 rounded p-2">
                    <div class="flex items-center gap-1.5 text-[9px] font-bold text-black mb-1">
                        <span class="w-2 h-2 rounded bg-black shrink-0"></span> S3 Hot Storage
                    </div>
                    <div class="text-[10px] font-mono font-bold text-black mb-0.5">1.42 TB</div>
                    <div class="text-[8px] font-mono text-gray-400 leading-tight">S3 Standard Multi-AZ</div>
                </div>
                <div class="bg-gray-50 rounded p-2">
                    <div class="flex items-center gap-1.5 text-[9px] font-bold text-black mb-1">
                        <span class="w-2 h-2 rounded bg-gray-500 shrink-0"></span> CDN Edge Cache
                    </div>
                    <div class="text-[10px] font-mono font-bold text-black mb-0.5">420 GB</div>
                    <div class="text-[8px] font-mono text-gray-400 leading-tight">Edge Flash NVMe</div>
                </div>
                <div class="bg-gray-50 rounded p-2">
                    <div class="flex items-center gap-1.5 text-[9px] font-bold text-black mb-1">
                        <span class="w-2 h-2 rounded bg-gray-200 border border-gray-300 shrink-0"></span> Glacier Cold Tier
                    </div>
                    <div class="text-[10px] font-mono font-bold text-black mb-0.5">4.80 TB</div>
                    <div class="text-[8px] font-mono text-gray-400 leading-tight">Instant Retrieval</div>
                </div>
            </div>

            <div class="flex-1 flex flex-col justify-end">
                <div class="flex justify-between items-end mb-3">
                    <h4 class="text-[10px] font-bold text-black">Aktivitas CDN Hit Rate 7 Hari Terakhir</h4>
                    <span class="text-[8px] font-mono text-gray-400">Puncak Trafik: Minggu CFD 06:00 - 11:00 WIB</span>
                </div>
                <div class="flex items-end gap-1 h-20 w-full">
                    <div class="flex-1 bg-gray-200 rounded-t h-[40%] group relative"><div class="absolute -bottom-4 left-0 right-0 text-center text-[7px] text-gray-400 font-mono">SEN</div></div>
                    <div class="flex-1 bg-gray-200 rounded-t h-[45%] group relative"><div class="absolute -bottom-4 left-0 right-0 text-center text-[7px] text-gray-400 font-mono">SEL</div></div>
                    <div class="flex-1 bg-gray-200 rounded-t h-[38%] group relative"><div class="absolute -bottom-4 left-0 right-0 text-center text-[7px] text-gray-400 font-mono">RAB</div></div>
                    <div class="flex-1 bg-gray-200 rounded-t h-[50%] group relative"><div class="absolute -bottom-4 left-0 right-0 text-center text-[7px] text-gray-400 font-mono">KAM</div></div>
                    <div class="flex-1 bg-gray-200 rounded-t h-[60%] group relative"><div class="absolute -bottom-4 left-0 right-0 text-center text-[7px] text-gray-400 font-mono">JUM</div></div>
                    <div class="flex-1 bg-gray-200 rounded-t h-[95%] group relative"><div class="absolute -bottom-4 left-0 right-0 text-center text-[7px] text-gray-400 font-mono">SAB</div></div>
                    <div class="flex-1 bg-black rounded-t h-full group relative"><div class="absolute -bottom-4 left-0 right-0 text-center text-[7px] font-bold text-black font-mono">MIN</div></div>
                </div>
            </div>
        </div>

        <!-- Right: Policy & Health -->
        <div class="flex flex-col gap-6">
            <!-- Lifecycle Policy -->
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5">
                <div class="flex justify-between items-start mb-4">
                    <div class="flex items-center gap-2">
                        <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center shrink-0">
                            <svg class="w-3.5 h-3.5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-[11px] font-bold text-black">Lifecycle Policy & Auto-Tiering</h3>
                            <div class="text-[8px] font-mono text-gray-400">S3-RULE-TIER-0092</div>
                        </div>
                    </div>
                    <span class="bg-green-100 text-green-700 text-[9px] font-bold px-2 py-0.5 rounded">AKTIF</span>
                </div>
                <p class="text-[10px] text-gray-600 leading-relaxed mb-4">
                    Aturan otomatis memindahkan master foto RAW berumur <strong>>90 hari</strong> dari S3 Standard ke <strong>AWS Glacier Instant Retrieval</strong>. Pemotongan beban OPEX penyimpanan mencapai <span class="text-green-600 font-bold">68.4%</span> per gigabyte.
                </p>
                <div class="border-t border-gray-100 pt-3 flex justify-between items-center text-[9px]">
                    <div class="text-gray-500 flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Siklus berikutnya: 24 Jam
                    </div>
                    <button class="font-bold text-black hover:underline">Konfigurasi Rules</button>
                </div>
            </div>

            <!-- Health Check -->
            <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-5 flex-1">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-[11px] font-bold text-black">Health Check & Multi-Region<br>Failover</h3>
                    <div class="text-[8px] font-mono text-green-600 flex items-center gap-1 text-right">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500 shrink-0"></span>
                        ALL SYSTEMS<br>OPTIMAL
                    </div>
                </div>
                
                <div class="space-y-2">
                    <div class="bg-gray-50 rounded-lg p-2.5 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                            <div>
                                <div class="text-[10px] font-mono font-bold text-black leading-tight">s3://jepretcfd-prod-jkt</div>
                                <div class="text-[8px] font-mono text-gray-400">Primary (ap-southeast-3)</div>
                            </div>
                        </div>
                        <span class="text-[10px] font-mono text-gray-600 font-bold">99.99% SLA</span>
                    </div>
                    
                    <div class="bg-gray-50 rounded-lg p-2.5 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                            <div>
                                <div class="text-[10px] font-mono font-bold text-black leading-tight">s3://jepretcfd-backup-sin</div>
                                <div class="text-[8px] font-mono text-gray-400">Replica (ap-southeast-1)</div>
                            </div>
                        </div>
                        <span class="text-[9px] font-mono text-green-700 bg-green-50 px-1.5 py-0.5 rounded border border-green-100">Lag 0s</span>
                    </div>

                    <div class="bg-gray-50 rounded-lg p-2.5 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <svg class="w-4 h-4 text-gray-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path></svg>
                            <div>
                                <div class="text-[10px] font-mono font-bold text-black leading-tight">Cloudflare Anycast PoP</div>
                                <div class="text-[8px] font-mono text-gray-400">Edge Latensi Domestik</div>
                            </div>
                        </div>
                        <span class="text-[10px] font-mono text-gray-600 font-bold border border-gray-200 bg-white px-2 py-0.5 rounded">18 ms</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Table Section -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-sm mb-6 overflow-hidden">
        <div class="p-4 border-b border-gray-100 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h3 class="text-sm font-black text-black">Alokasi Penyimpanan Gelombang Acara CFD</h3>
                <p class="text-[9px] text-gray-500 mt-0.5">Rincian kuota storage, volume RAW upload fotografer, dan status integritas checksum SHA-256</p>
            </div>
            <div class="flex items-center gap-2 w-full sm:w-auto">
                <button class="flex-1 sm:flex-none bg-gray-100 text-black text-[10px] font-bold px-4 py-2 rounded hover:bg-gray-200 transition flex items-center justify-center gap-2">
                    <svg class="w-3.5 h-3.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                    Kelola Kuota Bucket
                </button>
                <button class="flex-1 sm:flex-none bg-black text-white text-[10px] font-bold px-4 py-2 rounded hover:bg-gray-800 transition flex items-center justify-center gap-2">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    Audit SHA-256 Integritas
                </button>
            </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/50">
                        <th class="py-3 px-4 text-[9px] font-mono text-gray-400 uppercase tracking-widest border-b border-gray-100">LOKASI CFD / EVENT TAG</th>
                        <th class="py-3 px-4 text-[9px] font-mono text-gray-400 uppercase tracking-widest border-b border-gray-100">VOLUME PENYIMPANAN</th>
                        <th class="py-3 px-4 text-[9px] font-mono text-gray-400 uppercase tracking-widest border-b border-gray-100">TOTAL ASET</th>
                        <th class="py-3 px-4 text-[9px] font-mono text-gray-400 uppercase tracking-widest border-b border-gray-100">RATA-RATA RAW</th>
                        <th class="py-3 px-4 text-[9px] font-mono text-gray-400 uppercase tracking-widest border-b border-gray-100">ENKRIPSI / STATUS</th>
                        <th class="py-3 px-4 text-[9px] font-mono text-gray-400 uppercase tracking-widest border-b border-gray-100 text-right">AKSI</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    
                    <!-- Row 1 -->
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="py-4 px-4 align-top">
                            <div class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-gray-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                                <div>
                                    <div class="text-[11px] font-bold text-black mb-1">Jakarta Sudirman (Mei 2025)</div>
                                    <div class="text-[9px] font-mono text-gray-400 leading-tight">bucket://cfd-jkt-sudirman-2025-05</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 align-top">
                            <div class="text-[10px] font-mono font-bold text-black mb-1">820 GB</div>
                            <div class="text-[9px] font-mono text-gray-400 leading-tight">44.5% dari S3 terpakai</div>
                        </td>
                        <td class="py-4 px-4 align-top text-[10px] font-mono text-gray-500">22.400 foto</td>
                        <td class="py-4 px-4 align-top text-[10px] font-mono text-gray-500">36.6 MB/RAW</td>
                        <td class="py-4 px-4 align-top">
                            <div class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-[8px] font-mono font-bold px-2 py-1 rounded">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                SSE-KMS OK
                            </div>
                        </td>
                        <td class="py-4 px-4 align-top text-right">
                            <button class="text-[10px] font-bold text-black hover:underline">Detail</button>
                        </td>
                    </tr>

                    <!-- Row 2 -->
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="py-4 px-4 align-top">
                            <div class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-gray-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                                <div>
                                    <div class="text-[11px] font-bold text-black mb-1">Banjarbaru Lapangan Murjani</div>
                                    <div class="text-[9px] font-mono text-gray-400 leading-tight">bucket://cfd-bjb-murjani-2025-05</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 align-top">
                            <div class="text-[10px] font-mono font-bold text-black mb-1">340 GB</div>
                            <div class="text-[9px] font-mono text-gray-400 leading-tight">18.4% dari S3 terpakai</div>
                        </td>
                        <td class="py-4 px-4 align-top text-[10px] font-mono text-gray-500">9.800 foto</td>
                        <td class="py-4 px-4 align-top text-[10px] font-mono text-gray-500">34.7 MB/RAW</td>
                        <td class="py-4 px-4 align-top">
                            <div class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-[8px] font-mono font-bold px-2 py-1 rounded">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                SSE-KMS OK
                            </div>
                        </td>
                        <td class="py-4 px-4 align-top text-right">
                            <button class="text-[10px] font-bold text-black hover:underline">Detail</button>
                        </td>
                    </tr>

                    <!-- Row 3 -->
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="py-4 px-4 align-top">
                            <div class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-gray-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                                <div>
                                    <div class="text-[11px] font-bold text-black mb-1">Solo Slamet Riyadi</div>
                                    <div class="text-[9px] font-mono text-gray-400 leading-tight">bucket://cfd-slo-slametriyadi-2025-05</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 align-top">
                            <div class="text-[10px] font-mono font-bold text-black mb-1">210 GB</div>
                            <div class="text-[9px] font-mono text-gray-400 leading-tight">11.4% dari S3 terpakai</div>
                        </td>
                        <td class="py-4 px-4 align-top text-[10px] font-mono text-gray-500">6.200 foto</td>
                        <td class="py-4 px-4 align-top text-[10px] font-mono text-gray-500">33.8 MB/RAW</td>
                        <td class="py-4 px-4 align-top">
                            <div class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-[8px] font-mono font-bold px-2 py-1 rounded">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                SSE-KMS OK
                            </div>
                        </td>
                        <td class="py-4 px-4 align-top text-right">
                            <button class="text-[10px] font-bold text-black hover:underline">Detail</button>
                        </td>
                    </tr>

                    <!-- Row 4 -->
                    <tr class="hover:bg-gray-50/50 transition">
                        <td class="py-4 px-4 align-top">
                            <div class="flex items-start gap-2">
                                <svg class="w-4 h-4 text-gray-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg>
                                <div>
                                    <div class="text-[11px] font-bold text-black mb-1">Bandung Dago - Gasibu</div>
                                    <div class="text-[9px] font-mono text-gray-400 leading-tight">bucket://cfd-bdg-dago-2025-05</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 align-top">
                            <div class="text-[10px] font-mono font-bold text-black mb-1">190 GB</div>
                            <div class="text-[9px] font-mono text-gray-400 leading-tight">10.3% dari S3 terpakai</div>
                        </td>
                        <td class="py-4 px-4 align-top text-[10px] font-mono text-gray-500">5.600 foto</td>
                        <td class="py-4 px-4 align-top text-[10px] font-mono text-gray-500">33.9 MB/RAW</td>
                        <td class="py-4 px-4 align-top">
                            <div class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-[8px] font-mono font-bold px-2 py-1 rounded">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                SSE-KMS OK
                            </div>
                        </td>
                        <td class="py-4 px-4 align-top text-right">
                            <button class="text-[10px] font-bold text-black hover:underline">Detail</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Security Footer -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-8">
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-4 flex items-start gap-3">
            <div class="w-8 h-8 rounded-lg bg-green-50 flex items-center justify-center shrink-0 border border-green-100">
                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
            </div>
            <div>
                <div class="flex items-center gap-2 mb-1">
                    <h4 class="text-[11px] font-bold text-black">Zero Unauthorized Hotlinking</h4>
                    <span class="bg-green-100 text-green-700 text-[8px] font-bold px-1.5 py-0.5 rounded">SECURE</span>
                </div>
                <p class="text-[9px] text-gray-500 leading-relaxed">Cloudflare WAF Hotlink Protection aktif dengan signed token (HMAC-SHA256). Akses aset mentah di luar domain resmi <code>jepretcfd.com</code> diblokir otomatis 100%.</p>
            </div>
        </div>

        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-4 flex items-start gap-3">
            <div class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center shrink-0 border border-gray-200">
                <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path></svg>
            </div>
            <div>
                <div class="flex items-center gap-2 mb-1">
                    <h4 class="text-[11px] font-bold text-black">S3-SSE-KMS Master Photo Vault</h4>
                    <span class="bg-gray-100 text-gray-600 text-[8px] font-bold px-1.5 py-0.5 rounded border border-gray-200">HARDENED</span>
                </div>
                <p class="text-[9px] text-gray-500 leading-relaxed">Enkripsi di sisi server aktif via AWS KMS Customer Managed Key untuk seluruh master foto RAW. Aset beresolusi penuh hanya didekripsi saat validasi checkout pembeli sukses.</p>
            </div>
        </div>
    </div>

</x-superadmin-layout>
