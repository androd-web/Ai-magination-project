
    document.addEventListener("DOMContentLoaded", function () {
        const getStartedBtn = document.getElementById("get-started-btn");
        const videoIcon = document.getElementById("video-play-icon");
        const videoModal = document.getElementById("videoModal");
        const closeModal = document.getElementById("closeModal");
        const video = document.getElementById("serviceVideo");

        // Open video modal on button or icon click
        getStartedBtn.addEventListener("click", function () {
            videoModal.style.display = "block";
            video.play();
        });
 

        // Close video modal
        closeModal.addEventListener("click", function  () { 
            video.pause()
            videoModal.style.display=" none"
        }); 

        // Close modal when clicking outside of content
        window.addEventListener("click", function (event) {
            if (event.target === videoModal) {
                video.pause();
                videoModal.style.display = "none";
            }
        });
    }); 
 

    // ===================splitting js pour l'animation de vague=================================
    // ====================et animation gsap================================================
    Splitting();


// Animation de la navbar debut

const link_ai_header = gsap
    .timeline({ ease: " Power1.easeInOut" })

    .from(" header", {
        duration: 1,
        y: -80,
    })

    .from(" header .logo-header-AI", {
        duration: 0.5,
        y: -55,
    })

    .from(" header ul li", {
        duration: 0.5,
        y: -55,
        opacity: 0,
    });

    // le titre Animation et du bloc 1
 
    gsap.from("  .title_services_ai", {
      y: 50,
  opacity: 0, 
  ease: "elastic.out(0.4,0.15)",
  duration: 1 ,
  stagger : 0.2,
  delay: 2,
  })

    gsap.from("  .p-first-ai", {
      x: 80,
  opacity: 0, 
  ease: "elastic.out(0.4,0.15)",
  duration: 2 ,
  stagger : 0.2,
  delay: 2.5,
  })

    gsap.from("  .get-started-container", {
      y: -80,
  opacity: 0, 
  ease: "elastic.out(0.4,0.15)",
  duration: 2 ,
  stagger : 0.2,
  delay: 2.7,
  })

    gsap.from("  .img-bloc1-ai", {
      // y: -80,
  opacity: 0, 
  ease: "elastic.out(0.4,0.15)",
  duration: 2 ,
  rotateY: 360,
  delay: 3,
  })

// Animation de la navbar fin
 

// =====================code pour le decontage des nombres================================
// =======================================================================================
 
gsap.registerPlugin(ScrollTrigger);

// Fonction de décompte

function decompte(el, start, end, speed, delay) {
  let current = start;
  const increment = Math.ceil((end - start) / (1000 / speed)); // Calcul de l'incrément par intervalle

  setTimeout(() => {
      const interval = setInterval(() => {
          current += increment;

          if (current >= end) {
              current = end; // Corrige la valeur exacte au cas où elle dépasse
              clearInterval(interval);
          }

          el.textContent = current; // Met à jour le texte
      }, speed);
  }, delay);
}

// GSAP avec ScrollTrigger
document.querySelectorAll('.conte-numbers').forEach((number) => {
  const start = parseInt(number.getAttribute('data-start'), 10);
  const end = parseInt(number.getAttribute('data-end'), 10);
  const speed = parseInt(number.getAttribute('data-speed'), 10);
  const delay = parseInt(number.getAttribute('data-delay'), 10);
  const increment = parseInt(number.getAttribute('data-increment'), 10); // Récupère l'incrément

  ScrollTrigger.create({
      trigger: number,
      start: 'top 70%', // Déclenche lorsque l'élément entre dans le viewport
      once: true, // Animation déclenchée une seule fois
      onEnter: () => {
          // Animation d'apparition (GSAP)
          gsap.fromTo(
              number,
              { opacity: 0, y: 20 },
              {
                  opacity: 1,
                  y: 0,
                  duration: 0.8,
                  onComplete: () => {
                      // Démarrer le décompte après l'animation
                      decompte(number, start, end, speed, delay, increment);
                  },
              }
          );
      },
  });
});

// titre du decompte
gsap.from(".title-decompte-ai", {
  x: 100, // Position de départ, 200px à droite
  opacity: 0,
  duration: 1.5,
  ease: "bounce.out", // Effet de rebond
  scrollTrigger: {
    trigger: ".text-numbers-ai",
    start: "top 90%",
    once: true,
  }
});


// animation du bloc proche du decompte
// gsap.from(".items-bloc-ai", {
//   opacity: 0,
//   y: 80,
//   duration: 1.5,
//   ease: "bounce.out",
//   scrollTrigger: { 
//     trigger: ".items-bloc-ai", // Cible l'élément
//     start: 'top 85%',
//     once: true, // Animation uniquement une fois
//   }
// });

// aniamtion sur les button

gsap.from(".button3D", {
  y: -100,
  opacity: 0, 
  duration: 1.5,
  ease: "bounce.out",
  scrollTrigger: { 
    toggleActions: " play none none  none",
    trigger: ".button3D",
    start: "bottom bottom",
    once: true, 
  }
});

// animation du texte qui se devoille 

gsap.from(".text-reveal", {
  opacity: 0,
  y: 50,
  duration: 1.5,
  stagger: 0.2,
  scrollTrigger: {
    trigger: ".text-reveal",
    start: "top 80%",
    once: true,
  }
});

// animation du bloc avec le button services
 
// gsap.from(".bloc-btn-service", {
//   y: -100,
//   opacity: 0, 
//   duration: 1.5,
//   ease: "bounce.out",
//   scrollTrigger: { 
//     toggleActions: " play none none  none",
//     trigger: ".bloc-btn-service",
//     start: "bottom bottom",
//     once: true, 
//   }
// });


// aniamtion sur les bloc des services

gsap.from(".cont-bloc-ser-ai", {
  scale: 0.5,
  opacity: 0,
  duration: 1 ,
  stagger : 0.2,
  delay: .5,
  ease: "power2.out",
  scrollTrigger: { 
    trigger: ".cont-bloc-ser-ai",
    start: "top 100%",
    once: true,
  }, 
});

