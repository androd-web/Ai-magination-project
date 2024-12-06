<?php
  $title = "contact";
  include "partial/_head.php";
?>

<body class="container">
  <?php include "partial/_header.php"; ?>

  <!-- section 1 -->
  <div class="row  d-flex flex-column">
    <div class="col">
      <h1 class="display-1 title-ai ff-medium-AI ">Contact us</h1>
    </div>
    <div class="col">
      <p class="line-Ai"></p>
    </div>
  </div>
  <div class="row w-100 d-flex justify-content-center row-cols-lg-3 row-cols-md-2 conte-ai  ">
    <div   class="col bloc1-ai">
      <img src="{{asset('assets/img/img-1-card.jpg')}}" class=" style-image-ai img rounded"></img>
      <div class="card-ai ">
        <h2 class="h3">Demande en ligne</h2>
        <p class="text-ai">Remplissez notre formulaire en ligne, et notre équipe vous répondra sous trois jours ouvrables. Ensemble, donnons vie à vos idées !</p>
        <a href="#loginForm" class="button3D">
          <span class="front">Envoyez-nous</span>
          <span class="center"></span>
          <span class="back">un message</span>
        </a> 
      </div>
    </div>
    <div  class="col  bloc1-ai">
      <img src="{{asset('assets/img/img-2-card.jpg')}}" class=" style-image-ai img rounded">
      </img>
      <div class="card-ai">
        <h2 class="h3"> Appelez-nous</h2>
        <p class="text-ai">+33 (0)1 23 45 67 89</p>
        <p class="text-ai"> Contactez directement nos experts du lundi au vendredi, de 9h à 18h. Nous sommes là pour vous guider dans chaque étape.</p>
      </div>

    </div>
    <div class="col bloc1-ai">
      <img src="{{asset('assets/img/img-3-carde.jpg')}}" class=" style-image-ai img rounded"></img>
      <div class="card-ai">
        <h2 class="h3">Écrivez-nous</h2>
        <p class="text-ai">Adressez-nous vos questions ou projets via notre e-mail. Nous répondrons avec des solutions adaptées à vos besoins.</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col con_title">
      <h2 data-splitting="" class="display-4  my-5 title-bloc2-ai ff-light-AI">
      Autres demandes</h2>
    </div>
  </div>
  <div class="row d-flex justify-content-center flex-wrap  row-cols-lg-3 row-cols-md-2 row-cols-sm-1 cont_ai_blocs ">
    <div class="col col-4 p-3 m-3 bolc-svg-ai">
      <div class="">
        <div class=" m-3 svg-ai d-flex justify-content-center align-items-center">
          <img src="{{asset('assets/icon/brain-solid.svg')}}" alt="">
        </div>
        <div class=" ">
          <h2 class=" h4">Demande de consultation d'innovation</h2>
          <p class=""> Vous avez une idée révolutionnaire ? Notre équipe se fera un plaisir de vous aider à développer et concrétiser votre vision.</p>
          <a href="#loginForm" class="text-decoration-none fw-bold cl-text-ai">Faire une demande d’innovation &rsaquo;
          </a>
        </div>
      </div>
    </div>
    <div class="col col-4 p-3 m-3 bolc-svg-ai  ">
      <div class="">
        <div class=" m-3 svg-ai d-flex justify-content-center align-items-center">
          <img src="{{asset('assets/icon/gear-solid.svg')}}" alt="">
        </div>
        <div class="  ">
          <h2 class=" h4">Assistance technique</h2>
          <p class=" "> Rencontrez-vous un problème avec nos outils ? Contactez notre service technique, prêt à résoudre vos défis technologiques rapidement.</p>
          <a href="{{url('/portfolio')}}" class="text-decoration-none fw-bold cl-text-ai">Obtenir de l’aide technique &rsaquo;</a>
        </div>
      </div>
    </div>
    <div class="col col-4 p-3 m-3 bolc-svg-ai  ">
      <div class="">
        <div class=" m-3 svg-ai d-flex justify-content-center align-items-center">
          <img src="{{asset('assets/icon/scale-balanced-solid.svg')}}" alt="">
        </div>
        <div class="  ">
          <h2 class=" h4">Déposer une plainte</h2>
          <p class=" ">Vous n’êtes pas satisfait d’un service ou d’un produit ? Faites-nous part de vos retours pour améliorer votre expérience.</p>
          <a href="#loginForm" class="text-decoration-none fw-bold cl-text-ai">Déposer une plainte &rsaquo;</a>
        </div>
      </div>
    </div>
    <div class="col col-4 p-3 m-3 bolc-svg-ai ">
      <div class="">
        <div class=" m-3 svg-ai d-flex justify-content-center align-items-center">
          <img src="{{asset('assets/icon/microphone-lines-solid.svg')}}" alt="">
        </div>
        <div class="  ">
          <h2 class="h4"> Demande médiatique</h2>
          <p class=" ">Journalistes et médias ? Nous sommes disponibles pour répondre à toutes vos demandes d'informations ou de collaborations.</p>
          <a href="#" class="text-decoration-none fw-bold cl-text-ai">Faire une demande média &rsaquo; </a>
        </div>
      </div>
    </div>
    <div class="col col-4 p-3 m-3 bolc-svg-ai ">
      <div class="">
        <div class=" m-3 svg-ai d-flex justify-content-center align-items-center">
          <img src="{{asset('assets/icon/file-pen-solid.svg')}}" alt="">
        </div>
        <div class="   ">
          <h2 class="h4 ">Plus d'information</h2>
          <p class=" ">  Vous avez des questions supplémentaires sur nos services, nos offres ou notre processus ? N'hésitez pas à nous contacter pour obtenir des réponses détaillées. </p>
          <a href="{{url('/services')}}" class="text-decoration-none fw-bold cl-text-ai"> Plus d'infos sur nos services &rsaquo;
            </a>
        </div>
      </div>
    </div>
    <div class="col col-4 p-3 m-3 bolc-svg-ai  ">
      <div class="">
        <div class=" m-3 svg-ai d-flex justify-content-center align-items-center">
          <img src="{{asset(path: 'assets/icon/location-dot-solid.svg')}}" alt="">
        </div>
        <div class="  ">
          <h2 class="h4">Trouvez nos agences locales</h2>
          <p class=" ">Localisez les agences AI-Magination dans votre région pour une assistance personnalisée.
          </p>
          <a href="{{url('/about')}}" class="text-decoration-none fw-bold  cl-text-ai">Trouver une agence &rsaquo;
          </a>

        </div>
      </div>
    </div>
  </div>

  <div class="row text-center container-ai-bg my-5 d-flex justify-content-center align-items-center flex-column bloc-img-bg-ai  ">
    <div class=" col">
      <h3 class=" display-6 text-center text-dark fz-ai ">Votre opinion compte pour nous</h3>
    </div>
    <div class="col text-center">
      <p class="text-center p-ai ">Partagez vos retours ou posez vos questions. Chez AI-Magination, chaque avis nous aide à repousser les limites de l'innovation.</p>
      <a href="#loginForm" class="button3D" style="translate: -60% 0">
          <span class="front">Envoyez-nous</span>
          <span class="center"></span>
          <span class="back">un message</span>
        </a> 
    </div>
  </div>
 
  <!-- start formulaire -->
  <div class="row">
    <div class="col login-container d-flex justify-content-center  align-items-center container-form ">
      <div class="illustration text-center">
        <h3>Bienvenue chez</h3>
        <img src="assets/img/logo-complet.png" alt="Illustration" class="img-fluid">
      </div>

      <form id="loginForm" method="POST" action="" class="my-3 form-ai">
        @csrf
        <div class="mb-3 custom-input ">
          <input type="email" id="email" name="email" class="form-control" placeholder="Email" autocomplete="off">
          <span id="emailError" style="color: red; display: none;" class="error">Veuillez entrer un email</span>
        </div>
        <div class="mb-3 custom-input ">
          <input type="text" id="pseudo" name="pseudo" class="form-control" placeholder="Pseudo" autocomplete="off">
          <span id="pseudoError" style="color: red; display: none;" class="error">Veuillez entrer un pseudo</span>
        </div>
        <div class="custom-input  mb-3">
          <textarea name="message" id="message" class="form-control textArea-ai-h w-100" placeholder="Message Pour AI-MAGINATION"
            autocomplete="off"></textarea>
        </div>
        <button type="submit" class="btn bg-red-AI btn-lg text-white btn-primary">Envoyer </button>
        {{-- <p class="text-center  create-account mt-3">Don't have an account? 
          <a href="{{url("/register")}}" class="text-danger text-decoration-none">Create an account</a>
        </p> 
        <span id="mValid">Votre message a été envoyé avec succès </span> --}}
      </form>

    </div>
  </div>


  @if(session('success'))
    <p>{{ session('success') }}</p>
  @endif
  <!-- end formulaire -->
 
  <!-- end of section 2 | about us -->

  <?php include "partial/_footer.php"; ?>

</body>

</html>