$(document).ready(function() {
  /* ########## SLIDER ############## */
  $(function() {
    var newBg = ['wp-content/themes/movein3site/img/slider1.jpg',
                 'wp-content/themes/movein3site/img/slider2.jpg',
                 'wp-content/themes/movein3site/img/slider3.jpg'];

    var i = -1;

    var rotateBg = setInterval(function() {
      i++;

      if (i == newBg.length) {
        i = 0;
      }

      $('#slider').css({backgroundImage: 'url(' + newBg[i] + ')'});

    }, 5000);
  });


  /* ######### BARRAS MENUS ########### */
  $(window).scroll(function() {
    if ($(window).scrollTop() >= 478) {
      $('header').css({ display:'block' });
    } else {
      $('header').css({ display:'none' });
    }
  });

  /* ######## EFEITO SCROLL ######### */

  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') &&
          location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 2000);
          
          return false;
        }
      }

      return false;
    });
  });
});
