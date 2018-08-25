<?php $root = get_template_directory_uri();?>


<section id="tickets">
  <div class="inner">
      <div class="ticket-sign-m">
        <h2>TICKETS</h2>
      </div>
    <div class="ticket-parent">
      <?php 
       $ider = ['number3-48802458467','number4-48802458467'];
       
       $count = -1;
        $ticketOps = get_field('ticket_info', 'options');
        foreach($ticketOps as $theTick) {
          $count++;
      ;?>
      <div class="ticket-el">

        <div class="ticket-img-parent">
          <figure class="ticket-img">
            <img class="lazy-image" data-lazy="<?php echo $theTick['image']; ?>" src="" alt="">
          </figure>
          <div class="ticket-sign dk-sign">
            <h2>TICKETS</h2>
          </div>
          <div class="ticket-option">
            <div class="ticket-option-inner">
              <h2 class="ticket-title"><?php echo $theTick['title']; ?></h2>
              <div class="content-reveal" data-sleeve-height="280">
                <div class="content-true-self">
                  <?php echo $theTick['content']; ?>
                </div>
              </div>
              <span class="read-more">
                <span class="read-text">Read More </span>
                <span class="svg-container-x">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3.471 3.471">
                    <g id="Group_1" data-name="Group 1" transform="translate(-98 -85)">
                      <rect id="Rectangle_1" data-name="Rectangle 1" width="0.423" height="3.471" transform="translate(99.524 85)"/>
                      <rect id="Rectangle_2" data-name="Rectangle 2" width="0.423" height="3.471" transform="translate(101.471 86.524) rotate(90)"/>
                    </g>
                  </svg>
                </span>
              </span>
              <div class="buy-now-btn">
                <a id="<?php echo $ider[$count]; ?>"><?php echo $theTick['button_text']; ?></a>
              </div>
            </div>
          </div>
        </div>

      </div>
      <?php } ;?>

    </div>
  </div>
</section>