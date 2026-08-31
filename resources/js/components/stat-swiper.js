import Swiper from 'swiper';

export function initStatSwiper() {
    document.querySelectorAll('.js-stat-swiper').forEach((el) => {
        new Swiper(el, {
            slidesPerView: 'auto',
            spaceBetween: 24,
            grabCursor: true,
            longSwipesRatio: 0.5, // 50% threshold for swiping
            shortSwipes: false, // Ensure it only relies on drag distance, not velocity
        });
    });
}
