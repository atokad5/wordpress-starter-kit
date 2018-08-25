<?php $root = get_template_directory_uri();?>

<section>
  <div class="inner section-pd">

    <div class="sec-content">
      <div class="content-stack">
        <div class="section-title">
          <h1><?php the_field('left_side_title', 'options') ;?></h1>
          <div class="content-stack">
            <?php the_field('right_side_content', 'options') ;?>
          </div>
        </div>
      </div>
    </div>

    <div class="two-col-w-image_copy">

      <div class="two-col_item">
        <div class="tall-img">
          <figure class="tall-stack hover-effect">
            <img class="lazy-image" data-lazy="<?php the_field('left_side_image', 'options');?>" src="" alt="">
          </figure>
        </div>
      </div>
      <div class="two-col_item">
        
        <div class="image-stack">
          <div class="short-stack-parent">
            <figure class="short-stack hover-effect">
              <img class="lazy-image" data-lazy="<?php the_field('right_side_image_one', 'options');?>" src="" alt="">
            </figure>
          </div>
          <div class="short-stack-parent">
            <figure class="short-stack hover-effect">
              <img class="lazy-image" data-lazy="<?php the_field('right_side_image_two', 'options');?>" src="" alt="">
            </figure>
          </div>
        </div>
      </div>
    
    </div>
  </div>
</section>