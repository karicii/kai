document.addEventListener('DOMContentLoaded', function () {
    gsap.utils.toArray('.shape').forEach(shape => {
        gsap.to(shape, {
            x: "random(-150, 150)",
            y: "random(-150, 150)",
            scale: "random(0.8, 1.5)",
            rotation: "random(-90, 90)",
            duration: "random(15, 30)",
            ease: "sine.inOut",
            repeat: -1,
            yoyo: true
        });
    });
});
