<?php 
// Datenbankverbindung aufbauen
include_once '../../helpers/conn.php';

// Variablen mit POST-Methode in Variablen stecken
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$product_descr = $_POST['product_descr'];
$product_link = $_POST['product_link'];

$koffein = $_POST['Koffein'];
$geschmack = $_POST['geschmack'];
$röstgrad = $_POST['röstgrad'];
$zubereitungsart = $_POST['zubereitungsart'];
$herkunft = $_POST['herkunft'];

// Delete Attributes
$attributeDelete = "DELETE FROM shop_product_attributevalue WHERE product_id = $product_id;";

if ($conn->query($attributeDelete) === TRUE) {
  echo "Die Attribute wurden aus der Datenbank gelöscht";
} else {
  echo "Error updating record: " . $conn->error;
}

// Update Products 
$updateProducts = "UPDATE shop_product SET product_name = '$product_name', product_descr = '$product_descr', product_link = '$product_link' WHERE product_id = '$product_id'";

if ($conn->query($updateProducts) === TRUE) {
  echo "Das Produkt wurde aktualisiert";
} else {
  echo "Error updating record: " . $conn->error;
}

// Insert new Attributes
$attributeSql = "INSERT INTO shop_product_attributevalue (product_id, attributevalue_id) 
               VALUES ('$product_id', '$koffein'),
                      ('$product_id', '$röstgrad'),
                      ('$product_id', '$geschmack'),
                      ('$product_id', '$zubereitungsart'),
                      ('$product_id', '$herkunft')";

if ($conn->query($attributeSql) === TRUE) {
  echo "Die Attribute wurden in die Datenbank geladen";
} else {
  echo "Es gab einen Fehler: " . $conn->error;
}

// Redirect and display success message
header("Location: ../../views/cms/product/product-manage.php");
die();
?>