<div class="testimonial">
    <blockquote class="testimonial__txt"><?= $unAvis['value'] ?></blockquote>
    <div class="testimonial__meta">
        <h6 class="testimonial__author-name"><?= $unAvis['auteur'] ?> - <?php 
        $date = new DateTime($unAvis['date']);
        echo $date->format('d/m/Y');
        ?></h6>
    </div>
</div>