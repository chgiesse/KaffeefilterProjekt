<?php 
  require '../../../helpers/dukommsthiernichtrein.php';
  include_once '../../../helpers/config.php';
  include_once '../../../helpers/conn.php';

// Hier werden die Inhalte eines einzelnen Blog Artikels in Variablen geladen

// Festlegen des Artikel Inhalts per GET-Methode. 
$product_id = $_GET["id"];

$query = $conn->query("SELECT * FROM shop_product WHERE product_id = $product_id") or die ($conn->error);

$queryCount = $query->num_rows; // count the output amount

if($queryCount > 0){
 while($row = $query->fetch_array()){
  $product_id = $row["product_id"];
  $product_name = $row["product_name"];
  $product_descr = $row["product_descr"];
  $product_link = $row["product_link"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produkt bearbeiten</title>

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

    <main role="main" id="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <br>
      <h2>Produkte bearbeiten</h2><br>


      <form action="../../../process/product/update-product.php?id=<?php echo $product_id; ?>" method="post" enctype="multipart/form-data">
        <div class="form-group row">
          <label for="product_name" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="product_name" placeholder="Leckerer Kaffee" value="<?php echo $product_name; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="product_link" class="col-sm-2 col-form-label">Affiliate Link</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="product_link" placeholder="www.roastmarket.de" value="<?php echo $product_link; ?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="product_descr" class="col-sm-2 col-form-label">Beschreibung</label>
          <div class="col-sm-10">
            <textarea id="editor" placeholder="Leckerer Kaffee aus Nicaragua..." class="form-control" name="product_descr" rows="3"><?php echo $product_descr; ?></textarea>
          </div>
        </div>

        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Eigenschaften</label>
          <div class="col-sm-10">
            <div class="row">
               <div class="col-sm">
                  <input class="form-control" type="text" placeholder="Koffeingehalt" readonly>
               </div>
                <div class="col-sm">
                  <select class="form-control" name="Koffein" aria-label="Default select example">
                    <option value="" selected>Enth??lt der Kaffee Koffein?</option>      
                    <?php 
                      $attribute_id = 1;
                      include '../../../process/attributes/load-attributes.php';
                    ?> 
                  </select>
                </div>
            </div>

            <br>

            <div class="row">
              <div class="col-sm">
                  <input class="form-control" type="text" placeholder="R??stgrad" readonly>
              </div>
                <div class="col-sm">
                  <select class="form-control" name="r??stgrad" aria-label="Default select example">
                  <option value="" selected>Welchen R??stgrad hat der Kaffee?</option>  
                  <?php 
                      $attribute_id = 2;
                      include '../../../process/attributes/load-attributes.php';
                    ?> 
                  </select>
                </div>
            </div>
                        
            <br>

            <div class="row">
               <div class="col-sm">
                  <input class="form-control" type="text" placeholder="Geschmacksrichtung" readonly>
               </div>
                <div class="col-sm">
                  <select class="form-control" name="geschmack" aria-label="Default select example">
                    <option value="" selected>Wie l??sst sich der Geschmack beschreiben?</option>
                    <?php 
                      $attribute_id = 3;
                      include '../../../process/attributes/load-attributes.php';
                    ?> 
                  </select>
                </div>
            </div>

            <br>

            <div class="row">
               <div class="col-sm">
                  <input class="form-control" type="text" placeholder="Zubereitungsart" readonly>
               </div>
                <div class="col-sm">
                  <select class="form-control" name="zubereitungsart" aria-label="Default select example">
                    <option value="" selected>Womit l??sst sich der Kaffee am besten zubereiten?</option>
                    <?php 
                      $attribute_id = 4;
                      include '../../../process/attributes/load-attributes.php';
                    ?> 
                  </select>
                </div>
            </div>

            <br>

            <div class="row">
               <div class="col-sm">
                  <input class="form-control" type="text" placeholder="Herkunft" readonly>
               </div>
                <div class="col-sm">
                  <select class="form-control" name="herkunft" aria-label="Default select example">
                    <option value="" selected>Wo wurde der Kaffee angebaut?</option>
                    <?php 
                      $attribute_id = 5;
                      include '../../../process/attributes/load-attributes.php';
                    ?> 
                  </select>
                </div>
            </div>

            <br>
         </div>
        </div>

        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
        <div class="float-right">
            <!-- <button type="button" class="btn btn-secondary">Eigenschaft hinzuf??gen</button> -->
            <button type="submit" class="btn btn-success">Produkt aktualisieren</button>
        </div>
      </form>


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
