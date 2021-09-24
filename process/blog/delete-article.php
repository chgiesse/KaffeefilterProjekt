<?php
// Datenbankverbindung aufbauen
include_once '../../helpers/conn.php';

// ID erfassen
$id = $_GET["id"];

// Bild löschen aus Ordner

$locateImg = $conn->query("SELECT i.img_directory, i.img_name FROM images AS i
                           JOIN blog_articles as b
                           ON i.img_id = b.thumbnail_img
                           WHERE b.blog_id = $id") or die ($conn->error);

$queryCount = $locateImg ->num_rows; // count the output amount

if($queryCount > 0){
 while($row = $locateImg ->fetch_array()){
  $img_directory = $row["img_directory"];
  $img_name = $row["img_name"];
    }

    // Kommt drauf an, ob wir hier die Permission für kriegen auf dem Disti Server
    // $unlink_dir = $_SERVER['DOCUMENT_ROOT'] . "/kaffee/" .  $img_directory . $img_name;;

    $unlink_dir = 'https://project-disti.wbs.hs-rm.de/learn/ss2021/workspace/dbmgruppe10/Kaffeefilter/assets/img/blog/' .  $img_name;

    unlink($unlink_dir);

  } else {
  // echo "Es wurde kein Bild in der Datenbank gefunden!";
};

// Bild löschen aus Datenbank
$blogDelete = "DELETE FROM blog_articles WHERE blog_id = $id;";

if ($conn->query($blogDelete) === TRUE) {
  // echo "Bildverweis aus Datenbank gelöscht";
} else {
  echo "Error updating record: " . $conn->error;
}

// Blog Artikel von Datenbank löschen
$blogDelete = "DELETE FROM blog_articles WHERE blog_id = $id;";

if ($conn->query($blogDelete) === TRUE) {
  // echo "Artikel aus Datenbank gelöscht";
} else {
  echo "Error updating record: " . $conn->error;
}

// Redirect and display success message
header("Location: ../../views/cms/blog/blog-manage.php");
die();
?>