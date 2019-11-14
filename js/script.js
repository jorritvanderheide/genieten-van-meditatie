(function($) {
    "use strict";
  
    // Close mobile menu on click
    $('.nav-link').click(function() {
      $('.navbar-collapse').collapse('hide');
    });
  
    // Collapse navbar on scroll
    var navbarCollapse = function() {
      if ($("#navbar").offset().top > 100) {
        $("#navbar").addClass("navbar-scrolled");
      } else {
        $("#navbar").removeClass("navbar-scrolled");
      }
    };
    // Collapse if page not at top
    navbarCollapse();
    // Collapse on scroll
    $(window).scroll(navbarCollapse);
  
  })(jQuery); 