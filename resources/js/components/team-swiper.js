import Swiper from 'swiper';
import { Pagination, Autoplay } from 'swiper/modules';

/**
 * Initialize Team Swiper for Division members.
 * This function targets all elements with the class 'js-team-swiper'.
 */
export function initTeamSwiper() {
    const swiperElements = document.querySelectorAll('.js-team-swiper');

    swiperElements.forEach((el) => {
        new Swiper(el, {
            modules: [Pagination, Autoplay],
            slidesPerView: 1, // Default for mobile
            spaceBetween: 20,
            grabCursor: true,
            loop: false,
            autoplay: {
                delay: 4000,
                disableOnInteraction: true,
            },
            pagination: {
                el: el.querySelector('.swiper-pagination'),
                clickable: true,
                dynamicBullets: true,
            },
            breakpoints: {
                // when window width is >= 640px (Tablet)
                640: {
                    slidesPerView: 2,
                    spaceBetween: 24,
                },
                // when window width is >= 1024px (Desktop)
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 32,
                },
                // when window width is >= 1280px (Large Desktop)
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 32,
                }
            }
        });
    });
}
