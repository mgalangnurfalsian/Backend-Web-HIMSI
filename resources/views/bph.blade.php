@extends('layouts.app')

@section('title', 'Badan Pengurus Harian - HIMSI DPC Cikarang')

@section('content')
<main class="w-full bg-white relative overflow-hidden" data-page="bph">

    {{-- Background Floating Objects (TsParticles) --}}
    <div id="tsparticles-bph" class="absolute inset-0 z-0 pointer-events-none overflow-hidden"></div>
    
    {{-- Background Grid Pattern --}}
    <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_rgba(0,0,0,0.03)_1px,_transparent_1px)]" style="background-size: 32px 32px;"></div>
    </div>    {{-- Hero Section --}}
    <section class="js-hero-section relative min-h-[50vh] lg:min-h-[60vh] overflow-hidden bg-neutral-50 flex items-center pt-20">
        <div class="section-container relative z-10 py-24 lg:py-32 text-center mx-auto flex flex-col items-center">
            
            {{-- Badge --}}
            <x-ui.badge variant="primary" size="md" dot class="mb-8 border-primary-200 bg-primary-50 text-primary-700 shadow-sm backdrop-blur-md">
                Pusat Komando
            </x-ui.badge>
            
            {{-- Headline --}}
            <h1 class="js-hero-title font-heading font-bold text-neutral-900 text-balance mb-8 text-5xl md:text-6xl lg:text-7xl leading-[1.1] uppercase tracking-tight">
                Badan Pengurus <br>
                <span class="text-accent-500">Harian</span>
            </h1>
            
            {{-- Subtitle/Desc --}}
            <p class="js-hero-subtitle text-neutral-500 text-lg md:text-xl max-w-3xl mx-auto leading-relaxed">
                Para pemimpin dan penggerak utama organisasi yang mendedikasikan waktu serta tenaga untuk membawa HIMSI DPC Cikarang menuju puncak kejayaan.
            </p>
        </div>
    </section>

    {{-- BPH Structure Section --}}
    <section class="relative z-10 pb-32">
        <div class="max-w-6xl mx-auto px-6 md:px-12 flex flex-col gap-16 md:gap-24">
            
            {{-- ==============================================
                 KETUA & WAKIL (Top Level)
                 ============================================== --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-8 lg:gap-16 mt-8">
                
                {{-- KETUA --}}
                <div class="relative w-full max-w-sm mx-auto md:ml-auto md:mr-0 aspect-[4/5] cursor-pointer group" x-data="{ flipped: false }" @click="flipped = !flipped" style="perspective: 1000px;">
                    {{-- Decorative Blob --}}
                    <div class="absolute inset-0 bg-primary-200 rounded-[3rem] rotate-3 scale-95 transition-all duration-500 z-0" :class="flipped ? 'rotate-6 scale-100' : 'group-hover:rotate-6 group-hover:scale-100'"></div>
                    
                    {{-- Flip Container --}}
                    <div class="relative z-10 w-full h-full transition-transform duration-700" style="transform-style: preserve-3d;" :class="flipped ? '[transform:rotateY(180deg)]' : ''">
                        
                        {{-- Front Face --}}
                        <div class="absolute inset-0 w-full h-full bg-white rounded-[3rem] border-4 border-white shadow-xl overflow-hidden group/front" style="backface-visibility: hidden;">
                            <img src="{{ asset('assets/images/personil/fahri.webp') }}" alt="Fahri Akbar Indratama" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover/front:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 via-neutral-900/30 to-transparent"></div>
                            
                            <div class="absolute bottom-0 left-0 w-full p-8 flex flex-col items-center text-center">
                                <span class="inline-block px-5 py-2 bg-primary-500 text-white font-black uppercase tracking-widest text-[11px] rounded-full shadow-lg shadow-primary-500/40 mb-3 rotate-[-4deg]">Ketua</span>
                                <h3 class="font-heading font-black text-3xl lg:text-4xl text-white mb-1 drop-shadow-md">Fahri Akbar</h3>
                                <p class="text-primary-200 font-medium drop-shadow-md">Fahri Akbar Indratama</p>
                            </div>
                        </div>

                        {{-- Back Face --}}
                        <div class="absolute inset-0 w-full h-full bg-white p-6 md:p-8 rounded-[3rem] border-4 border-primary-100 shadow-xl flex flex-col items-center justify-center gap-6" style="backface-visibility: hidden; transform: rotateY(180deg);">
                            <img src="{{ asset('assets/images/logos/himsi.webp') }}" alt="HIMSI Logo" class="w-24 md:w-32 drop-shadow-sm">
                            
                            <div class="flex flex-col items-center gap-3 w-full">
                                <a href="https://instagram.com/himsi.ubsicikarang" target="_blank" @click.stop class="flex items-center gap-2 px-4 py-2.5 bg-neutral-50 hover:bg-primary-50 hover:text-primary-600 text-neutral-600 rounded-2xl font-medium transition-colors w-full max-w-[220px] justify-center text-sm border border-neutral-100 shadow-sm">
                                    <i class="ph ph-instagram-logo text-xl"></i>
                                    <span class="truncate">himsi.ubsicikarang</span>
                                </a>
                                <a href="https://instagram.com/phriii02" target="_blank" @click.stop class="flex items-center gap-2 px-4 py-2.5 bg-neutral-50 hover:bg-primary-50 hover:text-primary-600 text-neutral-600 rounded-2xl font-medium transition-colors w-full max-w-[220px] justify-center text-sm border border-neutral-100 shadow-sm">
                                    <i class="ph ph-user text-xl"></i>
                                    <span class="truncate">phriii02</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- WAKIL KETUA --}}
                <div class="relative w-full max-w-sm mx-auto md:mr-auto md:ml-0 aspect-[4/5] cursor-pointer group" x-data="{ flipped: false }" @click="flipped = !flipped" style="perspective: 1000px;">
                    {{-- Decorative Blob --}}
                    <div class="absolute inset-0 bg-accent-200 rounded-[3rem] -rotate-3 scale-95 transition-all duration-500 z-0" :class="flipped ? '-rotate-6 scale-100' : 'group-hover:-rotate-6 group-hover:scale-100'"></div>
                    
                    {{-- Flip Container --}}
                    <div class="relative z-10 w-full h-full transition-transform duration-700" style="transform-style: preserve-3d;" :class="flipped ? '[transform:rotateY(180deg)]' : ''">
                        
                        {{-- Front Face --}}
                        <div class="absolute inset-0 w-full h-full bg-white rounded-[3rem] border-4 border-white shadow-xl overflow-hidden group/front" style="backface-visibility: hidden;">
                            <img src="{{ asset('assets/images/personil/salma.webp') }}" alt="Putri Salma Nurhasanah" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover/front:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 via-neutral-900/30 to-transparent"></div>
                            
                            <div class="absolute bottom-0 left-0 w-full p-8 flex flex-col items-center text-center">
                                <span class="inline-block px-5 py-2 bg-accent-500 text-white font-black uppercase tracking-widest text-[11px] rounded-full shadow-lg shadow-accent-500/40 mb-3 rotate-[4deg]">Wakil Ketua</span>
                                <h3 class="font-heading font-black text-3xl lg:text-4xl text-white mb-1 drop-shadow-md">Putri Salma</h3>
                                <p class="text-accent-300 font-medium drop-shadow-md">Putri Salma Nurhasanah</p>
                            </div>
                        </div>

                        {{-- Back Face --}}
                        <div class="absolute inset-0 w-full h-full bg-white p-6 md:p-8 rounded-[3rem] border-4 border-accent-100 shadow-xl flex flex-col items-center justify-center gap-6" style="backface-visibility: hidden; transform: rotateY(180deg);">
                            <img src="{{ asset('assets/images/logos/himsi.webp') }}" alt="HIMSI Logo" class="w-24 md:w-32 drop-shadow-sm">
                            
                            <div class="flex flex-col items-center gap-3 w-full">
                                <a href="https://instagram.com/himsi.ubsicikarang" target="_blank" @click.stop class="flex items-center gap-2 px-4 py-2.5 bg-neutral-50 hover:bg-accent-50 hover:text-accent-600 text-neutral-600 rounded-2xl font-medium transition-colors w-full max-w-[220px] justify-center text-sm border border-neutral-100 shadow-sm">
                                    <i class="ph ph-instagram-logo text-xl"></i>
                                    <span class="truncate">himsi.ubsicikarang</span>
                                </a>
                                <a href="https://instagram.com/pslma_" target="_blank" @click.stop class="flex items-center gap-2 px-4 py-2.5 bg-neutral-50 hover:bg-accent-50 hover:text-accent-600 text-neutral-600 rounded-2xl font-medium transition-colors w-full max-w-[220px] justify-center text-sm border border-neutral-100 shadow-sm">
                                    <i class="ph ph-user text-xl"></i>
                                    <span class="truncate">pslma_</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            {{-- Divider --}}
            <div class="w-full flex justify-center py-4">
                <div class="flex gap-2">
                    <div class="w-3 h-3 rounded-full bg-primary-200"></div>
                    <div class="w-3 h-3 rounded-full bg-accent-200"></div>
                    <div class="w-3 h-3 rounded-full bg-primary-200"></div>
                </div>
            </div>

            {{-- ==============================================
                 SEKRETARIS & BENDAHARA (Grid Level)
                 ============================================== --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                {{-- Sekretaris 1 --}}
                <div class="relative cursor-pointer group aspect-[4/5]" x-data="{ flipped: false }" @click="flipped = !flipped" style="perspective: 1000px;">
                    <div class="absolute inset-0 bg-primary-100 rounded-[2.5rem] rotate-2 scale-95 transition-all duration-500 z-0" :class="flipped ? 'rotate-4 scale-100' : 'group-hover:rotate-4 group-hover:scale-100'"></div>
                    
                    <div class="relative z-10 w-full h-full transition-transform duration-700" style="transform-style: preserve-3d;" :class="flipped ? '[transform:rotateY(180deg)]' : ''">
                        {{-- Front Face --}}
                        <div class="absolute inset-0 w-full h-full bg-white rounded-[2.5rem] border-4 border-white shadow-lg overflow-hidden group/front" style="backface-visibility: hidden;">
                            <img src="{{ asset('assets/images/personil/shania.webp') }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover/front:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 via-neutral-900/40 to-transparent"></div>
                            
                            <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col items-center text-center">
                                <span class="inline-block px-3 py-1 bg-primary-500 text-white font-bold uppercase tracking-widest text-[9px] rounded-full mb-3 rotate-[-2deg]">Sekretaris 1</span>
                                <h3 class="font-heading font-extrabold text-2xl text-white mb-1 drop-shadow-md">Shania</h3>
                                <p class="text-primary-200 text-sm drop-shadow-md">Shania Nur Wulansari</p>
                            </div>
                        </div>
                        
                        {{-- Back Face --}}
                        <div class="absolute inset-0 w-full h-full bg-white p-6 rounded-[2.5rem] border-4 border-primary-100 shadow-lg flex flex-col items-center justify-center gap-5" style="backface-visibility: hidden; transform: rotateY(180deg);">
                            <img src="{{ asset('assets/images/logos/himsi.webp') }}" class="w-20 md:w-24 drop-shadow-sm">
                            
                            <div class="flex flex-col items-center gap-2.5 w-full">
                                <a href="https://instagram.com/himsi.ubsicikarang" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-primary-50 hover:text-primary-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-xs border border-neutral-100 shadow-sm">
                                    <i class="ph ph-instagram-logo text-lg"></i>
                                    <span class="truncate">himsi.ubsicikarang</span>
                                </a>
                                <a href="https://instagram.com/shaniawlnsr_" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-primary-50 hover:text-primary-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-xs border border-neutral-100 shadow-sm">
                                    <i class="ph ph-user text-lg"></i>
                                    <span class="truncate">shaniawlnsr_</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Sekretaris 2 --}}
                <div class="relative cursor-pointer group aspect-[4/5]" x-data="{ flipped: false }" @click="flipped = !flipped" style="perspective: 1000px;">
                    <div class="absolute inset-0 bg-primary-100 rounded-[2.5rem] -rotate-2 scale-95 transition-all duration-500 z-0" :class="flipped ? '-rotate-4 scale-100' : 'group-hover:-rotate-4 group-hover:scale-100'"></div>
                    
                    <div class="relative z-10 w-full h-full transition-transform duration-700" style="transform-style: preserve-3d;" :class="flipped ? '[transform:rotateY(180deg)]' : ''">
                        {{-- Front Face --}}
                        <div class="absolute inset-0 w-full h-full bg-white rounded-[2.5rem] border-4 border-white shadow-lg overflow-hidden group/front" style="backface-visibility: hidden;">
                            <img src="{{ asset('assets/images/personil/nada.webp') }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover/front:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 via-neutral-900/40 to-transparent"></div>
                            
                            <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col items-center text-center">
                                <span class="inline-block px-3 py-1 bg-primary-500 text-white font-bold uppercase tracking-widest text-[9px] rounded-full mb-3 rotate-[2deg]">Sekretaris 2</span>
                                <h3 class="font-heading font-extrabold text-2xl text-white mb-1 drop-shadow-md">Nada</h3>
                                <p class="text-primary-200 text-sm drop-shadow-md">Zalfa Abyrnada</p>
                            </div>
                        </div>

                        {{-- Back Face --}}
                        <div class="absolute inset-0 w-full h-full bg-white p-6 rounded-[2.5rem] border-4 border-primary-100 shadow-lg flex flex-col items-center justify-center gap-5" style="backface-visibility: hidden; transform: rotateY(180deg);">
                            <img src="{{ asset('assets/images/logos/himsi.webp') }}" class="w-20 md:w-24 drop-shadow-sm">
                            
                            <div class="flex flex-col items-center gap-2.5 w-full">
                                <a href="https://instagram.com/himsi.ubsicikarang" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-primary-50 hover:text-primary-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-xs border border-neutral-100 shadow-sm">
                                    <i class="ph ph-instagram-logo text-lg"></i>
                                    <span class="truncate">himsi.ubsicikarang</span>
                                </a>
                                <a href="https://instagram.com/zzaleefaa" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-primary-50 hover:text-primary-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-xs border border-neutral-100 shadow-sm">
                                    <i class="ph ph-user text-lg"></i>
                                    <span class="truncate">zzaleefaa</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bendahara 1 --}}
                <div class="relative cursor-pointer group aspect-[4/5]" x-data="{ flipped: false }" @click="flipped = !flipped" style="perspective: 1000px;">
                    <div class="absolute inset-0 bg-accent-100 rounded-[2.5rem] rotate-2 scale-95 transition-all duration-500 z-0" :class="flipped ? 'rotate-4 scale-100' : 'group-hover:rotate-4 group-hover:scale-100'"></div>
                    
                    <div class="relative z-10 w-full h-full transition-transform duration-700" style="transform-style: preserve-3d;" :class="flipped ? '[transform:rotateY(180deg)]' : ''">
                        {{-- Front Face --}}
                        <div class="absolute inset-0 w-full h-full bg-white rounded-[2.5rem] border-4 border-white shadow-lg overflow-hidden group/front" style="backface-visibility: hidden;">
                            <img src="{{ asset('assets/images/personil/diva.webp') }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover/front:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 via-neutral-900/40 to-transparent"></div>
                            
                            <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col items-center text-center">
                                <span class="inline-block px-3 py-1 bg-accent-500 text-white font-bold uppercase tracking-widest text-[9px] rounded-full mb-3 rotate-[-2deg]">Bendahara 1</span>
                                <h3 class="font-heading font-extrabold text-2xl text-white mb-1 drop-shadow-md">Diva</h3>
                                <p class="text-accent-200 text-sm drop-shadow-md">Diva Rahma Novitasari</p>
                            </div>
                        </div>

                        {{-- Back Face --}}
                        <div class="absolute inset-0 w-full h-full bg-white p-6 rounded-[2.5rem] border-4 border-accent-100 shadow-lg flex flex-col items-center justify-center gap-5" style="backface-visibility: hidden; transform: rotateY(180deg);">
                            <img src="{{ asset('assets/images/logos/himsi.webp') }}" class="w-20 md:w-24 drop-shadow-sm">
                            
                            <div class="flex flex-col items-center gap-2.5 w-full">
                                <a href="https://instagram.com/himsi.ubsicikarang" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-accent-50 hover:text-accent-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-xs border border-neutral-100 shadow-sm">
                                    <i class="ph ph-instagram-logo text-lg"></i>
                                    <span class="truncate">himsi.ubsicikarang</span>
                                </a>
                                <a href="https://instagram.com/dyvleecnz" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-accent-50 hover:text-accent-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-xs border border-neutral-100 shadow-sm">
                                    <i class="ph ph-user text-lg"></i>
                                    <span class="truncate">dyvleecnz</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Bendahara 2 --}}
                <div class="relative cursor-pointer group aspect-[4/5]" x-data="{ flipped: false }" @click="flipped = !flipped" style="perspective: 1000px;">
                    <div class="absolute inset-0 bg-accent-100 rounded-[2.5rem] -rotate-2 scale-95 transition-all duration-500 z-0" :class="flipped ? '-rotate-4 scale-100' : 'group-hover:-rotate-4 group-hover:scale-100'"></div>
                    
                    <div class="relative z-10 w-full h-full transition-transform duration-700" style="transform-style: preserve-3d;" :class="flipped ? '[transform:rotateY(180deg)]' : ''">
                        {{-- Front Face --}}
                        <div class="absolute inset-0 w-full h-full bg-white rounded-[2.5rem] border-4 border-white shadow-lg overflow-hidden group/front" style="backface-visibility: hidden;">
                            <img src="{{ asset('assets/images/personil/novia.webp') }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover/front:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-neutral-950/90 via-neutral-900/40 to-transparent"></div>
                            
                            <div class="absolute bottom-0 left-0 w-full p-6 flex flex-col items-center text-center">
                                <span class="inline-block px-3 py-1 bg-accent-500 text-white font-bold uppercase tracking-widest text-[9px] rounded-full mb-3 rotate-[2deg]">Bendahara 2</span>
                                <h3 class="font-heading font-extrabold text-2xl text-white mb-1 drop-shadow-md">Novia</h3>
                                <p class="text-accent-200 text-sm drop-shadow-md">Novia Endah Darmastuti</p>
                            </div>
                        </div>

                        {{-- Back Face --}}
                        <div class="absolute inset-0 w-full h-full bg-white p-6 rounded-[2.5rem] border-4 border-accent-100 shadow-lg flex flex-col items-center justify-center gap-5" style="backface-visibility: hidden; transform: rotateY(180deg);">
                            <img src="{{ asset('assets/images/logos/himsi.webp') }}" class="w-20 md:w-24 drop-shadow-sm">
                            
                            <div class="flex flex-col items-center gap-2.5 w-full">
                                <a href="https://instagram.com/himsi.ubsicikarang" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-accent-50 hover:text-accent-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-xs border border-neutral-100 shadow-sm">
                                    <i class="ph ph-instagram-logo text-lg"></i>
                                    <span class="truncate">himsi.ubsicikarang</span>
                                </a>
                                <a href="https://instagram.com/ptambahi" target="_blank" @click.stop class="flex items-center gap-2 px-3 py-2 bg-neutral-50 hover:bg-accent-50 hover:text-accent-600 text-neutral-600 rounded-xl font-medium transition-colors w-full justify-center text-xs border border-neutral-100 shadow-sm">
                                    <i class="ph ph-user text-lg"></i>
                                    <span class="truncate">ptambahi</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>
@endsection
