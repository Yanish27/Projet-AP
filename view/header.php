<?php
include 'inti.php';
if ($page == 'reservation') {
   $active_resa = 'class="active"';
   $active_index = '';
} else if ($page == 'index') {
   $active_index = 'class="active"';
   $active_resa = "";
}
?>
<!DOCTYPE html>
<html lang="FR">

<head>
   <title><?= getValueVariable("nom") ?></title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="<?= getValueVariable("description") ?>">
   <link rel="shortcut icon" href="assets/img/favicons/favicon.ico">
   <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/favicon-120.png">
   <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/favicon-152.png">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <link href="https://fonts.googleapis.com/css?family=Anton%7CHind:400,700%7CMontserrat:400,700" rel="stylesheet">
   <script src="http://maps.google.com/maps/api/js?key=AIzaSyDiZM3GShs8Nswi0zQO1Mz-arV_gwIMZZQ" type="text/javascript"></script>
   <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
   <link href="assets/vendor/animate/animate.css" rel="stylesheet">
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
   <link href="assets/font-icon/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
   <link href="assets/font-icon/ionicons/css/ionicons.min.css" rel="stylesheet">
   <link href="assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
   <link href="assets/vendor/slick/slick.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/mc-datepicker/dist/mc-calendar.min.css" rel="stylesheet" />

   <script src="https://cdn.jsdelivr.net/npm/mc-datepicker/dist/mc-calendar.min.js"></script>
   <style>
      #googleMap {
         width: 100%;
         height: 100%;
      }
   </style>
   <link href="assets/css/style.css" rel="stylesheet">
   <link href="assets/css/booked.css" rel="stylesheet">
   <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
   <div class="site-wrapper">
      <div id="js-preloader-overlay" class="preloader-overlay">
         <div id="js-preloader" class="preloader"></div>
      </div>
      <div class="site-overlay"></div>
      <header id="header" class="header">
         <div class="header__logo header__logo--img"><a href="index.php"><img src="assets/img/logo.png" srcset="assets/img/logo@2x.png 2x" alt="Logo <?= getValueVariable("acronyme") ?>"></a></div>
         <nav class="main-nav">
            <ul class="main-nav__list">
               <li <?= $active_index ?>><a href="index.php">Acceuil</a></li>
               <li><a href="index.php#nossalles">Nos salles</a></li>
               <li><a href="index.php#principe">Fonctionnement</a></li>
               <li><a href="index.php#avis">Avis</a></li>
               <li><a href="index.php#photos">Photos</a></li>
               <li><a href="index.php#contact">Contact</a></li>
               <li <?= $active_resa ?>><a href="reservation.php">Réservation</a></li>
            </ul>
         </nav>
         <a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span> <span class="burger-menu-icon__line"></span> <span class="burger-menu-icon__line"></span> </a>
      </header>