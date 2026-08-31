// animations/features.js
// Animasi section Features, About, Programs, dan Timeline
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function initFeaturesAnimation() {

    // --- Section title blur & split text entrance ---
    // Custom split function for chars
    function splitTextToChars(element) {
        const text = element.textContent;
        element.innerHTML = '';
        const chars = text.split('');
        chars.forEach(char => {
            const span = document.createElement('span');
            span.style.display = 'inline-block';
            span.innerHTML = char === ' ' ? '&nbsp;' : char;
            element.appendChild(span);
        });
        return element.querySelectorAll('span');
    }

    document.querySelectorAll('.js-features-title').forEach((el) => {
        const chars = splitTextToChars(el);
        // Container for the whole section (assume title is in a container with the desc)
        const desc = el.parentElement.querySelector('.js-features-desc');
        
        if (desc) gsap.set(desc, { opacity: 0, y: 20 });

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: el,
                start:   'top 80%', // Animation starts when title is at 80% viewport height
                end:     'top 40%', // Animation finishes when title reaches 40% viewport height
                scrub:   1,         // 1-second lag smooth scrub
            }
        });

        // Blur & fade in chars (scrubbed)
        tl.from(chars, {
            filter:   'blur(10px)',
            opacity:  0,
            y:        10,
            stagger:  0.05,
            ease:     'none',
        });

        // Show description after title animation completes
        if (desc) {
            tl.to(desc, {
                opacity:  1,
                y:        0,
                duration: 0.5,
                ease:     'power1.out',
            });
        }
    });

    // --- Horizontal Scroll Divisi ---
    const horizontalSection = document.querySelector('.js-horizontal-scroll-section');
    if (horizontalSection) {
        const panels = gsap.utils.toArray('.js-horizontal-panel');
        const wrapper = document.querySelector('.js-horizontal-wrapper');

        if (panels.length > 0) {
            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: horizontalSection,
                    pin: true,
                    scrub: 1,
                    // Total distance: 1 window width for each transition, plus 0.7 window width for each pause
                    end: () => "+=" + (window.innerWidth * (panels.length - 1) * 1.7),
                }
            });

            // Loop to create transitions and pauses
            for (let i = 0; i < panels.length - 1; i++) {
                // Move to the next panel
                tl.to(panels, {
                    xPercent: -100 * (i + 1),
                    ease: "none",
                    duration: 1
                });
                
                // Pause for 0.7 duration units. During this pause, animate the progress bar and background scale of the active panel.
                const nextPanel = panels[i + 1];
                const panelProgressBar = nextPanel.querySelector('.js-horizontal-progress');
                const panelBgImg = nextPanel.querySelector('.js-panel-bg-img');
                
                let isAnimated = false;
                const label = 'pause' + i;
                tl.addLabel(label);

                if (panelProgressBar) {
                    tl.to(panelProgressBar, { width: '100%', duration: 0.7, ease: "none" }, label);
                    isAnimated = true;
                }
                
                if (panelBgImg) {
                    tl.to(panelBgImg, { scale: 1.1, duration: 0.7, ease: "none" }, label);
                    isAnimated = true;
                }

                if (!isAnimated) {
                    tl.to({}, { duration: 0.7 }, label);
                }
            }
        }
    }

    // --- Timeline items — alternating left/right entrance ---
    const timelineItems = document.querySelectorAll('.js-timeline-item');
    timelineItems.forEach((item, i) => {
        const isLeft  = i % 2 === 0;
        gsap.from(item, {
            scrollTrigger: {
                trigger: item,
                start:   'top 88%',
                toggleActions: 'play none none reverse',
            },
            x:       isLeft ? -60 : 60,
            opacity: 0,
            duration: 0.7,
            ease:    'power3.out',
        });
    });

    // --- CTA section — gradient pulse loop ---
    const ctaSection = document.querySelector('.js-cta-section');
    if (ctaSection) {
        gsap.to(ctaSection, {
            scrollTrigger: { trigger: ctaSection, start: 'top 80%', once: true },
            opacity:  1,
            duration: 0.8,
            ease:     'power2.out',
        });
    }
}
