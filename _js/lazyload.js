export default function() {
  let bgImage = $('.is-bg');
  let lazyImg = $('.lazy-image');

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




  $(window).on('load', () => {
    snagBgImages(); 
    injectSrc();
  })
}