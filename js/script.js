(function ($) {
  "use strict";

  //Close mobile menu on click
  $('.nav-link').click(function () {
    $('.navbar-collapse').collapse('hide');
  });

  //Collapse navbar on scroll
  var navbarCollapse = function () {
    if ($(".mainNav").offset().top > ($(".header").outerHeight() ) - ($(".mainNav").outerHeight() )) {
      $(".mainNav").addClass("navbar-scrolled");
    } else {
      $(".mainNav").removeClass("navbar-scrolled");
    }
  };

  //Collapse if page not at top
  navbarCollapse();

  //Collapse on scroll
  $(window).scroll(navbarCollapse);

  //Fade header text on scroll
  $(window).scroll(function () {
    $(".header-text").css("opacity", 1 - $(window).scrollTop() / 200);
    $(".header-text").css("padding-bottom", (20 - $(window).scrollTop() / 10) + "%");
  });
  
  //Scroll to top?

  //Swipe navigation?

})(jQuery);