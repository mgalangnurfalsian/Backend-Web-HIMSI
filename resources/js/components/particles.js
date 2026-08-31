import { loadSlim } from "@tsparticles/slim";
import { tsParticles } from "@tsparticles/engine";

export async function initParticles(elementId) {
    const container = document.getElementById(elementId);
    if (!container) return;

    // Load slim bundle for lightweight particles
    await loadSlim(tsParticles);

    await tsParticles.load({
        id: elementId,
        options: {
            fullScreen: {
                enable: false,
                zIndex: 0
            },
            fpsLimit: 60,
            particles: {
                number: {
                    value: 20, // Not too many to keep it clean
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: ["#2a54b9", "#ffa100", "#7e98e5", "#ffd966", "#adbef0"]
                },
                shape: {
                    type: ["circle", "star", "polygon"],
                    options: {
                        polygon: {
                            sides: 6
                        },
                        star: {
                            sides: 5
                        }
                    }
                },
                opacity: {
                    value: 0.6,
                },
                size: {
                    value: { min: 10, max: 20 },
                },
                move: {
                    enable: true,
                    speed: 1,
                    direction: "top", // Floating up slowly
                    random: true,
                    straight: false,
                    outModes: {
                        default: "out"
                    }
                }
            },
            interactivity: {
                detectsOn: "window",
                events: {
                    onHover: {
                        enable: false
                    },
                    resize: true
                }
            },
            detectRetina: true,
        }
    });
}
