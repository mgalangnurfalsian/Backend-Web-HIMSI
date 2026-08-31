// resources/js/animations/timeline.js
import { gsap } from 'gsap';

export function initTimelineAnimation() {
    const items = document.querySelectorAll('.js-timeline-item');
    if (!items.length) return;

    let mm = gsap.matchMedia();

    // Desktop animation (alternating left/right entrance)
    mm.add("(min-width: 768px)", () => {
        items.forEach((item, index) => {
            const isEven = index % 2 === 0;
            const xOffset = isEven ? -80 : 80;
            
            gsap.from(item, {
                scrollTrigger: {
                    trigger: item,
                    start: "top 85%",
                    toggleActions: "play none none reverse"
                },
                x: xOffset,
                opacity: 0,
                duration: 1.2,
                ease: "expo.out"
            });
        });
    });

    // Mobile animation (slide up entrance)
    mm.add("(max-width: 767px)", () => {
        items.forEach((item) => {
            gsap.from(item, {
                scrollTrigger: {
                    trigger: item,
                    start: "top 85%",
                    toggleActions: "play none none reverse"
                },
                y: 50,
                opacity: 0,
                duration: 0.9,
                ease: "expo.out"
            });
        });
    });
}
