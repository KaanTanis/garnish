const killHeroTriggers = () => {
    ScrollTrigger.getAll().forEach((trigger) => {
        if (trigger.vars?.id === "hero") {
            trigger.kill(true);
        }
    });
};

const initFeatures = () => {
    if (typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
        return;
    }

    const rows = document.querySelectorAll("[data-feature-row]");
    if (!rows.length) return;

    rows.forEach((row, index) => {
        gsap.fromTo(
            row,
            { y: 40, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.9,
                ease: "power3.out",
                scrollTrigger: {
                    trigger: row,
                    start: "top 80%",
                    toggleActions: "play none none reverse",
                },
                delay: index * 0.05,
            }
        );
    });
};

const initAbout = () => {
    const visual = document.querySelector("[data-about-visual]");
    if (!visual || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
        return;
    }

    gsap.fromTo(
        visual,
        { y: 40, opacity: 0, scale: 0.9 },
        {
            y: 0,
            opacity: 1,
            scale: 1,
            duration: 0.9,
            ease: "power3.out",
            scrollTrigger: {
                trigger: visual,
                start: "top 80%",
                toggleActions: "play none none reverse",
            },
        }
    );
};

const initHero = () => {
    const hero = document.getElementById("hero");

    if (!hero || typeof gsap === "undefined" || typeof ScrollTrigger === "undefined") {
        return;
    }

    killHeroTriggers();

    const tl = gsap.timeline({
        defaults: { ease: "power3.out" },
        scrollTrigger: {
            id: "hero",
            trigger: hero,
            start: "top center",
        },
    });

    tl.fromTo(
        hero.querySelectorAll("[data-hero-copy] > *"),
        { y: 20, opacity: 0 },
        { y: 0, opacity: 1, stagger: 0.1, duration: 0.7 }
    ).fromTo(
        hero.querySelectorAll("[data-hero-ctas] > *"),
        { y: 20, opacity: 0 },
        { y: 0, opacity: 1, stagger: 0.2, duration: 0.1 },
        "-=0.4"
    );

    hero.querySelectorAll("[data-parallax]").forEach((el) => {
        const speed = Number(el.dataset.speed || 12);

        gsap.to(el, {
            yPercent: speed,
            ease: "none",
            scrollTrigger: {
                id: "hero",
                trigger: hero,
                start: "top bottom",
                end: "bottom top",
                scrub: 1,
            },
        });
    });

    const scrollBtn = hero.querySelector("[data-scroll-target]");
    if (scrollBtn && !scrollBtn.dataset.bound) {
        scrollBtn.dataset.bound = "true";
        scrollBtn.addEventListener("click", () => {
            const target = scrollBtn.dataset.scrollTarget;
            if (!target) return;
            gsap.to(window, { duration: 1, scrollTo: target, ease: "power2.out" });
        });
    }
};

const initAnimations = () => {
    initHero();
    initFeatures();
    initAbout();
};

document.addEventListener("DOMContentLoaded", initAnimations);
document.addEventListener("livewire:navigated", initAnimations);
