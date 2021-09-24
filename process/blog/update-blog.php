<?php
// Hier wird ein bestehender Blog Artikel mit neuen Werten aktualisiert

// Datenbankverbindung aufbauen
include_once '../../helpers/conn.php';

// Datenbankverbindung überprüfen
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Variablen mit POST-Methode in Variablen stecken
$blogId = $_POST['blogId'];
$category = $_POST['category'];
$blogTitle = $_POST['blogTitle'];
$shortDescr = $_POST['shortDescr'];
$mainDescr = $_POST['mainDescr'];


// SQL-Statement bauen
$sql = "UPDATE blog_articles SET category = '$category', title = '$blogTitle', short_descr = '$shortDescr', main_descr = '$mainDescr' WHERE blog_id = '$blogId'";

// SQL-Statement testweise ausgeben
// echo $sql;

// Artikel in Datenbank mit neuen Werten aktuelisieren, SQL-Statement ausführen
if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

// Redirect and display success message
header("Location: ../../views/cms/blog/blog-manage.php");
die();
?>