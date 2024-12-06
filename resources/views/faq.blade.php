<?php
$title = "FAQ";
include "partial/_head.php";
?>

<body class="container">

  <?php include "partial/_header.php" ?>
  <h1 class="faq-title">Foires Aux Questions</h1>
  <div class=" row p-5 cont-title-quest-ai my-5">
    <div class="">
      <h3 class=" h5">
        Qu’est-ce qu’AI-Magination ?</h3>
    </div>
    <div class="d-flex">
      <p>
        AI-Magination est une agence spécialisée dans l’automatisation et les solutions par intelligence artificielle.
        Nous aidons les entreprises à optimiser leurs processus, à exploiter leurs données, et à créer des outils
        innovants adaptés à leurs besoins.
      </p> <img src="{{asset('assets/icon/circle-xmark-regular.svg')}}" alt="" class="mx-3 ">
    </div>

  </div>
  <div class="faq-container">
    <div class="faq-item">
      <button class="faq-question">
        Quels types de services proposons-nous ? <span class="icon"> <img
            src="{{asset('assets/icon/chevron-down-solid.svg')}}" alt=""></span>
      </button>
      <p class="faq-answer">Nous offrons une gamme complète de services : <br>

        - Automatisation des tâches et gestion des données.<br>
        - Développement de solutions IA sur mesure.<br>
        - Création de contenu visuel et campagnes marketing via Irrealistik Studio.<br>
        - Assistants virtuels et chatbots pour un support client optimisé.
      </p>
    </div>
    <div class="faq-item">
      <button class="faq-question">
        Comment savoir si nos solutions conviennent à votre entreprise ? <span class="icon"> <img
            src="{{asset('assets/icon/chevron-down-solid.svg')}}" alt=""></span>
      </button>
      <p class="faq-answer">Nous proposons une analyse gratuite de vos besoins. Notre équipe d’experts évalue vos défis
        et vous propose des solutions adaptées à vos objectifs, que vous soyez une petite entreprise ou une grande
        structure.
      </p>
    </div>
    <div class="faq-item">
      <button class="faq-question">
        Nos solutions sont-elles sécurisées ? <span class="icon"> <img
            src="{{asset('assets/icon/chevron-down-solid.svg')}}" alt=""></span>
      </button>
      <p class="faq-answer">Absolument. La sécurité des données est une priorité pour nous. Nos systèmes respectent les
        normes de protection des données les plus strictes, et nous garantissons des solutions transparentes et
        responsables.
      </p>
    </div>
    <div class="faq-item">
      <button class="faq-question"> Combien de temps faut-il pour mettre en place une solution ? <span class="icon">
          <img src="{{asset('assets/icon/chevron-down-solid.svg')}}" alt=""></span>
      </button>
      <p class="faq-answer">Cela dépend de la complexité du projet. Pour des solutions standard, l’implémentation peut
        prendre quelques semaines. Pour des développements sur mesure, un calendrier détaillé est fourni après
        l’évaluation initiale.
      </p>
    </div>
    <div class="faq-item">
      <button class="faq-question"> Offrons-nous un support après l’implémentation ? <span class="icon"> <img
            src="{{asset('assets/icon/chevron-down-solid.svg')}}" alt=""></span>
      </button>
      <p class="faq-answer">Oui, nous accompagnons nos clients avec des formations complètes et un support continu pour
        garantir qu’ils tirent pleinement parti de leurs nouvelles solutions.
      </p>
    </div>
    <div class="faq-item">
      <button class="faq-question"> Nos services sont-ils adaptés aux petites entreprises ? <span class="icon"> <img
            src="{{asset('assets/icon/chevron-down-solid.svg')}}" alt=""></span>
      </button>
      <p class="faq-answer">Oui ! Nos solutions sont entièrement personnalisables, ce qui les rend accessibles et
        efficaces, peu importe la taille de votre entreprise.
      </p>
    </div>
    <div class="faq-item">
      <button class="faq-question">Puis-je demander une démonstration de vos outils ? <span class="icon"> <img
            src="{{asset('assets/icon/chevron-down-solid.svg')}}" alt=""></span>
      </button>
      <p class="faq-answer">Bien sûr ! Contactez-nous pour planifier une démonstration personnalisée. Nos experts vous
        présenteront comment nos solutions peuvent transformer vos processus.
      </p>
    </div>
    <div class="faq-item">
      <button class="faq-question">Quels secteurs d'activité servons-nous ? <span class="icon"> <img
            src="{{asset('assets/icon/chevron-down-solid.svg')}}" alt=""></span>
      </button>
      <p class="faq-answer">Nous travaillons avec divers secteurs, notamment : <br>

        - Commerce et e-commerce.<br>
        - Santé.<br>
        - Logistique.<br>
        - Éducation.<br>
        - Marketing et médias.
      </p>
    </div>
    <div class="faq-item">
      <button class="faq-question">Comment faire pour nous contacter ? <span class="icon"> <img
            src="{{asset('assets/icon/chevron-down-solid.svg')}}" alt=""></span>
      </button>
      <p class="faq-answer">
        Vous pouvez nous joindre via : <br>

        - E-mail : contact@ai-magination.com<br>
        - Téléphone : +33 (0)1 23 45 67 89<br>
        - Formulaire en ligne sur notre site web.
      </p>
    </div>

    <!-- Ajouter d'autres éléments de FAQ ici -->
  </div>

  <script src="{{asset('assets/js/faq.js')}}"></script>

  <?php include "partial/_footer.php"; ?>
</body>

</html>