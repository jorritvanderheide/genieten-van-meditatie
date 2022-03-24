//Collapse navbar on scroll
var navbarCollapse = function () {
  var element = document.getElementById("navbar");
  if (
    window.pageYOffset >
    document.getElementById("page-top").offsetHeight - (window.innerWidth / 40 + window.pageYOffset / 3.5)
  ) {
    element.classList.add("navbar-scrolled");
  } else {
    element.classList.remove("navbar-scrolled");
  }
};

//Collapse if page not at top
navbarCollapse();

//Collapse on scroll
window.onscroll = function () {
  navbarCollapse();
};

// reCAPTCHA
function onSubmit(token) {
  document.getElementById("newsletter").submit();
}

function onSubmitContact(token) {
  document.getElementById("contact-form").submit();
}
