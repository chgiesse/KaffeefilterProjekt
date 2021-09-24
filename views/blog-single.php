<?php 
  include_once '../helpers/config.php';
  include_once '../helpers/conn.php';

// Hier werden die Inhalte eines einzelnen Blog Artikels in Variablen geladen
$blogId = $_GET["id"];

$query = $conn->query("SELECT * FROM blog_articles WHERE blog_id = $blogId") or die ($conn->error);

$queryCount = $query->num_rows; // count the output amount

if($queryCount > 0){
 while($row = $query->fetch_array()){
  $blogId = $row["blog_id"];
  $blogTitle = $row["title"];
  $shortDescr = $row["short_descr"];
  $mainDescr = $row["main_descr"];
    }
}
?>


<form action=""></form>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Blog Article</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="../assets/img/logo.png"/>
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

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../assets/img/kaffee.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1><?php echo $blogTitle?></h1>
            <h4><?php echo $shortDescr?></h4><br>
          </div>
        </div>
      </div>
  </div>


  <div class="container">

  <br>
  <?php echo $mainDescr?>

  <?php subview('footer.php'); ?>
  </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="bootstrap/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
      <script src="bootstrap/assets/dist/js/bootstrap.bundle.min.js"></script>
</html>
