// Set font size
$(window)
  .on("resize", function () {
    // Set font size variables
    minWidth = 0;
    maxWidth = 424;
    minFontSize = 1.0;
    maxFontSize = 1.1;

    if (window.matchMedia("(min-width: 425px)").matches) {
      minWidth = 425;
      maxWidth = 767;
      minFontSize = 1.1;
      maxFontSize = 1.2;
    }
    if (window.matchMedia("(min-width: 768px)").matches) {
      minWidth = 768;
      maxWidth = 1023;
      minFontSize = 1.2;
      maxFontSize = 1.3;
    }
    if (window.matchMedia("(min-width: 1024px)").matches) {
      minWidth = 1024;
      maxWidth = 1919;
      minFontSize = 1.3;
      maxFontSize = 1.4;
    }
    if (window.matchMedia("(min-width: 1920px)").matches) {
      minWidth = 1920;
      maxWidth = 2560;
      minFontSize = 1.4;
      maxFontSize = 1.75;
    }

    // Calc and set font size clamp
    fontSize = clampBuilder(minWidth, maxWidth, minFontSize, maxFontSize);
    $("body").css("font-size", fontSize);
  })
  .resize();

// Takes the viewport widths in pixels and the font sizes in rem
function clampBuilder(minWidthPx, maxWidthPx, minFontSize, maxFontSize) {
  const root = document.querySelector("html");
  const pixelsPerRem = Number(getComputedStyle(root).fontSize.slice(0, -2));

  const minWidth = minWidthPx / pixelsPerRem;
  const maxWidth = maxWidthPx / pixelsPerRem;

  const slope = (maxFontSize - minFontSize) / (maxWidth - minWidth);
  const yAxisIntersection = -minWidth * slope + minFontSize;

  return `clamp( ${minFontSize}rem, ${yAxisIntersection}rem + ${slope * 100}vw, ${maxFontSize}rem )`;
}

(function ($) {
  "use strict";

  //Close mobile menu on click
  $(".nav-link").click(function () {
    $(".navbar-collapse").collapse("hide");
  });

  //Collapse navbar on scroll
  var navbarCollapse = function () {
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
  $(window).scroll(function () {
    var x = window.matchMedia("(max-width: 1200 px)");

    if (x.matches) {
      $(".header").css("margin-top", -5.5 - $(window).scrollTop() / 50 + "%");
      $(".headerrow").css("opacity", 1 - $(window).scrollTop() / 400);
    } else {
      $(".header").css("margin-top", -2.5 - $(window).scrollTop() / 50 + "%");
      $(".headerrow").css("opacity", 1 - $(window).scrollTop() / 150);
    }
  });
})(jQuery);