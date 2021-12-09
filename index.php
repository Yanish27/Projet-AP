<?php 
$page = "index";
require 'view/header.php'; 
?>
      <div class="main-slider-wrapper">
         <div class="main-slider js-main-slider">
            <div class="main-slider__item main-slider__item--img-1"> <?php // .room-slider__item--img-1  style.css:7407 
                                                                     ?>
               <div class="main-slider__layer main-slider__item-content">
                  <h1 class="main-slider__item-title"><span data-animation="fadeInUp" data-delay="0.1s"><?= getValueVariable("tailletotale") ?> m²,</span> <span data-animation="fadeInUp" data-delay="0.3s">
                        <?= getValueVariable("nbsalles") ?> salles</span></h1>
               </div>
            </div>
         </div>
      </div>
      <main class="site-content">
         <div class="section-content">
            <div class="container">
               <div class="section-heading section-heading--divider-top" id="nossalles">
                  <h2 class="section-heading__title" data-aos="fade" data-aos-duration="600">Nos salles</h2>
               </div>
               <div class="row">
                  <div class="col-md-10 ml-md-auto mr-md-auto">
                     <div class="rooms rooms--list">
                        <?= getSallesPresentation(); ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-content section-content--secondary" id="principe">
            <div class="container">
               <div class="section-heading section-heading--divider-top">
                  <h2 class="section-heading__title" data-aos="fade" data-aos-duration="600">Comment fonctionne un escape game ?</h2>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="icobox" data-aos="fade-up" data-aos-duration="800">
                        <div class="icobox__icon-wrapper">
                           <div class="icobox__icon"><i class="icon-lock"></i></div>
                        </div>
                        <h3 class="icobox__title"><?= getValueVariable("Titre1") ?> </h3>
                        <div class="icobox__desc"><?= getValueVariable("Desc1") ?> </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="icobox" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <div class="icobox__icon-wrapper">
                           <div class="icobox__icon"><i class="icon-clock"></i></div>
                        </div>
                        <h3 class="icobox__title"><?= getValueVariable("Titre2") ?> </h3>
                        <div class="icobox__desc"><?= getValueVariable("Desc2") ?> </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="icobox" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                        <div class="icobox__icon-wrapper">
                           <div class="icobox__icon"><i class="ion-ios-pulse-strong"></i></div>
                        </div>
                        <h3 class="icobox__title"><?= getValueVariable("Titre3") ?> </h3>
                        <div class="icobox__desc"><?= getValueVariable("Desc3") ?> </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-content section-content--tertiary" id="avis">
            <div class="container">
               <div class="section-heading section-heading--divider-top">
                  <h2 class="section-heading__title" data-aos="fade" data-aos-duration="600">Avis des clients</h2>
               </div>
               <div class="testimonials js-testimonials-slick slick--arrows-modern" data-aos="fade-up" data-aos-duration="800">
                  <?php getAvisTexte(); ?>
               </div>
            </div>
         </div>
         <div class="section-content">
            <div class="container">
               <div class="section-heading section-heading--divider-top" id="photos">
                  <h2 class="section-heading__title" data-aos="fade" data-aos-duration="600">Quelques photos de nos clients..</h2>
               </div>
               <div class="post-grid row">
                  <?php getAvisImage(); ?>
               </div>
            </div>
         </div>
         <div class="section-content section-content--secondary section-content--gradient-overlay-left section-content--bg1 jarallax" data-jarallax data-speed="0.6">
            <div class="container">
               <div class="row">
                  <h4 class="side-title rotated-text col-md-1"><span class="rotated-text__inner">Pourquoi venir ?</span></h4>
                  <div class="col-md-6">
                     <ul class="features-list list-unstyled">
                        <li class="features-list__item">
                           <div class="features-list__icon" data-aos="zoom-in" data-aos-duration="800"><i class="ion-ios-people-outline"></i></div>
                           <h5 class="features-list__title" data-aos="fade-left" data-aos-duration="800">Entre amis ou en famille</h5>
                        </li>
                        <li class="features-list__item">
                           <div class="features-list__icon" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100"><i class="ion-ios-briefcase-outline"></i></div>
                           <h5 class="features-list__title" data-aos="fade-left" data-aos-duration="800" data-aos-delay="100">Entre collaborateurs</h5>
                        </li>
                        <li class="features-list__item">
                           <div class="features-list__icon" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="200"><i class="ion-ios-game-controller-b-outline"></i></div>
                           <h5 class="features-list__title" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">Passionnés de jeux</h5>
                        </li>
                        <li class="features-list__item">
                           <div class="features-list__icon" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="300"><i class="ion-plane"></i></div>
                           <h5 class="features-list__title" data-aos="fade-left" data-aos-duration="800" data-aos-delay="300">Tourisme</h5>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-content section-content--no-padding section-content--secondary" id="contact">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 col--no-padding">
                     <script>
                        var x = new google.maps.LatLng(46.111625, 6.5588649);
                        function initialize() {
                           var data = {
                              "type": "FeatureCollection",
                              "features": [{
                                 "type": "Feature",
                                 "properties": {
                                    "id": 44,
                                    "status": "old",
                                    "name": "Mishmi Hills",
                                    "countryName": "India",
                                    "description": "",
                                    "mdp_id": 1351
                                 },
                                 "geometry": {
                                    "type": "MultiPoint",
                                    "coordinates": [
                                       [6.129384, 45.899247],
                                       [6.8590568, 45.9295685],
                                       [6.5823334, 46.3910943],
                                       [6.3689357, 46.078596]
                                    ]
                                 }
                              }]
                           }
                           var mapProp = {
                              center: x,
                              zoom: 10
                           };
                           var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                           map.data.addGeoJson(data);
                        }
                        google.maps.event.addDomListener(window, 'load', initialize);
                     </script>
                     <div id="googleMap"></div>
                  </div>
                  <div class="col-md-6">
                     <div class="section-content__inner">
                        <div class="section-heading section-heading--divider-top section-heading--left">
                           <h2 class="section-heading__title" data-aos="fade" data-aos-duration="600">Contactez-nous</h2>
                        </div>
                        <form action="#" id="contact-form">
                           <div class="form-group form-group--lg"><input type="text" class="form-control" id="contact-name" placeholder="Votre nom"></div>
                           <div class="form-group form-group--lg"><input type="email" class="form-control" id="contact-email" placeholder="Votre adresse e-mail"></div>
                           <div class="form-group form-group--lg"><textarea id="contact-message" class="form-control" rows="4" placeholder="Votre message"></textarea></div>
                           <input type="button" class="btn btn-outline-secondary btn-lg" value="Envoyer le message">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="section-content section-content--tertiary">
            <div class="container">
               <div class="section-heading section-heading--mb-sm section-heading--divider-top">
                  <h2 class="section-heading__title" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">Prêt à relever le défi ?</h2>
                  <div class="section-heading__subtitle section-heading__subtitle--default" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">Nos salles d'escape games n'attendent que vous !:</div>
               </div>
               <div class="text-center" data-aos="fade-up" data-aos-duration="600" data-aos-delay="400"><a href="#" class="btn btn-primary btn-lg">Réservez dès maintenant !</a></div>
            </div>
         </div>
      </main>
      <?php include('view/footer.php'); ?>