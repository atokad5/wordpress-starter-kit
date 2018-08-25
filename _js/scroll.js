export default function() {
  ;(function($){ 
    let $header = $('header');
    let $counterBar = $('.countdown-bar');
    let $footerNav = $('.footer-nav-el');
    let $window = $(window);
    let didScroll = false;
    let $headerHeight = $header.outerHeight();
    let $windowOffset = $window.scrollTop();
    let $fakeNav = $('.fixed-nav');
    let $fakeA = $('fixed-nav a')
    let $readNav = $('nav');
    let $navHeight = $readNav.outerHeight();
    let $counterBarHeight = $counterBar.outerHeight();
    let $headerImg = $('#hdrImg');

    let calcHeight = () => {
      $headerHeight = $header.outerHeight();
      $navHeight = $readNav.outerHeight();
      $counterBarHeight = $counterBar.outerHeight();
    }
    

    let updateResize = () => {
      $headerHeight = $header.outerHeight();
      $navHeight = $readNav.outerHeight();
      $counterBarHeight = $counterBar.outerHeight();
    }

    let updateScrollState = () => {
      didScroll = true;
      $windowOffset = $window.scrollTop();
    }

    let revealNav = () => {
      if($windowOffset > $navHeight + $counterBarHeight) {
        $fakeNav.css({
          'transform': 'translate(-50%, 0%)'
        })
      } else {
        $fakeNav.css({
          'transform': ''
        })
      }
    }


    let scrollTicker = () => {
      if(didScroll) {
        revealNav();
        if($windowOffset < $headerHeight - $counterBar.outerHeight()) {
          $footerNav.css({
            'transform': 'translateY('+ 100 +'%)'
          })
        } else {
          $footerNav.css({
            'transform': 'translateY('+ 0 +'%)'
          })
        }

        didScroll = false;
      }
      requestAnimationFrame(scrollTicker);
    }




    requestAnimationFrame(scrollTicker)
    $window.on('scroll', updateScrollState);
    $window.on('resize', updateResize);
    $window.on('load', calcHeight)


    
  })(jQuery);
}