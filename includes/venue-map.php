<?php $root = get_template_directory_uri(); ?>

<section id="venue">
  <div class="inner">
    <div class="venue-parent">
      <div class="ticket-sign-m hide-dk-sign">
        <h2>VENUE</h2>
      </div>
      <div class="venue-item has-img-el push-right">
        <figure class="lg-img">
          <img class="lazy-image" data-lazy="<?php the_field('venue_image', 'options') ;?>" src="" alt="">
        </figure>
        <div class="venue-sign hide-mobile-sign">
          <h2>VENUE</h2>
        </div>
      </div>
      <div class="venue-item has-content-el is-right">
        <div class="hdr-small is-mobile-centered">
          <h2><?php the_field('venue_title', 'options') ;?></h2>
          <?php the_field('venue_content', 'options') ;?>
        </div>
      </div>
    </div>
  </div>
</section>