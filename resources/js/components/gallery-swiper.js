// components/gallery-swiper.js
// Swiper carousel untuk galeri kegiatan HIMSI
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay, EffectFade } from 'swiper/modules';

export function initGallerySwiper() {

    // --- Galeri utama (multi-slide) ---
    document.querySelectorAll('.js-gallery-swiper').forEach((el) => {
        new Swiper(el, {
            modules:       [Navigation, Pagination, Autoplay],
            loop:          true,
            slidesPerView: 1,
            spaceBetween:  24,
            autoplay: {
                delay:                3500,
                disableOnInteraction: false,
                pauseOnMouseEnter:    true,
            },
            navigation: {
                nextEl: el.querySelector('.swiper-button-next'),
                prevEl: el.querySelector('.swiper-button-prev'),
            },
            pagination: {
                el:        el.querySelector('.swiper-pagination'),
                clickable: true,
                dynamicBullets: true,
            },
            breakpoints: {
                640:  { slidesPerView: 2, spaceBetween: 20 },
                1024: { slidesPerView: 3, spaceBetween: 24 },
            },
        });
    });

    // --- Hero slider (full-width, fade effect) ---
    document.querySelectorAll('.js-hero-swiper').forEach((el) => {
        new Swiper(el, {
            modules:  [Autoplay, EffectFade],
            effect:   'fade',
            loop:     true,
            autoplay: {
                delay:                4000,
                disableOnInteraction: false,
            },
            allowTouchMove: false,
        });
    });
}
