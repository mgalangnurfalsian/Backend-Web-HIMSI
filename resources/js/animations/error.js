// resources/js/animations/error.js
// Animasi halaman error — GSAP entrance split-screen
import { gsap } from 'gsap';

export function initErrorAnimation() {
    const tl = gsap.timeline({ delay: 0.1 });

    // Left panel slides in from left
    const leftPanel = document.querySelector('.js-error-left');
    if (leftPanel) {
        tl.from(leftPanel, {
            x: '-100%',
            duration: 0.9,
            ease: 'expo.inOut',
        }, 0);
    }

    // Right panel content staggers in
    const rightItems = document.querySelectorAll('.js-error-right-item');
    if (rightItems.length > 0) {
        tl.from(rightItems, {
            x: 40,
            opacity: 0,
            duration: 0.7,
            stagger: 0.1,
            ease: 'expo.out',
        }, 0.4);
    }

    // Divider line draws in
    const divider = document.querySelector('.js-error-divider');
    if (divider) {
        tl.from(divider, {
            scaleY: 0,
            transformOrigin: 'top center',
            duration: 0.8,
            ease: 'expo.inOut',
        }, 0.2);
    }
}
