export default function() {
  ;(function($){
    let $navLi = $('.nav-li li');
    let $footerNav = $('.footer-li');
    let $fkNav = $('.fk-ul');
    let $fkBtn = $('.close-fk-nv');
    let $cloneNavOne = $navLi.clone();
    let $nav = $('.slide_link');
    let $fixedNav = $('.fixed-nav');
    let $lineup = $('.lineup_link');

    const showLineup = () => $('body').toggleClass('lineup-showing')

    $lineup.on('click', showLineup)

  

    let triggerFk = () => {
      $('body').toggleClass('nav-is-open')
    }

    let slideSiteDos = e => {
      e.preventDefault();
      let $t = $(e.currentTarget);
      let $minusHeight = $fixedNav.outerHeight();
      $('html,body').animate({
        'scrollTop': $($t.attr('href')).offset().top - $minusHeight
      }, 1000)
    }

    $fkBtn.on('click', triggerFk)
    $nav.on('click', e => slideSiteDos(e) )


  })(jQuery);
}