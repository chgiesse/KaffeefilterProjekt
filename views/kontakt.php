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
    <title>Kontakt aufnehmen</title>
  </head>
  <body>

  <?php subview('header.php'); ?>

<br>
<br>
<br>
<br>
  <div class="container">
    <br>
    <h1>Kontakt aufnehmen</h1>

  <form action="../process/sendmail.php" method="post">
    <div class="row">
      <div class="col"> 
          <label for="exampleFormControlInput1">Vorname</label>
          <input type="text" class="form-control" name="vorname" placeholder="Max">
      </div>
      <div class="col">
          <label for="exampleFormControlInput1">Nachname</label>
          <input type="text" class="form-control" name="nachname" placeholder="Mustermann">
      </div>
    </div>
    <br>


  <div class="form-group">
    <label for="exampleFormControlInput1">E-Mail Adresse</label>
    <input type="email" class="form-control" name="email" placeholder="max@mustermann.com" required>
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Ihre Nachricht</label>
    <textarea class="form-control" name="nachricht" rows="3"></textarea>
  </div>

  <div class="text-right">
      <button type="submit" class="btn btn-dark">Nachricht senden</button>  
  </div>
</form>

<div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
  <div class="toast" style="position: absolute; top: 0; right: 0;">
    <div class="toast-header">
      <img src="..." class="rounded mr-2" alt="...">
      <strong class="mr-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>


    <?php subview('footer.php'); ?>
    
   </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>