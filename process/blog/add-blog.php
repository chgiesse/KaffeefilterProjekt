<?php
// Datenbankverbindung aufbauen
include_once '../../helpers/conn.php';

// Datenbankverbindung überprüfen
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Variablen mit POST-Methode in Variablen stecken
$blogTitle = $_POST['blogTitle'];
$shortDescr = $_POST['shortDescr'];
$mainDescr = $_POST['mainDescr'];
$category = $_POST['category'];

// Thumbnail hochladen
$target_dir = "../../assets/img/blog/";
$file_name = basename($_FILES["thumbnail"]["name"]);
$target_file = $target_dir . $file_name;
$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["thumbnail"]["tmp_name"]);
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
if ($_FILES["thumbnail"]["size"] > 5000000) {
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
  if (move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["thumbnail"]["name"])). " has been uploaded.";
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
$last_id = $conn->insert_id;

// SQL-Statement bauen
$blogSql = "INSERT INTO blog_articles (title, category, short_descr, main_descr, thumbnail_img) VALUES ('$blogTitle', '$category', '$shortDescr', '$mainDescr', '$last_id')";

// echo $blogSql;

// Artikel in Datenbank laden, SQL-Statement ausführen
if ($conn->query($blogSql) === TRUE) {
  echo "Blog Artikel wurde erfolgreich hinzugefügt";
} else {
  echo "Es gab einen Fehler: " . $conn->error;
}

// Redirect and display success message
header("Location: ../../views/cms/blog/blog-manage.php");
die();
?>