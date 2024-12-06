<?php
$title = "À propos";
include "partial/_head.php";
?>

<body class="container">

  <?php include "partial/_header.php" ?>
  <div class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Texte -->
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="about-title"> A propos d'Ai-Magination qui repouse les limits de l'innovation</h2>
                    <p class="about-text">
                        Chez Ai-Magination, nous croyons que la technologie peut transformer le monde. Notre mission est
                        de concevoir des solutions intelligentes qui répondent aux besoins de nos clients et créent de
                        la valeur.
                    </p>
                    <a href="{{'/services'}}" class="btn btn-primary about-btn">Voir +</a>
                </div>
                <!-- Image -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/img/about-img/about1.jpg') }}" alt="About Us"
                        class="img-fluid rounded about-image">
                </div>
            </div>
        </div>
    </div>
    <div class="digital-age-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image -->
                <div class="col-md-6 text-center">
                    <img src="{{ asset('assets/img/about-img/about2.jpg') }}" alt="Digital Age"
                        class="img-fluid rounded digital-age-image">
                </div>
                <!-- Texte -->
                <div class="col-md-6 text-center text-md-start">
                    <h3 class="digital-age-title">Une page détaillée sur la mission et les objectifs d'Ai-Magination.
                    </h3>
                    <p class="digital-age-text">
                        Grâce à l'innovation et à la technologie, nous collaborons avec des marques pour optimiser leur
                        visibilité et leur impact dans le monde numérique. Découvrez comment nous transformons vos défis
                        en opportunités avec des solutions sur mesure.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="fundamental-business-section py-5">
        <div class="container text-center ">
            <!-- Titre principal -->
            <h2 class="section-title">Nos  Fondamentaux dans le  Business</h2>
            <div class="row mt-4">
                <!-- Carte Vision -->
                <div class="col-md-4 mb-4">
                    <div class="business-card p-4"> 
                        <h4 class="business-title">Développement de logiciels sur mesure</h4>
                        <p class="business-description">Créez des applications personnalisées qui répondent parfaitement à vos besoins.
                        </p>
                    </div>
                </div>
                <!-- Carte Mission -->
                <div class="col-md-4 mb-4">
                    <div class="business-card p-4"> 
                        <h4 class="business-title">Intégration d'intelligence artificielle </h4>
                        <p class="business-description">
                        Automatisez vos processus et analysez vos données pour prendre des décisions éclairées.
                        </p>
                    </div>
                </div>
                <!-- Carte Valeurs -->
                <div class="col-md-4 mb-4">
                    <div class="business-card p-4"> 
                        <h4 class="business-title">Design UX/UI</h4>
                        <p class="business-description">Concevez des interfaces élégantes et intuitives pour maximiser l'expérience utilisateur.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="business-card p-4">
                        <h4 class="business-title">SEO et stratégie digitale </h4>
                        <p class="business-description">Optimisez votre présence en ligne et attirez un trafic ciblé.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Prix et distinctions -->
            <h2 class="section-title mt-5">Nos prestige Chez Ai-Magination </h2>
            <div class="awards mt-4 ">
                <img src="{{ asset('assets/icon/trophy.svg') }}" alt="" class="mx-1">
                <img src="{{ asset('assets/icon/phone.svg') }}" alt="" class="mx-1">
                <img src="{{ asset('assets/icon/puzzle.svg') }}" alt="" class="mx-1">
                <img src="{{ asset('assets/icon/robot-solid.svg') }}" alt="" class="mx-1">
                <img src="{{ asset('assets/icon/lightbulb.svg') }}" alt="" class="mx-1">
                <img src="{{ asset('assets/icon/bullseye-solid.svg') }}" alt="" class="mx-1">
            </div>
        </div>
    </div>
    <div class="fundamental-business py-5">
        <div class="container text-center">
            <!-- Cards -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm p-4 mb-3">
                        <img src="{{ asset('assets/img/about-img/about3.jpg') }}" alt="Vision Icon"
                            class="mx-auto mb-3 img-fluid">
                        <h5 class="card-title">Vision</h5>
                        <p class="card-text">
                            Notre vision est d'aider les entreprises à innover et à prospérer grâce à la technologie de
                            pointe.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm p-4 mb-3">
                        <img src="{{ asset('assets/img/about-img/about4.jpg') }}" alt="Mission Icon"
                            class="mx-auto mb-3 img-fluid">
                        <h5 class="card-title">Mission</h5>
                        <p class="card-text"> Innovation : Toujours repousser les limites. <br>
                            Intégrité : Travailler avec honnêteté et transparence.<br>
                            Collaboration : Construire ensemble pour réussir.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm p-4 mb-3">
                        <img src="{{ asset('assets/img/about-img/about5.jpg') }}" alt="Values Icon"
                            class="mx-auto mb-3 img-fluid">
                        <h5 class="card-title">Values</h5>
                        <p class="card-text">
                        Nous nous engageons à l'excellence, à l'intégrité et à l'impact positif dans chaque projet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="team-slider py-5  text-white">
        <div class="container">
            <h2 class="text-center mb-4 text-black">Notres Equipes</h2>
            <div id="teamCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Bloc 1 -->
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center">
                                <div class="team-card p-4">
                                    <img src="{{ asset('assets/img/about-img/about3.jpg') }}" alt="Developer 1"
                                        class="img-fluid rounded-circle mb-3">
                                    <h4>Michael Brown</h4>
                                    <p class="text-white">Backend Developer</p>
                                    <p>Michael est spécialisé dans Node.js, Express et MongoDB, créant des API
                                        performantes et scalables.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bloc 2 -->
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center">
                                <div class="team-card p-4">
                                    <img src="{{ asset('assets/img/about-img/about4.jpg') }}" alt="Developer 2"
                                        class="img-fluid rounded-circle mb-3">
                                    <h4>Emily White</h4>
                                    <p class="text-white">Frontend Developer</p>
                                    <p>Emily conçoit des interfaces modernes et interactives avec React, Vue.js et des
                                        frameworks CSS.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Bloc 3 -->
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center">
                                <div class="team-card p-4">
                                    <img src="{{ asset('assets/img/about-img/about5.jpg') }}" alt="Developer 3"
                                        class="img-fluid rounded-circle mb-3">
                                    <h4>Sarah Green</h4>
                                    <p class="text-white">AI Specialist</p>
                                    <p>Sarah mène des projets d'apprentissage automatique, travaillant sur les réseaux
                                        neuronaux et le NLP.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Répétez jusqu'à Bloc 10 -->
                </div>
                <!-- Contrôles du slider -->
                <button class="carousel-control-prev" type="button" data-bs-target="#teamCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#teamCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>


    <script src="{{asset('js/gsap.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{asset('assets/js/about.js')}}"></script>
  <?php include "partial/_footer.php"; ?>
</body>

</html>