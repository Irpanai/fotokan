<x-fg-layout>
    <!-- Header Area -->
    <div class="flex justify-between items-start mb-8">
        <div>
            <div class="flex items-center gap-2 mb-2">
                <span class="w-1.5 h-1.5 rounded-full bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.6)]"></span>
                <span class="text-[10px] font-mono text-gray-500 uppercase tracking-widest">LIVE PRODUCTION CLUSTER • JAKARTA-1 (AWS S3 & CLOUDFLARE CDN SYNC)</span>
            </div>
            <p class="text-[9px] font-mono text-gray-400 mb-2">ID: CLUSTER-JKT-PRIMARY-01</p>
            <h1 class="text-3xl font-black text-black tracking-tight mb-2">Super Admin Command Center — JEPRETCFD</h1>
            <p class="text-sm text-gray-500 font-medium">Pengawasan transaksi nasional, volume GMV, distribusi komisi 70/30, dan utilisasi storage cloud fotografer.</p>
        </div>
        <div class="flex items-center gap-4 shrink-0">
            <div class="bg-gray-50 border border-gray-200 text-black text-[10px] font-bold px-4 py-2.5 rounded-lg shadow-sm flex items-center gap-2">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                MEI 2026 • SIKLUS M-05
            </div>
            <button class="bg-black text-white text-xs font-bold px-6 py-2.5 rounded-lg shadow-sm hover:bg-gray-800 flex items-center gap-2 transition">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                Audit Rekonsiliasi
            </button>
        </div>
    </div>

    <!-- 4 Metric Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
        <!-- GMV -->
        <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm flex flex-col justify-between h-40 relative overflow-hidden">
            <div class="flex justify-between items-start mb-2">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest leading-tight">GROSS TRANSACTION<br>VALUE</span>
                <span class="bg-green-50 text-green-600 text-[9px] font-mono font-bold px-2 py-1 rounded flex items-center gap-1">
                    <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                    +22.4% MoM
                </span>
            </div>
            @php
                $gmv = \App\Models\Transaction::where('status', 'paid')->sum('total_bayar');
                $gmvFormatted = number_format($gmv, 0, ',', '.');
            @endphp
            <div>
                <h3 class="text-3xl font-black text-black">Rp{{ $gmv > 0 ? $gmvFormatted : '128.450.000' }}</h3>
                <p class="text-[9px] text-gray-500 font-medium mt-1">Bulan berjalan • 5.120 transaksi foto CFD</p>
            </div>
            
            <!-- Graphic Line Chart SVG -->
            <div class="absolute bottom-4 right-4 w-24 h-8 opacity-80">
                <svg viewBox="0 0 100 30" preserveAspectRatio="none" class="w-full h-full">
                    <path d="M0 25 L 20 22 L 40 24 L 60 18 L 80 15 L 100 5" fill="none" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>

        <!-- Take Rate -->
        <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm flex flex-col justify-between h-40">
            <div class="flex justify-between items-start mb-2">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest leading-tight">PLATFORM TAKE RATE<br>(30%)</span>
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest text-right">NET<br>REVENUE</span>
            </div>
            @php
                $platform = $gmv * 0.3;
                $platformFormatted = number_format($platform, 0, ',', '.');
            @endphp
            <div>
                <h3 class="text-3xl font-black text-black">Rp{{ $gmv > 0 ? $platformFormatted : '38.535.000' }}</h3>
                <p class="text-[9px] text-gray-500 font-medium mt-1">Margin bersih marketplace & cloud hosting</p>
            </div>
            <div class="flex justify-between items-end mt-2">
                <span class="text-[9px] font-mono text-gray-400">SLA Pembagian<br>Otomatis:</span>
                <span class="text-[10px] font-mono font-bold text-black text-right">100% On-<br>Chain DB</span>
            </div>
        </div>

        <!-- Payout Fotografer -->
        <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm flex flex-col justify-between h-40">
            <div class="flex justify-between items-start mb-2">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest leading-tight">PAYOUT FOTOGRAFER<br>(70%)</span>
                <span class="bg-green-50 text-green-600 text-[9px] font-mono font-bold px-2 py-1 rounded flex items-center gap-1">
                    <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    0 Failed
                </span>
            </div>
            @php
                $payout = $gmv * 0.7;
                $payoutFormatted = number_format($payout, 0, ',', '.');
            @endphp
            <div>
                <h3 class="text-3xl font-black text-black">Rp{{ $gmv > 0 ? $payoutFormatted : '89.915.000' }}</h3>
                <p class="text-[9px] text-gray-500 font-medium mt-1">Disbursed ke rekening BCA / Mandiri kreator</p>
            </div>
            <div class="flex justify-between items-end mt-2">
                <span class="text-[9px] font-mono text-gray-400">Settlement<br>Cycle:</span>
                <span class="text-[10px] font-mono font-bold text-black text-right">Instan via BI-<br>FAST</span>
            </div>
        </div>

        <!-- Total Ekosistem -->
        <div class="bg-white border border-gray-200 rounded-2xl p-5 shadow-sm flex flex-col justify-between h-40">
            <div class="flex justify-between items-start mb-2">
                <span class="text-[10px] font-mono font-bold text-gray-400 uppercase tracking-widest leading-tight">TOTAL<br>EKOSISTEM</span>
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>
            </div>
            <div class="space-y-2 mt-auto">
                <div class="flex justify-between items-center">
                    <span class="text-[10px] font-mono text-gray-500">Fotografer Aktif</span>
                    <span class="text-sm font-black text-black">{{ \App\Models\User::where('role', 'fotografer')->count() > 0 ? \App\Models\User::where('role', 'fotografer')->count() : 382 }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-[10px] font-mono text-gray-500">Foto Terkatalog</span>
                    <span class="text-sm font-black text-black">{{ \App\Models\Photo::count() > 0 ? \App\Models\Photo::count() : '48.291' }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-[10px] font-mono text-gray-500">Storage Terpakai</span>
                    <span class="text-sm font-black text-black">1.84 TB</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Area Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        
        <!-- LEFT COLUMN (2/3) -->
        <div class="lg:col-span-2 flex flex-col gap-6">
            
            <!-- Real Time Table -->
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm flex flex-col flex-1">
                <div class="p-6 border-b border-gray-100 flex justify-between items-center">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center border border-gray-200">
                            <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <h3 class="text-base font-bold text-black">Transaksi & Settlement Real-Time</h3>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="bg-gray-100 text-gray-500 text-[10px] font-mono font-bold px-3 py-1.5 rounded-lg flex items-center gap-2">
                            <span class="w-1.5 h-1.5 rounded-full bg-red-500 animate-pulse"></span>
                            LIVE FEED
                        </div>
                        <button class="text-xs font-bold text-gray-600 border border-gray-200 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path></svg>
                            Filter
                        </button>
                        <button class="text-xs font-bold text-gray-600 border border-gray-200 px-3 py-1.5 rounded-lg hover:bg-gray-50 transition flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            Export CSV
                        </button>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-gray-600">
                        <thead class="bg-gray-50 border-b border-gray-100 text-[9px] font-mono text-gray-400 font-bold uppercase tracking-widest">
                            <tr>
                                <th class="px-6 py-4">ORDER REF</th>
                                <th class="px-6 py-4">PEMBELI</th>
                                <th class="px-6 py-4">FOTOGRAFER / STUDIO</th>
                                <th class="px-6 py-4 text-right">GMV</th>
                                <th class="px-6 py-4 text-right">KREATOR (70%)</th>
                                <th class="px-6 py-4 text-right">JEPRET (30%)</th>
                                <th class="px-6 py-4 text-right">GATEWAY</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 bg-white text-xs">
                            <!-- Mock Row 1 -->
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-mono font-bold text-black">#JCFD-9982</td>
                                <td class="px-6 py-4">
                                    <p class="font-bold text-black text-[11px]">reza.andika@gmail.com</p>
                                    <p class="text-[9px] text-gray-400 font-mono mt-0.5">Google SSO</p>
                                </td>
                                <td class="px-6 py-4 flex items-center gap-2">
                                    <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center font-bold text-[9px] text-black">DV</div>
                                    <p class="font-bold text-black text-[11px] leading-tight">Dwi<br>Visual</p>
                                </td>
                                <td class="px-6 py-4 text-right font-mono font-bold text-black">Rp30.000</td>
                                <td class="px-6 py-4 text-right font-mono font-bold text-green-600">Rp21.000</td>
                                <td class="px-6 py-4 text-right font-mono font-bold text-gray-500">Rp9.000</td>
                                <td class="px-6 py-4 text-right">
                                    <span class="text-[9px] font-mono text-gray-400">QRIS<br>BCA</span>
                                </td>
                            </tr>
                            
                            <!-- Mock Row 2 -->
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-mono font-bold text-black">#JCFD-9981</td>
                                <td class="px-6 py-4">
                                    <p class="font-bold text-black text-[11px]">clara.monica@gmail.com</p>
                                    <p class="text-[9px] text-gray-400 font-mono mt-0.5">Google SSO</p>
                                </td>
                                <td class="px-6 py-4 flex items-center gap-2">
                                    <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center font-bold text-[9px] text-black">AL</div>
                                    <p class="font-bold text-black text-[11px] leading-tight">Aris Lens<br>Jakarta</p>
                                </td>
                                <td class="px-6 py-4 text-right font-mono font-bold text-black">Rp20.000</td>
                                <td class="px-6 py-4 text-right font-mono font-bold text-green-600">Rp14.000</td>
                                <td class="px-6 py-4 text-right font-mono font-bold text-gray-500">Rp6.000</td>
                                <td class="px-6 py-4 text-right">
                                    <span class="text-[9px] font-mono text-gray-400">QRIS<br>GoPay</span>
                                </td>
                            </tr>

                            <!-- Mock Row 3 -->
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-mono font-bold text-black">#JCFD-9980</td>
                                <td class="px-6 py-4">
                                    <p class="font-bold text-black text-[11px]">hendra.kurnia@runner.id</p>
                                    <p class="text-[9px] text-gray-400 font-mono mt-0.5">Google SSO</p>
                                </td>
                                <td class="px-6 py-4 flex items-center gap-2">
                                    <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center font-bold text-[9px] text-black">BS</div>
                                    <p class="font-bold text-black text-[11px] leading-tight">Bagas Street<br>BDG</p>
                                </td>
                                <td class="px-6 py-4 text-right font-mono font-bold text-black">Rp30.000</td>
                                <td class="px-6 py-4 text-right font-mono font-bold text-green-600">Rp21.000</td>
                                <td class="px-6 py-4 text-right font-mono font-bold text-gray-500">Rp9.000</td>
                                <td class="px-6 py-4 text-right">
                                    <span class="text-[9px] font-mono text-gray-400">QRIS<br>BCA</span>
                                </td>
                            </tr>
                            
                            <!-- Mock Row 4 -->
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-6 py-4 font-mono font-bold text-black">#JCFD-9979</td>
                                <td class="px-6 py-4">
                                    <p class="font-bold text-black text-[11px]">tan.michelle@apple.com</p>
                                    <p class="text-[9px] text-gray-400 font-mono mt-0.5">Apple SSO</p>
                                </td>
                                <td class="px-6 py-4 flex items-center gap-2">
                                    <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center font-bold text-[9px] text-black">DV</div>
                                    <p class="font-bold text-black text-[11px] leading-tight">Dwi<br>Visual</p>
                                </td>
                                <td class="px-6 py-4 text-right font-mono font-bold text-black">Rp20.000</td>
                                <td class="px-6 py-4 text-right font-mono font-bold text-green-600">Rp14.000</td>
                                <td class="px-6 py-4 text-right font-mono font-bold text-gray-500">Rp6.000</td>
                                <td class="px-6 py-4 text-right">
                                    <span class="text-[9px] font-mono text-gray-400">QRIS<br>Shopee</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="p-4 mt-auto flex justify-between items-center bg-gray-50 border-t border-gray-100">
                    <span class="text-[10px] font-mono text-gray-500">Menampilkan 4 dari 5.120 transaksi sinkron</span>
                    <span class="text-[10px] font-mono text-gray-400">Latensi Settlement: 142ms</span>
                    <a href="#" class="text-[10px] font-mono font-bold text-black hover:underline flex items-center gap-1">
                        Lihat Semua Ledger
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Antrean Kepatuhan -->
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="flex justify-between items-center mb-6">
                    <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg bg-gray-50 flex items-center justify-center border border-gray-200">
                            <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-black">Antrean Kepatuhan & Verifikasi Fotografer</h3>
                            <p class="text-[10px] font-mono text-gray-500 mt-0.5">Tinjauan permohonan badge Studio Terverifikasi & modifikasi rekening pencairan dana.</p>
                        </div>
                    </div>
                    @php
                        $unverified = \App\Models\User::where('role', 'fotografer')->where('is_verified', false)->count();
                        $withdrawalsPending = \App\Models\Withdrawal::where('status', 'pending')->count();
                        $pendingTotal = $unverified + $withdrawalsPending;
                    @endphp
                    <div class="bg-gray-100 text-[10px] font-mono text-gray-600 font-bold px-3 py-1.5 rounded-lg text-center">
                        <span class="text-sm text-black">{{ $pendingTotal > 0 ? $pendingTotal : 3 }}</span><br>Pending
                    </div>
                </div>

                <div class="space-y-3">
                    @php
                        // Fetch unverified photogs to display or use mocks if empty
                        $pendingFotografers = \App\Models\User::where('role', 'fotografer')->where('is_verified', false)->take(2)->get();
                    @endphp
                    
                    @if($pendingFotografers->count() > 0)
                        @foreach($pendingFotografers as $fg)
                            <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 flex justify-between items-center gap-4">
                                <div class="flex items-center gap-4">
                                    <div class="w-10 h-10 rounded-lg bg-black text-white flex items-center justify-center font-bold text-sm">
                                        {{ substr($fg->name, 0, 2) }}
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2 mb-1">
                                            <h4 class="text-sm font-bold text-black">{{ $fg->name }}</h4>
                                            <span class="bg-gray-200 text-[9px] font-mono text-gray-600 px-1.5 py-0.5 rounded">New Registration</span>
                                        </div>
                                        <p class="text-[10px] font-mono text-gray-500 truncate">{{ $fg->email }}</p>
                                    </div>
                                </div>
                                <div class="flex gap-2 shrink-0">
                                    <button class="bg-white border border-gray-200 text-black text-[10px] font-bold px-4 py-2 rounded-lg hover:bg-gray-100 transition">Tinjau Dokumen</button>
                                    <form action="{{ route('superadmin.fotografer.verify', $fg->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="bg-black text-white text-[10px] font-bold px-4 py-2 rounded-lg hover:bg-gray-800 transition">Setujui</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <!-- Mock 1 -->
                        <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 flex justify-between items-center gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-lg bg-black text-white flex items-center justify-center font-bold text-sm">FF</div>
                                <div>
                                    <div class="flex items-center gap-2 mb-1">
                                        <h4 class="text-sm font-bold text-black">Fajar Fadilah (FastFoto CFD)</h4>
                                        <span class="bg-gray-200 text-[9px] font-mono text-gray-600 px-1.5 py-0.5 rounded">Upgrade Studio</span>
                                    </div>
                                    <p class="text-[10px] font-mono text-gray-500 truncate">KTP: 3273********* • Portofolio: 320 Foto • Rek: BCA 8839-XXXX-01</p>
                                </div>
                            </div>
                            <div class="flex gap-2 shrink-0">
                                <button class="bg-white border border-gray-200 text-black text-[10px] font-bold px-4 py-2 rounded-lg hover:bg-gray-100 transition">Tinjau Dokumen</button>
                                <button class="bg-black text-white text-[10px] font-bold px-4 py-2 rounded-lg hover:bg-gray-800 transition">Setujui</button>
                            </div>
                        </div>

                        <!-- Mock 2 -->
                        <div class="bg-gray-50 border border-gray-200 rounded-xl p-4 flex justify-between items-center gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-lg bg-gray-200 text-black flex items-center justify-center font-bold text-sm">RN</div>
                                <div>
                                    <div class="flex items-center gap-2 mb-1">
                                        <h4 class="text-sm font-bold text-black">Rian Nugraha (RunnerShot Jakarta)</h4>
                                        <span class="bg-gray-200 text-[9px] font-mono text-gray-600 px-1.5 py-0.5 rounded">Perubahan Rekening Bank</span>
                                    </div>
                                    <p class="text-[10px] font-mono text-gray-500 truncate">Ganti dari Mandiri ke Bank Jago (Kantong Kreator #8192-332)</p>
                                </div>
                            </div>
                            <div class="flex gap-2 shrink-0">
                                <button class="bg-white border border-gray-200 text-black text-[10px] font-bold px-4 py-2 rounded-lg hover:bg-gray-100 transition">Tinjau Dokumen</button>
                                <button class="bg-black text-white text-[10px] font-bold px-4 py-2 rounded-lg hover:bg-gray-800 transition">Setujui</button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </div>

        <!-- RIGHT COLUMN (1/3) -->
        <div class="flex flex-col gap-6">
            
            <!-- Infrastruktur -->
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="flex justify-between items-start mb-6">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path></svg>
                        <h3 class="text-base font-bold text-black">Infrastruktur Cloud<br>Storage</h3>
                    </div>
                    <div class="text-[9px] font-mono font-bold text-green-600 text-right uppercase">
                        99.99%<br>HEALTH
                    </div>
                </div>

                <div class="mb-6">
                    <div class="flex justify-between items-end mb-2">
                        <span class="text-[10px] font-mono text-gray-500">Kapasitas Ekosistem Terpakai</span>
                        <span class="text-lg font-black font-mono text-black">1.84 TB / 10 TB</span>
                    </div>
                    <div class="h-2 w-full bg-gray-100 rounded-full flex overflow-hidden mb-3">
                        <div class="h-full bg-black rounded-l-full" style="width: 14.2%;"></div>
                        <div class="h-full bg-gray-400 rounded-r-full" style="width: 4.2%;"></div>
                    </div>
                    <div class="flex justify-between items-center text-[9px] font-mono font-bold text-gray-500">
                        <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-black"></span> RAW S3: 1.42 TB</span>
                        <span class="flex items-center gap-1"><span class="w-2 h-2 rounded-full bg-gray-400"></span> CDN Previews: 420 GB</span>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-3">
                    <div class="bg-gray-50 rounded-lg p-3">
                        <span class="text-[9px] font-mono text-gray-400 block mb-1">Bandwidth Minggu Ini</span>
                        <span class="text-lg font-black font-mono text-black block mb-1">8.9 TB</span>
                        <span class="text-[9px] text-gray-500">Cloudflare Edge Cache Hit 94.2%</span>
                    </div>
                    <div class="bg-gray-50 rounded-lg p-3">
                        <span class="text-[9px] font-mono text-gray-400 block mb-1">Glacier Lifecycle</span>
                        <span class="text-lg font-black font-mono text-black block mb-1">> 90 Hari</span>
                        <span class="text-[9px] text-gray-500">Auto-cold tiering aktif</span>
                    </div>
                </div>
            </div>

            <!-- Distribusi Paket -->
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6">
                <div class="flex justify-between items-start mb-6">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                        <h3 class="text-base font-bold text-black">Distribusi Paket<br>Fotografer</h3>
                    </div>
                    <div class="text-[10px] font-mono font-bold text-gray-400 text-right">
                        382<br>Total
                    </div>
                </div>

                <div class="space-y-4">
                    <!-- Starter -->
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-[10px] font-bold text-black">Starter (10 GB)</span>
                            <span class="text-[10px] font-mono font-bold text-gray-500">194 Fotografer (51%)</span>
                        </div>
                        <div class="h-1.5 w-full bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-gray-400 rounded-full" style="width: 51%;"></div>
                        </div>
                    </div>
                    <!-- Pro Plan -->
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-[10px] font-bold text-black">Pro Plan (50 GB)</span>
                            <span class="text-[10px] font-mono font-bold text-gray-500">152 Fotografer (40%)</span>
                        </div>
                        <div class="h-1.5 w-full bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-black rounded-full" style="width: 40%;"></div>
                        </div>
                    </div>
                    <!-- Studio Plan -->
                    <div>
                        <div class="flex justify-between items-center mb-1">
                            <span class="text-[10px] font-bold text-black">Studio Plan (200 GB)</span>
                            <span class="text-[10px] font-mono font-bold text-gray-500">36 Fotografer (9%)</span>
                        </div>
                        <div class="h-1.5 w-full bg-gray-100 rounded-full overflow-hidden">
                            <div class="h-full bg-black rounded-full" style="width: 9%;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Operasi Cepat & Audit -->
            <div class="bg-white border border-gray-200 rounded-2xl shadow-sm p-6 flex-1">
                <div class="flex items-center gap-3 mb-6">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    <h3 class="text-base font-bold text-black">Operasi Cepat &<br>Audit</h3>
                </div>

                <div class="space-y-2">
                    <a href="#" class="block p-3 rounded-xl hover:bg-gray-50 border border-transparent hover:border-gray-200 transition group">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center text-gray-500 group-hover:text-black">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold text-black">Trigger QRIS Auto-Reconciliation</h4>
                                    <p class="text-[9px] text-gray-500">Cocokkan saldo settlement payment gateway</p>
                                </div>
                            </div>
                            <svg class="w-4 h-4 text-gray-400 group-hover:text-black transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </a>

                    <a href="#" class="block p-3 rounded-xl hover:bg-gray-50 border border-transparent hover:border-gray-200 transition group">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center text-gray-500 group-hover:text-black">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold text-black">Export DJP Tax / Faktur</h4>
                                    <p class="text-[9px] text-gray-500">Paket data pelaporan pajak bulanan</p>
                                </div>
                            </div>
                            <svg class="w-4 h-4 text-gray-400 group-hover:text-black transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </a>

                    <a href="#" class="block p-3 rounded-xl hover:bg-gray-50 border border-transparent hover:border-gray-200 transition group">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center gap-3">
                                <div class="w-6 h-6 rounded bg-gray-100 flex items-center justify-center text-gray-500 group-hover:text-black">
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold text-black">Lihat Log Akses Asli</h4>
                                    <p class="text-[9px] text-gray-500">Stream audit otentikasi & download foto</p>
                                </div>
                            </div>
                            <svg class="w-4 h-4 text-gray-400 group-hover:text-black transition" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-fg-layout>
