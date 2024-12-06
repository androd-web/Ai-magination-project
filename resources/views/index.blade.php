<?php
$title = "Accueil";
include "partial/_head.php";
?>

<body class="container position-relative">

  <?php include "partial/_header.php"?>

  <!-- section 1 -->
  <section class="col-xxl-8 py-5 position-relative heroes-section w-auto">
    <!-- svg -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1261 820" class="position-absolute h-100 end-0 top-0 svg-section-heroes">
      <g id="forme_bleu_ciel" data-name="forme bleu ciel"><path class="cls-1" d="M655.07,0h346.55l.25,300.48A156.39,156.39,0,0,1,845.48,457h0c-105.16,0-190.41-85.25-190.41-190.41Z" transform="translate(-22 0)"/><g id="bleu_cyan" data-name="bleu cyan"><rect class="cls-2" x="810.66" width="82.76" height="196.86"/></g><path id="forme_verte" data-name="forme verte" class="cls-3" d="M655.07,0H844.72V196.51a96.69,96.69,0,0,1-96.9,96.69h0a93,93,0,0,1-92.8-93Z" transform="translate(-22 0)"/><g id="forme_violet" data-name="forme violet"><circle class="cls-4" cx="909.5" cy="197.5" r="90.5"/></g><circle class="cls-5" cx="823" cy="361" r="96"/></g><g id="form_bleu_foncé" data-name="form bleu foncé"><path class="cls-6" d="M903,0h377V513.31c0,107.09-86.81,193.9-193.9,193.9h0c-100.93,0-182.76-81.83-182.76-182.76Z" transform="translate(-22 0)"/><circle class="cls-7" cx="1069" cy="611" r="96"/><g id="forme_violet-2" data-name="forme violet"><path class="cls-8" d="M1182.64,188h.29A97.07,97.07,0,0,1,1280,285.07V469.79A83.2,83.2,0,0,1,1196.79,553h0A105.8,105.8,0,0,1,1091,447.21V279.64A91.64,91.64,0,0,1,1182.64,188Z" transform="translate(-22 0)"/><g id="forme_blanche" data-name="forme blanche"><circle class="cls-5" cx="1165" cy="285" r="96"/></g></g><g id="forme_orange" data-name="forme orange"><path id="forme_orange-2" data-name="forme orange" class="cls-9" d="M993.64,188h.29A97.07,97.07,0,0,1,1091,285.07V469.79A83.2,83.2,0,0,1,1007.79,553h0A105.8,105.8,0,0,1,902,447.21V279.64A91.64,91.64,0,0,1,993.64,188Z" transform="translate(-22 0)"/><circle class="cls-10" cx="980" cy="467" r="96"/></g><path id="forme_verte-2" data-name="forme verte" class="cls-3" d="M1093,0h187V97.79a90.44,90.44,0,0,1-90.45,90.45h0A96.55,96.55,0,0,1,1093,91.69Z" transform="translate(-22 0)"/><g id="forme_bleu_nuit" data-name="forme bleu nuit"><circle class="cls-11" cx="974.5" cy="94.5" r="94.5"/></g></g><g id="cercle"><circle id="c_1" data-name="c 1" class="cls-12" cx="89" cy="162" r="89"/><circle id="c_2" data-name="c 2" class="cls-12" cx="486.5" cy="381.5" r="48.5"/><circle id="c_3" data-name="c 3" class="cls-13" cx="884.5" cy="771.5" r="48.5"/><circle id="c_4" data-name="c 4" class="cls-14" cx="239.5" cy="574.5" r="54.5"/></g>
    </svg>
    <!-- end of svg -->

    <div class="row align-items-center g-5 py-5 position-relative z-2">
      <div class="col-12 col-md-9">
        <h1 class="display-5 ff-bold-AI lh-1 mb-3"><span class="text-red-AI"><?=$app_name?></span> : Au-Delà des Limites
          de l'Imagination</h1>
        <h6 class="display-5 ff-light-AI fs-4 lh-1 mb-3">Beyond the limits of Imagination</h6>
        <p class="lead"></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="{{url('/contact')}}" class="btn btn-lg px-4 me-md-2 text-white bg-red-AI">Contacter Nous</a>
        </div>
      </div>
    </div>
  </section>
  <!-- end of section 1 -->

  <!-- section 2 | about us -->
  <section class="py-2">
    <div class="row row-cols-1 row-cols-md-2 align-items-md-start g-5 py-3">
      <div class="col d-flex flex-column align-items-start gap-2">
        <h2 class="fw-bold text-body-emphasis">À propos de nous</h2>
        <p class="text-body-secondary"><?=$app_name?> est une agence dédiée à la fourniture de solutions intelligentes,
          intuitives, et innovantes pour les entreprises de divers secteurs. Plus qu’une simple agence de solutions,
          <?=$app_name?> est un partenaire de transformation numérique, spécialisé dans l’automatisation et
          l’intelligence artificielle (IA) pour des solutions adaptées aux besoins uniques de chaque client
        </p>
        <a href="{{url('/contact')}}" class="btn bg-red-AI btn-lg text-white">Contacter nous</a>
      </div>

      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="col d-flex flex-column gap-2">
            <div
              class="feature-icon-small d-inline-flex align-items-center justify-content-center bg-red-AI bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#collection" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">Innovation et Constante</h4>
            <p class="text-body-secondary">Nous visons à repousser les limites de la technologie pour offrir des
              solutions novatrices.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div
              class="feature-icon-small d-inline-flex align-items-center justify-content-center bg-red-AI bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#gear-fill" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">Intelligence et Adaptabilité</h4>
            <p class="text-body-secondary">L’IA de <?=$app_name?> utilise des algorithmes intelligents pour garantir une
              efficacité maximale.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div
              class="feature-icon-small d-inline-flex align-items-center justify-content-center bg-red-AI bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#table" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">Transparence et Intégrité :</h4>
            <p class="text-body-secondary">Nous assurons une protection complète des données de nos clients.</p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div
              class="feature-icon-small d-inline-flex align-items-center justify-content-center bg-red-AI bg-gradient fs-4 rounded-3">
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#speedometer" />
              </svg>
            </div>
            <h4 class="fw-semibold mb-0 text-body-emphasis">Personnalisation et Flexibilité</h4>
            <p class="text-body-secondary">Chaque solution est conçue pour s’adapter parfaitement aux besoins
              spécifiques de nos clients.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end of section 2 | about us -->

  <!-- section 3 | services -->
  <section class="py-2">
    <h2 class="ff-bold-AI">Nos Services et Solutions</h2>
    <p class="ff-light-AI"><a href="{{url('/services')}}">Découvrer</a> plus en détails les services et les solutions
      que nous mettons à votre disposition.</p>
    <div id="myCarousel" class="carousel slide mb-6 pointer-event d-flex pe-3" data-bs-ride="carousel"
      style="height:500px;">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active h-100 caroussel-item-1">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#00000099"></rect>
          </svg>
          <div class="container">
            <div class="carousel-caption text-start">
              <h3>Automatisation et intelligence des Données</h3>
              <p class="opacity-75">Développement d'applications Ia et personnalisées pour optimiser la productivité.
              </p>
              <p><a class="btn btn-lg bg-red-AI text-white" href="{{url('/services')}}">Plus de Détails</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item h-100 caroussel-item-2">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#00000099"></rect>
          </svg>
          <div class="container">
            <div class="carousel-caption">
              <h3>Solutions et Logiciels IA personnalisés</h3>
              <p>Développement d'applications IA personnalisés avec et optimisent le support client.</p>
              <p><a class="btn btn-lg bg-red-AI text-white" href="{{url('/services')}}">Plus de Détails</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item h-100 caroussel-item-3">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
            <rect width="100%" height="100%" fill="#00000099"></rect>
          </svg>
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Gestion des Médias Sociaux et Marketing Digital</h1>
              <p>Outils d'automatisation des interactions et de création de contenu visuel.</p>
              <p><a class="btn btn-lg bg-red-AI text-white" href="{{url('/services')}}">Plus de Détails</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!-- end of section 3 | services -->

  <!-- section 4 | contact -->
  <section class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Nous sommes là pour vous aider</h1>
        <p class="col-lg-10 fs-4">N'hésitez pas à nous contacter pour en savoir plus sur nos services et produits ! Notre équipe est à votre écoute pour répondre à toutes vos questions et vous aider à atteindre vos objectifs. Envoyez-nous un message et nous vous répondrons dans les plus brefs délais !</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="post" action="" class="p-4 p-md-5 border rounded-3 bg-body-tertiary">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            <label for="floatingInput">Adresse Email</label>
          </div>
          <div class="form-floating mb-3">
            <code><textarea name="message" class="w-100 p-2 form-control" id="floatingMessage" style="resize:none;outline:none;min-height:100px;" placeholder="Ici votre Message.." required></textarea></code>
          </div>
          <button class="w-100 btn btn-lg btn-primary bg-red-AI " type="submit">ENVOYER</button>
          <hr class="my-4">
        </form>
      </div>
    </div>
</section>
  <!-- end of section 4 | contact -->

  <?php include "partial/_footer.php"; ?>
</body>

</html>