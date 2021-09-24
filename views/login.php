<?php 
  include_once '../helpers/config.php';
  include_once '../helpers/conn.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Kaffeefilter verwalten</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">
    <link rel="icon" type="image/png" href="../assets/img/icon.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../assets/css/login.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" action="../process/login/login.php" method="post">
      <img class="mb-4" src="../assets/img/icon.png" alt="" width="80" height="80">
      <h1 class="h3 mb-3 font-weight-normal">Kaffeefilter verwalten</h1>
      
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" class="form-control" placeholder="E-Mail Adresse" required autofocus>

      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="pwd" class="form-control" placeholder="Passwort" required>

      <input type="hidden" name="submit">

      <button class="btn btn-lg btn-danger btn-block" type="submit">Anmelden</button>

      <!-- Fehlermeldungen anzeigen lassen -->
      <p style="color: red" class="mt-3 mb-3"><?php echo empty($_GET['error']) ? "" : $_GET['error']; ?></p>

      <p class="mt-5 mb-3 text-muted">&copy; 2021 Kaffeefilter AG</p>
    </form>
  </body>
</html>
