import Swiper from 'swiper';
import { Autoplay, EffectFade, Thumbs, FreeMode } from 'swiper/modules';

export function initTestimonialSwiper() {
    
    // Pastikan elemen ada di DOM
    const mainEl = document.querySelector('.js-testimonial-main');
    const thumbsEl = document.querySelector('.js-testimonial-thumbs');

    if (mainEl && thumbsEl) {
        
        // Inisialisasi Swiper untuk Navigasi (Tahun)
        const thumbsSwiper = new Swiper(thumbsEl, {
            modules: [FreeMode],
            spaceBetween: 0,
            slidesPerView: 3, // Default mobile
            freeMode: true,
            watchSlidesProgress: true,
            breakpoints: {
                // Konfigurasi responsif
                640: { slidesPerView: 4 },
                1024: { slidesPerView: 5 },
            }
        });

        // Inisialisasi Swiper untuk Konten Utama (Quotes)
        const mainSwiper = new Swiper(mainEl, {
            modules: [Autoplay, EffectFade, Thumbs],
            effect: 'fade',
            fadeEffect: { crossFade: true },
            loop: false, // Thumbs swiper doesn't work well with loop
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            thumbs: {
                swiper: thumbsSwiper,
            },
        });

        // Pastikan navigasi tahun bisa diklik secara manual (Fallback)
        thumbsSwiper.on('click', (swiper) => {
            if (swiper.clickedIndex !== undefined) {
                mainSwiper.slideTo(swiper.clickedIndex);
            }
        });
    }
}
