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
    <title>Produkte verwalten</title>

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
      <h2>Produkte verwalten</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Produktname</th>
              <th>Beschreibung</th>
              <th>Aktionen</th>
            </tr>
          </thead>
          <tbody>
          
    <!-- Hier wird eine Übersicht aller Produkte in eine Tabelle geladen -->
          <?php
    $query = $conn->query("SELECT * FROM shop_product") or die ($conn->error);

    $queryCount = $query->num_rows; // count the output amount

  if($queryCount > 0){

             //fetch results set as object and output HTML
             while($obj = $query->fetch_object())
             {
             echo <<<EOT
          <tr>
            <td>{$obj->product_id}</td>
            <td>{$obj->product_name}</td>
            <td>{$obj->product_descr}</td>
            <td><a href="product-edit.php?id={$obj->product_id}">Bearbeiten</a> oder <a href="../../../process/product/delete-product.php?id={$obj->product_id}">Löschen</a></td>
          </tr>
EOT;
           }}
         ?>   

          </tbody>
        </table>
      </div>
    </main>
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
