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
    <title>Blogartikel hinzufügen</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../../../assets/css/cms.css">

    <!-- Embed CK Editor 5 with CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
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
      <h2>Blogartikel hinzufügen</h2><br>
      <form action="../../../process/blog/add-blog.php" method="post" enctype="multipart/form-data">
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="blogTitle" placeholder="Unsere liebsten Kaffeesorten!">
          </div>
        </div>
        <div class="form-group row">
          <label for="shortDescr" class="col-sm-2 col-form-label">Kategorie</label>
          <div class="col-sm-10">
          <select class="form-control" name="category">
            <option value="">Kategorie auswählen</option>
            <option value="Zubereitung">Zubereitung</option>
            <option value="Kaffeefilter">Kaffeefilter</option>
            <option value="Sonstiges">Sonstiges</option>
          </select>
          </div>
        </div>
        <div class="form-group row">
          <label for="shortDescr" class="col-sm-2 col-form-label">Kurzbeschreibung</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="shortDescr" placeholder="In diesem Artikel stellen wir unsere liebsten Kaffeesorten vor">
          </div>
        </div>
        <div class="form-group row">
          <label for="mainDescr" class="col-sm-2 col-form-label">Inhalt</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="editor" name="mainDescr" rows="3" placeholder="Hier den Blogartikel formulieren..."></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="thumbnail" class="col-sm-2 col-form-label">Thumbnail</label>
          <div class="col-sm-10">
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" name="thumbnail" required>
            <label class="custom-file-label" for="validatedCustomFile">Datei auswählen...</label>
            <small class="form-text text-muted">Wir empfehlen eine Auflösung von 650 x 950 Pixeln</small>
          </div>
          </div>
        </div>
        <div class="float-right">
            <button type="submit" class="btn btn-success">Artikel hinzufügen</button>
        </div>
      </form>
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

      <!-- CK Editor -->  
      <script>
      ClassicEditor.create(document.querySelector('#editor')).catch((error) => {
        console.error(error);
      });
    </script>
  </body>
</html>
