// animations/particles.js
// Efek partikel hero section — tsParticles (slim bundle)
import { tsParticles } from '@tsparticles/engine';
import { loadSlim }    from '@tsparticles/slim';

export async function initHeroParticles() {
    const container = document.getElementById('js-hero-particles');
    if (!container) return;

    await loadSlim(tsParticles);

    await tsParticles.load({
        id: 'js-hero-particles',
        options: {
            background: {
                color: { value: 'transparent' },
            },
            fpsLimit: 60,
            interactivity: {
                events: {
                    onHover: { enable: true, mode: 'repulse' },
                    resize:  true,
                },
                modes: {
                    repulse: { distance: 80, duration: 0.4 },
                },
            },
            particles: {
                number: {
                    value:   45,
                    density: { enable: true, area: 900 },
                },
                color: {
                    value: ['#2a54b9', '#ffa100'],
                },
                opacity: {
                    value:     { min: 0.08, max: 0.35 },
                    animation: { enable: true, speed: 0.8, minimumValue: 0.05 },
                },
                size: {
                    value: { min: 1, max: 3 },
                },
                move: {
                    enable:    true,
                    speed:     0.7,
                    direction: 'none',
                    random:    true,
                    straight:  false,
                    outModes:  'out',
                },
                links: {
                    enable:   true,
                    distance: 160,
                    color:    '#2a54b9',
                    opacity:  0.12,
                    width:    1,
                },
            },
            detectRetina: true,
        },
    });
}
