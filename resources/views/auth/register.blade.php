<x-guest-layout>
    <div class="w-full max-w-[1100px] mx-auto flex flex-col md:flex-row bg-[#0F111A] rounded-3xl overflow-hidden border border-gray-800 shadow-2xl">
        <!-- Left Side (Registration Form) -->
        <div class="w-full md:w-1/2 p-8 md:p-10 flex flex-col relative bg-[#0F111A]">
            <div class="flex items-center gap-2 mb-8">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-orange-500 to-yellow-500 flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                </div>
                <div class="flex flex-col">
                    <span class="font-bold text-lg leading-tight text-white">Tadapat<span class="text-orange-theme">Snap</span></span>
                    <span class="text-[8px] font-bold text-gray-500 tracking-widest">TELEMETRIC AUTH ENGINE V2.4</span>
                </div>
                <div class="ml-auto px-2.5 py-1 bg-green-500/10 border border-green-500/20 rounded-full flex items-center gap-1.5">
                    <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                    <span class="text-[8px] font-bold text-green-400 tracking-widest">SISTEM AKTIF</span>
                </div>
            </div>

            <div class="mb-6">
                <h1 class="text-2xl font-black text-white leading-tight mb-2">Mulai Petualangan Olahraga & Visualmu</h1>
                <p class="text-gray-400 text-xs leading-relaxed max-w-sm">
                    Satu akun terpadu untuk mendeteksi nomor dada (BIB) marathon atau menjual foto aksi street photography beresolusi penuh.
                </p>
            </div>

            <!-- Role Selection -->
            <div class="mb-6">
                <div class="flex items-center gap-2 mb-3">
                    <svg class="w-3.5 h-3.5 text-orange-theme" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    <span class="text-[9px] font-bold text-gray-400 uppercase tracking-widest">PILIH PERAN UTAMA KAMU</span>
                </div>
                
                <!-- We will use a radio group disguised as cards -->
                <form method="POST" action="{{ route('register') }}" id="registerForm">
                    @csrf
                    <div class="grid grid-cols-2 gap-3 mb-6">
                        <label class="cursor-pointer relative">
                            <input type="radio" name="role" value="pembeli" class="peer sr-only" checked>
                            <div class="p-3 bg-gray-900 border border-gray-700 rounded-xl peer-checked:border-orange-theme peer-checked:bg-orange-500/10 transition">
                                <div class="flex justify-between items-start mb-2">
                                    <div class="flex items-center gap-1.5 text-orange-theme font-bold text-sm">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                        Pelari / Pembeli
                                    </div>
                                    <span class="bg-orange-theme text-white text-[8px] font-bold px-1.5 py-0.5 rounded-sm">GRATIS</span>
                                </div>
                                <p class="text-[10px] text-gray-400 leading-tight">Temukan foto wajah & nomor dada BIB instan, klaim & simpan ke My Library.</p>
                            </div>
                        </label>
                        
                        <label class="cursor-pointer relative">
                            <input type="radio" name="role" value="fotografer" class="peer sr-only">
                            <div class="p-3 bg-gray-900 border border-gray-700 rounded-xl peer-checked:border-orange-theme peer-checked:bg-orange-500/10 transition h-full flex flex-col justify-between">
                                <div class="flex justify-between items-start mb-2">
                                    <div class="flex items-center gap-1.5 text-gray-300 font-bold text-sm peer-checked:text-orange-theme transition">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path></svg>
                                        Fotografer Kreator
                                    </div>
                                    <span class="bg-gray-700 text-gray-300 text-[8px] font-bold px-1.5 py-0.5 rounded-sm">MONETISASI</span>
                                </div>
                                <p class="text-[10px] text-gray-400 leading-tight">Monetisasi foto event, 5GB cloud vault gratis, smart watermark otomatis.</p>
                            </div>
                        </label>
                    </div>

                    <!-- SSO Registration -->
                    <div class="grid grid-cols-2 gap-3 mb-6">
                        <button type="button" class="bg-gray-900 border border-gray-700 hover:bg-gray-800 text-gray-300 font-semibold py-2 rounded-xl transition flex items-center justify-center gap-2 text-xs">
                            <svg class="w-4 h-4" viewBox="0 0 24 24"><path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                            Daftar Cepat dengan Google
                        </button>
                        <button type="button" class="bg-gray-900 border border-gray-700 hover:bg-gray-800 text-gray-300 font-semibold py-2 rounded-xl transition flex items-center justify-center gap-2 text-xs">
                            <svg class="w-4 h-4 text-orange-500" fill="currentColor" viewBox="0 0 24 24"><path d="M15.387 17.944l-2.089-4.116h-3.065L15.387 24l5.15-10.172h-3.066m-7.008-5.599l2.836 5.598h4.172L10.463 0l-7 13.828h4.169"></path></svg>
                            Sinkronisasi Akun Strava
                        </button>
                    </div>

                    <div class="flex items-center gap-4 mb-6">
                        <div class="h-px bg-gray-800 flex-1"></div>
                        <span class="text-[8px] font-bold text-gray-500 uppercase tracking-widest">ATAU LENGKAPI FORMULIR PENDAFTARAN</span>
                        <div class="h-px bg-gray-800 flex-1"></div>
                    </div>

                    <div class="space-y-4">
                        <!-- Nama Lengkap -->
                        <div>
                            <div class="flex justify-between items-end mb-1.5">
                                <label class="block text-[11px] font-bold text-gray-400">Nama Lengkap (Sesuai ID/KTP)</label>
                                <span class="text-[9px] font-bold text-green-500 tracking-wider">Wajib untuk verifikasi lisensi</span>
                            </div>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>
                                <input type="text" name="name" class="w-full bg-gray-900 border border-gray-700 text-white text-xs rounded-xl pl-9 pr-4 py-2.5 focus:ring-orange-theme focus:border-orange-theme transition" placeholder="Contoh: Raden Satria Pratama" value="{{ old('name') }}" required>
                            </div>
                            <x-input-error :messages="$errors->get('name')" class="mt-1 text-red-400 text-[10px]" />
                        </div>

                        <div class="grid grid-cols-2 gap-3">
                            <!-- Email -->
                            <div>
                                <label class="block text-[11px] font-bold text-gray-400 mb-1.5">Email Aktif</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="w-3.5 h-3.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <input type="email" name="email" class="w-full bg-gray-900 border border-gray-700 text-white text-xs rounded-xl pl-8 pr-3 py-2.5 focus:ring-orange-theme focus:border-orange-theme transition" placeholder="nama@domain.com" value="{{ old('email') }}" required>
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-1 text-red-400 text-[10px]" />
                            </div>

                            <!-- No WhatsApp -->
                            <div>
                                <div class="flex justify-between items-end mb-1.5">
                                    <label class="block text-[11px] font-bold text-gray-400">Nomor WhatsApp</label>
                                    <span class="text-[8px] font-bold text-cyan-400 tracking-wider">Notif Foto & Penarikan</span>
                                </div>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="w-3.5 h-3.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                    </div>
                                    <input type="text" name="whatsapp" class="w-full bg-gray-900 border border-gray-700 text-white text-xs rounded-xl pl-8 pr-3 py-2.5 focus:ring-orange-theme focus:border-orange-theme transition" placeholder="081234567890" value="{{ old('whatsapp') }}">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-3">
                            <!-- Password -->
                            <div>
                                <label class="block text-[11px] font-bold text-gray-400 mb-1.5">Kata Sandi</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="w-3.5 h-3.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                    </div>
                                    <input type="password" name="password" class="w-full bg-gray-900 border border-gray-700 text-white text-xs rounded-xl pl-8 pr-8 py-2.5 focus:ring-orange-theme focus:border-orange-theme transition" placeholder="Minimal 8 karakter" required>
                                </div>
                                <x-input-error :messages="$errors->get('password')" class="mt-1 text-red-400 text-[10px]" />
                            </div>

                            <!-- Konfirmasi Password -->
                            <div>
                                <label class="block text-[11px] font-bold text-gray-400 mb-1.5">Konfirmasi Kata Sandi</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <svg class="w-3.5 h-3.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                                    </div>
                                    <input type="password" name="password_confirmation" class="w-full bg-gray-900 border border-gray-700 text-white text-xs rounded-xl pl-8 pr-8 py-2.5 focus:ring-orange-theme focus:border-orange-theme transition" placeholder="Ulangi kata sandi" required>
                                </div>
                            </div>
                        </div>

                        <!-- Password Strength & Checkbox -->
                        <div class="bg-gray-900/50 border border-gray-800 rounded-lg p-2.5 mt-2">
                            <div class="flex justify-between items-center mb-1.5">
                                <span class="text-[9px] font-bold text-gray-500 tracking-widest uppercase">Kekuatan Kata Sandi:</span>
                                <span class="text-[9px] font-bold text-gray-500 tracking-widest">BELUM DIISI</span>
                            </div>
                            <div class="flex gap-1 mb-2">
                                <div class="h-1 flex-1 bg-gray-700 rounded-full"></div>
                                <div class="h-1 flex-1 bg-gray-700 rounded-full"></div>
                                <div class="h-1 flex-1 bg-gray-700 rounded-full"></div>
                                <div class="h-1 flex-1 bg-gray-700 rounded-full"></div>
                            </div>
                            <div class="flex items-center gap-3 text-[9px] font-medium text-gray-500">
                                <span class="flex items-center gap-1"><span class="w-1 h-1 rounded-full bg-gray-600"></span> Min. 8 Karakter</span>
                                <span class="flex items-center gap-1"><span class="w-1 h-1 rounded-full bg-gray-600"></span> Angka</span>
                                <span class="flex items-center gap-1"><span class="w-1 h-1 rounded-full bg-gray-600"></span> Simbol/Kapital</span>
                            </div>
                        </div>

                        <label class="flex items-start gap-2 mt-4 cursor-pointer">
                            <input type="checkbox" name="terms" required class="mt-0.5 w-3.5 h-3.5 rounded border-gray-700 bg-gray-900 text-orange-theme focus:ring-orange-theme">
                            <span class="text-[10px] text-gray-400 leading-tight">
                                Saya menyetujui <a href="#" class="text-orange-theme hover:underline">Syarat & Ketentuan Layanan</a>, Kebijakan Privasi Etika Pelari, serta <a href="#" class="text-green-400 hover:underline">Perlindungan Hak Cipta Fotografer</a> TadapatSnap.
                            </span>
                        </label>

                        <button type="submit" class="w-full bg-orange-theme hover:bg-orange-theme-dark text-white font-bold py-3 rounded-xl transition flex items-center justify-center gap-2 shadow-[0_0_20px_rgba(255,102,0,0.2)] mt-6">
                            Daftar Akun Gratis Sekarang
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </button>
                        
                        <div class="text-center mt-4">
                            <p class="text-xs text-gray-400">Sudah punya akun TadapatSnap? <a href="{{ route('login') }}" class="font-bold text-orange-theme hover:text-orange-theme-dark transition underline">Masuk di sini</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Side (Value Props) -->
        <div class="w-full md:w-1/2 p-8 md:p-10 bg-[#0A0C13] border-l border-gray-800 flex flex-col justify-between relative overflow-hidden">
            <!-- Decorative circle -->
            <div class="absolute -bottom-32 -right-32 w-80 h-80 bg-blue-500/10 rounded-full blur-[100px]"></div>

            <div class="relative z-10">
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center gap-1.5">
                        <span class="w-1.5 h-1.5 rounded-full bg-orange-theme animate-pulse"></span>
                        <span class="text-[9px] font-bold text-gray-400 tracking-widest uppercase">ECOSYSTEM TELEMETRY</span>
                    </div>
                    <span class="text-[9px] font-bold text-gray-500 tracking-widest">GBK • JAKARTA CFD</span>
                </div>

                <!-- Feature Image Card -->
                <div class="relative rounded-2xl overflow-hidden border border-gray-700/50 shadow-2xl mb-8 group">
                    <img src="https://images.unsplash.com/photo-1552674605-15c2145e9ca4?q=80&w=800&auto=format&fit=crop" class="w-full h-48 object-cover transform group-hover:scale-105 transition duration-700" alt="Telemetry View">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
                    
                    <!-- Tech Overlays -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-20 border-2 border-cyan-400/80 rounded-sm flex items-start justify-center">
                        <div class="absolute -top-3 bg-cyan-400 text-gray-900 text-[8px] font-black px-1.5 py-0.5 rounded-sm">BIB #4092 99.8%</div>
                        <div class="absolute -bottom-3 bg-cyan-400 text-gray-900 text-[8px] font-black px-1.5 py-0.5 rounded-sm">FACE DETECTED</div>
                        <!-- Corner markers -->
                        <div class="absolute -top-1 -left-1 w-2 h-2 border-t-2 border-l-2 border-cyan-400"></div>
                        <div class="absolute -top-1 -right-1 w-2 h-2 border-t-2 border-r-2 border-cyan-400"></div>
                        <div class="absolute -bottom-1 -left-1 w-2 h-2 border-b-2 border-l-2 border-cyan-400"></div>
                        <div class="absolute -bottom-1 -right-1 w-2 h-2 border-b-2 border-r-2 border-cyan-400"></div>
                    </div>
                    
                    <div class="absolute bottom-3 left-3 bg-gray-900/80 backdrop-blur border border-gray-700 rounded text-[9px] font-medium text-gray-300 px-2 py-1 flex items-center gap-1.5">
                        <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path></svg>
                        1/4000s • f/2.8 • ISO 200
                    </div>
                </div>

                <h3 class="text-xl font-bold text-white mb-2">Akurasi Pengenalan Lensa Tanpa Batas</h3>
                <p class="text-[11px] text-gray-400 leading-relaxed mb-8">
                    Platform pertama di Indonesia yang menggabungkan telemetry visual AI, verifikasi nomor dada pelari secara real-time, dan hak cipta terdesentralisasi untuk fotografer jalanan.
                </p>

                <!-- Value Props List -->
                <div class="space-y-4 mb-8">
                    <div class="flex gap-3 items-start bg-gray-800/30 p-3 rounded-xl border border-gray-800 hover:border-gray-700 transition">
                        <div class="w-10 h-10 shrink-0 rounded-lg bg-orange-500/10 border border-orange-500/20 flex items-center justify-center">
                            <svg class="w-5 h-5 text-orange-theme" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <h4 class="text-sm font-bold text-white">AI BIB & Face Telemetry</h4>
                                <span class="text-[8px] font-bold text-orange-theme tracking-widest uppercase">Instan</span>
                            </div>
                            <p class="text-[10px] text-gray-400 leading-relaxed">Unggah nomor lari atau selfie wajah sekali saja. Algoritma kami secara otomatis mengelompokkan ratusan galeri CFD dan lomba lari dalam sekejap.</p>
                        </div>
                    </div>

                    <div class="flex gap-3 items-start bg-gray-800/30 p-3 rounded-xl border border-gray-800 hover:border-gray-700 transition">
                        <div class="w-10 h-10 shrink-0 rounded-lg bg-cyan-500/10 border border-cyan-500/20 flex items-center justify-center">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <h4 class="text-sm font-bold text-white">Perlindungan Etika & Privasi</h4>
                                <span class="text-[8px] font-bold text-cyan-400 tracking-widest uppercase">Safe Guard</span>
                            </div>
                            <p class="text-[10px] text-gray-400 leading-relaxed">Fitur proteksi watermark anti-screenshot tingkat lanjut, hak takedown langsung bagi pelari demi kenyamanan, dan lisensi resolusi asli 300 DPI.</p>
                        </div>
                    </div>

                    <div class="flex gap-3 items-start bg-gray-800/30 p-3 rounded-xl border border-gray-800 hover:border-gray-700 transition">
                        <div class="w-10 h-10 shrink-0 rounded-lg bg-green-500/10 border border-green-500/20 flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <h4 class="text-sm font-bold text-white">Royalti Transparan & Cair Cepat</h4>
                                <span class="text-[8px] font-bold text-green-400 tracking-widest uppercase">QRIS • BCA</span>
                            </div>
                            <p class="text-[10px] text-gray-400 leading-relaxed">Bagi fotografer, nikmati potongan fee terendah di industri fotografi Indonesia. Tarik hasil penjualan seketika melalui QRIS, BCA, atau e-Wallet favorit.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Bottom -->
            <div class="relative z-10 grid grid-cols-3 gap-2 border-t border-gray-800 pt-6">
                <div class="text-center">
                    <p class="text-lg font-black text-orange-theme">120K+</p>
                    <p class="text-[8px] font-bold text-gray-500 tracking-widest uppercase mt-0.5">FOTO TERINDEKS</p>
                </div>
                <div class="text-center border-l border-gray-800">
                    <p class="text-lg font-black text-white">4,800+</p>
                    <p class="text-[8px] font-bold text-gray-500 tracking-widest uppercase mt-0.5">PELARI TERDAFTAR</p>
                </div>
                <div class="text-center border-l border-gray-800">
                    <p class="text-lg font-black text-white">950+</p>
                    <p class="text-[8px] font-bold text-gray-500 tracking-widest uppercase mt-0.5">KREATOR LENSA</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
