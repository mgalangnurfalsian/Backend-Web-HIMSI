{{-- Footer — HIMSI DPC Cikarang --}}
<footer class="js-footer bg-white border-t border-neutral-200 pt-16 pb-8">
    <div class="section-container">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 lg:gap-10">

            {{-- Brand --}}
            <div class="lg:col-span-2">
                {{-- Logo (Sesuai Navbar) --}}
                <a href="/" class="flex items-center gap-3 group mb-6" aria-label="HIMSI DPC Cikarang">
                    <img src="{{ asset('assets/images/logos/himsi.webp') }}" class="w-12 h-auto drop-shadow-sm" alt="himsi logo">
                    <div class="h-10 w-px bg-neutral-300"></div>
                    <div class="flex flex-col">
                        <span class="font-heading font-black text-primary-500 text-xl leading-none tracking-wide">HIMSI</span>
                        <span class="font-sans font-medium text-neutral-500 text-[11px] leading-tight mt-0.5">UBSI CIKARANG</span>
                    </div>
                </a>
                
                <p class="text-neutral-500 text-sm md:text-base leading-relaxed max-w-sm mb-8">
                    Himpunan Mahasiswa Sistem Informasi DPC Cikarang. Bersama membangun generasi
                    teknologi yang kompeten dan berdaya saing.
                </p>
                
                {{-- Social Media --}}
                <div class="flex gap-4">
                    <a href="https://instagram.com/himsi.ubsicikarang" target="_blank" class="w-10 h-10 rounded-full bg-neutral-100 hover:bg-primary-50 text-neutral-500 hover:text-primary-600 flex items-center justify-center transition-colors duration-200" aria-label="Instagram HIMSI">
                        <i class="ph-fill ph-instagram-logo text-xl"></i>
                    </a>
                    <a href="https://youtube.com/" target="_blank" class="w-10 h-10 rounded-full bg-neutral-100 hover:bg-primary-50 text-neutral-500 hover:text-primary-600 flex items-center justify-center transition-colors duration-200" aria-label="YouTube HIMSI">
                        <i class="ph-fill ph-youtube-logo text-xl"></i>
                    </a>
                    <a href="https://linkedin.com/" target="_blank" class="w-10 h-10 rounded-full bg-neutral-100 hover:bg-primary-50 text-neutral-500 hover:text-primary-600 flex items-center justify-center transition-colors duration-200" aria-label="LinkedIn HIMSI">
                        <i class="ph-fill ph-linkedin-logo text-xl"></i>
                    </a>
                </div>
            </div>

            {{-- Links --}}
            <div>
                <h3 class="font-heading font-bold text-neutral-900 text-lg mb-6">Navigasi</h3>
                <ul class="flex flex-col gap-4">
                    <li><a href="/" class="text-neutral-600 hover:text-primary-600 font-medium transition-colors">Beranda</a></li>
                    <li><a href="/sejarah" class="text-neutral-600 hover:text-primary-600 font-medium transition-colors">Sejarah</a></li>
                    <li><a href="/bph" class="text-neutral-600 hover:text-primary-600 font-medium transition-colors">BPH</a></li>
                    <li><a href="/divisi" class="text-neutral-600 hover:text-primary-600 font-medium transition-colors">Divisi</a></li>
                    <li><a href="/kegiatan" class="text-neutral-600 hover:text-primary-600 font-medium transition-colors">Kegiatan</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h3 class="font-heading font-bold text-neutral-900 text-lg mb-6">Kontak</h3>
                <ul class="flex flex-col gap-4">
                    <li class="flex items-start gap-3 text-neutral-600">
                        <i class="ph-fill ph-map-pin text-primary-500 text-xl shrink-0 mt-0.5"></i>
                        <span class="text-sm font-medium leading-relaxed">Cikarang, Kab.Bekasi, Jawa Barat</span>
                    </li>
                    <li class="flex items-center gap-3 text-neutral-600">
                        <i class="ph-fill ph-envelope text-primary-500 text-xl shrink-0"></i>
                        <a href="mailto:himsicikarang@gmail.com" class="text-sm font-medium hover:text-primary-600 transition-colors">himsicikarang@gmail.com</a>
                    </li>
                    <li class="flex items-center gap-3 text-neutral-600">
                        <i class="ph-fill ph-instagram-logo text-primary-500 text-xl shrink-0"></i>
                        <a href="https://instagram.com/himsi.ubsicikarang" target="_blank" class="text-sm font-medium hover:text-primary-600 transition-colors">@himsi.ubsicikarang</a>
                    </li>
                </ul>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="mt-16 pt-8 border-t border-neutral-200 flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-sm text-neutral-500 font-medium">
                &copy; {{ date('Y') }} HIMSI DPC Cikarang. All rights reserved.
            </p>
            
        </div>
    </div>
</footer>
