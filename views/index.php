<?php 
  include_once '../helpers/config.php';
  include_once '../helpers/conn.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="icon" type="image/png" href="../assets/img/icon.png"/>
    <title>Kaffeefilter</title>
    <style>
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 10rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}

/* Alte Version von Bootstrap
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
} */

.carousel-item > img {
  width:  100%; /*or 70%, or what you want*/
  height: auto; /*or 70%, or what you want*/
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

  </style>
  
  </head>
  <body>

  <?php subview('header.php'); ?>
<br>
<br>
<br>
  
  <div class="position-relative overflow-hidden p-4 p-md-10 m-md-10 text-center bg-light"  style="background-image: url('../assets/img/start.png');">
      <div class="col-md-6 p-lg-6 mx-auto my-6" >
        <br><br><br><br>
        <h1 style="color: white; font-family: Trebuchet MS; font-weight:bold; font-size:4rem" class="display-4">Bist du bereit deinen Morgen zu verbessern?</h1><br><br><br><br>
        <a class="btn btn-lg btn-danger" style="padding:1.3rem; font-size:1.5rem;font-family:Trebuchet MS"href="../frage/1.html">Jetzt neuen Lieblingskaffee finden!</a><br><br><br><br><br><br><br>
      </div>
      <div class="product-device shadow-sm d-none d-md-block"></div>
      <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>

    
      <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <br><br>
  <div class="container marketing">

  <div class="text-center">
      <h2 class="featurette-heading">Mögliche Marken</h2>
  </div>

  <br>

  <div class="row">
      <div class="col-lg-3">
         <img style="height: 140px" src="../assets/img/partner/1.png" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-lg-3">
         <img style="height: 140px" src="../assets/img/partner/2.png" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-lg-3">
         <img style="height: 140px" src="../assets/img/partner/3.png" class="img-fluid" alt="Responsive image">
      </div>
      <div class="col-lg-3">
         <img style="height: 140px" src="../assets/img/partner/4.png" class="img-fluid" alt="Responsive image">
      </div>
  </div>

<br>
<hr class="featurette-divider">
<br>

    <!-- START THE FEATURETTES -->

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Über uns</h2>
        <h3><span class="text-muted">Startup aus Wiesbaden</span></h3><br>
        <p class="lead">Wir lieben Kaffee. Vor allem mögen wir es, stets neuen Kaffee auszuprobieren. Aber eine schnelle Google-Suche nach einem neuen morgentlichen Bohne entwickelt sich oft in eine längere Aufgabe, da die Flut an Informationen über Kaffee schlichtweg erdrückend sein kann.</p>
          <p class="lead">Deshalb ist unsere Mission eine Hilfestellung für gleichgesinnte Kaffee-Liebhaber zu bieten. Anstatt sich die Meinungen verschiedener Sommeliers und Baristas zusammenzupuzzlen, um die passende Espresso-Bohne zu finden, bieten wir ein Kaffee-Quiz an! So findet jeder den richtigen Kaffee für seinen Geschmack.</p>

          <a href="../frage/1.html" class="btn btn-danger btn-lg">Probier es aus!</a>
      </div>
      <div class="col-md-5">
        <img style="border-radius: 20px;" src="../assets/img/about.jpg"class="img-fluid" alt="Responsive image">
      </div>
    </div>

    <br>  <hr class="featurette-divider"><br>

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Für den interessierten Kaffee-Trinker </h2>
        <h3><span class="text-muted">Blog Artikel</span></h3><br>
        <p class="lead">Du hast Lust auf einen kalten Cold-Brew Kaffee, weißt aber nicht wie du diesen zubereitest? Bist du als Weltenbummler immer unterwegs und musst deshalb oft auf Instant Kaffee zum aufgießen zurückgreifen?<br>Oder hast du einfach Lust noch etwas mehr über die Geschichte und Tradition des Kaffees rauszufinden?</p>
        <p class="lead">Dann haben wir was für dich. Stöbere durch unseren Blog!</p>
        <br>
        <a href="../views/blog.php" class="btn btn-danger btn-lg">Los gehts.</a>
      </div>

        <div class="col-md-5">
          <img style="border-radius: 20px;" src="../assets/img/handverlesen.jpg"class="img-fluid" alt="Responsive image">
        </div>

    </div>

    <br><hr class="featurette-divider"><br>

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Fairtrade</h2>
        <h3><span class="text-muted">Wir trinken nur Fairtrade. Wieso?</span></h3><br>
        <p class="lead">Als Konsument trifft man täglich Kaufentscheidungen, die den Markt mitgestalten. Vor allem Kaffee ist eines der weltweit meist gehandelten Produkte. Es wird primär in den finanziell schwächeren Ländern der Welt produziert und in vermögende Länder exportiert.</p>

        <p class="lead">In Deutschland werden jährlich rund 580.000 Tonnen Rohkaffee verbraucht. Das entspricht etwa 7 kg Rohkaffee und rund 162 Litern pro Person. Als deutscher Käufer hast du dementsprechend großen Einfluss darauf, wie sich der Kaffeemarkt zukünftig entwickelt.</p>
       <br>
        <a href="" class="btn btn-danger btn-lg">Jetzt nachhaltigen Kaffee finden!</a>
      </div>
      <div class="col-md-5">
        <img style="border-radius: 20px;" src="../assets/img/fairtrade.jpg"class="img-fluid" alt="Responsive image">
      </div>
    </div>
    <br>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

    <br>

    <!-- Three columns of text below the carousel -->
    <h2 class="featurette-heading">Unser Team</h2><br>
    <h3><span class="text-muted">Die Kaffeewahlhelfer</span></h3><br><br>
    <div class="row text-center">
    <br>
      <div class="col-lg-3">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="../assets/img/chris.jpg" alt="Christian Giessel">

        <h3>Christian Giessel</h3>
        <!-- <p>Jung, brutal und gutaussehend. Hat kein Problem um 3:00 Nachts einen Kaffe zuzubereiten und ein komplettes Projekt an drei Tagen weg zu arbeiten. </p> -->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="../assets/img/finn.jpg" alt="Finn Langpape">

        <h3>Finn Langpape</h3>
        <!-- <p>Bisschen älter, sanftmütig und sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-3">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="../assets/img/ivan.jpg" alt="Ivan Duvnjak">

        <h3>Ivan Duvnjak</h3>
        <!-- <p>Bisschen älter, sanftmütig und sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-3">

        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="../assets/img/lennard.jpg" alt="Lennard Klein">

        <h3>Lennard Klein</h3>
        <!-- <p>Trinkt seinen Kaffee grundsätzlich nur schwarz.</p> -->
      </div><!-- /.col-lg-4 -->

    </div><!-- /.row -->

    <br>

    <hr class="featurette-divider">

    <br>

  <!-- <hr class="featurette-divider"> -->

  <div class="jumbotron text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-6">Lust auf mehr?</h1>
          <p class="lead my-3">In unserem Newsletter teilen wir die neusten Tipps und Tricks, und geben exklusiven Zugang zu einmaligen Angeboten!</p>
        </div>

      <form action="../process/newsletter.php" method="post">
        <div class="row">
          <div class="col-sm-8">
            <div class="form-group">
              <input type="email" class="form-control input-lg" name="email"   placeholder="Deine E-Mail Adresse" required>
            </div>
          </div>
          <div class="col-sm-4">
              <button type="submit" class="btn btn-danger btn-lg">Jetzt anmelden</button>
          </div>
        </div>
      </form>
   </div>



  <?php subview('footer.php'); ?>


  </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>