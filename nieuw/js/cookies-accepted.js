console.log("cookies accepted");

document.getElementById("submit").disabled = false;
if (document.getElementById("submit-contact")) {
  document.getElementById("submit-contact").disabled = false;
}

// reCAPTCHA
function onSubmit(token) {
  if (document.getElementById("newsletter-email").value.length == 0) {
    alert("Vul eerst uw email adres in");
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
    alert("Vul eerst alle velden in");
    window.location.reload();
  } else {
    document.getElementById("contact-form").submit();
  }
}
