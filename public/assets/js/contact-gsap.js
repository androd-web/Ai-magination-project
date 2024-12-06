//  #################initialisation of materiel design start###############

gsap.registerPlugin(ScrollTrigger);

let selection = Splitting();

//  #################initialisation of materiel design og gsap end###############

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

//  #####################gsap animation of navbar end############

//  ##################constut title of contact page start################

gsap.from(".title-ai", {
    duration: 1,
    delay: 2, 
    opacity: 0,
});

gsap.from(" .line-Ai", {
    duration: 1,
    delay: 2.2,
    opacity: 0,
});

// ############################# first bloc animation gsap start#######################

gsap.from("  .bloc1-ai", {
    duration: 1,
    delay: 2.4,
    x: 90,
    opacity: 0,
    stagger: 0.5,
});

// #############title of second bloc gsap animation ################################

const second_title = document.querySelector(" .con_title .title-bloc2-ai");

gsap.from(selection[0].chars, {
    scrollTrigger: {
        trigger: ".con_title",
        toggleActions: "play none none none",
        start: "20% 20%",
    },
    duration: 1, 
    opacity: 0,
    y: -50,
    stagger: {
        amount: 1,
    },
    delay: .5,
}); 

gsap.from( " .bolc-svg-ai", {
    scrollTrigger: {
        trigger: ".cont_ai_blocs",
        toggleActions: "play none none none",
        start: "10% 20%",
    },
  y: 50,
  opacity: 0, 
  ease: "elastic.out(0.4,0.15)",
  duration: 1 ,
  stagger : 0.2,
  delay: .5,
});

// #########################bloc img gsap animation start#################################

gsap.from(" .bloc-img-bg-ai", {
   scrollTrigger: {
       trigger: " .bloc-img-bg-ai",
       toggleActions: "play none none none",  
       start: "top 20%",  
   },
 y: 50,
 opacity: 0, 
 ease: "elastic.out(0.4,0.15)",
 duration: 1.2 ,  
});


// #########################gsap animation form start#######################################

gsap.from("  .container-form", {
   scrollTrigger: {
      trigger: " .container-form",
      toggleActions: "play none reverse none",  
      start: "top 20%", 
  },
   duration: 1,
   delay: .5,
   x: 90,
   opacity: 0, 
});

//  ##############use the lenis scroll smooth code of implementation start#################
