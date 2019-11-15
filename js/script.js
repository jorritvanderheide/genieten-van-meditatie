(function($) {
    "use strict";
  
    //Close mobile menu on click
    $('.nav-link').click(function() {
      $('.navbar-collapse').collapse('hide');
    });
  
    //Collapse navbar on scroll
    var navbarCollapse = function() {
      if ($("#navbar").offset().top > 100) {
        $("#navbar").addClass("navbar-scrolled");
      } else {
        $("#navbar").removeClass("navbar-scrolled");
      }
    };

    //Collapse if page not at top
    navbarCollapse();

    // Collapse on scroll
    $(window).scroll(navbarCollapse);

    //Fade header text on scroll
    $(window).scroll(function(){
      $(".header-text").css("opacity", 1 - $(window).scrollTop() / 85);
    });
  
  })(jQuery);