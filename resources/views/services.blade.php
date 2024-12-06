<?php
$title = "Services";
include "partial/_head.php";
?>

<body class="container">

  <?php include "partial/_header.php" ?>

  <div class="row d-flex container-bloc1-ai p-4 mb-4 my-5 position-relative h-50">
    <div class="col px-0 my-5 py-5 w-70 container-item1-ai">
      <h1 class="ff-bold-AI  title_services_ai ">Transformez vos idées en solutions concrètes avec <?=$app_name?>.</h1>
      <p class=" lead my-4 p-first-ai ff-light-AI"> Nous offrons des solutions innovantes et sur mesure pour répondre
        aux défis technologiques de votre entreprise.
        Prêt à démarrer ? Cliquez sur le button pour voir comment nous pouvons vous aider à transformer vos idées en
        réalité.
      </p>
      <div class="get-started-container d-flex mb-0">

        <button id="get-started-btn" class="mx-3 btn text-white btn-style-ai">
          LANCER LA VIDEO
        </button>
        <div class="video-icon">
          <img src="{{asset('assets/icon/arrow-left.svg')}}" alt="" id="get-started-btn" class="mx-3 arrow-icon">
          <span data-splitting="" class="wave-text">Clicker </span>
        </div>
      </div>

      <!-- Video Modal -->
      <div id="videoModal" class="modal">
        <div class="modal-content">
          <button id="get-started-btn" class="mx-3 btn text-white close-btn">
            <span class="close" id="closeModal">&times;</span>
          </button>
          <video id="serviceVideo" controls>
            <source src="{{ asset(path: 'videos/Ai-magination-rendue1.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        </div>
      </div>
    </div>
    <div class="col w-30 img-bloc1-ai h-auto"> </div>
  </div>
  <div class="row container-bloc2-ai d-flex flex-column my-5">
    <div class="col d-flex items-1-ai">

      <div class="items-bloc-ai my-5">
        <h2 class="">Qui Nous Sommes ?</h2>
        <p class=" my-3">Notre équipe est passionnée par l'innovation technologique et la recherche de solutions
          créatives pour répondre à vos besoins numériques. Nous sommes une équipe expérimentée et dynamique qui vous
          accompagne dans votre transformation digitale.</p>
        <a href="#" class="button3D">
          <span class="front">read</span>
          <span class="center"></span>
          <span class="back">more</span>
        </a>
      </div>
      <div class="text-numbers-ai">
        <h2 class="title-decompte-ai">Notre Evolutions</h2>
        <div class="d-flex my-5">
          <div class="d-flex flex-column mx-5 container-conte">
            <p>
              <span class="h1 fw-bold conte-numbers text-black my-4" data-start="0" data-end="170" data-speed="20"
                data-delay="0">0</span>
              <span class="h1 fw-bold text-black conte-numbers-icon my-4">+</span>
            </p>

            <span class="conte-numbers-text">projets réussis</span>
          </div>
          <div class="d-flex flex-column mx-5 container-conte">
            <p>
              <span class="h1 fw-bold conte-numbers text-black my-4" data-start="0" data-end="1000" data-speed="2"
                data-delay="0">0</span>
              <span class="h1 fw-bold text-black conte-numbers-icon my-4">+</span>
            </p>
            <span class="conte-numbers-text">clients satisfaits.</span>
          </div>
          <div class="d-flex flex-column mx-5 container-conte">
            <p>
              <span class="h1 fw-bold conte-numbers text-black my-4" data-start="0" data-end="12" data-speed="100"
                data-delay="2100">0</span>
              <span class="h1 fw-bold text-black conte-numbers-icon my-4">K+</span>
            </p>
            <span class="conte-numbers-text">utilisateurs actifs.</span>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="text-explicatif-ai fs-6 fw-bold">
    <p>
      - 170+ projets réussis
      Nous avons fait nos preuves à travers plus de 170 projets livrés avec succès dans divers secteurs. <br>

      - 1000+ clients satisfaits
      Plus de 1000 clients nous ont fait confiance pour les accompagner dans leur développement numérique.<br>

      - 12K+ utilisateurs actifs
      Avec plus de 12 000 utilisateurs actifs, notre impact se fait sentir partout.
    </p>
    <h2 class="display-6 title-items-ai ">Pourquoi choisir <?=$app_name?> ?</h2>
    <p class="fs-6 fw-bold">Notre expertise, notre engagement envers l'innovation et notre capacité à offrir des
      solutions sur mesure sont les raisons pour lesquelles nous sommes votre partenaire idéal pour vos projets
      numériques.</p>
  </div>
  <div class="col d-flex items-2-ai p-5">
    <div class="w-50 bloc-item-img">

      <p class=" mx-4 fw-bold text-black fs-5 line-down-ai-1">Experience</p>
      <p class=" my-5 px-5 p-expe-ai">Nous croyons en l'expérience et dans la création d'outils puissants pour propulser votre avenir numérique.
        Chaque projet que nous réalisons est une étape vers la construction d'un futur meilleur pour nos clients. Grâce
        à nos solutions sur mesure, nous contribuons à la réussite de chaque entreprise, étape par étape, en offrant des
        designs modernes et des systèmes performants.</p>
      <img src="{{asset('assets/img/esperience.jpg')}}" alt="" class=" container my-4">
    </div>
    <div class=" cont-items-2">
      <div class=" d-flex">
        <p class="mx-3 fw-bold text-black line-down-ai-2">Reputation</p>
        <p class=" mx-3 fw-bold text-black ">Communication</p>
        <p class=" mx-3 fw-bold text-black ">Technologies</p>
      </div>
      <div class=" my-5 text-reveal">
        <h2 class="title2_services_ai ">Construire votre futur, un projet à la fois.</h2>
        <p style="color:black;">Chez <?=$app_name?>, nous sommes déterminés à façonner l'avenir grâce à la puissance de
          l'intelligence artificielle et aux technologies de pointe. Notre objectif est de transformer vos idées
          innovantes en réalité, en créant des solutions qui favorisent le succès et l'efficacité. Que vous souhaitiez
          intégrer l'IA dans votre entreprise ou explorer de nouvelles avancées technologiques, nous offrons l'expertise
          et la vision créative nécessaires pour vous aider à prospérer dans un paysage numérique en constante
          évolution.

          Des applications alimentées par l'IA aux informations basées sur les données, notre travail parle de lui-même.
          Nous avons aidé de nombreuses entreprises à améliorer leurs performances et à transformer leurs opérations en
          exploitant tout le potentiel de l'intelligence artificielle.

          Rejoignez-nous pour construire un avenir plus intelligent, un projet à la fois.</p>
        <a href="{{'/contact'}}" class="button3D ">
          <span class="front">Contacter</span>
          <span class="center"></span>
          <span class="back">Nous</span>
        </a>
      </div>
    </div>
  </div>
  </div>
  <div class="row bloc-btn-service">
    <div class="col d-flex bloc-items-btn">
      <h2 class=" col-4"> Présentation des services</h2>
      <p class="col-5 mx-5 p-btn-ai">Voici les services offerts par <?=$app_name?>, chacun conçu pour répondre spécifiquement aux besoins uniques de votre entreprise.</p>
           <p class="p-btn-cnt-ai"> <a href="#" class="button3D">
          <span class="front">Our</span>
          <span class="center"></span>
          <span class="back">Services</span>
        </a></p>

    </div>
  </div>
  <div class="row d-flex justify-content-center align-items-center cont-bloc-ser-ai">
    <div class="col col-4 p-3 m-3 bloc2-item-ai  ">
      <div class="">
        <div class=" m-3 svg-ai d-flex justify-content-center align-items-center">
          <img src="{{asset('assets/icon/code-solid.svg')}}" alt="">
        </div>
        <div class="">
          <h3 class=" fs-5 text-center"> Développement d'applications sur mesure</h3>
          <p>Créez des applications qui correspondent exactement à vos besoins.
          <?=$app_name?> développe des solutions logicielles sur mesure pour optimiser vos processus métiers, améliorer votre efficacité et offrir à vos utilisateurs une expérience unique.</p>
        </div>
      </div>
    </div>
    <div class="col col-4 p-3 m-3  bloc2-item-ai ">
      <div class="">
        <div class=" m-3 svg-ai d-flex justify-content-center align-items-center">
          <img src="{{asset('assets/icon/palette-solid.svg')}}" alt="">
        </div>
        <div class="">
          <h3 class="fs-5 text-center"> Design graphique et UX/UI</h3>
          <p>Des interfaces élégantes et une expérience utilisateur fluide.
          Notre équipe de designers crée des interfaces modernes, intuitives et esthétiques, afin de maximiser l'engagement de vos utilisateurs et de rendre vos produits plus accessibles.</p>
        </div>

      </div>
    </div>
    <div class="col col-4 p-3 m-3 bloc2-item-ai">
      <div class="">
        <div class=" m-3 svg-ai d-flex justify-content-center align-items-center">
          <img src="{{asset('assets/icon/video-solid.svg')}}" alt="">
        </div>
        <div class="">
          <h3 class="fs-5 text-center">Création de contenu digital</h3>
          <p>Un contenu captivant pour capter l'attention de votre audience.
          Que ce soit pour des vidéos, des articles de blog, des infographies ou des posts sur les réseaux sociaux, nous créons du contenu de qualité qui engage votre public et met en valeur votre marque.</p>
        </div>

      </div>
    </div>
    <div class="col col-4 p-3 m-3 bloc2-item-ai">
      <div class="">
        <div class=" m-3 svg-ai d-flex justify-content-center align-items-center">
          <img src="{{asset('assets/icon/chart-line-solid.svg')}}" alt="">
        </div>
        <div class="">
          <h3 class="fs-5 text-center">Optimisation pour les moteurs de recherche (SEO)</h3>
          <p>Augmentez votre visibilité en ligne.
          Grâce à des techniques avancées de SEO, nous vous aidons à améliorer votre classement sur les moteurs de recherche et à attirer un trafic ciblé vers votre site web.</p>
        </div>

      </div>
    </div>
    <div class="col col-4 p-3 m-3 bloc2-item-ai">
      <div class="">
        <div class=" m-3 svg-ai d-flex justify-content-center align-items-center">
          <img src="{{asset('assets/icon/robot-solid.svg')}}" alt="">
        </div>
        <div class="">
          <h3 class="fs-5 text-center">Intégration de solutions d'intelligence artificielle (IA)</h3>
          <p>Automatisez et optimisez vos processus grâce à l'IA.
          Nous intégrons des solutions d'intelligence artificielle pour vous permettre d'automatiser des tâches répétitives, analyser des données complexes et prendre des décisions éclairées.</p>
        </div>

      </div>
    </div>
    <div class="col col-4 p-3 m-3 bloc2-item-ai  ">
      <div class="">
        <div class=" m-3 svg-ai d-flex justify-content-center align-items-center">
          <img src="{{asset('assets/icon/bullseye-solid.svg')}}" alt="">
        </div>
        <div class="">
          <h3 class="fs-5 text-center">Conseil en stratégie numérique</h3>
          <p>Construisez une stratégie numérique gagnante.
          <?=$app_name?> vous aide à définir et à mettre en œuvre une stratégie numérique complète, adaptée à vos objectifs d'affaires, pour vous permettre de tirer parti des meilleures opportunités numériques.</p>
        </div>

      </div>
    </div>
  </div>
  <div id="servicesSlider" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner text-center">
    <!-- Slide 1: Développement d'applications sur mesure -->
    <div class="carousel-item active">
      <img src="{{ asset('assets/img/service1.jpg') }}" class="d-block mx-auto img-fluid slider-image" alt="Développement">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
        <h2 class="slider-title">Développement d'applications sur mesure</h2>
        <p class="slider-text">Des solutions taillées pour vos besoins spécifiques.</p>
      </div>
    </div>

    <!-- Slide 2: Design graphique et UX/UI -->
    <div class="carousel-item">
      <img src="{{ asset('assets/img/service2.jpg') }}" class="d-block mx-auto img-fluid slider-image" alt="Design">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
        <h2 class="slider-title">Design graphique et UX/UI</h2>
        <p class="slider-text">Des interfaces modernes et intuitives pour vos projets.</p>
      </div>
    </div>

    <!-- Slide 3: Création de contenu digital -->
    <div class="carousel-item">
      <img src="{{ asset('assets/img/service3.jpg') }}" class="d-block mx-auto img-fluid slider-image" alt="Contenu Digital">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
        <h2 class="slider-title">Création de contenu digital</h2>
        <p class="slider-text">Captivez votre audience avec du contenu de qualité.</p>
      </div>
    </div>

    <!-- Slide 4: Optimisation pour les moteurs de recherche (SEO) -->
    <div class="carousel-item">
      <img src="{{ asset('assets/img/service4.jpg') }}" class="d-block mx-auto img-fluid slider-image" alt="SEO">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
        <h2 class="slider-title">Optimisation pour les moteurs de recherche (SEO)</h2>
        <p class="slider-text">Boostez votre visibilité en ligne avec des techniques avancées.</p>
      </div>
    </div>

    <!-- Slide 5: Intégration de solutions d'intelligence artificielle -->
    <div class="carousel-item">
      <img src="{{ asset('assets/img/service5.jpg') }}" class="d-block mx-auto img-fluid slider-image" alt="Intelligence Artificielle">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
        <h2 class="slider-title">Intégration de solutions d'intelligence artificielle</h2>
        <p class="slider-text">Automatisez et optimisez vos processus grâce à l'IA.</p>
      </div>
    </div>

    <!-- Slide 6: Conseil en stratégie numérique -->
    <div class="carousel-item">
      <img src="{{ asset('assets/img/service6.jpg') }}" class="d-block mx-auto img-fluid slider-image" alt="Stratégie Numérique">
      <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
        <h2 class="slider-title">Conseil en stratégie numérique</h2>
        <p class="slider-text">Construisez une stratégie numérique adaptée à vos objectifs.</p>
      </div>
    </div>
  </div>

  <!-- Navigation Buttons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#servicesSlider" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Précédent</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#servicesSlider" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Suivant</span>
  </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('js/gsap.min.js')}}"></script>
  <script src="{{asset('js/ScrollTrigger.min.js')}}"></script>
  <script src="{{asset('js/splitting.min.js')}}"></script>
  <script src="{{asset('assets/js/service-js.js')}}"></script>

  <?php include "partial/_footer.php"; ?>
</body>

</html>