 // Animation GSAP pour le premier bloc
 document.addEventListener("DOMContentLoaded", function () {
    gsap.from(".about-title", { duration: 1, x: -100, opacity: 0, ease: "power2.out" });
    gsap.from(".about-text", { duration: 1, x: -100, opacity: 0, delay: 0.5, ease: "power2.out" });
    gsap.from(".about-btn", { duration: 1, scale: 0, opacity: 0, delay: 1, ease: "back.out(1.7)" });
    gsap.from(".about-image", { duration: 1, y: 50, opacity: 0, delay: 1.5, ease: "power2.out" });
});


// Animation GSAP pour le deuxième bloc
gsap.from(".digital-age-image", { duration: 1, x: -50, opacity: 0, ease: "power2.out" });
gsap.from(".digital-age-title", { duration: 1, y: 50, opacity: 0, delay: 0.5, ease: "power2.out" });
gsap.from(".digital-age-text", { duration: 1, y: 50, opacity: 0, delay: 1, ease: "power2.out" });


// Animation GSAP pour les cartes business
gsap.from(".business-card", {
    duration: 1,
    opacity: 0,
    y: 50,
    stagger: 0.2,
    ease: "power2.out"
});

// Animation GSAP pour les icônes de récompenses
gsap.from(".awards i", {
    duration: 1,
    scale: 0,
    stagger: 0.2,
    ease: "back.out(1.7)",
    delay: 1
});


// Animation for cards
gsap.from(".fundamental-business .card", {
    opacity: 0,
    y: 50,
    duration: 0.8,
    stagger: 0.3
});

// Animation for award icons
gsap.from(".prestigious-awards img", {
    scale: 0,
    duration: 0.8,
    stagger: 0.2,
    ease: "back"
});
document.addEventListener('DOMContentLoaded', () => {
    gsap.from(".team-card", {
        opacity: 0,
        scale: 0.8,
        duration: 1,
        ease: "power3.out",
        stagger: 0.2
    });
});
