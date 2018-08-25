export default function() {
  ;(function($){
    let $contentParent = $('.content-reveal');
    let $contentTrue = $('.content-true-self');
    let $triggerContent = $('.read-more');
    let $countDown = $('.countdown');
    let $infoParent = $('.info-parent');
    let $headerEl = $('header');
    let $countEl = $('.countdown-bar');
    // let $window = $('window');
    
    function setHdrPadding() {
      if(767 > $(window).width()) {
        $headerEl.css({
          'padding-top': $countEl.outerHeight()
        })
      } else {
        $headerEl.css({
          'padding-top': ''
        })
      }
    }
    setHdrPadding();
    $(window).on('resize', function() {
      setHdrPadding();
    })

 
   
    function setInitialHeight() {
      $contentParent.each(function(){
        let $t = $(this);
        let $fakeHeight = $t.attr('data-sleeve-height');
        $t.height($fakeHeight);
      })
    }

    $('.ticket-sign').eq(1).hide();

    function revealContent () {
      let $t = $(this);
      let $contentRev = $t.siblings('.content-reveal');
      
      if(!$t.hasClass('is-active')) {
        $contentRev.animate({
          height: '100%'
        }, 200)
        $t.addClass('is-active');
        $t.siblings('.content-reveal').addClass('is-active');
      } else {
        $contentRev.animate({
          height: $contentRev.attr('data-sleeve-height')
        }, 200)
        $t.removeClass('is-active');
        $t.siblings('.content-reveal').removeClass('is-active');
      }
    }

    $countDown.countdown($countDown.attr('data-countdown'), function(event) {
    $(this).html(
      event.strftime(`
        <div class="time-el">
          <span class="time">%D</span>
          <span class="type">Days</span>
        </div>
        <div class="time-el">
          <span class="time">%H</span>
          <span class="type">Hours</span>
        </div>
        <div class="time-el">
          <span class="time">%M</span>
          <span class="type">Mins</span>
        </div>
        
      `)
    );
  });


    function showFaq() {
      let $t = $(this);
      if($t.hasClass('is-active')) {
        $t.find('.the-answer').slideUp(100);
        $t.removeClass('is-active');
        return;
      } else {
        $infoParent.find('.the-answer').slideUp(100);
        $infoParent.removeClass('is-active');
        $t.find('.the-answer').slideDown(100);
        $t.addClass('is-active');

      } 
    }


    $infoParent.on('click', showFaq)
    $triggerContent.on('click', revealContent)
    setInitialHeight();

    $(window).on('load', function() {
      $('body').addClass('is-loaded')
    })

    $('.mt-modal').on('click', function() {
      $('body').toggleClass('showing-modal')
    })





    


  })(jQuery)
}