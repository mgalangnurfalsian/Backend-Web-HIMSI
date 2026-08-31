import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

export function initDivisiAnimations() {
    // Only run on divisi page
    const page = document.querySelector('[data-page="divisi"]');
    if (!page) return;

    // 1. Hero Animations
    const heroElements = document.querySelectorAll('.js-hero-reveal');
    if (heroElements.length) {
        gsap.fromTo(heroElements, 
            { y: 50, opacity: 0 },
            { 
                y: 0, 
                opacity: 1, 
                duration: 1, 
                stagger: 0.15, 
                ease: 'power3.out',
                delay: 0.2 // slight delay after page load
            }
        );
    }

    // 2. Scroll Animations for Division Sections
    const divisiReveals = document.querySelectorAll('.js-divisi-reveal');
    
    divisiReveals.forEach((el, index) => {
        // Optimize scroll reveal by only animating opacity and a very slight scale instead of y-transform
        // This prevents heavy layout recalculations on 3D children during scroll
        gsap.fromTo(el,
            { opacity: 0 },
            {
                opacity: 1,
                duration: 1.2,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: el,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            }
        );
    });
    
    // Refresh ScrollTrigger after initializing animations to ensure heights are correct
    setTimeout(() => {
        ScrollTrigger.refresh();
    }, 100);

    // Initialize 3D Flip Cards using GSAP for better performance
    const flipCards = document.querySelectorAll('.js-flip-card');
    flipCards.forEach(card => {
        const inner = card.querySelector('.js-flip-inner');
        let isFlipped = false;
        
        card.addEventListener('click', (e) => {
            // Prevent flipping if clicking on an instagram link
            if (e.target.closest('a')) return;
            
            isFlipped = !isFlipped;
            gsap.to(inner, {
                rotateY: isFlipped ? 180 : 0,
                duration: 0.8,
                ease: 'power3.inOut'
            });
        });
    });
}
