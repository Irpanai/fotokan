<x-superadmin-layout>
    <!-- Header Area -->
    <div class="mb-6 flex flex-col xl:flex-row xl:items-start justify-between gap-4">
        <div class="flex-1">
            <div class="text-[10px] font-mono text-gray-500 uppercase tracking-widest mb-3 flex items-center gap-2">
                CONSOLE / SUPER ADMIN / <span class="text-black font-bold">SYSTEM ROOT</span>
            </div>
            
            <div class="flex items-center gap-3 mb-2">
                <div class="bg-gray-100 text-gray-600 text-[9px] font-mono font-bold px-2 py-1 rounded uppercase tracking-wider flex items-center gap-1.5">
                    SETTLEMENT ENGINE
                </div>
                <div class="text-gray-400 text-[9px] font-mono font-bold uppercase tracking-wider flex items-center gap-1.5">
                    /
                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 ml-1"></span>
                    <span class="text-green-600">BI-FAST ROUTE ONLINE</span>
                </div>
            </div>

            <h1 class="text-2xl sm:text-3xl font-black text-black tracking-tight mb-2">Pencairan Dana Kreator<br>(Withdrawal Management)</h1>
            <p class="text-xs sm:text-sm text-gray-600 font-medium max-w-2xl leading-relaxed">
                Otorisasi penarikan saldo dompet hasil penjualan foto kreator. Eksekusi batch otomatis terhubung langsung ke API BI-FAST perbankan nasional.
            </p>
        </div>
        
        <div class="flex flex-col gap-2 shrink-0 w-full xl:w-auto pt-2 xl:pt-0">
            <button class="bg-white border border-gray-200 text-black text-[11px] font-bold px-4 py-2.5 rounded hover:bg-gray-50 transition shadow-sm flex items-center justify-center xl:justify-start gap-2">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Jadwal Auto-Disbursement
            </button>
            <button class="bg-white border border-gray-200 text-black text-[11px] font-bold px-4 py-2.5 rounded hover:bg-gray-50 transition shadow-sm flex items-center justify-center xl:justify-start gap-2">
                <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                Ping Gateway BI-FAST <span class="text-gray-400 text-[9px] ml-1">(11ms)</span>
            </button>
            <button class="bg-black text-white text-[11px] font-bold px-4 py-2.5 rounded hover:bg-gray-800 transition shadow-sm flex items-center justify-center xl:justify-start gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                Cairkan Semua Antrean (Batch Rp{{ number_format($pendingAmount, 0, ',', '.') }})
            </button>
        </div>
    </div>

    <!-- Top Metrics (4 Cards) -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
        <!-- Card 1 -->
        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm flex flex-col justify-between">
            <div class="flex justify-between items-start mb-4">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest">ANTREAN SIAP CAIR</span>
                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center shrink-0">
                    <svg class="w-3.5 h-3.5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg>
                </div>
            </div>
            <div class="mt-auto">
                <h3 class="text-2xl font-black text-black leading-none mb-3">Rp{{ number_format($pendingAmount, 0, ',', '.') }}</h3>
                <div class="flex justify-between items-center border-t border-gray-100 pt-3">
                    <span class="text-[10px] font-mono text-black font-bold">{{ $pendingCount }} pengajuan<br>aktif</span>
                    <span class="text-[10px] font-mono text-gray-500 text-right">menunggu<br>sweep</span>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm flex flex-col justify-between">
            <div class="flex justify-between items-start mb-4">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest">TERBAYAR BULAN INI</span>
                <div class="w-6 h-6 rounded bg-green-50 flex items-center justify-center shrink-0">
                    <svg class="w-3.5 h-3.5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
            <div class="mt-auto">
                <h3 class="text-2xl font-black text-green-600 leading-none mb-3">Rp{{ number_format($totalDisbursed, 0, ',', '.') }}</h3>
                <div class="flex justify-between items-center border-t border-gray-100 pt-3">
                    <span class="text-[10px] font-mono text-gray-500">{{ $successCount }} transfer<br>sukses</span>
                    <span class="text-[10px] font-mono text-gray-500 text-right">~ {{ date('M Y') }}</span>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm flex flex-col justify-between">
            <div class="flex justify-between items-start mb-4">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest">RATA-RATA SLA TRANSFER</span>
                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center shrink-0">
                    <svg class="w-3.5 h-3.5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
            </div>
            <div class="mt-auto">
                <h3 class="text-2xl font-black text-black leading-none mb-3">1 Jam 14 Menit</h3>
                <div class="border-t border-gray-100 pt-3 flex items-center justify-between">
                    <span class="text-[9px] font-mono text-gray-500 block">Target Platform: < 2 Jam</span>
                    <span class="bg-green-50 text-green-700 text-[9px] font-mono font-bold px-1.5 py-0.5 rounded">OPTIMAL</span>
                </div>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm flex flex-col justify-between">
            <div class="flex justify-between items-start mb-4">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest">STABILITAS GERBANG API</span>
                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center shrink-0">
                    <svg class="w-3.5 h-3.5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
            </div>
            <div class="mt-auto">
                <h3 class="text-2xl font-black text-black leading-none mb-3">0 Kasus Bouncing</h3>
                <div class="border-t border-gray-100 pt-3">
                    <span class="text-[9px] font-mono text-gray-500 flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-green-500 shrink-0"></span>
                        Uptime BI-FAST 99.98%
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Batch Selection Bar -->
    <div class="bg-gray-50 border border-gray-200 rounded-t-xl p-4 flex flex-col sm:flex-row sm:items-center justify-between gap-3 shadow-sm border-b-0">
        <div class="flex items-center gap-3">
            <div class="w-4 h-4 bg-black rounded flex items-center justify-center shrink-0 cursor-pointer">
                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
            </div>
            <span class="text-[11px] font-bold text-black">Pilih Semua ({{ $pendingCount }} Item Siap Eksekusi)</span>
            <span class="text-[10px] text-gray-400 border-l border-gray-300 pl-3 ml-1 hidden sm:inline-block">Total Nominal Dipilih: <strong class="text-black">Rp{{ number_format($pendingAmount, 0, ',', '.') }}</strong></span>
        </div>
        <div class="flex items-center gap-2 text-[10px]">
            <span class="text-gray-400">Kanal:</span>
            <span class="bg-gray-200 text-black font-mono font-bold px-2 py-0.5 rounded">BI-FAST RTGS / INSTANT</span>
        </div>
    </div>

    <!-- Table -->
    <div class="bg-white border border-gray-200 rounded-b-xl shadow-sm mb-8 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-gray-100">
                        <th class="py-3 px-4 w-10"></th>
                        <th class="py-3 px-4 text-[9px] font-mono text-gray-400 uppercase tracking-widest">ID & KREATOR / STUDIO</th>
                        <th class="py-3 px-4 text-[9px] font-mono text-gray-400 uppercase tracking-widest">REKENING TUJUAN (BI-FAST)</th>
                        <th class="py-3 px-4 text-[9px] font-mono text-gray-400 uppercase tracking-widest">NOMINAL DIMINTA</th>
                        <th class="py-3 px-4 text-[9px] font-mono text-gray-400 uppercase tracking-widest">SISA SALDO DOMPET</th>
                        <th class="py-3 px-4 text-[9px] font-mono text-gray-400 uppercase tracking-widest text-right">KESIAPAN JALUR</th>
                        <th class="py-3 px-4 text-[9px] font-mono text-gray-400 uppercase tracking-widest text-right">OTORISASI</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    
                    @forelse ($withdrawals as $withdrawal)
                    <tr class="hover:bg-gray-50/50 transition border-b border-gray-100">
                        <td class="py-4 px-4 align-middle">
                            @if($withdrawal->status === 'pending')
                            <div class="w-4 h-4 bg-black rounded flex items-center justify-center shrink-0 cursor-pointer">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            @endif
                        </td>
                        <td class="py-4 px-4 align-top">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-gray-100 text-xs font-bold flex items-center justify-center shrink-0">
                                    {{ strtoupper(substr(preg_replace('/[^a-zA-Z]/', '', $withdrawal->fotografer->name), 0, 2)) }}
                                </div>
                                <div>
                                    <div class="flex items-center gap-2 mb-0.5">
                                        <div class="text-[11px] font-bold text-black">{{ $withdrawal->fotografer->name }}</div>
                                        <div class="text-[8px] font-mono text-gray-400 bg-gray-50 px-1 rounded">#WD-{{ $withdrawal->id }}</div>
                                    </div>
                                    <div class="text-[9px] text-gray-500">{{ $withdrawal->fotografer->email }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 align-top">
                            <div class="flex items-center gap-2 mb-0.5">
                                <span class="bg-gray-100 text-black text-[9px] font-mono font-bold px-1.5 py-0.5 rounded">{{ explode(' ', $withdrawal->fotografer->nama_bank)[0] ?? 'BANK' }}</span>
                                <span class="text-[10px] font-mono font-bold text-black">{{ $withdrawal->fotografer->nomor_rekening ?? 'N/A' }}</span>
                            </div>
                            <div class="text-[9px] text-green-600 flex items-center gap-1">
                                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                a.n {{ strtoupper($withdrawal->fotografer->nama_rekening ?? $withdrawal->fotografer->name) }}
                            </div>
                        </td>
                        <td class="py-4 px-4 align-top text-[12px] font-bold text-black">Rp{{ number_format($withdrawal->jumlah_tarik, 0, ',', '.') }}</td>
                        <td class="py-4 px-4 align-top text-[10px] font-mono text-gray-400">Rp{{ number_format($withdrawal->fotografer->saldo_dompet, 0, ',', '.') }}</td>
                        <td class="py-4 px-4 align-top text-right">
                            @if($withdrawal->status === 'success')
                            <div class="inline-flex items-center gap-1.5 bg-green-50 text-green-700 text-[8px] font-mono font-bold px-1.5 py-0.5 rounded mb-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span> SELESAI
                            </div>
                            @elseif($withdrawal->status === 'pending')
                            <div class="inline-flex items-center gap-1.5 bg-yellow-50 text-yellow-700 text-[8px] font-mono font-bold px-1.5 py-0.5 rounded mb-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-yellow-500"></span> PENDING
                            </div>
                            @else
                            <div class="inline-flex items-center gap-1.5 bg-red-50 text-red-700 text-[8px] font-mono font-bold px-1.5 py-0.5 rounded mb-1">
                                <span class="w-1.5 h-1.5 rounded-full bg-red-500"></span> {{ strtoupper($withdrawal->status) }}
                            </div>
                            @endif
                        </td>
                        <td class="py-4 px-4 align-top text-right">
                            @if($withdrawal->status === 'pending')
                            <div class="flex items-center justify-end gap-1.5">
                                <button class="bg-gray-100 text-gray-600 text-[10px] font-bold px-3 py-1.5 rounded hover:bg-gray-200 transition">Tahan</button>
                                <form action="{{ route('superadmin.withdrawals.approve', $withdrawal->id) }}" method="POST" class="inline">
                                    @csrf
                                    <button type="submit" class="bg-black text-white text-[10px] font-bold px-3 py-1.5 rounded flex items-center gap-1 hover:bg-gray-800 transition">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                                        Setujui
                                    </button>
                                </form>
                            </div>
                            @else
                            <span class="text-[10px] text-gray-400 font-mono">{{ $withdrawal->updated_at->format('d/m/Y H:i') }}</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="py-8 text-center text-gray-500 text-xs font-mono">Belum ada pengajuan pencairan dana.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="p-4 border-t border-gray-100">
            {{ $withdrawals->links() }}
        </div>
        
        <!-- Table Footer Action -->
        <div class="p-4 bg-gray-50/50 border-t border-gray-100 flex flex-col sm:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-2 text-[10px] text-gray-500">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                Setiap transaksi dilindungi verifikasi nama rekening ganda & enkripsi TLS 1.3 Bank Indonesia.
            </div>
            <button class="bg-black text-white text-[11px] font-bold px-5 py-2.5 rounded hover:bg-gray-800 transition shadow-sm flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                Proses Batch Terpilih Langsung
            </button>
        </div>
    </div>

    <!-- Bottom Section: Logs & Policy -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-10">
        <!-- Left: Riwayat Pembayaran -->
        <div class="lg:col-span-2 bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden flex flex-col">
            <div class="p-5 border-b border-gray-100 flex justify-between items-center">
                <div>
                    <h3 class="text-sm font-black text-black flex items-center gap-2">
                        <span class="w-4 h-4 rounded-full bg-green-100 flex items-center justify-center shrink-0">
                            <svg class="w-2.5 h-2.5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                        </span>
                        Riwayat Pembayaran Terakhir (Audit Disbursed Log)
                    </h3>
                    <p class="text-[10px] text-gray-500 mt-1 ml-6">3 transfer terakhir yang berhasil terkirim 1 jam lalu melalui kliring interbank.</p>
                </div>
                <a href="#" class="text-[10px] font-mono font-bold text-black hover:underline hidden sm:block">Lihat Full Ledger -></a>
            </div>
            
            <div class="overflow-x-auto p-4 flex-1">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr>
                            <th class="pb-3 px-2 text-[9px] font-mono text-gray-400 uppercase tracking-widest border-b border-gray-100">ID TRANSAKSI</th>
                            <th class="pb-3 px-2 text-[9px] font-mono text-gray-400 uppercase tracking-widest border-b border-gray-100">KREATOR & REKENING</th>
                            <th class="pb-3 px-2 text-[9px] font-mono text-gray-400 uppercase tracking-widest border-b border-gray-100">NOMINAL</th>
                            <th class="pb-3 px-2 text-[9px] font-mono text-gray-400 uppercase tracking-widest border-b border-gray-100">NOMOR REFERENSI (RRN)</th>
                            <th class="pb-3 px-2 text-[9px] font-mono text-gray-400 uppercase tracking-widest border-b border-gray-100">STEMPEL WAKTU</th>
                            <th class="pb-3 px-2 text-[9px] font-mono text-gray-400 uppercase tracking-widest border-b border-gray-100 text-center">STATUS</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse ($recentSuccess as $recent)
                        <tr>
                            <td class="py-3 px-2 text-[9px] font-mono text-gray-600">#WD-{{ $recent->id }}</td>
                            <td class="py-3 px-2">
                                <div class="text-[10px] font-bold text-black mb-0.5">{{ $recent->fotografer->name }}</div>
                                <div class="text-[9px] text-gray-500">{{ explode(' ', $recent->fotografer->nama_bank)[0] ?? 'BANK' }} • {{ $recent->fotografer->nomor_rekening ?? 'N/A' }}</div>
                            </td>
                            <td class="py-3 px-2 text-[10px] font-mono font-bold text-black">Rp{{ number_format($recent->jumlah_tarik, 0, ',', '.') }}</td>
                            <td class="py-3 px-2 text-[9px] font-mono text-gray-500">RRN-{{ $recent->updated_at->format('Ymd-His') }}</td>
                            <td class="py-3 px-2 text-[9px] font-mono text-gray-500">{{ $recent->updated_at->format('d M, H:i') }} WIB</td>
                            <td class="py-3 px-2 text-center">
                                <span class="bg-green-100 text-green-700 text-[8px] font-mono font-bold px-2 py-1 rounded">SUCCESS - DISBURSED</span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="py-4 text-center text-[10px] text-gray-500">Belum ada riwayat pencairan berhasil.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <a href="#" class="text-[10px] font-mono font-bold text-center text-black border-t border-gray-100 py-3 bg-gray-50 hover:bg-gray-100 transition sm:hidden">Lihat Full Ledger -></a>
        </div>

        <!-- Right: Kebijakan -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-sm p-6 flex flex-col">
            <h3 class="text-sm font-black text-black flex items-center gap-2 mb-6">
                <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                Kebijakan & Ketentuan Settlement
            </h3>
            
            <div class="space-y-5 flex-1">
                <div class="flex items-start gap-3">
                    <svg class="w-4 h-4 text-gray-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div>
                        <h4 class="text-[11px] font-bold text-black mb-1">Limit Penarikan Minimum</h4>
                        <p class="text-[10px] text-gray-500 leading-relaxed">Penarikan saldo kreator minimal <strong>Rp100.000</strong> per pengajuan untuk efisiensi biaya switching.</p>
                    </div>
                </div>
                
                <div class="flex items-start gap-3">
                    <svg class="w-4 h-4 text-gray-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    <div>
                        <h4 class="text-[11px] font-bold text-black mb-1">Batas Maksimal Harian</h4>
                        <p class="text-[10px] text-gray-500 leading-relaxed">Maksimum pencairan per identitas kreator terverifikasi adalah <strong>Rp50.000.000 / hari</strong> demi mitigasi risiko fraud.</p>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <svg class="w-4 h-4 text-gray-400 mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <div>
                        <h4 class="text-[11px] font-bold text-black mb-1">Jadwal Batch Otomatis</h4>
                        <p class="text-[10px] text-gray-500 leading-relaxed">Sistem memproses transfer otomatis 2 kali sehari: <strong>pukul 11:00 WIB</strong> dan <strong>pukul 17:00 WIB</strong> pada hari kerja.</p>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <div class="w-4 h-4 rounded-full bg-green-100 flex items-center justify-center mt-0.5 shrink-0">
                        <svg class="w-2.5 h-2.5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <div>
                        <h4 class="text-[11px] font-bold text-black mb-1">Biaya Transfer Platform</h4>
                        <p class="text-[10px] text-gray-500 leading-relaxed">Biaya switching BI-FAST sebesar Rp2.500 disubsidi <strong>100%</strong> oleh platform tanpa memotong saldo fotografer.</p>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-100 mt-5 pt-4 flex justify-between items-center text-[9px] font-mono text-gray-400 uppercase tracking-widest">
                <span>CONFIG: SETTLE-ID-V2.4</span>
                <button class="font-bold text-black hover:underline">Ubah Parameter</button>
            </div>
        </div>
    </div>

</x-superadmin-layout>
