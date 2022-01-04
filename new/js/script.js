(function($) {
  "use strict";

  //Close mobile menu on click
  $(".nav-link").click(function() {
    $(".navbar-collapse").collapse("hide");
  });

  //Collapse navbar on scroll
  var navbarCollapse = function() {
    if (
      $(".mainNav").offset().top >
      $(".header").outerHeight() -
        // $(".mainNav").outerHeight() -
        ($(window).width() / 40 + $(window).scrollTop() / 3.5)
    ) {
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
  $(window).scroll(function() {
    var x = window.matchMedia("(max-width: 1200 px)");

    if (x.matches) {
      $(".header").css(
        "margin-top",
        -5.5 - $(window).scrollTop() / 50 + "%"
      );
      $(".headerrow").css("opacity", 1 - $(window).scrollTop() / 400);
    } else {
      $(".header").css(
        "margin-top",
        -2.5 - $(window).scrollTop() / 50 + "%"
      );
      $(".headerrow").css("opacity", 1 - $(window).scrollTop() / 150);
    }
  });
})(jQuery);
