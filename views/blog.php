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
    <title>Kaffeefilter Blog</title>
  </head>
  <body>

  <?php subview('header.php'); ?>
  
  <br><br>

  <div class="container">
      <div class="row mb-2" style="padding-top:80px">

      <!-- Hier Produkte laden -->
      <?php
// Hier wird eine Übersicht aller Blog Artikel in eine Tabelle geladen

    $query = $conn->query("SELECT * FROM blog_articles AS b
                           JOIN images AS i
                           ON b.thumbnail_img = i.img_id") or die ($conn->error);

    $queryCount = $query->num_rows; // count the output amount

  if($queryCount > 0){
             //fetch results set as object and output HTML
             while($obj = $query->fetch_object())
             {
             echo <<<EOT
            <div class="col-md-6">
            <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
              <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">{$obj->category}</strong>
                <h3 class="mb-0">{$obj->title}</h3>
                <p class="mb-auto">{$obj->short_descr}</p>
                <a href="blog-single.php?id={$obj->blog_id}" class="stretched-link">Jetzt lesen...</a>
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="../{$obj->img_directory}{$obj->img_name}" width="200" height="250" alt="Blog Artikel">
              </div>
            </div>
          </div>
EOT;
           }}
?>   
      </div>


      <?php subview('footer.php'); ?>
  </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>