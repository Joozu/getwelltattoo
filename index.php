<?php
  if(isset($_GET['mailsent']))
  echo '<script type="text/javascript">notify()</script>';
?>
<!DOCTYPE html>

<html>

  <head>
<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "TattooParlor",
"name": "The Gettwell Giftshop",
"url":"http://getwelltattoo.com/",
"image": "http://getwelltattoo.com/src/img/logo.png",
"logo": "http://getwelltattoo.com/src/img/logo.png",
"openingHours": "Tu,We,Th,Fr,Sa 11:00-18:00",
"priceRange": "$$$",
"currenciesAccepted": "DKK",
"paymentAccepted":"Cash, Credit Card",
"address": {
    "@type": "PostalAddress",
    "addressLocality": "København K",
    "postalCode": "1116",
    "streetAddress": "Møntergade 4" },
"email": "mailto:shop@getwelltattoo.com",
"telephone": "+4551880838"
}
</script>
    <title>
      The GetWell GiftShop - Tattoo parlor in the heart of Copenhagen
    </title>

    <meta property="og:title" content="The GetWell GiftShop - World Class Tattooing">
    <meta property="og:image" content="http://getwelltattoo.com/src/img/squarelogo.png">
    <meta property="og:image-type" content="image/png">
    <meta property="og:description" content="Tattoo parlor in the heart of Copenhagen. For inqueries please contact shop@getwelltattoo.com">
    <meta property="og:url" content="http://getwelltattoo.com">
    <meta property="og:type" content="website">
    <meta property="website:author" content="The GetWell GiftShop">
    <meta property="og:image:alt" conten="Come get some!">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="src/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Jomhuria|Lemon|Montserrat" rel="stylesheet">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121426569-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-121426569-2');
    </script>

  </head>

  <body>
    <a id="ribbon" href="https://goo.gl/YUJVse" target="_blank">
    <img alt="The Wizards Den 2018 - Go to Facebook for info and tickets!" src="src/img/wizardsribbon.png">
    </a>
    <div class="top center">
      <div class="notification">We have now recieved your email, but are either tattooing or playing dart. <br>
              We promise you though, we <i>will</i> get back to you shortly! Thanks mate.</div>
      <div class="cash">All jokes aside, we do not accept credit cards, mobilepay or checks. Cash in hand.</div>
      <a href="./">
        <h2 class="logo">
          The GetWell GiftShop
        </h2>
      </a>
      <i>
        QUALITY TATTOING BY
      </i>
      <br>
      <br>

        <p>
          <a href="https://instagram.com/gatortattoo" target="_blank">
            Jesper/Gator
          </a>
           -
        <a href="https://instagram.com/thick.shady" target="_blank">
          Mathilde/Thick Shady
        </a>
        <br>
        <a href="https://instagram.com/maldestroyer" target="_blank">
          Malthe/maldestroyer
        </a>
         -
        <a href="https://instagram.com/lucifero.tattoo" target="_blank">
          Rasmus/Lucifero Tattoo
        </a>
      </p>
      <br>
      <br>

      Møntergade 4 - 1116 Copenhagen <br>
      Tel:
      <a href="tel:004551880838">
        +45 51 88 08 38
      </a> -
      <a href="mailto:shop@getwelltattoo.com">
        shop@getwelltattoo.com
      </a>
      <br>
      <br>
  </div>

  <!-- LightWidget WIDGET -->
  <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
  <iframe id="instagramWidget" src="" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>



  <section id="needles">
    <h1>
      The shop is located at <a href="#map" class="dotted">Møntergade 4</a> in Copenhagen<br>
      Drop in for high-fives and clean tattoos</b> - <span class="dotted" onclick="cash()">bring your cash</span>!
   </h1>
 </section>

  <!-- Map for Møntergade -->
  <div id="map"></div>

  <!-- contact form for the main address for the shop -->

  <section id="contact">

    <h1>
      Contact the Giftshop
    </h1>

    <form action="src/php/contactform.php" method="post">

      <input type="text" name="name" value="" placeholder="name" autocomplete="name" required>
      <input type="email" name="email" value="" placeholder="email" autocomplete="email" required>
      <textarea name="message" rows="8" cols="80" placeholder="message" required></textarea><br>

      <button type="submit" name="submit">submit</button>

    </form>

  </section>

  <!-- footer with address and contact informations once again. -->
  <footer>
    <a href="https://instagram.com/getwelltattoo" target="_blank"><i class="fa fa-instagram"></i></a>
    <a href="https://facebook.com/getwelltattoo" target="_blank"><i class="fa fa-facebook"></i></a><br>
    Møntergade 4 - 1116 Copenhagen <br>
    Tel:
    <a href="tel:004551880838">
      +45 51 88 08 38
    </a>
     -
     <a href="mailto:shop@getwelltatto.com">
       shop@getwelltattoo.com
     </a>
   </footer>

    <!-- JS CALLS -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBV4oT9ztfPO_O2NNy43Q_yDDJY67SKldY&callback=initMap"></script>
    <script type="text/javascript" src="src/js/jquery.js"></script>
    <script src="src/js/scripts.js"></script>
    <?php
      if(isset($_GET['thanksmate']))
      echo '<script type="text/javascript">notify()</script>';
    ?>

  </body>

</html>
