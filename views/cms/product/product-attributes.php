<?php
  require '../../../helpers/dukommsthiernichtrein.php';
  include_once '../../../helpers/config.php';
  include_once '../../../helpers/conn.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produktattribute einsehen</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../../../assets/css/cms.css">
</head>
  <body>

  <!-- Header -->
  <?php subview('header-cms.php'); ?>

<div class="container-fluid">
  <div class="row">

  <!-- Sidebar -->
  <?php subview('sidebar.php'); ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <br>
      <h2>Attribute einsehen</h2><br>

       <div class="accordion" id="accordionExample">

       <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Mahlgrad
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
          <div class="card-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>Ganze Bohne</th>
                  </tr>
                  <tr>
                    <th>Gemahlen</th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#Koffeingehalt" aria-expanded="true" aria-controls="Koffeingehalt">
                Koffeingehalt
              </button>
            </h2>
          </div>
          <div id="Koffeingehalt" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>Ja</th>
                  </tr>
                  <tr>
                    <th>Nein</th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#Röstgrad" aria-expanded="true" aria-controls="Röstgrad">
                Röstgrad
              </button>
            </h2>
          </div>
          <div id="Röstgrad" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>Helle Röstung</th>
                  </tr>
                  <tr>
                    <th>Mittlere Röstung</th>
                  </tr>
                  <tr>
                    <th>Dunkle Röstung</th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#Geschmack" aria-expanded="true" aria-controls="Geschmack">
                Geschmack
              </button>
            </h2>
          </div>
          <div id="Geschmack" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>Fruchtig</th>
                  </tr>
                  <tr>
                    <th>Säuerlich</th>
                  </tr>
                  <tr>
                    <th>Würzig</th>
                  </tr>
                  <tr>
                    <th>Süß</th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#Zubereitungsart" aria-expanded="true" aria-controls="Zubereitungsart">
                Zubereitungsart
              </button>
            </h2>
          </div>
          <div id="Zubereitungsart" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>French Press</th>
                  </tr>
                  <tr>
                    <th>Espressomaschine</th>
                  </tr>
                  <tr>
                    <th>Vollautomat</th>
                  </tr>
                  <tr>
                    <th>Aeropress</th>
                  </tr>
                  <tr>
                    <th>Chemex</th>
                  </tr>
                  <tr>
                    <th>Handfilter</th>
                  </tr>                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- jQuery, Bootstrap and Feather Icons -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>

      <!-- JS for Content Management System -->
      <script src="../../../assets/js/cms.js"></script>
      <script src="../../../assets/js/search.js"></script>
  </body>
</html>
