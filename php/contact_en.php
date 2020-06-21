<?php

    $userEmail	 	      = $_POST['email'];
    $userPhone		      = $_POST['phone'];
    $userMessage 	    	= $_POST['message'];

	  $to                 = "masuwasani@yahoo.com";
	  $subject            = "Contact form";
    $body               = "Bericht via het contactformulier van Joy in Meditation:";

    $body .= "\r\n Email: " . $userEmail;
    $body .= "\r\n Telefoonnummer: " . $userPhone;
	  $body .= "\r\n Bericht: " . $userMessage;
    
	  mail($to, $subject, $body);
?>

<!DOCTYPE html>
<html lang="nl" prefix="og: http://ogp.me/ns#">
  <head>
    <!-- Required <meta> tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Additional <meta> tags -->
    <meta name="format-detection" content="telephone=no" />
    <meta name="theme-color" content="#F2C063" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#F2C063" />

    <!-- SEO tags -->
    <title>Contact</title>
    <meta name="description" content="Osho meditations, Family constellations, Guidance by depression and eating problems & Japanese face massage." />

    <!-- OG tags -->
    <meta property="og:title" content="Meditation, Family constellations and Guidance" />
    <meta
      property="og:description"
      content="Osho meditations, Family constellations, Guidance by depression and eating problems & Japanese face massage."
    />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.genietenvanmeditatie.nl" />
    <meta property="og:image" content="http://www.genietenvanmeditatie.nl/img/thumbnail.jpg" />

    <!-- Font tags -->
    <link href="https://fonts.googleapis.com/css?family=Lato|Average|Courgette&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet" />

    <!-- Bootstrap -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <!-- CSS tags -->
    <link href="../css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-xl navbar-light fixed-top mainNav" id="navbar">
      <div class="container2 container">
        <a class="navbar-brand row" href="../en/index.html">
          <i id="logo" class="fas fa-fire"></i>
          <span>Genieten van Meditatie</span>
        </a>
        <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#mobilenav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mobilenav">
          <ul class="navbar-nav ml-auto my-2 my-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="../en/is_this_you.html">Is this you?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../en/how_it_works.html">How it works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../en/what_i_offer.html">What I offer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../en./gift.html">Gift</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../en/about_me.html">About me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../en/inspiration.html">Inspiration</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="../en/contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link accent" href="../en/calendar.html">Calendar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <div id="page-top" class="header subheader">
      <div class="suboverlay"></div>
    </div>

    <div class="sectionbox">
      <section>
        <h3 style="margin-bottom: 0; padding-bottom: 0;">Thank you for your message!</h3>
        <img src="../img/contact.png" />
        <p>
          I have received your message and I will come back at you as soon as possible.<br>
          I usual reply within 24 hours.
        </p>
      </section>
    </div>

    <div class="box final-box"></div>

    <!-- Footer -->
    <footer>
      <div class="container">
        <h2 class="text-center">Genieten van Meditatie</h2>
        <p class="text-center">
          &copy; 2019 Joy in Meditation | <span><a href="avg.html" target="_blank" style="text-decoration: none; color: #333;">AVG</a></span>
        </p>
        <div class="text-center osholink">
          <a href="http://www.osho.com/copyrights" target="_blank"
            >Osho text excerpts, Osho images, artwork, videos, audios and other copyrighted content with permission of © Osho International
            Foundation, www.osho.com/copyrights<br
          /></a>
          <a href="http://www.osho.com/trademarks" target="_blank"
            >OSHO is a registered trademark of Osho International Foundation, used with permission, www.osho.com/trademarks</a
          >
        </div>
      </div>
    </footer>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="../js/script.js"></script>
  </body>
</html>