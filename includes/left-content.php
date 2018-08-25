<?php $root = get_template_directory_uri(); ?>

<section id="location">
  <div class="inner">
    <div class="venue-parent is-reversed is-paddingless">
    <div class="venue-item has-content-el push-right">
        <div class="hdr-small is-mobile-centered">
          <h2><?php the_field('section_title_', 'options') ;?></h2>
          <?php the_field('section_content', 'options') ;?>
        </div>
      </div>

      <div class="venue-item has-img-el">
        <figure class="lg-img">
          <img class="lazy-image" data-lazy="<?php the_field('section_image', 'options'); ?>" src="" alt="">
        </figure>
      </div>
      
    </div>
  </div>
</section>