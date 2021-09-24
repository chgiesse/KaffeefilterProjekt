 <?php
// Datenbankverbindung aufbauen
include_once '../../helpers/conn.php';

// Datenbankverbindung überprüfen
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Variablen mit POST-Methode in Variablen stecken
$product_name = $_POST['product_name'];
$product_descr = $_POST['product_descr'];
$product_link = $_POST['product_link'];

$koffein = $_POST['Koffein'];
$geschmack = $_POST['geschmack'];
$röstgrad = $_POST['röstgrad'];
$zubereitungsart = $_POST['zubereitungsart'];
$herkunft = $_POST['herkunft'];

// echo $product_name . '<br>';
// echo $product_descr . '<br>';
// echo $product_link . '<br>';

// Drop Downs
// echo '<br>';

// echo "Koffein: " . $koffein . '<br>';
// echo "Geschmack: " . $geschmack . '<br>';
// echo "Röstgrad: " . $röstgrad . '<br>';
// echo "Zubereitungsart: " . $zubereitungsart . '<br>';
// echo "Herkunft: " . $herkunft . '<br>';


// Bild hochladen
$target_dir = "../../assets/img/blog/";
$file_name = basename($_FILES["product_img"]["name"]);
$target_file = $target_dir . $file_name;
$target_file = $target_dir . basename($_FILES["product_img"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Bild in Ordner laden
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["product_img"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["product_img"]["size"] > 5000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["product_img"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

// Bilder zu Datenbank hinzufügen
$img_directory = str_replace('../../', '', $target_dir);

$imgSql = "INSERT INTO images (img_directory, img_name) VALUES ('$img_directory', '$file_name ')";

// echo $imgSql;
// echo '<br>';

// Query ausführen
if ($conn->query($imgSql) === TRUE) {
  echo "Das Bild wurde in die Datenbank geladen";
} else {
  echo "Es gab einen Fehler: " . $conn->error;
}

// Get Last ID
$imgId = $conn->insert_id;

// Produkt in Datenbank laden mit Bild ID
$productSql = "INSERT INTO shop_product (product_name, product_descr, product_link, product_img) VALUES ('$product_name', '$product_descr', '$product_link','$imgId')";
if ($conn->query($productSql) === TRUE) {
  echo "Die Attribute wurden in die Datenbank geladen";
} else {
  echo "Es gab einen Fehler: " . $conn->error;
}



// Get Last ID
$productId = $conn->insert_id;

$attributeSql = "INSERT INTO shop_product_attributevalue (product_id, attributevalue_id) 
               VALUES ('$productId', '$koffein'),
                      ('$productId', '$röstgrad'),
                      ('$productId', '$geschmack'),
                      ('$productId', '$zubereitungsart'),
                      ('$productId', '$herkunft')";

if ($conn->query($attributeSql) === TRUE) {
  echo "Die Attribute wurden in die Datenbank geladen";
} else {
  echo "Es gab einen Fehler: " . $conn->error;
}


// GAMEPLAN

// 1. Datenbank manuell anpassen
// 1.1. Attribute hinzufügen ✔️
// 1.2. Bildverweis hinzufügen ✔️

// 2. Inserts formulieren 
// 2.1. Daten entgegennehmen✔️
// 2.2. Bild in Ordner laden✔️
// 2.3. Produkt in Datenbank laden mit Bild ID✔️
// 2.4. Produkt-Attribute Map befüllen✔️
// 2.5. Redirect

// 3. Quiz anpassen
// 3.1 Fragen hinzufügen
// 3.2 Kriterien im Zweifel eliminieren

// 4. Applikation überarbeiten
// 4.1 Restrukturieren
// 4.2 Farbe reinschmeißen


// Redirect and display success message
header("Location: ../../views/cms/product/product-manage.php");
die();
?>