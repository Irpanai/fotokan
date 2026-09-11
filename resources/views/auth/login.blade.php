<x-guest-layout>
    <div class="w-full max-w-[1000px] mx-auto flex flex-col md:flex-row bg-[#0F111A] rounded-3xl overflow-hidden border border-gray-800 shadow-2xl">
        <!-- Left Side -->
        <div class="w-full md:w-1/2 p-10 md:p-12 flex flex-col relative overflow-hidden group">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-900/20 to-gray-900 z-0"></div>
            <!-- Glows -->
            <div class="absolute -top-20 -left-20 w-64 h-64 bg-blue-500/10 rounded-full blur-[80px]"></div>
            
            <div class="relative z-10 flex items-center justify-between mb-16">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-orange-500 to-yellow-500 flex items-center justify-center">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <span class="font-bold text-xl text-white">Tadapat<span class="text-orange-theme">Snap</span></span>
                </div>
                <div class="px-3 py-1 bg-green-500/10 border border-green-500/20 rounded-full flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                    <span class="text-[9px] font-bold text-green-400 tracking-widest">AI SENSOR ACTIVE</span>
                </div>
            </div>

            <div class="relative z-10 mb-auto">
                <div class="inline-block px-3 py-1.5 mb-6 border border-cyan-500/30 rounded-lg bg-cyan-500/10 text-[9px] font-bold text-cyan-400 tracking-widest flex items-center gap-2 w-max">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    RACE-TIME OPTICAL VISION
                </div>
                <h1 class="text-3xl lg:text-4xl font-black text-white leading-tight mb-5">
                    Tangkap Detik Juara. <br>
                    <span class="text-orange-theme">Temukan Foto</span> BIB Seketika.
                </h1>
                <p class="text-gray-400 text-sm leading-relaxed max-w-sm">
                    Akurasi machine vision mutakhir untuk mengenali nomor dada & ekspresi wajah atlet di setiap kilometer perlombaan jalan raya.
                </p>
            </div>

            <!-- Telemetry UI -->
            <div class="relative z-10 mt-12 bg-gray-900/50 border border-gray-700 p-4 rounded-xl backdrop-blur-sm">
                <div class="flex justify-between items-center mb-3 text-[9px] font-bold tracking-widest text-gray-500">
                    <div class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path></svg>
                        NEURAL DETECTION TELEMETRY
                    </div>
                    <span class="text-cyan-400">LATENCY: 0.18s</span>
                </div>
                <div class="h-1.5 w-full bg-gray-800 rounded-full overflow-hidden mb-2 relative">
                    <div class="absolute top-0 left-0 h-full bg-gradient-to-r from-orange-theme to-cyan-400 w-[99.1%]"></div>
                </div>
                <div class="flex justify-between items-center text-[9px] font-bold text-gray-400">
                    <span>SCAN: BIB #8491 • SUB-3 RUNNER</span>
                    <span class="text-white">MATCH CONFIDENCE 99.1%</span>
                </div>
            </div>

            <div class="relative z-10 grid grid-cols-2 gap-4 mt-8">
                <div class="bg-gray-800/30 border border-gray-700/50 p-4 rounded-xl">
                    <p class="text-xl lg:text-2xl font-black text-orange-theme">150.000+</p>
                    <p class="text-[10px] text-gray-400 mt-1">Momen Olahraga Diabadikan</p>
                </div>
                <div class="bg-gray-800/30 border border-gray-700/50 p-4 rounded-xl">
                    <p class="text-xl lg:text-2xl font-black text-white">98.4%</p>
                    <p class="text-[10px] text-gray-400 mt-1">Akurasi AI BIB Recognition</p>
                </div>
            </div>
        </div>

        <!-- Right Side (Login Form) -->
        <div class="w-full md:w-1/2 p-10 md:p-12 bg-[#0A0C13] flex flex-col justify-center">
            <div class="flex justify-between items-start mb-8">
                <div>
                    <h2 class="text-2xl font-bold text-white mb-2">Masuk ke TadapatSnap</h2>
                    <p class="text-sm text-gray-400">Akses perpustakaan foto resolusi tinggi & dashboard Anda</p>
                </div>
                <div class="w-10 h-10 shrink-0 rounded-xl bg-gray-800 flex items-center justify-center border border-gray-700">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                </div>
            </div>

            <!-- Role Tabs -->
            <div class="flex bg-gray-900 rounded-xl p-1 mb-6 border border-gray-800">
                <button class="flex-1 py-2.5 bg-orange-theme rounded-lg text-xs font-bold text-white shadow-lg flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    Pelari / Pembeli
                </button>
                <button class="flex-1 py-2.5 rounded-lg text-xs font-semibold text-gray-400 hover:text-white transition flex items-center justify-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path></svg>
                    Fotografer / Kreator
                </button>
            </div>

            <div class="bg-gray-800/30 border border-gray-700/50 rounded-xl p-3 mb-6 flex items-start gap-3">
                <svg class="w-4 h-4 text-cyan-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <p class="text-[11px] text-gray-400 leading-relaxed">Cari & download foto marathon langsung dengan pencocokan nomor dada otomatis.</p>
            </div>

            <!-- SSO -->
            <div class="grid grid-cols-2 gap-3 mb-6">
                <button class="bg-gray-900 border border-gray-700 hover:bg-gray-800 text-gray-300 font-semibold py-2.5 rounded-xl transition flex items-center justify-center gap-2 text-xs">
                    <svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 24 24"><path d="M15.387 17.944l-2.089-4.116h-3.065L15.387 24l5.15-10.172h-3.066m-7.008-5.599l2.836 5.598h4.172L10.463 0l-7 13.828h4.169"></path></svg>
                    Strava SSO
                </button>
                <button class="bg-gray-900 border border-gray-700 hover:bg-gray-800 text-gray-300 font-semibold py-2.5 rounded-xl transition flex items-center justify-center gap-2 text-xs">
                    <svg class="w-4 h-4" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                    Google
                </button>
            </div>

            <div class="flex items-center gap-4 mb-6">
                <div class="h-px bg-gray-800 flex-1"></div>
                <span class="text-[9px] font-bold text-gray-500 uppercase tracking-widest">ATAU MASUK DENGAN EMAIL</span>
                <div class="h-px bg-gray-800 flex-1"></div>
            </div>

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-xs font-bold text-gray-400 mb-1.5">Email Terdaftar / No. WhatsApp</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                        </div>
                        <input type="email" name="email" class="w-full bg-gray-900 border border-gray-700 text-white text-sm rounded-xl pl-10 pr-4 py-2.5 focus:ring-orange-theme focus:border-orange-theme transition" placeholder="nama@email.com" value="{{ old('email') }}" required>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-400 text-xs" />
                </div>

                <div>
                    <div class="flex justify-between items-center mb-1.5">
                        <label class="block text-xs font-bold text-gray-400">Kata Sandi</label>
                        <a href="{{ route('password.request') }}" class="text-[10px] font-bold text-orange-theme hover:text-orange-theme-dark transition">Lupa kata sandi?</a>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 14a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </div>
                        <input type="password" name="password" class="w-full bg-gray-900 border border-gray-700 text-white text-sm rounded-xl pl-10 pr-10 py-2.5 focus:ring-orange-theme focus:border-orange-theme transition" placeholder="••••••••••••" required>
                        <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center text-gray-500 hover:text-white transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-400 text-xs" />
                </div>

                <div class="flex items-center justify-between pt-1">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-3.5 h-3.5 rounded border-gray-700 bg-gray-900 text-orange-theme focus:ring-orange-theme focus:ring-offset-gray-900" checked>
                        <span class="text-xs font-semibold text-gray-400">Ingat saya di perangkat ini</span>
                    </label>
                    <span class="text-[9px] font-bold text-gray-500 tracking-wider flex items-center gap-1">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        FAST ACCESS
                    </span>
                </div>

                <button type="submit" class="w-full bg-orange-theme hover:bg-orange-theme-dark text-white font-bold py-3 rounded-xl transition flex items-center justify-center gap-2 shadow-[0_0_20px_rgba(255,102,0,0.2)] mt-4">
                    Masuk ke TadapatSnap
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-xs text-gray-400">Belum memiliki akun? <a href="{{ route('register') }}" class="font-bold text-orange-theme hover:text-orange-theme-dark transition">Daftar Sekarang</a></p>
                <div class="flex items-center justify-center gap-3 mt-5 px-3 py-1.5 bg-gray-900 rounded-lg border border-gray-800 w-max mx-auto">
                    <div class="flex items-center gap-1.5 text-[8px] font-bold text-gray-500 tracking-wider">
                        <svg class="w-3 h-3 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        256-BIT SSL PROTECTED
                    </div>
                    <div class="w-1 h-1 rounded-full bg-gray-700"></div>
                    <div class="flex items-center gap-1.5 text-[8px] font-bold text-gray-500 tracking-wider">
                        <svg class="w-3 h-3 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        UU PDP COMPLIANT
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
