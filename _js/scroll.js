export default function() {
  ;(function($){ 
    let $window = $(window);
    let didScroll = false;




    let updateScrollState = () => {
      didScroll = true;
      $windowOffset = $window.scrollTop();
    }




    let scrollTicker = () => {
      if(didScroll) {


        didScroll = false;
      }
      requestAnimationFrame(scrollTicker);
    }


    
    requestAnimationFrame(scrollTicker)
    $window.on('scroll', updateScrollState);
  })(jQuery);
}