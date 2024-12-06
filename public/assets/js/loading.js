const allLetters = document.querySelectorAll(".bloc span");

const ligne = document.querySelector(".ligne");

const TLetters = gsap.timeline();

TLetters.from(ligne, {
    width: "0%",
    opacity: 0,
    duration: 0.2,
    ease: " power1.in",
}).from(allLetters, {
    opacity: 0,
    top: gsap.utils.wrap([100, -100]),
    stagger: 0.07,
    ease: "power2.out",
});
