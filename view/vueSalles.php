<div class="room" data-aos="fade-up" data-aos-duration="800">
    <div class="room__body box">
        <header class="room__header">
            <div class="room__complexity rating-icons">
                <div class="rating-icons__placeholder"><i class="ion-locked"></i><i class="ion-locked"></i><i class="ion-locked"></i><i class="ion-locked"></i><i class="ion-locked"></i></div>
                <div class="rating-icons__active"><?php 
                    for ($i=0; $i < $UneSalle['difficulte']; $i++) { 
                      ?><i class="ion-locked"></i><?php
                    }
                 ?>
                </div>
            </div>
            <h2 class="room__title"><a href="#"><?= $UneSalle['NomSalle'] ?></a></h2>
            <div class="room__meta">
                <div class="room__meta-item"><i class="ion-person-stalker"></i>Idéal pour <?= $UneSalle['NbJoueurMax'] ?> joueurs</div>
            </div>
        </header>
        <div class="room__excerpt">
            <p><?= $UneSalle['DescriptionPresentation'] ?></p>
        </div>
       <?php /* <footer class="room__footer"><a href="#" class="btn btn-primary">Réserver</a></footer> */ ?>
    </div>
    <figure class="room__img"><a href="#"><img src="assets/images_pres/salles/<?= $UneSalle['ImagePresentation'] ?>" alt=""></a></figure>
</div>