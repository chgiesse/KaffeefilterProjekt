<?php
// Server läuft lokal unter diesem Nutzer. Noch auf der Suche nach einer besseren Lösung
$servername = "localhost";
$username = "Admin";
$password = "passwort123";
$dbname = "kaffeefilter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>