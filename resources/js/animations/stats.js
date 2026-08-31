// animations/stats.js
// Animasi counter statistik — CountUp.js + GSAP ScrollTrigger
import { CountUp }       from 'countup.js';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function initStatsAnimation() {
    const counters = document.querySelectorAll('.js-stat-counter');
    if (!counters.length) return;

    counters.forEach((el) => {
        const target    = parseFloat(el.dataset.target ?? '0');
        const suffix    = el.dataset.suffix   ?? '';
        const prefix    = el.dataset.prefix   ?? '';
        const decimals  = parseInt(el.dataset.decimals ?? '0', 10);
        const separator = el.dataset.separator ?? '.';

        const countUp = new CountUp(el, target, {
            duration:   2.5,
            useEasing:  true,
            useGrouping: true,
            separator,
            decimal:    ',',
            suffix,
            prefix,
            decimalPlaces: decimals,
        });

        ScrollTrigger.create({
            trigger: el,
            start:   'top 82%',
            once:    true,
            onEnter: () => {
                if (!countUp.error) countUp.start();
            },
        });
    });
}
