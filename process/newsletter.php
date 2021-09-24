 <?php
// Datenbankverbindung aufbauen
include_once '../helpers/conn.php';

// Datenbankverbindung überprüfen
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// Wert entgegennehmen
$email = $_POST['email'];

// SQL-Statement bauen
$newsletterSql = "INSERT INTO newsletter (email) values ('$email')";

echo $newsletterSql;

// Artikel in Datenbank laden, SQL-Statement ausführen
if ($conn->query($newsletterSql) === TRUE) {
  echo "Blog Artikel wurde erfolgreich hinzugefügt";
} else {
  echo "Es gab einen Fehler: " . $conn->error;
}

header("Location: ../views/index.php");
die();
?>