<?php

$userName = $_POST['name'];
$userEmail = $_POST['email'];
$recaptcha_response = $_POST['token'];

$to = 'masuwasani@yahoo.com';
$subject = 'Nieuwsbrief aanmelding';
$body = 'Het volgende emailadres wil zich aanmelden voor de nieuwsbrief:';
$message = 'Bedankt voor je aanmelding!';
$messageContent = "Je bent nu succesvol ingeschreven voor de Genieten van Meditatie nieuwsbrief.\r\n\r\nWarme groet,\r\n\r\nModita van Zummeren";

$body .= "\r\nNaam: " . $userName;
$body .= "\r\nEmail: " . $userEmail;

$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_secret = '6LfT-8ghAAAAAGZhcVPOeu1QnOXklvgacMfQnUIA';
$recaptcha_data = [
  'secret' => $recaptcha_secret,
  'response' => $recaptcha_response,
];

$options = [
  'http' => [
    'header' => 'Content-type: application/x-www-form-urlencoded',
    'method' => 'POST',
    'content' => http_build_query($recaptcha_data),
  ],
];

$context = stream_context_create($options);
$recaptcha_result = file_get_contents($recaptcha_url, false, $context);
$recaptcha_decoded = json_decode($recaptcha_result);


if ($recaptcha_decoded->success == 1 and $recaptcha_decoded->score >= 0.5 and $recaptcha_decoded->action == "validate_captcha") {
  mail($to, $subject, $body);
  mail($subject, $message, $messageContent);
}

?>

<!DOCTYPE html>
<html lang="nl" prefix="og: https://ogp.me/ns#">

<head>
  <!-- Required <meta> tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Additional <meta> tags -->
  <meta name="theme-color" content="#F2C063" />
  <meta name="apple-mobile-web-app-status-bar-style" content="#F2C063" />

  <!-- SEO tags -->
  <title>Genieten van Meditatie | Contact</title>
  <meta name="description"
    content="Osho meditaties, familie opstellingen, coaching bij depressie en eetproblemen & Japanse gezichtsmassage" />

  <!-- OG tags -->
  <meta property="og:title" content="Meditatie, Familie Opstellingen en Coaching" />
  <meta property="og:description"
    content="Osho meditaties, familie opstellingen, coaching bij depressie en eetproblemen & Japanse gezichtsmassage" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://www.genietenvanmeditatie.nl" />
  <meta property="og:image" content="http://www.genietenvanmeditatie.nl/img/thumbnail.webp" />

  <!-- Favicon -->
  <link href="../img/favicon-16x16.webp" rel="icon" type="image/webp" sizes="16x16" />
  <link href="../img/favicon-32x32.webp" rel="icon" type="image/webp" sizes="32x32" />

  <!-- Font tags -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Average&family=Courgette&family=Epilogue:wght@400;700&display=swap"
    rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet" />

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    crossorigin="anonymous" />

  <!-- CSS tags -->
  <link href="../css/style.css" rel="stylesheet" />

  <!-- reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-xl navbar-light fixed-top mainNav" id="navbar">
    <div class="container2 container">
      <a class="navbar-brand row" href="../index.html">
        <i id="logo" class="fas fa-fire"></i>
        <span>Genieten van Meditatie</span>
      </a>
      <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#mobilenav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mobilenav">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="../wat_ik_aanbied.html">Wat ik aanbied</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../over_mij.html">Over mij</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../agenda.html">Agenda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link accent" href="../contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <div id="page-top" class="header">
    <div class="overlay">
      <div class="container">
        <div class="row headerrow altrow"></div>
      </div>
    </div>
  </div>

  <div class="section-wrapper">
    <section>
      <h1>Je bent aangemeld voor de nieuwsbrief!</h1>
      <p>Dank je voor je aanmelding, je ontvangt vanaf nu elke week mijn nieuwsbrief in je mailbox!</p>
      <p>Als ik je aanmelding succesvol ontvangen heb krijg je binnen een paar uur een bevestiging.<br>
        Heb je geen bevestiging ontvangen? Neem dan contact met me op via info@genietenvanmeditatie.nl</p>
    </section>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="section-wrapper">
        <section>
          <h2 class="text-center">Genieten van Meditatie</h2>
          <div class="row justify-content-center social-buttons">
            <a href="https://www.facebook.com/JoyInMeditation" target="_blank" rel="noreferrer"><i
                class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/modita_van_zummeren" target="_blank" rel="noreferrer"><i
                class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCbWDayN5UurkX3V-xmEcH7Q" target="_blank" rel="noreferrer"><i
                class="fab fa-youtube"></i></a>
            <a href="https://www.linkedin.com/in/modita-van-zummeren-a5b51699" target="_blank" rel="noreferrer"><i
                class="fab fa-linkedin-in"></i></a>
          </div>
          <div class="row">
            <hr />
            <div class="osholink">
              <a href="https://www.osho.com/copyrights" target="_blank">
                <p>Osho text excerpts, Osho images, artwork, videos, audios and other copyrighted content with
                  permission of © Osho International Foundation, www.osho.com/copyrights<br /></p>
              </a>
              <a href="https://www.osho.com/trademarks" target="_blank">
                <p>OSHO is a registered trademark of Osho International Foundation, used with permission,
                  www.osho.com/trademarks</p>
              </a>
            </div>
          </div>
          <p class="text-center" style="margin-top: 1em; font-size: 0.65em">
            &copy; 2022 Joy in Meditation | <span><a href="../avg.html" style="color: #222">Privacybeleid</a></span>
          </p>
        </section>
      </div>
    </div>
  </footer>

  <!-- Custom JavaScript -->
  <script src="../js/script.js"></script>

  <!-- Plausible -->
  <script defer data-domain="genietenvanmeditatie.nl" src="https://plausible.io/js/plausible.js"></script>