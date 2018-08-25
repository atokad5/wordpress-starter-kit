<?php $root = get_template_directory_uri(); ?>

<section class="location">
  <div class="inner">
    <div class="location-tile-parent">
      <div>
        <?php
         $im = get_field('images', 'options');
         foreach($im as $img) {  ;?>
          <div class="location-tile">
            <figure class="location-tile-img-parent">
              <img class="lazy-image" data-lazy="<?php echo $img['url']; ?>" src="" alt="">
            </figure>
          </div>
         <?php } ;?>
      </div>
    </div>
  </div>
</section>