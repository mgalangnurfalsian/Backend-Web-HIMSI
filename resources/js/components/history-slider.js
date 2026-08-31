import { gsap } from 'gsap';

export function initHistorySlider() {
    const sliderContainer = document.querySelector('.js-history-slider');
    if (!sliderContainer) return;

    const slides = document.querySelectorAll('.js-history-slide');
    const navButtons = document.querySelectorAll('.js-history-nav');
    const progressBars = document.querySelectorAll('.js-history-progress');
    
    if (!slides.length || !navButtons.length || !progressBars.length) return;

    let currentIndex = 0;
    const totalSlides = slides.length;
    const slideDuration = 30; // 30 seconds
    let progressTween = null;

    // Initialize first slide as active
    updateActiveState(currentIndex);
    startProgress();

    // Click event for navigation buttons
    navButtons.forEach((btn) => {
        btn.addEventListener('click', (e) => {
            const targetIndex = parseInt(btn.getAttribute('data-target'));
            if (targetIndex !== currentIndex && targetIndex >= 0 && targetIndex < totalSlides) {
                goToSlide(targetIndex);
            }
        });
    });

    function goToSlide(index) {
        // Fade out current slide
        const currentSlide = slides[currentIndex];
        currentSlide.classList.remove('opacity-100');
        currentSlide.classList.add('opacity-0', 'pointer-events-none');

        // Update index
        currentIndex = index;

        // Fade in new slide
        const newSlide = slides[currentIndex];
        newSlide.classList.remove('opacity-0', 'pointer-events-none');
        newSlide.classList.add('opacity-100');

        updateActiveState(currentIndex);
        
        // Restart progress bar
        startProgress();
    }

    function updateActiveState(index) {
        navButtons.forEach((btn, i) => {
            const dot = btn.querySelector('.js-nav-dot');
            
            if (i === index) {
                // Active state styling
                btn.classList.add('text-white', 'opacity-100');
                btn.classList.remove('text-white/60');
                
                // Dot becomes blue and blinks
                dot.classList.add('bg-accent-500', 'animate-pulse');
                dot.classList.remove('bg-white/40');
            } else {
                // Inactive state styling
                btn.classList.remove('text-white', 'opacity-100');
                btn.classList.add('text-white/60');
                
                // Dot becomes white/40
                dot.classList.remove('bg-accent-500', 'animate-pulse');
                dot.classList.add('bg-white/40');
            }
        });
    }

    function startProgress() {
        // Kill existing tween if any
        if (progressTween) {
            progressTween.kill();
        }

        // Reset all progress bars width to 0
        progressBars.forEach(bar => {
            gsap.set(bar, { width: '0%' });
        });

        // Animate the active progress bar to 100% over the duration
        const activeProgressBar = progressBars[currentIndex];
        
        progressTween = gsap.to(activeProgressBar, {
            width: '100%',
            duration: slideDuration,
            ease: 'none', // Linear progression
            onComplete: () => {
                // Auto switch to next slide when complete
                const nextIndex = (currentIndex + 1) % totalSlides;
                goToSlide(nextIndex);
            }
        });
    }
}
