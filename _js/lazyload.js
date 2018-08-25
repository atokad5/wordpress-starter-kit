export default function() {
  ;(function() {
    let bgImage = $('.is-el-bg');
    let lazyImg = $('.lazy-image');
    let galleryImg = $('.is-gallery-image');

    // Lazy load background images
    let snagBgImages = () => {
      bgImage.each( (i, img) => {
        let $t = $(img);
        let bgSrc = $t.attr('data-bg-src');
        let imger = new Image();
        $(imger).attr('src', bgSrc).on('load', () => {
          $t.addClass('ready').css({'background-image': 'url('+ bgSrc  + ')'})
          $t.parent().addClass('bg-is-set')
        })
      })
    }

    // Lazy load images 
    let injectSrc = () => {
      lazyImg.each( (i, img) => {
        let $t = $(img);
        let srcVal = $t.attr('data-lazy')
        $t.attr('src', srcVal)
        $t.on('load', () => $t.parent().addClass('is-loaded'))
      })
    }

    galleryImg.each( (i, img) => {
      let $t = $(img);
      let heightEl = $t.attr('data-height');
      let widthEl = $t.attr('data-width');
      $t.parent().css({
        'padding-bottom':  heightEl / widthEl * 100 +'%'
      })
  

    })



    $(window).on('load', () => {
      snagBgImages(); 
      injectSrc();
    })
  })(jQuery);
}