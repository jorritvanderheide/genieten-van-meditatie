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

function displayMenu() {
  if (document.getElementById("mobilenav").classList.contains("collapse")) {
    document.getElementById("mobilenav").classList.remove("collapse");
  } else {
    document.getElementById("mobilenav").classList.add("collapse");
  }
}

// reCAPTCHA
function onSubmit(token) {
  if (document.getElementById("newsletter-email").value.length == 0) {
    alert("Fill in your e-mail address first");
    window.location.reload();
  } else {
    document.getElementById("newsletter").submit();
  }
}

function onSubmitContact(token) {
  if (
    document.getElementById("contact-form-email").value.length == 0 ||
    document.getElementById("contact-form-phone").value.length == 0 ||
    document.getElementById("contact-form-message").value.length == 0
  ) {
    alert("First, fill all the fields in the form");
    window.location.reload();
  } else {
    document.getElementById("contact-form").submit();
  }
}
