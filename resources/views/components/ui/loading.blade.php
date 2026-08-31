{{-- 
    Loading Screen Component
    Global loader yang lucu dan interaktif.
    Berjalan selama minimum 2 detik di landing page, dan akan memanjang jika assets (gambar) belum termuat.
--}}
<div id="global-loader" class="fixed inset-0 z-[10000] flex flex-col items-center justify-center bg-white transition-all duration-700 ease-in-out">
    
    {{-- Fun Element --}}
    <div class="relative flex flex-col items-center">
        
        {{-- Spinner --}}
        <div class="relative w-24 h-24 mb-8 flex items-center justify-center">
            {{-- Outer glow/pulse --}}
            <div class="absolute inset-0 bg-primary-100 rounded-full animate-ping opacity-60" style="animation-duration: 2s;"></div>
            
            {{-- Modern Spinner using border --}}
            <div class="relative z-10 w-16 h-16 border-4 border-neutral-100 border-t-primary-500 rounded-full animate-spin"></div>
            
            {{-- Inner Icon (optional, to keep it fun) --}}
            <i class="ph-duotone ph-sparkle text-primary-500 text-xl absolute z-20 animate-pulse"></i>
        </div>
        
        {{-- Text --}}
        <h2 class="font-heading font-black text-neutral-900 text-2xl mb-2 tracking-tight">Memuat...</h2>
        <p class="text-neutral-500 text-sm font-medium animate-pulse text-center max-w-xs">
            Sabar yaa, lagi siap-siap buat nampilin yang terbaik buat kamu! ✨
        </p>
    </div>
    
</div>

<script>
    // Inline script agar berjalan seketika saat DOM dirender (mencegah FOUC)
    (function() {
        const loader = document.getElementById('global-loader');
        
        if (!loader) return;
        
        // Cek apakah user berada di landing page ("/")
        const isLandingPage = window.location.pathname === '/';
        // Aturan waktu minimum sesuai request: 2 detik untuk landing page, 0.5 detik untuk halaman lain
        const minDelay = isLandingPage ? 2000 : 500; 
        const startTime = Date.now();

        function hideLoader() {
            setTimeout(() => {
                // Efek fade out & sedikit membesar (Zoom Out effect)
                loader.style.opacity = '0';
                loader.style.transform = 'scale(1.05)';
                loader.style.pointerEvents = 'none'; // Langsung disable click
                
                setTimeout(() => {
                    loader.style.display = 'none';
                    // Trigger custom event untuk GSAP/animasi lain jika butuh
                    window.dispatchEvent(new Event('loaderFinished'));
                }, 700);
            }, 300);
        }

        // Event window.onload hanya terpanggil KETIKA SEMUA ASSET (gambar, css, js) SELESAI di-download
        window.addEventListener('load', () => {
            const timeElapsed = Date.now() - startTime;
            // Jika asset dimuat kurang dari 2 detik (misal cache), paksa tunggu sisa waktunya.
            // Jika lebih dari 2 detik, akan langsung hilang (remainingTime = 0).
            const remainingTime = Math.max(0, minDelay - timeElapsed);
            
            setTimeout(hideLoader, remainingTime);
        });
        
        // Fallback: Jika ada asset yang gagal dimuat sehingga 'load' tidak terpicu,
        // paksa loading hilang setelah 10 detik.
        setTimeout(hideLoader, Math.max(10000, minDelay));
    })();
</script>
