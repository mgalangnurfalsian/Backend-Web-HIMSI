// ============================================================
// app.js — Entry Point JavaScript
// HIMSI DPC Cikarang
//
// ATURAN: Jangan tulis logic langsung di sini.
// Semua logic dipecah ke modul terpisah di /animations dan /components
// ============================================================

// ------------------------------------------------------------
// 1. CORE LIBRARIES
// ------------------------------------------------------------
import { gsap }          from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { TextPlugin }    from 'gsap/TextPlugin';
import Alpine            from 'alpinejs';
import collapse          from '@alpinejs/collapse';
import Lenis             from 'lenis';

// ------------------------------------------------------------
// 2. CSS IMPORTS (library styles — urutan penting!)
// ------------------------------------------------------------
import '@phosphor-icons/web/fill';
import '@phosphor-icons/web/bold';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'glightbox/dist/css/glightbox.css';

// ------------------------------------------------------------
// 3. REGISTER GSAP PLUGINS
// ------------------------------------------------------------
gsap.registerPlugin(ScrollTrigger, TextPlugin);

// ------------------------------------------------------------
// 4. ALPINE.JS — Start before DOM ready
// ------------------------------------------------------------
window.Alpine = Alpine;
Alpine.plugin(collapse);
Alpine.start();

// ------------------------------------------------------------
// 5. LENIS SMOOTH SCROLL
// WAJIB: dihubungkan ke GSAP ticker agar ScrollTrigger sinkron
// ------------------------------------------------------------
let lenis = null;

// Hanya aktifkan smooth scroll jika BUKAN di halaman admin
if (!document.querySelector('body[data-is-admin="true"]')) {
    lenis = new Lenis({
        lerp:        0.05, // Semakin kecil = awalan semakin berat dan akhir semakin smooth (Locomotive style)
        smoothWheel: true,
        wheelMultiplier: 1.2, // Sedikit mempercepat respon scroll
        touchMultiplier: 2,
    });

    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => lenis.raf(time * 1000));
    gsap.ticker.lagSmoothing(0);
}

// Export lenis untuk dipakai di modul lain (scrollTo, dsb.)
export { lenis };

// ------------------------------------------------------------
// 6. INIT MODULES ON DOM READY
// Menggunakan dynamic import agar lazy-loaded
// ------------------------------------------------------------
document.addEventListener('DOMContentLoaded', async () => {

    // --- ANIMATIONS ---
    if (document.querySelector('.js-hero-section')) {
        const { initHeroAnimation } = await import('./animations/hero.js');
        initHeroAnimation();
    }

    if (document.querySelector('.js-features-title') || document.querySelector('.js-horizontal-scroll-section')) {
        const { initFeaturesAnimation } = await import('./animations/features.js');
        initFeaturesAnimation();
    }

    if (document.querySelector('.js-stat-section')) {
        const { initStatsAnimation } = await import('./animations/stats.js');
        initStatsAnimation();
    }

    if (document.querySelector('#js-hero-particles')) {
        const { initHeroParticles } = await import('./animations/particles.js');
        await initHeroParticles();
    }

    // --- UI COMPONENTS ---
    if (document.querySelector('.js-gallery-swiper')) {
        const { initGallerySwiper } = await import('./components/gallery-swiper.js');
        initGallerySwiper();
    }

    if (document.querySelector('.js-lightbox')) {
        const { initLightbox } = await import('./components/lightbox.js');
        initLightbox();
    }

    if (document.querySelector('.js-testimonial-main')) {
        const { initTestimonialSwiper } = await import('./components/testimonial-swiper.js');
        initTestimonialSwiper();
    }

    if (document.querySelector('.js-stat-swiper')) {
        const { initStatSwiper } = await import('./components/stat-swiper.js');
        initStatSwiper();
    }

    if (document.querySelector('.js-error-code')) {
        const { initErrorAnimation } = await import('./animations/error.js');
        initErrorAnimation();
    }

    if (document.querySelector('.js-timeline-item')) {
        const { initTimelineAnimation } = await import('./animations/timeline.js');
        initTimelineAnimation();
    }

    if (document.querySelector('.js-history-slider')) {
        const { initHistorySlider } = await import('./components/history-slider.js');
        initHistorySlider();
    }

    if (document.querySelector('[data-page="divisi"]')) {
        const { initTeamSwiper } = await import('./components/team-swiper.js');
        initTeamSwiper();

        const { initDivisiAnimations } = await import('./components/divisi-animations.js');
        initDivisiAnimations();
    }

    if (document.getElementById('tsparticles-bph')) {
        const { initParticles } = await import('./components/particles.js');
        initParticles('tsparticles-bph');
    }

});
