<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login — HIMSI DPC Cikarang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-neutral-950 font-sans antialiased min-h-screen flex items-center justify-center relative overflow-hidden selection:bg-accent-500 selection:text-neutral-900">

    {{-- ============================================================
         BACKGROUND (FULL SCREEN DYNAMIC)
         ============================================================ --}}
    <div class="absolute inset-0 w-full h-full">
        {{-- High quality image --}}
        <img src="{{ asset('assets/images/bph.webp') }}" class="w-full h-full object-cover opacity-30 scale-105" alt="Background">
        
        {{-- Complex Modern Gradient Overlay --}}
        <div class="absolute inset-0 bg-gradient-to-br from-primary-950/95 via-primary-900/80 to-neutral-950/95 mix-blend-multiply"></div>
        
        {{-- Glowing Orbs for Depth --}}
        <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-primary-600/30 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-accent-500/20 rounded-full blur-[120px] pointer-events-none"></div>
    </div>

    {{-- ============================================================
         GLASSMORPHISM LOGIN CARD
         ============================================================ --}}
    <div class="relative z-10 w-full max-w-[1100px] mx-auto p-4 md:p-6 lg:p-8 flex items-stretch min-h-[650px]">
        
        <div class="flex w-full bg-white/5 backdrop-blur-2xl border border-white/10 rounded-[2.5rem] shadow-[0_8px_40px_rgba(0,0,0,0.5)] overflow-hidden">
            
            {{-- Left Side: Branding (Visible on lg+) --}}
            <div class="hidden lg:flex w-5/12 flex-col justify-between p-12 relative overflow-hidden bg-gradient-to-br from-white/5 to-transparent border-r border-white/10">
                
                {{-- Decorative pattern --}}
                <div class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjIiIGZpbGw9IiNmZmYiLz48L3N2Zz4=')]"></div>

                <div>
                    <a href="/" class="flex items-center gap-4 group w-fit relative z-10">
                        <img src="{{ asset('assets/images/logos/himsi.webp') }}" class="w-14 h-auto drop-shadow-2xl" alt="Logo HIMSI">
                        <div class="flex flex-col text-white">
                            <span class="font-heading font-black text-3xl leading-none tracking-widest text-white drop-shadow-md">HIMSI</span>
                        </div>
                    </a>
                </div>

                <div class="relative z-10 mt-12">
                    <span class="inline-block px-4 py-1.5 rounded-full bg-white/10 border border-white/20 text-white text-xs font-bold tracking-widest uppercase mb-6 backdrop-blur-md">
                        Sistem Informasi Terpadu
                    </span>
                    <h1 class="font-heading font-extrabold text-white text-5xl leading-[1.15] tracking-tight mb-6">
                        Satu Tujuan,<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-accent-400 to-accent-200">Satu Keluarga.</span>
                    </h1>
                    <p class="text-neutral-300/80 text-lg leading-relaxed font-medium">
                        Selamat datang di portal resmi HIMSI DPC Cikarang. Masuk untuk menjelajahi wawasan baru dan kelola kegiatan Anda.
                    </p>
                </div>
            </div>

            {{-- Right Side: Form Interface --}}
            <div class="w-full lg:w-7/12 p-8 md:p-12 lg:p-16 flex flex-col justify-center relative">
                
                {{-- Mobile Logo --}}
                <div class="lg:hidden flex items-center gap-4 mb-10 w-fit">
                    <img src="{{ asset('assets/images/logos/himsi.webp') }}" class="w-12 h-auto" alt="Logo HIMSI">
                    <span class="font-heading font-black text-2xl tracking-widest text-white">HIMSI</span>
                </div>

                <div class="mb-10 text-left">
                    <h2 class="font-heading font-bold text-3xl md:text-4xl text-white mb-3 tracking-tight">Selamat Datang</h2>
                    <p class="text-neutral-400 text-base">Silakan masuk menggunakan kredensial akun Anda.</p>
                </div>

                <form action="#" method="POST" class="space-y-6">
                    @csrf
                    
                    {{-- NIM / Email Input --}}
                    <div class="space-y-2">
                        <label for="username" class="block text-sm font-semibold text-neutral-300">NIM / Email</label>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 w-14 flex items-center justify-center pointer-events-none">
                                <i class="ph-bold ph-user text-neutral-400 group-focus-within:text-accent-400 transition-colors text-xl"></i>
                            </div>
                            <input type="text" id="username" name="username" placeholder="Contoh: 12190001" 
                                class="w-full pl-14 pr-4 py-4 rounded-xl border border-white/10 bg-white/5 text-white placeholder-neutral-500 focus:bg-white/10 focus:border-accent-500/50 focus:ring-1 focus:ring-accent-500/50 outline-none transition-all font-medium shadow-inner backdrop-blur-sm"
                                required>
                        </div>
                    </div>

                    {{-- Password Input --}}
                    <div class="space-y-2">
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-semibold text-neutral-300">Password</label>
                            <a href="#" class="text-xs font-bold text-accent-400 hover:text-accent-300 transition-colors">Lupa sandi?</a>
                        </div>
                        <div class="relative group">
                            <div class="absolute inset-y-0 left-0 w-14 flex items-center justify-center pointer-events-none">
                                <i class="ph-bold ph-lock-key text-neutral-400 group-focus-within:text-accent-400 transition-colors text-xl"></i>
                            </div>
                            <input type="password" id="password" name="password" placeholder="••••••••" 
                                class="w-full pl-14 pr-14 py-4 rounded-xl border border-white/10 bg-white/5 text-white placeholder-neutral-500 focus:bg-white/10 focus:border-accent-500/50 focus:ring-1 focus:ring-accent-500/50 outline-none transition-all font-medium tracking-widest shadow-inner backdrop-blur-sm"
                                required>
                            <button type="button" class="absolute inset-y-0 right-0 w-14 flex items-center justify-center text-neutral-400 hover:text-accent-400 transition-colors cursor-pointer">
                                <i class="ph-bold ph-eye text-xl"></i>
                            </button>
                        </div>
                    </div>

                    {{-- Remember Me & Submit row --}}
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-8 pt-4">
                        
                        {{-- Custom Checkbox --}}
                        <label class="flex items-center cursor-pointer group">
                            <div class="relative flex items-center justify-center">
                                <input type="checkbox" name="remember" class="peer appearance-none w-5 h-5 border-2 border-neutral-500 rounded-md bg-transparent checked:bg-accent-500 checked:border-accent-500 focus:outline-none transition-all cursor-pointer shadow-inner">
                                <i class="ph-bold ph-check absolute text-neutral-900 opacity-0 peer-checked:opacity-100 pointer-events-none text-xs"></i>
                            </div>
                            <span class="ml-3 text-sm font-medium text-neutral-400 group-hover:text-neutral-300 transition-colors select-none">Ingat saya</span>
                        </label>

                        {{-- Submit Button --}}
                        <button type="submit" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-accent-500 hover:bg-accent-400 active:bg-accent-600 text-neutral-900 font-extrabold shadow-[0_0_20px_rgba(255,161,0,0.3)] hover:shadow-[0_0_30px_rgba(255,161,0,0.5)] transition-all flex justify-center items-center gap-3 group">
                            Masuk
                            <i class="ph-bold ph-arrow-right transform group-hover:translate-x-1 transition-transform text-lg"></i>
                        </button>
                    </div>
                </form>

                {{-- Back to Home --}}
                <div class="mt-12 text-center lg:text-left">
                    <a href="/" class="inline-flex items-center text-neutral-500 hover:text-white text-sm font-medium transition-colors group">
                        <i class="ph-bold ph-arrow-left mr-2 transform group-hover:-translate-x-1 transition-transform"></i>
                        Kembali ke Halaman Utama
                    </a>
                </div>

            </div>
        </div>

    </div>

</body>
</html>
