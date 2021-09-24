<?php 
  include_once '../helpers/config.php';
  include_once '../helpers/conn.php';

// Session starten
session_start();

// echo '<pre>';
// var_dump($_SESSION['search_criteria']);
// echo '</pre>';

// Redirect if search criteria is not set
if (empty($_SESSION['search_criteria'])) {
  header("Location: frage/1.html");
  exit;
}

$i = 0;
$where = array();
foreach ($_SESSION['search_criteria'] as $criteria){
    // echo $i. "  " . $criteria . " = " . $_SESSION[$criteria] . '<br>';
    $where[] = "a$i.attributevalue_id = '$_SESSION[$criteria]'";
    $i++;
  }

  $firstwhere = $where[0];

  $shortarr = array_shift($where);

  $andwhere = array();
  foreach ($where as $andcriteria){
       $andwhere[] = "AND $andcriteria";
  }

  // Select Statement formulieren
  $select = "SELECT * FROM shop_product AS p JOIN images AS img ON p.product_img = img.img_id ";  

  // Self Joins abhängig von Array Länge erstellen
  $arraycount = $i-1;

  $selfjoins = array();
  for ($x = 0; $x <= $arraycount; $x++) {
    $selfjoins[] = "JOIN shop_product_attributevalue AS a".$x." ON p.product_id =  a".$x.".product_id ";
  }

  // Array zusammenstellen
  $sql = $select . implode(" ",$selfjoins) . "WHERE " . $firstwhere . " " .  implode(" ",$andwhere);
  // echo $sql;

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
    <title>Produktempfehlung</title>
  </head>
  <body>

  <?php subview('header.php'); ?>
  <br><br><br><br><br>

  <div class="container">
  <div class="container">
      <div class="row">
        <div class="col-8">
        
    <?php 
      // Hier werden die Inhalte eines einzelnen Blog Artikels in Variablen geladen
      $query = $conn->query($sql . " ORDER BY RAND() LIMIT 1") or die ($conn->error);
      $queryCount = $query->num_rows; // count the output amount

      if($queryCount > 0){
      while($row = $query->fetch_array()){
        $product_id = $row["product_id"];
        $product_name = $row["product_name"];
        $product_descr = $row["product_descr"];
        $product_link = $row["product_link"];
        $product_img = $row["product_img"];
        $img_directory = $row["img_directory"];
        $img_name = $row["img_name"];
          }
      } else echo "oh oh"
    ?>
          <h2><?php echo $product_name?></h2>
          <p class="lead"><?php echo $product_descr?></p>
          <br>
          <a class="btn btn-danger btn-lg" href="<?php echo $product_link?>" target="_blank">Jetzt kaufen</a>
        </div>
        <div class="col-4">
          <img class="img-fluid" src="../<?php echo $img_directory . $img_name ;?>" alt="Bild" />
        </div>
      </div>
  </div>

  <br><br>

  <!-- <h2>Diese Produkte könnten dir auch gefallen:</h2><br> -->
  <div class="row">  
      <!-- <?php
    // Hier werden alle passenden Produkte geladen
    $query = $conn->query($sql . "ORDER BY p.product_id DESC LIMIT 10;" ) or die ($conn->error);
    $queryCount = $query->num_rows; // count the output amount

    if($queryCount > 0){
             //fetch results set as object and output HTML
             while($obj = $query->fetch_object())
             {
             echo <<<EOT
           <div class="col-lg-4 text-center">
           <a href="{$obj->product_link}" target="_blank">
             <img style="height: 280px" src="../{$obj->img_directory}{$obj->img_name}" class="img-fluid" alt="Responsive image">
           </a>
           <h4 class="featurette-heading">
           <br>
               <span class="text-muted">{$obj->product_name}</span>
           </h4>
          </div>
EOT;
    }
  }
?> -->
      <!-- <div class="col-lg-4">
        <a href="{$obj->product_link}">
          <img style="height: 300px" src="assets/img/produkte/1.png" class="img-fluid" alt="Responsive image">
        </a>
        <h3 class="featurette-heading">
            Kaffee Uno <br>
            <span class="text-muted">Markenname</span>
        </h3>
      </div> -->
  </div>

<!-- <br><br><br><br><br><br><br><br><br><br>
<h2>Alle Produkte als Liste</h2>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Beschreibung</th>
      <th scope="col">Link</th>
    </tr>
  </thead>
  <tbody>
      <td>1</td>
      <td>Kaffee Uno</td>
      <td>Beschreibung</td>
      <td><a href="" target="_blank">Jetze kaufen</a></td>

    <?php
    // Hier werden alle passenden Produkte geladen
//     $query = $conn->query($sql) or die ($conn->error);
//     $queryCount = $query->num_rows; // count the output amount

//     if($queryCount > 0){
//              //fetch results set as object and output HTML
//              while($obj = $query->fetch_object())
//              {
//              echo <<<EOT
//              <tr>
//              <td>{$obj->product_id}</td>
//              <td>{$obj->product_name}</td>
//              <td>{$obj->product_descr}</td>
//              <td><a href="{$obj->product_link}" target="_blank">Jetze kaufen</a></td>
//            </tr>
// EOT; 
//   }
// }
// ?>   
  </tbody>
</table> -->

    <?php subview('footer.php'); ?>
    
   </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>



