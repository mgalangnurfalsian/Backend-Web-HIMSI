// animations/hero.js
// Animasi section Hero — text entrance + parallax + CTA stagger
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export function initHeroAnimation() {
    const section = document.querySelector('.js-hero-section');
    const title = document.querySelector('.js-hero-title');
    if (!section || !title) return;

    // Split text into words dynamically for animation
    splitTextIntoWords(title);

    // Pre-set semua elemen agar tidak flash sebelum animasi
    gsap.set('.js-hero-word span', { y: '110%' });
    gsap.set(['.js-hero-subtitle', '.js-hero-cta'], { opacity: 0, y: 30 });

    const tl = gsap.timeline({ delay: 0.15 });

    // Word-by-word entrance — inner span slide up
    tl.to('.js-hero-word span', {
        y:        '0%',
        opacity:  1,
        duration: 1.1,
        stagger:  0.1,
        ease:     'power4.out',
    });

    // Subtitle items fade in
    tl.to('.js-hero-subtitle', {
        opacity:  1,
        y:        0,
        duration: 0.6,
        stagger:  0.1,
        ease:     'power3.out',
    }, '-=0.5');

    // CTA buttons
    tl.to('.js-hero-cta', {
        opacity:  1,
        y:        0,
        duration: 0.5,
        stagger:  0.1,
        ease:     'power2.out',
    }, '-=0.3');

    // Parallax pada scroll — bg blur orbs
    gsap.to('.js-hero-bg', {
        scrollTrigger: {
            trigger: section,
            start:   'top top',
            end:     'bottom top',
            scrub:   true,
        },
        y:    '30%',
        ease: 'none',
    });

    // Navbar style change on scroll
    const navbar = document.querySelector('.js-navbar');
    if (navbar) {
        ScrollTrigger.create({
            trigger: section,
            start:   'bottom 80px',
            onEnter:       () => navbar.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-sm', 'border-b', 'border-neutral-100'),
            onLeaveBack:   () => navbar.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-sm', 'border-b', 'border-neutral-100'),
        });
    }
}

/**
 * Utility to split text into words while preserving HTML tags (like <br> and <span class="...">).
 * This is a lightweight alternative to GSAP's premium SplitText plugin.
 */
function splitTextIntoWords(element) {
    const splitNodes = (node) => {
        const fragment = document.createDocumentFragment();
        
        if (node.nodeType === 3) { // Text node
            const text = node.nodeValue;
            const words = text.split(/(\s+)/); // Keeps whitespace in the array
            
            words.forEach((word) => {
                if (word.trim() === '') {
                    fragment.appendChild(document.createTextNode(word));
                } else {
                    const outer = document.createElement('span');
                    outer.className = 'js-hero-word inline-block overflow-hidden pb-2 -mb-2'; 
                    const inner = document.createElement('span');
                    inner.className = 'inline-block';
                    inner.textContent = word;
                    outer.appendChild(inner);
                    fragment.appendChild(outer);
                }
            });
        } else if (node.nodeType === 1) { // Element node
            if (node.tagName.toLowerCase() === 'br') {
                fragment.appendChild(node.cloneNode());
            } else {
                const text = node.textContent;
                const words = text.split(/(\s+)/);
                const childClasses = node.className;
                
                words.forEach((word) => {
                    if (word.trim() === '') {
                        fragment.appendChild(document.createTextNode(word));
                    } else {
                        const outer = document.createElement('span');
                        outer.className = 'js-hero-word inline-block overflow-hidden pb-2 -mb-2';
                        const inner = document.createElement('span');
                        // Use existing classes or fallback to inline-block
                        inner.className = childClasses ? `inline-block ${childClasses}` : 'inline-block';
                        inner.textContent = word;
                        outer.appendChild(inner);
                        fragment.appendChild(outer);
                    }
                });
            }
        }
        return fragment;
    };

    const newContent = document.createDocumentFragment();
    Array.from(element.childNodes).forEach(child => {
        newContent.appendChild(splitNodes(child));
    });

    element.innerHTML = '';
    element.appendChild(newContent);
}
