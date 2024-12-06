<?php

if (!function_exists('link_external_file')) {
    function link_external_file(string $link, $app_name)
    {
        // Accueil
        if ($link == $app_name) {
            return '
                <!-- personal style -->
                <link rel="stylesheet" href="assets/style/index.css">
                <!-- personal style -->
                <script src="assets/vendor/bootstrap-5.3.3/dist/js/bootstrap.js" defer></script>
            ';
        }

        // Portfolio
        if (explode(" ", $link)[0] == "Portfolio") {
            return '
                <!-- personal link -->
                <link rel="stylesheet" href="assets/style/portfolio.css">
                <!-- personal js -->
                <script src="assets/js/portfolio.js" defer></script>
            ';
        }

        // À propos
        if (explode(" ", $link)[0] == "À") {
            return '
                <!-- personal link -->
                <link rel="stylesheet" href="assets/style/portfolio.css">
                <!-- personal js -->
                <script src="assets/js/portfolio.js" defer></script>
            ';
        }
        
        // services
        if (explode(" ", $link)[0] == "Services") {
            return '
                <!-- personal link -->
                <link rel="stylesheet" href="assets/style/services.css">
                <!-- Ajouter Animate.css -->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
            ';
        }

        // contact
        if (explode(" ", $link)[0] == "contact") {
            return '
                <!-- personal link -->
                <link rel="stylesheet" href="assets/style/contact.css">
                <!-- personal js -->
                <script src="asset/js/jquery-3.7.1.min.js" defer></script> 
                <script src="asset/js/gsap.min.js" defer></script>
                <script src="asset/js/ScrollTrigger.min.js" defer></script>
                <script src="asset/js/splitting.min.js" defer></script>
                <script src="asset/assets/js/form.js" defer></script>
                <script src="asset/assets/js/contact-gsap.js" defer></script>
            ';
        }


        // faq
        if (explode(" ", $link)[0] == "FAQ") {
            return '
                <!-- personal link -->
                <link rel="stylesheet" href="assets/style/faq.css">
            ';
        }
    }
}

$app_name = "AI MAGINATION";

// Title
if ($title != "Accueil") {
    $title = $title . " | " . $app_name;
} else {
    $title = $app_name;
}


echo '
  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
    <title>' . $title . '</title>
    <!-- bootstrap -->
    <!-- page actuel = ' . $title . ' -->
    <link rel="stylesheet" href="assets/vendor/bootstrap-5.3.3/dist/css/bootstrap.css">'
    . link_external_file($title, $app_name) . '
    <!-- other link -->
    <link rel="stylesheet" href="assets/style/main.css">
    <!-- personal js -->
    <script src="assets/js/menu.js" defer></script>
  </head>';


