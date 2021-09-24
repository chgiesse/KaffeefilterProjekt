<?php 
  include_once '../helpers/config.php';
  include_once '../helpers/conn.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />

    <title>Kaffeefilter</title>
        <link rel="icon" type="image/png" href="../assets/img/logo.png"/>
  </head>
  <body>
    <?php subview('header.php'); ?>

    <br><br><br><br><br>

    <main role="main" class="container">
        <h1>Impressum</h1>

      <h2>Angaben gemäß § 5 TMG</h2>
      <p>Kaffeefilter AG<br />
      Kaffeewunderstraße 29<br />
      12393 Kaffeewunderstadt</p>

      <p>Handelsregister: HRB 5000<br />
      Registergericht: Fantasiestadt</p>

      <p><strong>Vertreten durch:</strong><br />
      Finn Langpape,<br />
      Christian Giessel,<br />
      Ivan Duvnjak,<br />
      Lennard Klein</p>

      <p><strong>Vorsitzender des Aufsichtsrats:</strong><br />
      Christian Giessel</p>

      <h2>Kontakt</h2>
      <p>Telefon: 0151 62967151<br />
      Telefax: 04251 858283<br />
      E-Mail: info@kaffeefilter.de</p>

      <h2>Umsatzsteuer-ID</h2>
      <p>Umsatzsteuer-Identifikationsnummer gemäß § 27 a Umsatzsteuergesetz:<br />
      DE91919191919</p>

      <h2>Redaktionell verantwortlich</h2>
      <p>Finn Langpape<br />
      Anschrift Straße<br />
      Anschrift Ort</p>

      <h2>EU-Streitschlichtung</h2>
      <p>Die Europäische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: <a href="https://ec.europa.eu/consumers/odr/" target="_blank" rel="noopener noreferrer">https://ec.europa.eu/consumers/odr/</a>.<br /> Unsere E-Mail-Adresse finden Sie oben im Impressum.</p>

      <h2>Verbraucher­streit­beilegung/Universal­schlichtungs­stelle</h2>
      <p>Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>


      <?php subview('footer.php'); ?>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
